@extends('welcome')

@section('iniciocompleto')
<div class="container border p-4">
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
                 <h4 class="m-t-10 m-b-5">Kevin Oviedo</h4>
                 <p class="m-b-10">KevinOviedo@gmail.com</p>
                 <a href="#" class="btn btn-sm btn-info mb-2">Editar Perfil</a>
              </div>
              <!-- END profile-header-info -->
           </div>
           <!-- END profile-header-content -->
        </div>
     </div>
     <div class="row">
         <div class="col ml-4">
               <div class="row m-2 border p-2 text-center">
                   <h5 class="m-2"><u> Perfil De Usuario </u></h5>
                   <div class="col">
                       <div class="profile-header-img m-1">
                           <img src="{{asset('img/user.png')}}" alt="">
                        </div>
                     </div>
                     <div class="col">
                          <h6 class=" m-2">Informacion</h6>
                          <label class="m-2" for="">Nombre de Usuario: Kevin Oviedo</label>
                          <label class="m-2" for="">Correo: KevinOviedo@gmail.com</label>
                          <label class="m-2" for="">Contacto: +569 98784878</label>
                          <label class="m-2" for="">Direccion: Colchagua 940, Talcahuano</label>

                       </div>
            </div>
         <div class="row m-2 border text-center">
             <h5 class=" m-2"><u>Perfil De Emprendimiento</u></h5>
             <div class="modal-body text-center">
               <div class="container border m-1">
                  <a href=""><img class="m-2 profile-header-img" src="{{asset('img/imagen.jpeg')}}" alt="..."></a>
                  <p class="card-text m-1">Conocí el pueblo de Cobquecura, cuando La U de Concepción entrego la 
                     declaración de Zona Típica.  Un lugar increíble, golondrina volando por las calles, la playa
                      con islotes llenos de vida. Cerca de la plaza agonizaba una casona antigua, tejas rotas 
                      cayendo como lagrimas, puertas y ventanas tapeadas, curiosos entramos por el costado, nos 
                      recibió un jardín alfombrado en flores, mágico.  Un mes después la compramos y con 60 
                      trabajadores entre profesionales , técnicos y obreros incluyendo 12 mujeres la 
                      restauramos/recreamos en cinco meses.  Esto fue nuestro proyecto familiar “Bicentenario” 
                      aportar con conservación de patrimonio.    Llego una pieza arqueológica (1.000 años año +o-)
                       hicimos un Ecomuseo para resguardar los testigos de la historia, las habitaciones las 
                       nombramos con escritores, dos de ellos Cobquecuranos. </p>
                       
                       <h5><u>Direccion</u></h5>
                       <p>Cobquecura</p>
                       <p><i class="fas fa-map 7x"></i></p>
               </div>
               <div class="container border m-1">
                  <h5 class="m-2">Números de Contato</h5>
                  <p>Contacto 1: +56998987487  -  Contacto 2: +59887478765</p>
               </div>
               <div class="container border m-1">
                  <h5 class="m-2">Razon Social</h5>
                  <p>Hotel , cultura y patrimonio</p>
               </div>
               <div class="container border m-1">
                  <h5 class="m-2">Redes Sociales</h5>
                  <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Sitio Web <i class="fa fa-internet-explorer " aria-hidden="true"></i></a>
                  <p></p>
               </div>
               <h5 class="m-2">Imagenes</h5>
               <div class="d-flex justify-content-center">
                  <div class="profile-header-img m-2">
                     <img class="img-thumbnail" src="{{asset('img/users/imagen1.jpeg')}}" alt="">
                  </div>
                  <div class="profile-header-img m-2">
                    <img class="img-thumbnail" src="{{asset('img/users/imagen2.jpeg')}}" alt="">
                  </div>
                  <div class="profile-header-img m-2">
                     <img class="img-thumbnail" src="{{asset('img/users/imagen3.jpeg')}}" alt="">
                  </div>
                  <div class="profile-header-img m-2">
                     <img class="img-thumbnail" src="{{asset('img/users/imagen4.jpeg')}}" alt="">
                  </div>
               </div>
               
           </div> 
   
 </div>
         </div>
         <div class="col">
            <div class="card text-center" style="width: 30rem;">
               <h5 class="text-center m-2">Perfil de Emprendimiento</h5>
               <div class="card-img-top">
                   <a ><img data-bs-toggle="modal" data-bs-target="#exampleModal"class="img-thumbnail"src="{{asset('img/users/imagen4.jpeg')}}" alt="..."></a>
               </div>
               <div class="card-body">
                 <h5 class="card-title"><a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" class="card-link"><u>B&B Casona Patrimonial Cobquecura & Ecomuseo</u></a></h5>
                 <p class="card-text">Lugar patrimonial, dedicado a la investigación que comparte con los clientes el amor por nuestro pasado y los empodera de respeto por el medio Ambiente.</p>
                 <p class="card-text"><strong>Direccion: Cobquecura </strong><i class="fas fa-map-marked-alt"></i></p>
               </div>
               <ul class="container">
                  <li class="list-group-item"><h5>Contacto</h5></li>
                 <li class="list-group-item">+56 9 37004153</li>
                 <li class="list-group-item">+56 9 37004153</li>
               </ul>
               <div class="container m-2">
                 <h6>Redes Sociales</h6>
                 <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                 <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                 <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                 <a href="#" class="card-link">Sitio Web <i class="fa fa-internet-explorer" aria-hidden="true"></i></a>
               </div>
             </div>
         </div>
      </div>   
@endsection