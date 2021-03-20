<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $students =[
            [ 'firstname' => 'Grace', 'lastname' => 'Watson', 'gender' => 'Female' ],
            [ 'firstname' => 'John', 'lastname' => 'Maken', 'gender' => 'Male' ],
            [ 'firstname' => 'Lisa', 'lastname' => 'Jakson', 'gender' => 'Female' ]
        ];
    
        $gen = request('gender');
    
        return view('about', [ 'students' => $gen ,'age' => request('age'), 'location' => request('location')]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
