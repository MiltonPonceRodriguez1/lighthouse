<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        
        <nav id="compactSidebar">

            <div class="theme-logo">
                <a href="<?=base_url?>">
                    <img src="<?=base_url?>assets/img/bmsaLogoBlanco.ico" class="navbar-logo" alt="logo">
                </a>
            </div>

            <ul class="menu-categories">
                <li class="menu menu-single active">
                    <a href="<?=base_url?>" data-active="true" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Menú</span></div>
                </li>

                <li class="menu">
                    <a href="#pdv" data-active="false" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Programa de Vigilancia</span></div>
                </li>

                <li class="menu">
                    <a href="#salud_ocupacional" data-active="false" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Salud Ocupacional</span></div>
                </li>

                <li class="menu">
                    <a href="#sistema_calidad" data-active="false" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Sistemas de Calidad</span></div>
                </li>

                <li class="menu menu-single">
                    <a href="#" data-active="false" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Atención primaria</span></div>
                </li>

                <li class="menu">
                    <a href="#" data-active="false" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Bienestar</span></div>
                </li>

                <li class="menu">
                    <a href="#" data-active="false" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Otros</span></div>
                </li>

                <li class="menu">
                    <a href="#" data-active="false" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip"><span>Contratistas</span></div>
                </li>
            </ul>

           
            <!--PANEL DE INFERIOR-->
            <div class="sidebar-bottom-actions">

                <!--Seccion de ayuda-->
                <div class="external-links">
                    <a target="" href="#" target=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        <div class="tooltip"><span>Ayuda</span></div>
                    </a>
                </div>

                <!--Seccion de perfil de usuario-->
                <div class="dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?=base_url?>assets/img/user.png" class="img-fluid" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="dropdown-inner">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <img src="<?=base_url?>assets/img/user.png" class="img-fluid mr-2" alt="avatar">
                                    <div class="media-body">
                                        <h5>Alan Green</h5>
                                        <p>Medico</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <a href="user_profile.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span> Perfil</span>
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="apps_mailbox.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span> Mensajes</span>
                                </a>
                            </div>
                            
                            <div class="dropdown-item">
                                <a href="auth_login.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Cerrar Sesión</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
            
        </nav>

        <div id="compact_submenuSidebar" class="submenu-sidebar">

            <div class="submenu" id="dashboard">
                <ul class="submenu-list" data-parent-element="#dashboard"> 
                    <li class="active">
                        <a href="index.html"> Analytics </a>
                    </li>
                    <li>
                        <a href="index2.html"> Sales </a>
                    </li>
                </ul>
            </div>

            <div class="submenu" id="pdv">
                <div class="menu-title">
                    <h3>Administración</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#pdv"> 
                    <li>
                        <a href="<?=base_url?>pdv/altabaja_vigilancia"> Alta/Baja Vigilancia </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>pdv/evaluacion_fisica"> Evaluación Fisica </a>
                    </li>
                    <li>
                        <a href="<?=base_url?>pdv/subir_resultado"> Subir Resultados </a>
                    </li>
                </ul>
                <div class="menu-title">
                    <h3>Captura</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#pdv"> 
                    <li>
                        <a href="#"> Manejador de Alimentos </a>
                    </li>
                    <li>
                        <a href="#"> Patógenos </a>
                    </li>
                    <li>
                        <a href="#"> Riesgos Físicos </a>
                    </li>
                    <li>
                        <a href="#"> Equipo Móvil </a>
                    </li>
                    <li>
                        <a href="#"> Conservación Auditiva </a>
                    </li>
                    <li>
                        <a href="#"> Químicos </a>
                    </li>
                    <li>
                        <a href="#"> Ergonomía </a>
                    </li>
                    <li>
                        <a href="#"> Respiradores </a>
                    </li>
                    <li>
                        <a href="#"> Agudeza Visual </a>
                    </li>
                </ul>
                <div class="menu-title">
                    <h3>Seguimiento</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#pvm"> 
                    <li>
                        <a href="#"> Consultar Bitácora </a>
                    </li>
                    <li>
                        <a href="#"> Control de Vigilancias </a>
                    </li>
                </ul>
            </div>

            <div class="submenu" id="salud_ocupacional">
                <div class="menu-title">
                    <h3>Submenu 1</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#salud_ocupacional"> 
                    <li>
                        <a href="<?=base_url?>socupacional/item1"> item 1 </a>
                    </li>
                    <li>
                        <a href="ui_avatar.html"> item 2 </a>
                    </li>
                </ul>
            </div>

            <div class="submenu" id="sistema_calidad">
                <div class="menu-title">
                    <h3>Submenu 2</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#components"> 
                    <li>
                        <a href="component_tabs.html">item 1 </a>
                    </li>
                    <li>
                        <a href="component_accordion.html">item 2  </a>
                    </li>
                </ul>
            </div>

            <div class="submenu" id="forms">
                <div class="menu-title">
                    <h3>Forms</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#forms">
                    <li>
                        <a href="form_bootstrap_basic.html">Basic </a>
                    </li>
                    <li>
                        <a href="form_input_group_basic.html">Input Group </a>
                    </li>
                    <li>
                        <a href="form_layouts.html">Layouts </a>
                    </li>
                    <li>
                        <a href="form_validation.html">Validation </a>
                    </li>
                    <li>
                        <a href="form_input_mask.html">Input Mask </a>
                    </li>
                    <li>
                        <a href="form_bootstrap_select.html">Bootstrap Select </a>
                    </li>
                    <li>
                        <a href="form_select2.html">Select2 </a>
                    </li>
                    <li>
                        <a href="form_bootstrap_touchspin.html">TouchSpin </a>
                    </li>
                    <li>
                        <a href="form_maxlength.html">Maxlength </a>
                    </li>
                    <li>
                        <a href="form_checkbox_radio.html">Checkbox &amp; Radio </a>
                    </li>
                    <li>
                        <a href="form_switches.html">Switches </a>
                    </li>
                    <li>
                        <a href="form_wizard.html">Wizards </a>
                    </li>
                    <li>
                        <a href="form_fileupload.html">File Upload </a>
                    </li>
                    <li>
                        <a href="form_quill.html">Quill Editor </a>
                    </li>
                    <li>
                        <a href="form_markdown.html">Markdown Editor </a>
                    </li>
                    <li>
                        <a href="form_date_range_picker.html">Date &amp; Range Picker </a>
                    </li>
                    <li>
                        <a href="form_clipboard.html">Clipboard </a>
                    </li>
                    <li>
                        <a href="form_typeahead.html">Typeahead </a>
                    </li>
                </ul>
            </div>

            <div class="submenu" id="tables">
                <div class="menu-title">
                    <h3>Tables</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#tables">
                    <li>
                        <a href="table_basic.html">Basic </a>
                    </li>
                    <li class="sub-submenu">
                        <a role="menu" class="collapsed" data-toggle="collapse" data-target="#datatables" aria-expanded="true"><div>Datatables</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul id="datatables" class="collapse show" data-parent="#compact_submenuSidebar">
                            <li>
                                <a href="table_dt_basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="table_dt_striped_table.html"> Striped Table </a>
                            </li>
                            <li>
                                <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                            </li>
                            <li>
                                <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                            </li>
                            <li>
                                <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                            </li>
                            <li>
                                <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                            </li>
                            <li>
                                <a href="table_dt_custom.html"> Custom </a>
                            </li>
                            <li>
                                <a href="table_dt_range_search.html"> Range Search </a>
                            </li>
                            <li>
                                <a href="table_dt_html5.html"> HTML5 Export </a>
                            </li>
                            <li>
                                <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                            </li>
                            <li>
                                <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="submenu" id="more">
                <div class="menu-title">
                    <h3>Extra Elements</h3>
                </div>
                <ul class="submenu-list" data-parent-element="#more">
                    <li>
                        <a href="fonticons.html">Font Icons </a>
                    </li>

                    <li class="sub-submenu">
                        <a role="menu" class="collapsed" data-toggle="collapse" data-target="#users" aria-expanded="false"><div> Users</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        <ul id="users" class="collapse" data-parent="#compact_submenuSidebar">
                            <li>
                                <a href="user_profile.html">Profile </a>
                            </li>
                            <li>
                                <a href="user_account_setting.html">Account Settings </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="dragndrop_dragula.html">Drag and Drop </a>
                    </li>
                    <li>
                        <a href="charts_apex.html">Charts </a>
                    </li>
                    <li>
                        <a href="map_jvector.html">Maps </a>
                    </li>

                    <li class="sub-submenu">
                        <a role="menu" class="collapsed" data-toggle="collapse" data-target="#errors" aria-expanded="false"><div> Errors</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        <ul id="errors" class="collapse" data-parent="#compact_submenuSidebar">
                            <li>
                                <a href="pages_error404.html" target="_blank"> 404 </a>
                            </li>
                            <li>
                                <a href="pages_error500.html" target="_blank"> 500 </a>
                            </li>
                            <li>
                                <a href="pages_error503.html" target="_blank"> 503 </a>
                            </li>
                            <li>
                                <a href="pages_maintenence.html" target="_blank"> Maintanence </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-submenu">
                        <a role="menu" class="collapsed" data-toggle="collapse" data-target="#pages" aria-expanded="false"><div> Pages</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        <ul id="pages" class="collapse" data-parent="#compact_submenuSidebar">
                            <li>
                                <a href="pages_helpdesk.html">Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html">Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_faq.html">FAQ </a>
                            </li>
                            <li>
                                <a href="pages_faq2.html">FAQ 2 </a>
                            </li>
                            <li>
                                <a href="pages_privacy.html">Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon.html" target="_blank">Coming Soon </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-submenu">
                        <a role="menu" class="collapsed" data-toggle="collapse" data-target="#auth" aria-expanded="false"><div> Authentication</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        <ul id="auth" class="collapse" data-parent="#compact_submenuSidebar">
                            <li>
                                <a href="auth_login.html" target="_blank"> Login </a>
                            </li>
                            <li>
                                <a href="auth_login_boxed.html" target="_blank"> Login Boxed </a>
                            </li>
                            <li>
                                <a href="auth_register.html" target="_blank"> Register </a>
                            </li>
                            <li>
                                <a href="auth_register_boxed.html" target="_blank"> Register Boxed </a>
                            </li>
                            <li>
                                <a href="auth_lockscreen.html" target="_blank"> Unlock </a>
                            </li>
                            <li>
                                <a href="auth_lockscreen_boxed.html" target="_blank"> Unlock Boxed </a>
                            </li>
                            <li>
                                <a href="auth_pass_recovery.html" target="_blank"> Recover ID </a>
                            </li>
                            <li>
                                <a href="auth_pass_recovery_boxed.html" target="_blank"> Recover ID Boxed </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="sub-submenu">
                        <a role="menu" class="collapsed" data-toggle="collapse" data-target="#starter-kit" aria-expanded="false"><div>Starter Kit</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                        <ul id="starter-kit" class="collapse" data-parent="#compact_submenuSidebar">
                            <li>
                                <a href="starter_kit_blank_page.html"> Blank Page </a>
                            </li>
                            <li>
                                <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                            </li>
                            <li>
                                <a href="starter_kit_boxed.html"> Boxed </a>
                            </li>
                            <li>
                                <a href="starter_kit_single_click_menu.html">Single Click Menu</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <!--  END SIDEBAR  -->