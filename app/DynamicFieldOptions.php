<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicFieldOptions extends Model
{
    protected $fillable = [
        'options_name',
        'question_id',
    ];
    protected $table = 'dynamic_field_options';

}