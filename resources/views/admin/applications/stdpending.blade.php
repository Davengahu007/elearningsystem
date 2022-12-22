@extends('layouts.app')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View All Pending Student Applications</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Pending Student Applications</h1>
</div>

<div class="card-body">
<table border = "2" class="table table-striped table-bordered ">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Age</td>
<td>Former School</td>
<td>Grade</td>
<td>Course</td>
<td>Description</td>
<td>Documents</td>
<td>Status</td>
</tr>
@foreach ($stdpending as $spending)
<tr>
<td>{{ $spending->id }}</td>
<td>{{ $spending->name }}</td>
<td>{{ $spending->email }}</td>
<td>{{ $spending->age }}</td>
<td>{{ $spending->former_school }}</td>
<td>{{ $spending->grade }}</td>
<td>{{ $spending->course }}</td>
<td>{{ $spending->description }}</td>
<td>{{ $spending->document }}</td>
<td>{{ $spending->status }}</td>

<td><a href="{{url('admin/managestdpending/'.$spending->id)}}" class="btn btn-success">Manage Application</a></td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection