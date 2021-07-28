@extends('welcome')

@section('iniciocompleto')
<div class="container border">
    <div class="profile m-1 p-4">
        <div class="profile-header">
           <!-- BEGIN profile-header-cover -->
           <div class="profile-header-cover"></div>
           <!-- END profile-header-cover -->
           <!-- BEGIN profile-header-content -->
           <div class="profile-header-content">
              <!-- BEGIN profile-header-img -->
              <div class="profile-header-img">
                 <img src="{{asset('img/user.png')}}" alt="">
              </div>
              <!-- END profile-header-img -->
              <!-- BEGIN profile-header-info -->
              <div class="profile-header-info">
                 <h4 class="m-t-10 m-b-5">Nombre Usuario</h4>
                 <p class="m-b-10">Correo Asociado a la Cuenta</p>
                 <a href="#" class="btn btn-sm btn-info mb-2">Editar Perfil</a>
              </div>
              <!-- END profile-header-info -->
           </div>
           <!-- END profile-header-content -->
        </div>
     </div>
     <div class="profile text-center border m-5">
         <div class="row m-2">
        <h5 class=" m-2">Perfil De Usuario</h5>
        <div class="col">
            <h6 class=" m-2">Informacion</h6>
            <label class="m-2" for="">Fecha Creación: 20/06/2021</label>
            <label class="m-2" for="">Número Contacto: +569 98874758</label>
            <label class="m-2" for="">Direccion: Colchagua 940, Talcahuano</label>
        </div>
        <div class="col">
            <h6 class=" m-2">Descripcion</h6>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam veritatis necessitatibus a deleniti quaerat maiores sapiente animi eveniet est repellat commodi totam exercitationem modi architecto, voluptate fugiat consectetur eum perspiciatis.</p>
        </div>
    </div>
     </div>
     <div class="profile text-center border m-5">
        <div class="row m-2 border">
            <h5 class=" m-2">Perfil De Emprendimiento</h5>
            <div class="col">
                <div class="profile-header-img m-1">
                    <img src="{{asset('img/user.png')}}" alt="">
                 </div>
                 <h6 class=" m-2">Informacion</h6>
                 <label class="m-2" for="">Nombre: Emprendimiento Ñuble</label>
                 <label class="m-2" for="">Categoria: Turismo</label>
                 <label class="m-2" for="">Direccion: Colchagua 940, Talcahuano</label>
                </div>
                <div class="col">
                    <h6 class=" m-2">Contacto</h6>
                    <label class="m-2" for="">Número Contacto 1: +569 98874758</label>
                    <label class="m-2" for="">Número Contacto 2: +569 98874758</label>
                    <div>
                            <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            <a href="#" class="card-link">Sitio Web</i></a>
                    </div>
                </div>
     </div>
     <div class="row m-2 border">
        <h5 class=" m-2">Productos</h5>
        <div class="d-flex justify-content-center">
            <div class="profile-header-img m-2">
               <img src="{{asset('img/user.png')}}" alt="">
            </div>
            <div class="profile-header-img m-2">
               <img src="{{asset('img/user.png')}}" alt="">
            </div>
            <div class="profile-header-img m-2">
               <img src="{{asset('img/user.png')}}" alt="">
            </div>
            <div class="profile-header-img m-2">
                <img src="{{asset('img/user.png')}}" alt="">
             </div>
             <div class="profile-header-img m-2">
                <img src="{{asset('img/user.png')}}" alt="">
             </div>
             <div class="profile-header-img m-2">
                <img src="{{asset('img/user.png')}}" alt="">
             </div>
             <div class="profile-header-img m-2">
                <img src="{{asset('img/user.png')}}" alt="">
             </div>
         </div>
     </div>
</div>
@endsection