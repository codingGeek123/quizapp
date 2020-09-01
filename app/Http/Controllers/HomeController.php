<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\DynamicField;
use App\DynamicFieldOptions;

class HomeController extends Controller
{
    public function __construct(DynamicFieldOptions $dynamicFieldOptions , DynamicField $dynamicField) {
        $this->dynamicFieldOptions = $dynamicFieldOptions;
        $this->dynamicField = $dynamicField;

    }
  
    public function index()
    {
        $getData = $this->dynamicField->viewOptionsConcatenated()->toArray();
        if(Auth::user()['is_admin'] == 1) {
            return view('home');
        } 
        return view('home_users',compact('getData'));
    }
}
