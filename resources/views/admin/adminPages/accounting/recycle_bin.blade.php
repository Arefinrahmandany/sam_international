@extends('admin.layout.app')

@section('main-content')

<div class="container p-3">
<div class="table-responsive">
<table id="example" class="table table-border">

@include('validation.validate-table')
<thead>
<tr>
<th>#</th>
<th>Deleted Date</th>
<th>Voucher Number</th>
<th>Detail</th>
<th>Debit</th>
<th>Credit</th>
<th>Action By</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach( $transaction as $data )

	<tr>
		<td>{{ $loop-> index+1 }}</td>
		<td>{{ $data -> updated_at }}</td>
		<td>{{ $data->voucherNo }}</td>
		<td>{{ $data -> details }}</td>
		<td>{{ $data -> debit }}</td>
		<td>{{ $data -> credit }}</td>
		<td>{{ optional($data -> trashBy)->username}}</td>
		<td>
<div class="d-flex">
			<form methode="post" action="{{ route('transaction.restore', $data->id) }}">
				@csrf
				<button type="submit" class="btn btn-sm btn-outline-info"><i class="fa fa-recycle"></i></button>
			</form>
			<a class="btn btn-sm btn-outline-danger" href="{{ route('transection.destroySingle',$data->id) }}"><i class="fa fa-trash"></i><a/>
			
</div>
		</td>
	</tr>
@endforeach
</tbody>
</table>
</div>
</div>



@endsection