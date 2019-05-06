@extends('shared.app')

@section('title', 'My Notes')

@section('content')
<a href="{{ route('createNote') }}">Create New Note</a>
<table>
  <thead>
    <tr>
      <th>Note Title</th>
      <th>View</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
        <tr>
          <td>Title</td>
          <td><a href='{{ route("getNote",["id"=>1])}}'>View</a></td>
          <td><a href='{{ route("editNote",["id"=>1])}}'>Edit</a></td>
          <td><a href='{{ route("deleteNote",["id"=>1])}}'>Delete</a></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><a href='{{ route("getNote",["id"=>1])}}'>View</a></td>
          <td><a href='{{ route("editNote",["id"=>1])}}'>Edit</a></td>
          <td><a href='{{ route("deleteNote",["id"=>1])}}'>Delete</a></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><a href='{{ route("getNote",["id"=>1])}}'>View</a></td>
          <td><a href='{{ route("editNote",["id"=>1])}}'>Edit</a></td>
          <td><a href='{{ route("deleteNote",["id"=>1])}}'>Delete</a></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><a href='{{ route("getNote",["id"=>1])}}'>View</a></td>
          <td><a href='{{ route("editNote",["id"=>1])}}'>Edit</a></td>
          <td><a href='{{ route("deleteNote",["id"=>1])}}'>Delete</a></td>
        </tr>
  </tbody>
</table>
@endSection
