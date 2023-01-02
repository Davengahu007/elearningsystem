@extends('layouts.master3')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View All Payments Made</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Payments Made</h1>
</div>

<div class="card-body">
    <div class="text-success">
        @if (session('status'))
        {{ session('status') }}
    @endif
</div>
<table border = "2" class="table table-striped table-bordered ">
<tr>
<td>Payment ID</td>
<td>Student ID</td>
<td>Amount Paid</td>
</tr>
@foreach ($payment as $payment)
<tr>
<td>{{ $payment->id }}</td>
<td>{{ $payment->student_id }}</td>
<td>{{ $payment->amount_paid }}</td>
</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection