@extends('layout')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <div class="cardsCreate">
        <h2 style="color:blue;">Add New Student </h2>
        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-group">
                <label for="tel">Phone:</label>
                <input type="text" class="form-control" name="tel" />
            </div>
            <div class="form-group">
                <label for="section">Section :</label>
                <select name="section" style="width: 100%;">
                <!-- Les options -->
                    <option value="Math">Math</option>
                    <option value="Svt">SVT</option>
                    <option value="Physique">Physique</option>
                    <option value="Informatique">Informatique</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" name="image" class="form-control">
            </div>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Add Student</button>
        </form>
    </div>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
