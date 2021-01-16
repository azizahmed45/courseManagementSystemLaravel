@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Join Course</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('student.joinCourse')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <p>Join un a course with joining/invitation code</p>

                        @error('already_joined')
                        <div class="alert alert-warning">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputEmail1">Invitation Code</label>
                            <input name="invitation_code" type="text"
                                   class="form-control @error('invitation_code') is-invalid @enderror"
                                   placeholder="ZKFLSKJK" >
                            @error('invitation_code')
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Join</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection


