<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    protected $fillable = [
        'question_name',
        'marks',
    ];
    protected $table = 'dynamic_fields';

    function viewOptions()
    {
        $getData = self::query()->leftJoin('dynamic_field_options','dynamic_field_options.question_id','=','dynamic_fields.id')->get();
        return $getData;
    }

    function viewOptionsConcatenated()
    {
        $getData = self::query()->leftJoin('dynamic_field_options','dynamic_field_options.question_id','=','dynamic_fields.id')->selectRaw('GROUP_CONCAT(options_name) as options,question_id,dynamic_field_options.id,question_id')->groupBy('dynamic_field_options.question_id')->
            get();
        return $getData;
    }
}