@extends('layouts.master3')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View All Cleared Students</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Cleared Students</h1>
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
@foreach ($cleared as $cleared)
<tr>
<td>{{ $cleared->id }}</td>
<td>{{ $cleared->fee_balance }}</td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection