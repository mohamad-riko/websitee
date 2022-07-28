@extends('layout.v_template')
@section('title','ADMIN-PERHITUNGAN')


@section('content')
<div class="box">
	<div class="box-header with-border">
		<a href="/perhitungan/add" class="btn btn-primary btn-sm ">Tambah Perhitungan</a> <br>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>No Pendafatran</th>
			<th>Nama Mahasiswa </th>
			<th>Penghasilan Orang Tua</th>
			<th>Jumlah Tanggungan</th>
			<th>Rekening Rumah</th>
			<th>UKT</th>
			<th>Aksi</th>
			<th></th>

		</tr>
	</thead>
	<tbody>
		<?php $no=1;  ?>
		@foreach ($perhitungan as $data)
			<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $data->no_pendaftaran }}</td>
			<td>{{ $data->nama }}</td>
			<td>{{ $data->po }}</td>
			<td>{{ $data->jt }}</td>
			<td>{{ $data->rr }}</td>
			<td>{{ $data->ukt }}</td>
			<td>
				
				<a href="/perhitungan/edit/{{ $data->id_perhitungan }}" class="btn btn-sm btn-warning">
				Edit</a>
				<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_perhitungan}}">
				  	Delete
              </button>
			</td>
			</tr>
		
		@endforeach
	</tbody>
	</table>

@foreach ($perhitungan as $data)
<div class="modal modal-danger fade" id="delete{{ $data->id_perhitungan}}">
	<div class="modal-dialog modal-xl">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title">Delete</h4>
		</div>
		<div class="modal-body">
		  <p>Apakah anda yakin ingin menghapus data ini ...??</p>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
		  <a href="/perhitungan/delete/{{ $data->id_perhitungan }}" class="btn btn-outline">Yes</a>
		</div>
	  </div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
  </div>
@endforeach
</div>
</div>

@endsection