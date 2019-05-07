@extends('shared.app')

@section('title','Create Note')

@section('content')
<form action="{{ route('Note.store') }}" method="post">
  <input type="text" name="noteTitle" placeholder="Note Title" value="" required><!-- Request Method Spoofing-->
  <textarea name="noteBody" rows="8" cols="80" placeholder="Enter Note" required></textarea>
  <input type="submit" name="submit" value="Save">
</form>
@endSection
