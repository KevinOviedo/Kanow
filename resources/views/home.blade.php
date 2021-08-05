@extends('welcome')

@section('seccion')

<div class="text-center container my-3 border p-3">
    <form class="flex">
        <div class="row">
           <h2>Opciones de filtro de búsqueda</h2>
            <div class="col-md-7">
                <input class="form-control m-2" type="search" placeholder="Nombres, Etiqueta, Lugar" aria-label="Search">
                <input class="form-control m-2" type="search" placeholder="Articulos, Servicios" aria-label="Search">
            </div>
            <div class="col-5">
               <input class="form-control m-2" type="search" placeholder="#Hashtag, #Ñuble , #Vacaciones" aria-label="Search">
               <button class="btn btn-outline-success m-2" type="submit">Buscar</button>
           </div>
        </div>
      </form>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 14rem;">
                <div class="card-img-top">
                    <a ><img data-bs-toggle="modal" data-bs-target="#exampleModal"class="img-thumbnail"src="{{asset('img/users/imagen4.jpeg')}}" alt="..."></a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" class="card-link"><u>B&B Casona Patrimonial Cobquecura & Ecomuseo</u></a></h5>
                  <p class="card-text">Lugar patrimonial, dedicado a la investigación que comparte con los clientes el amor por nuestro pasado y los empodera de respeto por el medio Ambiente.</p>
                  <p class="card-text"><strong>Direccion: Cobquecura </strong><i class="fas fa-map-marked-alt"></i></p>
                </div>
                <ul class="list-group list-group-flush">
                  <h6>Contacto</h6>
                  <li class="list-group-item">+56 9 37004153</li>
                  <li class="list-group-item">+56 9 37004153</li>
                </ul>
                <div class="">
                  <h6>Redes Sociales</h6>
                  <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 14rem;">
                <div class="card-img-top">
                    <img class="img-thumbnail"  src="{{asset('img/imagen2.png')}}" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#" class="card-link"><u>Akivoychillan</u></a></h5>
                  <p class="card-text">La mejor alternativa para conocer el patrimonio histórico y cultural de Chillán.</p>
                  <p class="card-text"><strong>Direccion: Chillán </strong><i class="fas fa-map-marked-alt"></i></p>
                </div>
                <ul class="list-group list-group-flush">
                  <h6>Contacto</h6>
                  <li class="list-group-item">+569 6843 6636</li>
                  <li class="list-group-item">+569 6843 6636</li>
                </ul>
                <div class="">
                  <h6>Redes Sociales</h6>
                  <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 14rem;">
                <div class="card-img-top">
                    <a href=""><img class="img-thumbnail"src="{{asset('img/imagen3.jpg')}}" alt="..."></a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#" class="card-link"><u>Los hornitos de Leslie</u></a></h5>
                  <p class="card-text">Productos caseros y de calidad.</p>
                  <p class="card-text"><strong>Direccion: Chillán </strong><i class="fas fa-map-marked-alt"></i></p>
                </div>
                <ul class="list-group list-group-flush">
                  <h6>Contacto</h6>
                  <li class="list-group-item">+569 91001271</li>
                  <li class="list-group-item">+569 91001271</li>
                </ul>
                <div class="">
                  <h6>Redes Sociales</h6>
                  <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 14rem;">
                <div class="card-img-top">
                    <a href=""><img class="img-thumbnail" src="{{asset('img/imagen1.jpg')}}" alt="..."></a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#" class="card-link "><u>ITIHUE TOUR LTDA</u></a></h5>
                  <p class="card-text">Donde loa demás ven rutina, nosotros vemos turismo.</p>
                  <p class="card-text"><strong>Direccion: San Carlos </strong><i class="fas fa-map-marked-alt"></i></p>
                </div>
                <ul class="list-group list-group-flush">
                  <h6>Contacto</h6>
                  <li class="list-group-item">+56 984977486</li>
                  <li class="list-group-item">+56 984977486</li>
                </ul>
                <div class="">
                  <h6>Redes Sociales</h6>
                  <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 14rem;">
                <div class="card-img-top">
                    <a href=""><img class="img-thumbnail" src="{{asset('img/imagen5.jpg')}}" alt="..."></a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#" class="card-link"><u>Fantasía en lana “Mely”</u></a></h5>
                  <p class="card-text">Original, hecho a mano y de calidad.</p>
                  <p class="card-text"><strong>Direccion: Poblacion 12 de octubre #585, Campanario, Comuna de Yungay </strong><i class="fas fa-map-marked-alt"></i></p>
                </div>
                <ul class="list-group list-group-flush">
                   <h6>Contacto</h6>
                  <li class="list-group-item">+569 83637871</li>
                  <li class="list-group-item">+569 83637871</li>
                </ul>
                <div class="">
                  <h6>Redes Sociales</h6>
                  <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </div>
              </div>
        </div>
        <div class="col">
          <div class="card text-center" style="width: 14rem;">
              <div class="card-img-top">
                  <a href=""><img  class="img-thumbnail" src="{{asset('img/imagen6.jpeg')}}" alt="..."></a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#" class="card-link"><u>Emporio de Ñuble</u></a></h5>
                <p class="card-text">¡Ven a conocer nuestro Emporio de Ñuble!</p>
                <p class="card-text"><strong>Direccion: Pinto,sector valle las trancas </strong> <i class="fas fa-map-marked-alt"></i></p>
              </div>
              <ul class="list-group list-group-flush">
               <h6>Contacto</h6>
                <li class="list-group-item">+569 40224512</li>
                <li class="list-group-item">+569 40224512</li>
              </ul>
              <div class="">
               <h6>Redes Sociales</h6>
                <a href="#" class="card-link">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="card-link">Instragram <i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="card-link">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
              </div>
            </div>
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <h5 class="modal-title" id="exampleModalLabel"><u>B&B Casona Patrimonial Cobquecura & Ecomuseo</u></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <div class="container border m-1">
               <a href=""><img class="m-2 profile-header-img" src="{{asset('img/imagen.jpeg')}}" alt="..."></a>
               <h4 class="m-2">Historia</h4>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('seccion2')
