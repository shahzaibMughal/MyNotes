<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index(){
      return view('index');
    }
    public function getNote($id){
      echo "ID: ".$id;
      return view('viewNote');
    }
    public function createNote(){
      return view('createNote');
    }
    public function store(){
      return "Store note data to database";
    }
    public function editNote($id){
      echo "ID: ".$id;
      return view('editNote');
    }
    public function modify($id){
      return "Modify Note data in the database";
    }
    public function delete($id){
      return "Delete note data from database";
    }
    public function confirmDelete($id){
      echo "ID: ".$id;
      return view('deleteNote');
    }
}
