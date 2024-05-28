<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    // app/Http/Controllers/NoteController.php
public function destroy($id)
{
    // Find the note by its ID and delete it
    $note = User::findOrFail($id);
    $note->delete();

    // Redirect back with a success message
    return redirect()->route('note.index')->with('success', 'Note deleted successfully');
}

}
