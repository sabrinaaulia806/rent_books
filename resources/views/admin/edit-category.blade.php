@extends('layouts.main')

@section('title', 'Update Category')

@section('content')

<h1> Add Category</h1>

<form action="/category-edit/{{$category}}" method="post" class="mt-4">
    @csrf
    @method('put')
    <label for="name" class="form-label">Category Name</label>

    <input type="text" name="name" id="name" class="form-control w-50" value="{{$category->name}}">
    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection