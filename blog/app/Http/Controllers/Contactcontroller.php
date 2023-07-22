<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;
use PhpParser\Node\Stmt\Nop;

class Contactcontroller extends Controller
{
  public function Contactindex(){
    return view('Contact')->with('notes',Note::all());
  }
  
  public function save(Request $request){
    $request->validate(['note'=>'required']);

    Note::create(['note'=> $request->note]);
    return redirect()->back();
  } 

  public function edit($id){
      $note = Note::find($id);
      return view('contact')
            ->with('notes',Note::all())
            ->with('note',$note);
  }

  public function update(Request $request,$id){
    $request->validate(['note'=>'required']);

    $note=Note::find($id);
    $note->note = $request->note;
    $note->save();

    return redirect('/Contact');
  }

  public function delete($id){
    $note = Note::find($id);

    $note->delete();

    return redirect('/Contact');
  }
}