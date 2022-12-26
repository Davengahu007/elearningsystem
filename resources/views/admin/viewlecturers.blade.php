@extends('layouts.master')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View of all Employed Lecturers</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Employed Lecturers</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "2" class="table table-striped table-bordered ">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Role ID</td>


</tr>
@foreach ($lemployed as $l_employed)
<tr>
<td>{{ $l_employed->id }}</td>
<td>{{ $l_employed->name }}</td>
<td>{{ $l_employed->email }}</td>
<td>{{ $l_employed->role }}</td>


{{-- <td><a href="{{url('admin/managestdpending/'.$s_enrolled->id)}}" class="btn btn-success">Manage Application</a></td> --}}

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection