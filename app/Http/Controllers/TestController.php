<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test($name = 'Seba', $lastname = 'Nieto', $age = '37')
    {
        $family = ['Seba', 'Vivi', 'Valen', 'Magui'];
        $data = ['name' => $name, 'lastname' => $lastname, 'age' => $age, 'family' => $family];

        return view('test', $data);
    }

}
