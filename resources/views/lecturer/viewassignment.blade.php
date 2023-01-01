@extends('layouts.master2')

@section('content')
<!DOCTYPE html>
<html>
<head>
<title>Given Assignments</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>Assignments</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "0" class="table table-striped ">
 
<tr>
<td>Assignment Name</td>
<td>Due Date</td>
<td>Intructions</td>
</tr>
@foreach ($assignment as $a_ssignment)
<tr>
<td>{{ $a_ssignment->assignment_name }}</td>
<td>{{ $a_ssignment->due_date }}</td>
<td>{{ $a_ssignment->instruction }}</td>


<td>
    <a href="{{url('lecturer/edit_assignment/'.$a_ssignment->assignment_name)}}" class="btn btn-success">Edit</a>
</td>


</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection