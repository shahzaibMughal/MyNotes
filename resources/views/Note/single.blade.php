@extends('shared.app')
@section('title','View Note')

@section('content')
<div class="noteContainer">
  <h1>{{$note->noteTitle}}</h1>
  <p>{{$note->noteBody}}</p>
</div>
@endSection
