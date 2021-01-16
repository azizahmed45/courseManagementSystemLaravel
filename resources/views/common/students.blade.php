@extends('adminlte::page')

@section('title', 'Course | Students')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Students on {{ $course->name }}</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Student ID</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($course->students as $student)
                    <tr>
                        <td>{{ $loop->index + 1 }}.</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_id }}</td>
                        <td>
                            <span class="badge bg-primary">Edit</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
