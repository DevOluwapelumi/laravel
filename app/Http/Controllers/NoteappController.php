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
                return redirect('/displaynote');
           }
           else {
            return ('Not sent');
           };
      //  return ('Oluwapelumi Noteapp is processing');
    }

    public function displaynote(){
        $select=DB::table('noteapp_table')->get();
       // return $select;
        return view('noteapp.displaynote', [
            'allnote'=>$select
            ]);
}
    public function show($id){
        $show=DB::table('noteapp_table')->where('note_id', $id)->first();
        return view('noteapp.viewnote', ['note'=>$show]);
    }
    public function edit($id){
        return view('noteapp.editnote');
    }
}
