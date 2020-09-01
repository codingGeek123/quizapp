<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use App\DynamicFieldOptions;

use Validator;

class DynamicFieldController extends Controller
{
    public function __construct(DynamicFieldOptions $dynamicFieldOptions , DynamicField $dynamicField) {
        $this->dynamicFieldOptions = $dynamicFieldOptions;
        $this->dynamicField = $dynamicField;

    }
    function index()
    {
        return view('dynamic_field');
    }

    function insert(Request $request)
    {
        if($request->ajax())
        {
        $rules = array(
        'question_name.*'  => 'required',
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
        return response()->json([
            'error'  => $error->errors()->all()
        ]);
        }

        $question_name = $request->question_name;
        for($count = 0; $count < count($question_name); $count++)
        {
        $data = array(
            'question_name' => $question_name[$count],
        );
        $insert_data[] = $data; 
        }

        DynamicField::insert($insert_data);
        return response()->json([
        'success'  => 'Data Added successfully.'
        ]);
        }
    }

    function getOptions( Request $request)
    {
        $id = $_GET['id'];
        return view('options', compact('id'));

    }

    function getData()
    {
        $getData = DynamicField::get()->toArray();
        return view('dynamic_field_file', compact('getData'));
    }

    function viewOptions()
    {
        $getData =  $this->dynamicField->viewOptions()->toArray();
        return view('view_option', compact('getData'));
    }
     
    function optionsInsert(Request $request)
    {
        
        if($request->ajax())
     {
      $rules = array(
       'options_name.*'  => 'required',
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $options_name = $request->options_name;
      for($count = 0; $count < count((array)$options_name); $count++)
      {
       $data = array(
        'options_name' => $options_name[$count],
        'question_id'=>$request->all()['id']
       );
       $insert_data[] = $data; 
      }
      DynamicField::where('id',$request->all()['id'])->update(['marks'=>$request->all()['marks']]);

      DynamicFieldOptions::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }
    
}