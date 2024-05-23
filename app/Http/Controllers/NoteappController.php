<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteappController extends Controller
{
    public function shownote(){
        return view('noteapp.createnote');
    }
    public function addnote(Request $req){

        $insert=DB::table('noteapp_table')->insert([
            'title'=>$req->title,
            'content'=>$req->content,
           ]);
           if($insert) {
            return ($insert);
           } 
           else {
            return ('Not sent');
           };
      //  return ('Oluwapelumi Noteapp is processing');
    }

    public function displaynote(){
        
    }
}
