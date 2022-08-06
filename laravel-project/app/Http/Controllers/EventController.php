<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    function index(){
        $nome = 'Abimael';
        $idade = 21;
        $arr = [1,2,3,4,5];
        return view('welcome',['nome'=>$nome,'idade'=>$idade,'arr'=>$arr]);
    }
    function create(){
        return view('events.create');
    }
}
