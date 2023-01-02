@extends('layouts.master2')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View of all Given Assignments</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Assignments</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "2" class="table table-striped table-bordered ">
<tr>
<td>Assignment Name</td>
<td>Instruction</td>
<td>Year</td>
<td>Unit</td>
<td>Date OF Assignment</td>
<td>Due Date</td>


</tr>
@foreach ($assignment as $assignment)
<tr>
<td>{{ $assignment->assignment_name}}</td>
<td>{{ $assignment->instruction }}</td>
<td>{{ $assignment->year }}</td>
<td>{{ $assignment->unit_code }}</td>
<td>{{ $assignment->created_at }}</td>
<td>{{ $assignment->due_date }}</td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection