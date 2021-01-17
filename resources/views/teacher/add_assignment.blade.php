@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Assignment</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('teacher.courses.addAssignment', [$course])}}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input name="title" type="text"
                                   class="form-control @error('title') is-invalid @enderror"
                                   placeholder="Title" >
                            @error('title')
                            <p class="text-danger"> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" type="text"
                                   class="form-control @error('description') is-invalid @enderror"
                                      placeholder="Description" > </textarea>
                            @error('description')
                            <p class="text-danger"> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="full_marks">Full marks</label>
                            <input name="full_marks" type="number"
                                   class="form-control @error('full_marks') is-invalid @enderror"
                                   placeholder="Full mark" >
                            @error('full_marks')
                            <p class="text-danger"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create Assignment</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection


