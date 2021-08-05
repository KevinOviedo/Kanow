<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
       
          <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <title>Empresa IO</title>
            
            <script src="https://kit.fontawesome.com/d4b1a37cfb.js" crossorigin="anonymous"></script>
        
            <!-- Bootstrap -->
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
            <!-- NProgress -->
            <link href="{{asset('/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        
            <!-- Custom Theme Style -->
            <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">

            <!-- ChartJS -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          </head>
        
          <body class="nav-md st">
            <div class="container body">
              <div class="main_container">
                <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">
                    <div class="navbar nav_title align-items-center" style="border: 0;">
                      <a href="/" class="site_title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                      </svg><span class="align-middle">Kanow-M</span></a>
                    </div>
        
                    <div class="clearfix"></div>
                    
                    <!-- menu profile quick info -->
                    <div class="profile clearfix ">
                      <div class="profile_pic">
                        <img src="" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info ">
                        <p class="fw-bolder">Bievenidos</p>
                        <h2></h2>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->
        
                    <br />
        
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                      <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                          <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="/">Menu Principal<i class="fa-solid fa-phone"></i></a></li>
                              <li><a href="/">Publicaciones</a></li>
                              <li><a href="/">Ayuda</a></li>
                              <li><a href="/">Sugerencias</a></li>
                            </ul>
                          </li>
                          <li><a><i class="fa fa-edit"></i>Categorias<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                          </li>
                            <li><a href="">Comida Rapida <i class="fas fa-hamburger"></i></a></li>
                            <li><a href="">Deportes <i class="fas fa-swimmer"></i></a></li>
                            <li><a href="">Construccion <i class="fas fa-building"></i></a></li>
                            <li><a href="">Entretencion <i class="fas fa-dice"></i></a></li>
                            <li><a href="">Jardineria <i class="fas fa-seedling"></i></a></li>
                            <li><a href="">Joyeria <i class="far fa-gem"></i></a></li>
                            </li>
                            <li><a href="">Electricidad <i class="fas fa-plug"></i></a></li>
                            <li><a href="">Musica <i class="fas fa-music"></i></a></li>
                            <li> <a href="">Ropa <i class="fas fa-tshirt"></i></a> </li>
                            <li> <a href="">Turismo <i class="fas fa-bus"></i></a> </li>
                            <li> <a href="">Asesorias <i class="fas fa-user-tie"></i></a> </li>
                            <li> <a href="">Artesania  <i class="fas fa-american-sign-language-interpreting"></i></a> </li>
                            </ul>
                        </ul>
                      </div>
                    </div>
                    <!-- /sidebar menu -->
        
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </a>
                    </div>
                    <!-- /menu footer buttons -->
                  </div>
                </div>
        
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                          <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                              <img src="images/user.png" alt="">Perfil de usuario
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item"  href="/perfil"> Perfil</a>
                                <a class="dropdown-item"  href="javascript:;">
                                  <span class="badge bg-red pull-right">50%</span>
                                  <span>Configuración</span>
                                </a>
                            <a class="dropdown-item"  href="javascript:;">Ayuda</a>
                              <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
                            </div>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                <!-- /top navigation -->
        
                <!-- page content -->
                    <div class="right_col" role="main">
                    <div class="clearfix"></div>
                        <div class="row ">

                          @yield('iniciocompleto')

                          <div class="col-md-8">
                              
                                @yield('seccion')

                          </div>
                          <div class="col-md-4">
                              
                              @yield('seccion2')  

                          </div>
                        </div>
                        
                    </div>
                
                <!-- /page content -->
        
                <!-- footer content -->
                <footer>
                  <div class="pull-right">
                   
                  </div>
                  <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
              </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
            <!-- jQuery -->
            <script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}"></script>
            <!-- Bootstrap -->
           <script src="{{asset('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <!-- FastClick -->
            <script src="{{asset('/vendors/fastclick/lib/fastclick.js')}}"></script>
            <!-- NProgress -->
            <script src="{{asset('/vendors/nprogress/nprogress.js')}}"></script>
            
            <!-- Custom Theme Scripts -->
            <script src="{{asset('js/custom.min.js')}}"></script>
          </body>
        </html>