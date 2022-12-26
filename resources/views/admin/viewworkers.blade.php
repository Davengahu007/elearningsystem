@extends('layouts.master')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View of all Non-Teaching Staff</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Non-Teaching Staff</h1>
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
@foreach ($wemployed as $w_employed)
<tr>
<td>{{ $w_employed->id }}</td>
<td>{{ $w_employed->name }}</td>
<td>{{ $w_employed->email }}</td>
<td>{{ $w_employed->role }}</td>


{{-- <td><a href="{{url('admin/managestdpending/'.$s_enrolled->id)}}" class="btn btn-success">Manage Application</a></td> --}}

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection