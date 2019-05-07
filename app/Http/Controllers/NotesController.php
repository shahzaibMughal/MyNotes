<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NotesController extends Controller
{

    public function index()
    {
        $note = new Note();
        return view('Note.index')->with('notes',$note->all());
    }

    public function create()
    {
        return view('Note.create');
    }

    public function store(Request $request)
    {

        //TODO: do validation
        $note = new Note();
        $note->noteTitle = $request->input('noteTitle');
        $note->noteBody = $request->input('noteBody');
        $isSuccess = $note->save();
        if($isSuccess){
            return redirect()->route('Note.index');
        }
        $returnString = "Error Occur while saving data: ".$isSuccess;
        return $returnString;

    }

    public function show($id)
    {
        $note = new Note();
        // if not found, exception will be thrown
        return view('Note.single')->with('note',$note->findOrFail($id));
    }


    public function edit($id)
    {
        $note = new Note();
        // if not found, exception will be thrown
        return view('Note.edit')->with('note',$note->findOrFail($id));
    }


    public function delete($id)
    {
        return view('Note.delete',['id'=>$id]);
    }



    public function update(Request $request, $id)
    {
        //TODO: do validation

        $note = new Note();
        $note = $note->findOrFail($id);
        $note->noteTitle = $request->input('noteTitle');
        $note->noteBody = $request->input('noteBody');
        $isSuccess = $note->update();
        if($isSuccess){
            return redirect()->route('Note.index');
        }
        $returnString = "Error Occur while updating data: ".$isSuccess;
        return $returnString;
    }

    public function destroy($id)
    {
        // just delete the give id's note and redirect to home
        $note = new Note();
        $note = $note->findOrFail($id);
        try {
            if ($note->delete()) {
                return redirect()->route('Note.index');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return 'Error Occur while deleting data';
    }
}
