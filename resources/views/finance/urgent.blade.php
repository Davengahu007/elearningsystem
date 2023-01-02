@extends('layouts.master3')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View All Pending Fee Clearance</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>Urgent Pending Fee Clearance</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "2" class="table table-striped table-bordered ">
<tr>
<td>Student ID</td>
<td>Fee Balance</td>
</tr>
@foreach ($urgent as $urgent)
<tr>
<td>{{ $urgent->id }}</td>
<td>{{ $urgent->fee_balance }}</td>
</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection