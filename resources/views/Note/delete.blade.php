@extends('shared.app')
@section('title', 'Delete Note')

@section('content')
<form action="{{route('Note.destroy',['id'=>$id])}}" method="post">
        <h1>Are You Sure?</h1>
        <a href="{{route('Note.index')}}">Cancel</a>
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="delete" value="Delete">
</form>
@endSection


