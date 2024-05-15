<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index($age = '37')
    {
        $data = ['name' => 'Seba', 'lastname' => 'nieto', 'age' => $age];

        return view('crud/index', $data);
    }

    public function contact($name = 'Seba', $lastname = 'Nieto', $age = '37')
    {
        $family = ['Seba', 'Vivi', 'Valen', 'Magui'];
        $data = ['name' => $name, 'lastname' => $lastname, 'age' => $age, 'family' => $family];

        return view('contact', $data);
    }

    public function contact2()
    {
        $data = ['name' => 'Viviana', 'lastname' => 'Caracuel', 'age' => '35'];
        return view('contact2', $data);
    }

    public function otro($post) {
        return $post;
    }
}
