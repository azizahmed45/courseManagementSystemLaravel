@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Course</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('teacher.addCourse')}}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input name="name" type="text"
                                   class="form-control @error('invitation_code') is-invalid @enderror"
                                   placeholder="Course name" >
                            @error('name')
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Course Code</label>
                            <input name="course_code" type="text"
                                   class="form-control @error('invitation_code') is-invalid @enderror"
                                   placeholder="Course code" >
                            @error('course_code')
                            <p class="text-danger"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection


