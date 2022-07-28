@extends('layout.v_template')
@section('title','Add Kriteria')

@section('content')
<form action="/kriteria/insert/" method="POST" enctype="multipart/form-data"> 
@csrf
	<div class="content">
			<div class="row">
				<div class="col-sm-6"> 	

                <div class="form-group">
						<label>Nama</label>
							<input name="nama" class="form-control">
					</div>	



				<div class="form-group">
						<label>Batas bawah</label>
							<input name="bb" class="form-control">
					</div>	

					<div class="form-group">
						<label>Batas Tengah</label>
							<input name="bt" class="form-control">
					</div>	

					<div class="form-group">
						<label>Batas Atas</label>
							<input name="ba" class="form-control">
					</div>				
				
                    <div class="form-group">
						<label>Nilai bawah</label>
							<input name="nb" class="form-control">
					</div>	

					<div class="form-group">
						<label>Nilai Tengah</label>
							<input name="nt" class="form-control">
					</div>	

					<div class="form-group">
						<label>Nilai Atas</label>
							<input name="na" class="form-control">
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