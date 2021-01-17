@extends('adminlte::page')

@section('title', 'Course | Students')

@section('content')
    @if(Auth::user()->teacher)
        <div class="row mb-2 mr-2">
            <div class="col-12">

                <a class="btn-lg btn-primary float-right" href="{{ route('teacher.courses.addAssignment', [$course]) }}" role="button">Create
                    Assignment</a>
            </div>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h2>Assignments on {{ $course->name }}</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Full Marks</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($course->assignments as $assignment)
                    <tr>
                        <td>{{ $loop->index + 1 }}.</td>
                        <td>{{ $assignment->title }}</td>
                        <td>{{ $assignment->description }}</td>
                        <td>{{ $assignment->full_marks }}</td>
                        <td>
                            <a class="btn btn-primary" href="#">Open</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
