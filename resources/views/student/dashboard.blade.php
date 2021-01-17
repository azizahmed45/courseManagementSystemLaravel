@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ \App\Models\Course::all()->count() }}</h3>

                    <p>Total Courses</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ \App\Models\Student::all()->count() }}</h3>

                    <p>Total Students</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{\App\Models\Teacher::all()->count()}}</h3>

                    <p>Total Teacher</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ \App\Models\User::all()->count() }}</h3>

                    <p>Total User</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Courses</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Course Code</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student->courses as $course)
                            <tr>
                                <td>{{ $loop->index + 1 }}.</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->course_code }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/student-profile.jpg') }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $student->name }}</h3>

                    <p class="text-muted text-center">Student</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Total Courses</b> <a class="float-right">{{ $student->courses()->count() }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Friends</b> <a class="float-right">13,287</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div>


    </div>
@endsection
