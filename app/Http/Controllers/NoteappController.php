<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoteappController extends Controller
{
    public function shownote(){
        return view('noteapp.createnote');
    }
    public function addnote(Request $req){

        $insert=DB::table('noteapp_table')->insert([
            'title'=>$req->title,
            'content'=>$req->content,
            'user_id'=>Auth::user()->id
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
      //  $select=DB::table('noteapp_table')->get();
        $select=DB::table('noteapp_table')->where('user_id', Auth::user()->id)->get();
       // return $select;
        return view('noteapp.displaynote', [
            'allnote'=>$select
            ]);
}
    public function show($id){
        $show=DB::table('noteapp_table')->where('note_id', $id)->first();
        return view('noteapp.viewnote', ['note'=>$show]);
    }

    public function edit($noteid){
        $edit=DB::table('noteapp_table')->where('note_id', $noteid)->first();
        // return $edit;
        return view('noteapp.editnote', ['notes'=>$edit]);
    }

    public function update(Request $req, $id){
        $update=DB::table('noteapp_table')->where('note_id', $id)->update(
            [
                'title'=> $req->title,
                'content'=> $req->content,
            ]
        );
        return redirect('/displaynote');
    }

public function delete($id)
{
    $delete=DB::table('noteapp_table')->where('note_id', $id)->delete();
    // Redirect back with a success message
    return redirect('/displaynote')->with('success', 'Note deleted successfully');
}

}
