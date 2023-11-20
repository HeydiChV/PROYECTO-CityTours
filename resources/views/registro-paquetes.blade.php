@extends('pagina-web-plantilla')
@section('contenido')

	<h1>Registro Paquetes Turisticos</h1>

		<!-- Title page -->
		<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
			<h2 class="ltext-105 cl0 txt-center">
				Contact
			</h2>
		</section>	
	
	
		<!-- Content page -->
		<section class="bg0 p-t-104 p-b-116">
			<div class="container">
				<div class="flex-w flex-tr">
					<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
						<form action="{{ route('guardar.paquetes') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
							  <label for="exampleInputEmail1" class="form-label">Nombre</label>
							  <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="Nombre">
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Descripción</label>
								<input type="text" class="form-control" name="descripcion" id="exampleInputEmail1" aria-describedby="Descripción">
							  </div>
							  <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Precio</label>
								<input type="text" class="form-control" name="precio" id="exampleInputEmail1" aria-describedby="Precio">
							  </div>
							  
							  <div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Región-ID</label>
								<input type="text" class="form-control" name="region_id" id="exampleInputEmail1" aria-describedby="Región-ID">
							  </div>
							  
							<div class="mb-3 form-check">
							  <input type="checkbox" class="form-check-input" id="exampleCheck1">
							  <label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						  </form>
					</div>
	
					<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-map-marker"></span>
							</span>
	
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Dirección
								</span>
	
								<p class="stext-115 cl6 size-213 p-t-18">
									Jr. Independencia 120, Puno, PN 40001 PE
								</p>
							</div>
						</div>
	
						<div class="flex-w w-full p-b-42">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-phone-handset"></span>
							</span>
	
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Lets Talk
								</span>
	
								<p class="stext-115 cl1 size-213 p-t-18">
									+51 945789823
								</p>
							</div>
						</div>
	
						<div class="flex-w w-full">
							<span class="fs-18 cl5 txt-center size-211">
								<span class="lnr lnr-envelope"></span>
							</span>
	
							<div class="size-212 p-t-2">
								<span class="mtext-110 cl2">
									Sale Support
								</span>
	
								<p class="stext-115 cl1 size-213 p-t-18">
									city_tours@example.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
let img = document.getElementById('img');
let input = document.getElementById('input');

input.onchange = (e) => {
  if(input.files[0])
    img.src = URL.createObjectURL(input.files[0]);
}


			</script>
		</section>	

@endsection