<div class="container">
  <div class="row">
     <div class="col-md-12">
        <div id="content" class="content content-full-width">
           <!-- begin profile -->
           <div class="profile">
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
                       <h4 class="m-t-10 m-b-5">Perfil Usuario</h4>
                       <p class="m-b-10">Perfil Sin Registrar</p>
                       <a href="#" class="btn btn-sm btn-info mb-2">Editar Perfil</a>
                    </div>
                    <!-- END profile-header-info -->
                 </div>
                 <!-- END profile-header-content -->
              </div>
           </div>
           <!-- end profile -->
           <!-- begin profile-content -->
           <div class="profile-content border">
              <!-- begin tab-content -->
              <div class="tab-content p-0">
                 <!-- begin #profile-post tab -->
                 <div class="tab-pane fade active show " id="profile-post">
                          <!-- end timeline-time -->
                          <!-- begin timeline-icon -->
                          <div class="timeline-icon">
                             <a href="javascript:;">&nbsp;</a>
                          </div>
                          <!-- end timeline-icon -->
                          <!-- begin timeline-body -->   
                          <div class="timeline-body">
                             <div class="timeline-header">
                                <span><i class="fas fa-users p-1 fa-lg"></i></span>
                                <span class="username"><a href="javascript:;">B&B Casona Patrimonial Cobquecura & Ecomuseo</a> <small></small></span>
                              <span class="date">Hoy</span>
                              <span class="time">04:20</span>
                             </div>
                             <div class="timeline-content">
                                <p class="m-2">
                                   Chicos y chicas hoy empezamos a reservar horas para septiembre, apurense que ya se van.
                                </p>
                             </div>
                             <div class="timeline-likes">
                                <div class="stats-right">
                                   <span class="stats-text">21 Comentarios</span>
                                </div>
                                <div class="stats">
                                   <span class="fa-stack fa-fw stats-icon">
                                   <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                   <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                   </span>
                                   <span class="fa-stack fa-fw stats-icon">
                                   <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                   <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                   </span>
                                   <span class="stats-total">4.3k</span>
                                </div>
                             </div>
                             <div class="timeline-footer p-1">
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Me gusta</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-down fa-fw fa-lg m-r-3"></i> No Me gusta</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-Comentarios fa-fw fa-lg m-r-3"></i> Comentar</a> 
                             </div>
                             <div class="timeline-comment-box">
                                <div class="input">
                                   <form action="">
                                      <div class="input-group">
                                         <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                         <span class="input-group-btn p-l-10">
                                         <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comentar</button>
                                         </span>
                                      </div>
                                   </form>
                                </div>
                             </div>
                          </div>
                          <div class="timeline-body">
                             <div class="timeline-header">
                                <span class="userimage"><i class="fas fa-users p-1 fa-lg"></i></span>
                                <span class="username">Fantasía en lana “Mely”</span>
                                <span class="date">Lunes</span>
                                <span class="time">20:17</span>
                             </div>
                             <div class="timeline-content">
                                <p class="m-2">!Nos cambiamos de direccion, ahora vamos a estar atendiendo en la Ubicacion: Calle los lagos, #404!</p>
                             </div>
                             <div class="timeline-footer p-1">
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Me gusta</a>
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-down fa-fw fa-lg m-r-3"></i> No Me gusta</a>
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-Comentarios fa-fw fa-lg m-r-3"></i> Comentar</a> 
                           </div>
                           <div class="timeline-comment-box">
                              <div class="input">
                                 <form action="">
                                    <div class="input-group">
                                       <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                       <span class="input-group-btn p-l-10">
                                       <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comentar</button>
                                       </span>
                                    </div>
                                 </form>
                              </div>
                           </div>
                          </div>
                         
                          <div class="timeline-icon">
                             <a href="javascript:;">&nbsp;</a>
                          </div>
                          <!-- end timeline-icon -->
                          <!-- begin timeline-body -->
                          <div class="timeline-body">
                             <div class="timeline-header">
                                <span class="userimage"><i class="fas fa-users p-1 fa-lg"></i></span>
                                <span class="username">Los hornitos de Leslie</span>
                                <span class="date">24 Febrero 2014</span>
                                <span class="time">08:17</span>

                             </div>
                             <div class="timeline-content">
                                <p class="m-2">
                                    Hoy tenemos empanadas de horno y fritas para disfrutar, hagan sus pedidos antes que se acaben.
                                </p>
                             </div>
                             <div class="timeline-footer p-1">
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Me gusta</a>
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-down fa-fw fa-lg m-r-3"></i> No Me gusta</a>
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-Comentarios fa-fw fa-lg m-r-3"></i> Comentar</a> 
                           </div>
                           <div class="timeline-comment-box ">
                              <div class="input">
                                 <form action="">
                                    <div class="input-group">
                                       <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                       <span class="input-group-btn p-l-10">
                                       <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comentar</button>
                                       </span>
                                    </div>
                                 </form>
                              </div>
                           </div>
                          </div>
                          <!-- end timeline-body -->
                          <!-- begin timeline-icon -->
                          <div class="timeline-icon">
                             <a href="javascript:;">&nbsp;</a>
                          </div>
                          <!-- end timeline-icon -->
                          <!-- begin timeline-body -->
                          <div class="timeline-body">
                             Loading...
                          </div>
                        
                 </div>
                 <!-- end #profile-post tab -->
              </div>
              <!-- end tab-content -->
           </div>
           <!-- end profile-content -->
        </div>
     </div>
  </div>
</div>
@endsection