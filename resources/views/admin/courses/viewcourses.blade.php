@extends('layouts.app')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View All Courses Offered</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Courses Offered</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "0" class="table table-striped ">
<tr>
<td>Course Name</td>
<td>Course Code</td>
<td>School</td>
<td>Duration</td>
</tr>
@foreach ($courses as $course)
<tr>
<td>{{ $course->course_name }}</td>
<td>{{ $course->course_code }}</td>
<td>{{ $course->school }}</td>
<td>{{ $course->duration }}</td>

<td>
    <a href="{{url('admin/edit_course/'.$course->course_code)}}" class="btn btn-success">Edit</a>
</td>
<td>
    <a href="{{url('admin/delete_course/'.$course->course_code)}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete course:[{{$course->course_name}}] from the system ')">Delete</a>
</td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection