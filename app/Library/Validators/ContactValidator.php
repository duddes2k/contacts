<?php 

namespace App\Library\Validators;

use App\Library\Validators\Validator;

class ContactValidator extends Validator
{
    public static $rules = [
        'name' => 'required',
        'email' => 'required|unique:contacts',
        'phone' => 'required',
        'state' => 'required|min:2'
    ];
}