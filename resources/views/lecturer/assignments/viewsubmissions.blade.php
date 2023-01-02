@extends('layouts.master2')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View of all Submissions</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Submissions</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "2" class="table table-striped table-bordered ">
<tr>
<td>Student Id</td>
<td>Submission</td>
<td>Date Of Submission</td>


</tr>
@foreach ($assignment as $assignment)
<tr>
<td>{{ $assignment->student_id}}</td>
<td>{{ $assignment->submission }}</td>
<td>{{ $assignment->created_at }}</td>

<td><a href="#" class="btn btn-success">Mark</a></td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection