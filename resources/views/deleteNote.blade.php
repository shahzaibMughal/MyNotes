@extends('shared.app')
@section('title', 'Delete Note')

@section('content')
<form action="" method="post">
        <h1>Are You Sure?</h1>
        <input type="submit" name="cancel" value="Cancel">
        <input type="submit" name="delete" value="Delete">
</form>
@endSection
