@extends('layouts.app')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>View of all Payments Made</title>
</head>
<body>

<div class="container-fluid px-4">

<div class="card-header">
<h1>All Payments</h1>
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
<td>Amount Paid</td>
<td>Date Of Payment</td>

</tr>
@foreach ($payments as $payment)
<tr>
<td>{{ $payment->id }}</td>
<td>{{ $payment->amount_paid }}</td>
<td>{{ $payment->created_at }}</td>


</tr>
@endforeach
</table>
</div>
</div>

</body>
</html>
@endsection