@extends('shared.app')

@section('title','Create Note')

@section('content')
<form action="#" method="post">
  <input type="text" name="noteTitle" placeholder="Note Title" maxlength="30" value="">
  <textarea name="noteBody" rows="8" cols="80" placeholder="Enter Note"></textarea>
  <input type="submit" name="submit" value="Save">
</form>
@endSection
