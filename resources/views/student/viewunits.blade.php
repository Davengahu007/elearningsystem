@extends('layouts.app')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View of all Available Units</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Available Units</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "2" class="table table-striped table-bordered ">
<tr>
<td>Unit Code</td>
<td>Unit Name</td>

</tr>
@foreach ($units as $unit)
<tr>
<td>{{ $unit->unit_code }}</td>
<td>{{ $unit->unit_name }}</td>


<td>
    <a href="{{url('student/unit_detail/'.$unit->unit_code)}}" class="btn btn-success">View Unit</a> 
</td>

</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection