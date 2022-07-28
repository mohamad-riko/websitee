@extends('layout.v_template')
@section('title','TAMBAH HIMPUNAN')
@section('content')

<form action="/himpunan/insert/" method="POST" enctype="multipart/form-data"> 
@csrf
	<div class="content">
			<div class="row">
				<div class="col-sm-6"> 		


				<div class="form-group">
						<label>Variabel</label>
							<input name="variabel" class="form-control">
					</div>	

					<div class="form-group">
						<label>Kode</label>
							<input name="kode" class="form-control">
					</div>	

					<div class="form-group">
						<label>Himpunan</label>
							<input name="nama_himpunan" class="form-control">
					</div>				
				
					
					<div class="form-group">
						<label>Range</label>
							<input name="range" class="form-control">
					</div>			


					<div class="form-group">
						<label>Kurva</label>
							<input name="kurva" class="form-control">
					</div>				

							
						 </select>
						 </div>
						</div>

	
							
					
						<button class="btn btn-primary btn-sm">Simpan</button>
						<a href="/himpunan" class="btn btn-success btn-sm">Kembali</a>
	
					</div>	
				</div>
				
				</div> 
			</div>
		</div>
	
	</form>

	
@endsection