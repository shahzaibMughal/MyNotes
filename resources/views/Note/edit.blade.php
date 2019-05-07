@extends('shared.app')

@section('title','Edit Note')

@section('content')
  <form action="{{route('Note.update',['id'=>$note->id])}}" method="post">
    <input type="hidden" name="_method" value="PUT"> <!-- Request Method Spoofing-->
    <input type="text" name="noteTitle" placeholder="Note Title" value="{{$note->noteTitle}}" required>
    <textarea name="noteBody" rows="8" cols="80" placeholder="Enter Note" required>{{$note->noteBody}}</textarea>
    <input type="submit" name="submit" value="Save">
  </form>
@endSection
