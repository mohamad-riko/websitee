@extends('layout.v_template')
@section('title','User')


@section('content')

<div class="box">
	<div class="box-header with-border">

<a href="/himpunan/add" class="btn btn-primary btn-sm ">Tambah Himpunan</a> <br>
	
@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
	</button>
    <h4><i class="icon fa fa-check"></i> succes!</h4>
		{{ (session('pesan')) }}
    </div>
	@endif

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>no Pendaftaran</th>
			<th>Nama </th>
			<th>po</th>
			<th>jt</th>
			<th>rr</th>
			<th>ukt</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;  ?>
		@foreach ($data as $item)
			<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $item->no_pendaftaran }}</td>
			<td>{{ $item->nama }}</td>
			<td>{{ $item->po }}</td>
			<td>{{ $item->jt }}</td>
			<td>{{ $item->rr }}</td>
			<td>{{ $item->ukt }}</td>
			</tr>
		
		@endforeach
	</tbody>

</table>
</div>
</div>

@endsection