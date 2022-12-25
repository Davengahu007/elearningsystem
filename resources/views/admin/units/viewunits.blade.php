@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<title>View All Units Offered</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Units Offered</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "0" class="table table-striped ">
<tr>
<td>Unit Name</td>
<td>Unit Code</td>
<td>Course_code</td>
</tr>
@foreach ($units as $unit)
<tr>
<td>{{ $unit->unit_name }}</td>
<td>{{ $unit->unit_code }}</td>
<td>{{ $unit->course_code }}</td>

<td>
    <a href="{{url('admin/edit_unit/'.$unit->unit_code)}}" class="btn btn-success">Edit</a>
</td>
<td>
    <a href="{{url('admin/delete_unit/'.$unit->unit_code)}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete unit:[{{$unit->unit_name}}] from the system ')">Delete</a>
</td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection