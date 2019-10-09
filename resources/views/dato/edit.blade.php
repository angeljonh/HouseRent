@extends('master')

@section('content')


<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Buscar propiedad</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Palabra clave</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Palabra Clave">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Ciudad</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>Guadalajara</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Dormitorios</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
				<option>4</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Baños</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
			    <option>0</option>
				<option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Minnimo Precio</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>$500</option>
                <option>$1,500</option>
				<option>$2,500</option>
				<option>$3,000</option>
				<option>$3,500</option>
				<option>$4,500</option>
				<option>$5,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Buscar Propiedad</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('inicio') }}">House<span class="color-b">Rent</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('inicio') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('propiedad') }}">Propiedades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dato.index') }}">CRUD</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
    <div class="row justify-content-center">
 <div class="row">
 <div class="col-md-12">
  <br />
  <h3>Editar propiedad</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('DatoController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="domicilio" class="form-control" value="{{$dato->domicilio}}" placeholder="Agregar domicilio" />
    </div>
    <div class="form-group">
    <input type="text" name="numero" class="form-control" value="{{$dato->precio}}" placeholder="Agregar numero" />
   </div>
   <div class="form-group">
    <input type="text" name="colonia" class="form-control" value="{{$dato->colonia}}" placeholder="Agregar colonia" />
   </div>
   <div class="form-group">
    <input type="text" name="ciudad" class="form-control" value="{{$dato->ciudad}}" placeholder="Agregar ciudad" />
   </div>
   <div class="form-group">
    <input type="text" name="estado" class="form-control" value="{{$dato->estado}}" placeholder="Agregar estado" />
   </div>
   <div class="form-group">
    <input type="text" name="cp" class="form-control" value="{{$dato->cp}}" placeholder="Agregar codigo postal" />
   </div>
   <div class="form-group">
    <input type="text" name="precio" class="form-control" value="{{$dato->precio}}" placeholder="Agregar precio" />
   </div>
   <div class="form-group">
    <input type="text" name="area" class="form-control" value="{{$dato->area}}" placeholder="Agregar area" />
   </div>
   <div class="form-group">
    <input type="text" name="camas" class="form-control" value="{{$dato->camas}}" placeholder="Agregar camas" />
   </div>
   <div class="form-group">
    <input type="text" name="cuartos" class="form-control" value="{{$dato->cuartos}}" placeholder="Agregar cuartos" />
   </div>
   <div class="form-group">
    <input type="text" name="baños" class="form-control" value="{{$dato->baños}}" placeholder="Agregar baños" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Editar" />
   </div>
  </form>
 </div>
</div>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  
  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>   


@endsection
