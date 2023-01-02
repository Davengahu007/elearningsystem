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
<td><a href="{{route('unitregstration')}}" class="btn btn-success">Send Unit Registration Reminder</a></td>


</tr>
@foreach ($senrolled as $s_enrolled)
<tr>
<td>{{ $s_enrolled->id }}</td>
<td>{{ $s_enrolled->name }}</td>
<td>{{ $s_enrolled->email }}</td>
<td>{{ $s_enrolled->role }}</td>


<td>
    <form action="{{url('admin/assign_fee/'.$s_enrolled->id)}}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-success">Update Fees</button>
    </form>
</td>
</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection