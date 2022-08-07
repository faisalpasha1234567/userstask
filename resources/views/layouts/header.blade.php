
                   <aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" >
                            <div class="row">
                            	<div class="col-sm-2">
                            		<img src="{{ asset('assets3/sn2.png')}}" alt="SmartAdmin WebApp" aria-roledescription="logo" style="width: 50px; background: white;margin-left: -14px;">
                            		
                            	</div>
                            	<div class="col-sm-5">
                            		<span class="page-logo-text mr-1" style="font-size: 13px;font-weight: bold;margin-left: -13px;width: 133px;margin-top: 8px;text-align: center;"></span>
                            	</div>
                            	<div class="col-sm-2">
                            	<!--	<img src="../uploads/" alt="SmartAdmin WebApp" aria-roledescription="logo" style="width: 50px; height: 40px;"> -->
                            		<span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            	</div>
                            </div>
                            
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
                        <div class="nav-filter">
                            <div class="position-relative">
                                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                    <i class="fal fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info-card">
                           <!-- <img src="" class="profile-image rounded-circle" alt="Dr. Codex Lantern">-->
                            <div class="info-card-text">
                                <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        
                                    </span>
                                </a>
                                <span class="d-inline-block text-truncate text-truncate-sm"></span>
                            </div>
                           <!-- <img src="{{-- asset('assets3/img/card-backgrounds/cover-2-lg.png') --}}" class="cover" alt="cover">-->
                          
                           
                            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                                <i class="fal fa-angle-down"></i>
                            </a>
                        </div>
                        
                        <ul id="js-nav-menu" class="nav-menu">
                           
                            <li class="dash_open">
                                <a href="#" title="Application Intel" data-filter-tags="Dashboard">
                                    <i class="fal fa-tachometer"></i>
                                    <span class="nav-link-text" data-i18n="nav.application_intel">Dashboard</span>
                                </a>
                                <ul>
                                    <li class="dash">
                                        <a href="{{ route('dashboard')}}" title="Dashboard" data-filter-tags="dashboard">
                                            <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
                                        </a>
                                    </li>
                                    <!--
                                    <li class="home">
                                        <a href="homepage.php" title="Dashboard" data-filter-tags="homepage">
                                            <span class="nav-link-text" data-i18n="nav.dashboard">Homepage</span>
                                        </a>
                                    </li>
                                    -->
                                </ul>
                            </li>
                            
                            <li class="company_open">
                              
									<a href="#" title="Company Setup" data-filter-tags="Company Setup">
										<i class="fal fa-university"></i>
										<span class="nav-link-text" data-i18n="nav.company_setup">Tasks</span>
									</a>
							
                                <ul>
                                
									<li class="comp">
										<a href="{{ route('create_task_add')}}" title="Create New Company" data-filter-tags="Company Info">
										   <i class="fal fa-circle"></i>
											<span class="nav-link-text" data-i18n="nav.company_info">Add Task</span>
										</a>
									</li>
								
									<li class="depart">
										<a href="{{ route('tasks_list')}}" title="Create Company Department" data-filter-tags="Department">
											<i class="fal fa-circle"></i>
											<span class="nav-link-text" data-i18n="nav.department">Tasks List</span>
										</a>
									</li>
								
								</ul>
									</li>
								
                               
                        </ul>          
                        <div class="filter-message js-filter-message bg-success-600"></div>
                    </nav>
                    <!-- END PRIMARY NAVIGATION -->
                    <!-- NAV FOOTER -->
                    <div class="nav-footer shadow-top">
                        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                            <i class="ni ni-chevron-right"></i>
                            <i class="ni ni-chevron-right"></i>
                        </a>
                        <ul class="list-table m-auto nav-footer-buttons">
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                                    <i class="fal fa-comments"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                                    <i class="fal fa-life-ring"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                                    <i class="fal fa-phone"></i>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- END NAV FOOTER -->
                </aside>
                
               <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <header class="page-header" role="banner">
                        <!-- we need this logo when user switches to nav-function-top -->
                        <div class="page-logo">
                            <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                                <img src="{{ asset('assets3/sn2.png')}}" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                <span class="page-logo-text mr-1"> Sprint Works Private Limited</span>
                                <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                                <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                            </a>
                        </div>
                        <!-- DOC: nav menu layout change shortcut -->
                        <div class="hidden-md-down dropdown-icon-menu position-relative">
                           
                            <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                                <i class="ni ni-menu"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                        <i class="ni ni-minify-nav"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                        <i class="ni ni-lock-nav"></i>
                                    </a>
                                </li>
                            </ul>
                          @if(Auth::user()->is_admin=='no')   
                            {{ $comp_logo->name}} <br> <b>(Developed by Sprint Works Private Limited)</b>
                          @endif    
                        </div>
                        
                        
                        <style>
							.slider-wrapper{
								font-size: 16px;
								color: #aaa;
								font-weight: bold;
								text-transform: uppercase;
								display: flex;
								align-items: center;
								justify-content: center;
							}
							.slider{
								height: 20px;
								padding-left: 0px;
								overflow: hidden;
							}
							.slider div{
								color: #fff;
								height: 50px;
								margin-bottom: 50px;
								padding: 2px 15px;
								text-align: center;
								box-sizing: border-box;
							}
							.slider-text1{
								/*background: lightgreen;*/
								animation: slide 4s linear infinite;
							}
							.slider-text2{
								/*background: skyblue;*/
							}
							.slider-text3{
								/*background: lightcoral;*/
								
							}
							@keyframes slide{
								0% {margin-top: -300px;}
								5% {margin-top: -200px;}
								33% {margin-top: -200px;}
								38% {margin-top: -100px;}
								66% {margin-top: -100px;}
								71% {margin-top: 0px;}
								100% {margin-top: 0px;}
							}
						</style>
                        
                        
                        
                        
                        <!-- DOC: mobile button appears during mobile width -->
                        <div class="hidden-lg-up">
                            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                                <i class="ni ni-menu"></i>
                            </a>
                        </div>
                        <div class="ml-auto d-flex">
                            <!-- activate app search icon (mobile) -->
                            <div class="hidden-sm-up">
                                <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                    <i class="fal fa-search"></i>
                                </a>
                            </div>
                            <!-- app settings -->
                            <div class="hidden-md-down">
                                <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                                    <i class="fal fa-cog"></i>
                                </a>
                            </div>
                            <!-- app shortcuts -->
                            <div>
                                <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                    <img src="{{ asset('assets3/user.png')}}" class="profile-image rounded-circle" alt="">
                                    <!-- you can also add username next to the avatar with the codes below:
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="{{ asset('assets3/user.png')}}" class="rounded-circle profile-image" alt="">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg"></div>
                                                <span class="text-truncate text-truncate-md opacity-80"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-reset">
                                        <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                    </a>
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                        <span data-i18n="drpdwn.settings">Settings</span>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                        <i class="float-right text-muted fw-n">F11</i>
                                    </a>
                                    <a href="#" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Print</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
                                    <div class="dropdown-multilevel dropdown-multilevel-left">
                                        <div class="dropdown-item">
                                            Language
                                        </div>
                                        <div class="dropdown-menu">
                                            <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
                                            <a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
                                            <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
                                            <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
                                            <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
                                            <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
               <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="fa fa-sign-out fa-fw"></i>
                            
                             Logout</a></li>

                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>