@extends('layouts.master')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View All Pending Worker Applications</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Pending Worker Applications</h1>
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
<td>Age</td>
<td>Id Number</td>
<td>Job</td>
<td>Description</td>
<td>Documents</td>
<td>Status</td>
</tr>
@foreach ($wpending as $wp)
<tr>
<td>{{ $wp->id }}</td>
<td>{{ $wp->name }}</td>
<td>{{ $wp->email }}</td>
<td>{{ $wp->age }}</td>
<td>{{ $wp->id_no }}</td>
<td>{{ $wp->job }}</td>
<td>{{ $wp->description }}</td>
<td>{{ $wp->document }}</td>
<td>{{ $wp->status }}</td>

<td><a href="{{url('admin/managewpending/'.$wp->id)}}" class="btn btn-success">Manage Application</a></td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection