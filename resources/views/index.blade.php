@extends('layout')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }} 
</div>
@endif
    <div class="table-wrapper">
        <div class="d-flex justify-content-end m-4">
            <a class="btn btn-info mr-1" href="{{route('students.create') }}">Add Student</a>
        </div>
        <table class="fl-table w-100">
            <thead style="height: 5px;">
                <tr>
                    <th> ID </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Section</th>
                    <th>Image</th>
                    <th>Show </th>
                    <th>Update </th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td colspan="7"></td>
                </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->tel}}</td>
                    <td style="color:brown; font-weight: bold;">{{$student->section}}</td>
                    <td>
                        <img src="{{ asset('storage/images/'.$student->image) }}" title="" width="64" height="64" style="border-radius: 50%; margin:5px" alt={{ $student->image }}>
                    </td>
                    <td style="vertical-align:middle; ">
                        <form method="POST" align="left">
                            <a class="btn btn-info mr-1" href="{{route('students.show' , $student->id) }}">Show</a>
                        </form>
                    </td>
                    <td style="vertical-align:middle; ">
                        <form method="POST" align="left">
                            <a class="btn btn-primary" href="{{ route('students.edit' , $student->id) }}">Edit</a>
                        </form>
                    </td>
                    <td style="vertical-align:middle; ">
                        <form method="POST" action="{{ route('students.destroy', $student->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-1" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="width:650px;">
            {{--  {!! $students->links() !!}  --}}
        </div>
    </div>
@endsection
