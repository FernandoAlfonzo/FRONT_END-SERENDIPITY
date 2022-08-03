<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#">   <i class='bx bx-search'></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">1</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notificaciones</p>
                                            <p class="msg-header-clear ms-auto">Marcar como vistos</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Curso<span class="msg-time float-end">Hace 14 segundos</span></h6>
                                                    <p class="msg-info">Aviso de pago: Usted tiene 
                                                        <br>3 días atrasado...
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Taller<span class="msg-time float-end">Hace 14 segundos</span></h6>
                                                    <p class="msg-info">Aviso de pago: Su fecha de pago
                                                        <br>está cerca, le recordamos...
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                   
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">Ver todas las notificaciones</div>
                                    </a>
                                </div>
                            </li>
                        
                        </ul>
                    </div>
                  
                            <div class="header-notifications-list">
                                
                        <div class="dropdown-menu dropdown-menu-end">
                            
                            <div class="header-message-list">
                                
                                        <div class="user-online">
                                        
                                        </div>
                                        <div class="flex-grow-1">
                                           
                                        </div>
                                   
                                        <div class="user-online">
                                           
                                        </div>
                                        <div class="flex-grow-1">
                         
                                        </div>
                                   
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            
                                        </div>
                                        <div class="flex-grow-1">
                                          
                                        </div>
                                  
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            
                                        <div class="flex-grow-1">
                                           
                                        </div>
                                    </div>
                               
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                           
                                        </div>
                                        <div class="flex-grow-1">
                                            
                                        </div>
                                  
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                           
                                        </div>
                                        <div class="flex-grow-1">
                                        
                                        </div>
                                 
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            
                                        </div>
                                        <div class="flex-grow-1">
                                            
                                        </div>
                                   
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                         
                                        </div>
                                        <div class="flex-grow-1">
                                          
                                        </div>
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                           
                                        </div>
                                        <div class="flex-grow-1">
                                         
                                        </div>
                                    </div>
                              
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                         
                                        </div>
                                        <div class="flex-grow-1">
                                        
                                        </div>
                                  
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                         
                                        </div>
                                        <div class="flex-grow-1">
                                          
                                        </div>
                                    </div>
                                </a>
                            </div>
                           
                                <div class="text-center msg-footer">View All Messages</div>
                    
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/images/user-profile.png" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Usuario</p>
                        <p class="designattion mb-0">{{ \Session::get('userRol') }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ url('/profile') }}"><i class="bx bx-user"></i><span>Perfil</span></a>
                    </li>
                    <!--<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Ajustes</span></a>
                    </li>-->
                   
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="settings"><i class="fadeIn animated bx bx-cog"></i><span>Configuracion</span></a>
                    </li>
                    <li><a class="dropdown-item" href="logout"><i class='bx bx-log-out-circle'></i><span>Cerrar sesión</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->
