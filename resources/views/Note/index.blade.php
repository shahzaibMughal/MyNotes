@extends('shared.app')

@section('title', 'My Notes')

@section('content')
<a href="{{route('Note.create')}}">Create New Note</a>

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
          <td><a href='{{route('Note.show',['id'=>1])}}'>View</a></td>
          <td><a href='{{route('Note.edit',['id'=>1])}}'>Edit</a></td>
          <td><a href='{{route('Note.delete',['id'=>1])}}'>Delete</a></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><a href='{{route('Note.show',['id'=>1])}}'>View</a></td>
          <td><a href='{{route('Note.edit',['id'=>1])}}'>Edit</a></td>
          <td><a href='{{route('Note.delete',['id'=>1])}}'>Delete</a></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><a href='{{route('Note.show',['id'=>1])}}'>View</a></td>
          <td><a href='{{route('Note.edit',['id'=>1])}}'>Edit</a></td>
          <td><a href='{{route('Note.delete',['id'=>1])}}'>Delete</a></td>
        </tr>

  </tbody>
</table>
@endSection
