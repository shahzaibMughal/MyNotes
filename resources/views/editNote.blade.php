@extends('shared.app')

@section('title','Edit Note')

@section('content')
<form action="#" method="post">
  <input type="text" name="noteTitle" placeholder="Note Title" maxlength="30" value="get data from db">
  <textarea name="noteBody" rows="8" cols="80" placeholder="Enter Note">get data from db</textarea>
  <input type="submit" name="submit" value="Save">
</form>
@endSection
