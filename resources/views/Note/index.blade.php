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

        @forelse($notes as $note)
        <tr>
          <td>{{$note->noteTitle}}</td>
          <td><a href='{{route('Note.show',['id'=>$note->id])}}'>View</a></td>
          <td><a href='{{route('Note.edit',['id'=>$note->id])}}'>Edit</a></td>
          <td><a href='{{route('Note.delete',['id'=>$note->id])}}'>Delete</a></td>
        </tr>
        @empty
           <tr>
               <td>No Data Found</td>
               <td></td>
               <td></td>
               <td></td>
           </tr>
        @endforelse

  </tbody>
</table>
@endSection
