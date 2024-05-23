<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteappController extends Controller
{
    public function shownote(){
        return view('noteapp.createnote');
    }
}
