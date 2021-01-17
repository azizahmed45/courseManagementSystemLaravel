@extends('adminlte::page')

@section('title', 'Dashboard | Courses')

@section('content_header')
    <h1>Courses</h1>
@stop

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row mb-2 mr-2">
                <div class="col-12">

                    <a class="btn-lg btn-primary float-right" href="{{ route('teacher.addCourse') }}" role="button">Add Course</a>
                </div>
            </div>
            {{--            small box start--}}
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-4">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget widget-user-2 shadow-sm">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-info">
                                <div class="widget-user-image">
                                    <img src="{{ asset('img/courses.png') }}" alt="User Avatar">
                                </div>
                                <!-- /.widget-user-image -->
                                <h3 class="widget-user-username">{{ $course->name }}</h3>
                                <h5 class="widget-user-desc">{{ $course->course_code }}</h5>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('teacher.courses.students', [$course])}}" class="nav-link">
                                            Students <span
                                                class="float-right badge bg-primary">{{ $course->students->count() }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('teacher.courses.assignments', [$course])}}" class="nav-link">
                                            Assignments <span
                                                class="float-right badge bg-info">{{ $course->assignments->count() }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Exams <span
                                                class="float-right badge bg-success">{{ $course->exams->count() }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Notice <span
                                                class="float-right badge bg-danger">{{ $course->students->count() }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link"> Invite Code <kbd class="float-right">{{ $course->invite_code }}</kbd> </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>

@endsection
