@extends('layouts.master')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View of all Enrolled Students</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Enrolled Students</h1>
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
@foreach ($senrolled as $s_enrolled)
<tr>
<td>{{ $s_enrolled->id }}</td>
<td>{{ $s_enrolled->name }}</td>
<td>{{ $s_enrolled->email }}</td>
<td>{{ $s_enrolled->role }}</td>


{{-- <td><a href="{{url('admin/managestdpending/'.$s_enrolled->id)}}" class="btn btn-success">Manage Application</a></td> --}}

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection