<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="{{ asset('admin/img/favicon.144x144.png') }}" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="{{ asset('admin/img/favicon.114x114.png') }}" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="{{ asset('admin/img/favicon.72x72.png') }}" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="{{ asset('admin/img/favicon.57x57.png') }}" rel="apple-touch-icon" type="image/png">
	<link href="{{ asset('admin/img/favicon.png') }}" rel="icon" type="image/png">
	<link href="{{ asset('admin/img/favicon.ico') }}" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="{{ asset('admin/css/lib/lobipanel/lobipanel.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/separate/vendor/lobipanel.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/lib/jqueryui/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/separate/pages/widgets.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/lib/font-awesome/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/lib/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>
<body class="with-side-menu control-panel control-panel-compact">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="{{ asset('admin/img/logo-2.png') }}" alt="">
	            <img class="hidden-lg-down" src="{{ asset('admin/img/logo-2-mob.png') }}" alt="">
	        </a>

	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>

	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-notification notif">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Notifications
	                                <span class="label label-pill label-danger">4</span>
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Morgan</a> was bothering about something
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-2.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-3.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-4.jpg" alt="">
	                                    </div>
	                                    <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="dropdown dropdown-notification messages">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-messages"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-mail"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
	                            <div class="dropdown-menu-messages-header">
	                                <ul class="nav" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active"
	                                           data-toggle="tab"
	                                           href="#tab-incoming"
	                                           role="tab">
	                                            Inbox
	                                            <span class="label label-pill label-danger">8</span>
	                                        </a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link"
	                                           data-toggle="tab"
	                                           href="#tab-outgoing"
	                                           role="tab">Outbox</a>
	                                    </li>
	                                </ul>
	                                <!--<button type="button" class="create">
	                                    <i class="font-icon font-icon-pen-square"></i>
	                                </button>-->
	                            </div>
	                            <div class="tab-content">
	                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="{{ asset('admin/img/avatar-2-64.png') }}" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="{{ asset('admin/img/avatar-2-64.png') }}" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something...</span>
	                                        </a>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="tab-outgoing" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="{{ asset('admin/img/avatar-2-64.png') }}" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="{{ asset('admin/img/avatar-2-64.png') }}" alt=""></span>
	                                            <span class="mess-item-name">Christian Burtons</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="dropdown dropdown-lang">
	                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <span class="flag-icon flag-icon-us"></span>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right">
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ru"></span>Русский</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de"></span>Deutsch</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-it"></span>Italiano</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es"></span>Español</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pl"></span>Polski</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-li"></span>Lietuviu</a>
	                            </div>
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span>Français</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-by"></span>Беларускi</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ua"></span>Українська</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-cz"></span>Česky</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ch"></span>中國</a>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="{{ asset('admin/img/avatar-2-64.png') }}" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>

	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->

	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <div class="dropdown dropdown-typical">
	                            <div class="dropdown-menu" aria-labelledby="dd-header-sales">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-cogwheel"></span>
	                                <span class="lbl">Marketing automation</span>
	                            </a>

	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <a class="dropdown-item" href="#">Current Search</a>
	                                <a class="dropdown-item" href="#">Search for Issues</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Recent issues</div>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                <div class="dropdown-more">
	                                    <div class="dropdown-more-caption padding">more...</div>
	                                    <div class="dropdown-more-sub">
	                                        <div class="dropdown-more-sub-in">
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Import Issues from CSV</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Filters</div>
	                                <a class="dropdown-item" href="#">My Open Issues</a>
	                                <a class="dropdown-item" href="#">Reported by Me</a>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Manage filters</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Timesheet</div>
	                                <a class="dropdown-item" href="#">Subscribtions</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-social" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-share"></span>
	                                <span class="lbl">Social media</span>
	                            </a>

	                            <div class="dropdown-menu" aria-labelledby="dd-header-social">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a href="#" class="dropdown-toggle no-arr">
	                                <span class="font-icon font-icon-page"></span>
	                                <span class="lbl">Projects</span>
	                                <span class="label label-pill label-danger">35</span>
	                            </a>
	                        </div>

	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-form-builder" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-pencil"></span>
	                                <span class="lbl">Form builder</span>
	                            </a>

	                            <div class="dropdown-menu" aria-labelledby="dd-header-form-builder">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown">
	                            <button class="btn btn-rounded dropdown-toggle" id="dd-header-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Add
	                            </button>
	                            <div class="dropdown-menu" aria-labelledby="dd-header-add">
	                                <a class="dropdown-item" href="#">Quant and Verbal</a>
	                                <a class="dropdown-item" href="#">Real Gmat Test</a>
	                                <a class="dropdown-item" href="#">Prep Official App</a>
	                                <a class="dropdown-item" href="#">CATprer Test</a>
	                                <a class="dropdown-item" href="#">Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="help-dropdown">
	                            <button type="button">
	                                <i class="font-icon font-icon-help"></i>
	                            </button>
	                            <div class="help-dropdown-popup">
	                                <div class="help-dropdown-popup-side">
	                                    <ul>
	                                        <li><a href="#">Getting Started</a></li>
	                                        <li><a href="#" class="active">Creating a new project</a></li>
	                                        <li><a href="#">Adding customers</a></li>
	                                        <li><a href="#">Settings</a></li>
	                                        <li><a href="#">Importing data</a></li>
	                                        <li><a href="#">Exporting data</a></li>
	                                    </ul>
	                                </div>
	                                <div class="help-dropdown-popup-cont">
	                                    <div class="help-dropdown-popup-cont-in">
	                                        <div class="jscroll">
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div><!--.help-dropdown-->
	                        <a class="btn btn-nav btn-rounded btn-inline btn-danger-outline" href="http://themeforest.net/item/startui-premium-bootstrap-4-admin-dashboard-template/15228250?ref=themesanytime">
	                            Buy Theme
	                        </a>
	                        <div class="site-header-search-container">
	                            <form class="site-header-search closed">
	                                <input type="text" placeholder="Search"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"></span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Dashboard</span>
	            </span>
	            <ul>
	                <li><a href="index.html"><span class="lbl">Default</span><span class="label label-custom label-pill label-danger">new</span></a></li>
	                <li><a href="dashboard-top-menu.html"><span class="lbl">Top menu</span></a></li>
	                <li><a href="side-menu-compact-full.html"><span class="lbl">Compact menu</span></a></li>
	                <li><a href="dashboard-addl-menu.html"><span class="lbl">Submenu</span></a></li>
	                <li><a href="side-menu-avatar.html"><span class="lbl">Menu with avatar</span></a></li>
	                <li><a href="side-menu-avatar.html"><span class="lbl">Compact menu with avatar</span></a></li>
	                <li><a href="dark-menu.html"><span class="lbl">Dark menu</span></a></li>
	                <li><a href="dark-menu-blue.html"><span class="lbl">Blue dark menu</span></a></li>
	                <li><a href="dark-menu-green.html"><span class="lbl">Green dark menu</span></a></li>
	                <li><a href="dark-menu-green-compact.html"><span class="lbl">Green compact dark menu</span></a></li>
	                <li><a href="dark-menu-ultramarine.html"><span class="lbl">Ultramarine dark menu</span></a></li>
	                <li><a href="asphalt-menu.html"><span class="lbl">Asphalt top menu</span></a></li>
	                <li><a href="side-menu-big-icon.html"><span class="lbl">Big menu</span></a></li>
	            </ul>
	        </li>
	        <li class="brown with-sub">
	            <span>
	                <i class="font-icon glyphicon glyphicon-cog"></i>
	                <span class="lbl">Setup</span>
	            </span>
	            <ul>
	                <li><a href="{{ route('GeneralSettings') }}"><span class="lbl">General Settings</span></a></li>
	                <li><a href="{{ route('DormitoryList') }}"><span class="lbl">Dormitories</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Promotions</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Mail/SMS</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Language</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Administrator</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Pools</span></a></li>
	            </ul>
	        </li>
            <li class="purple with-sub">
	            <span>
	                <i class="font-icon fa fa-users"></i>
	                <span class="lbl">Students</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>

            <li class="red with-sub">
	            <span>
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl">Staff</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>
            <li class="green with-sub">
	            <span>
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Performance</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>
            <li class="blue-dirty with-sub">
	            <span>
	                <i class="font-icon font-icon-post"></i>
	                <span class="lbl">Notice</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>
            <li class="magenta with-sub">
	            <span>
	                <i class="font-icon glyphicon glyphicon-tint"></i>
	                <span class="lbl">Admission</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>
            <li class="brown with-sub">
	            <span>
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Accounts</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>

            <li class="green with-sub">
	            <span>
	                <i class="font-icon fa fa-book"></i>
	                <span class="lbl">Library</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>
            <li class="brown with-sub">
	            <span>
	                <i class="font-icon font-icon-view-cascade"></i>
	                <span class="lbl">Others</span>
	            </span>
	            <ul>
	                <li><a href="theme-side-ebony-clay.html"><span class="lbl">Ebony Clay</span></a></li>
	                <li><a href="theme-side-madison-caribbean.html"><span class="lbl">Madison Caribbean</span></a></li>
	            </ul>
	        </li>
	        <li class="purple with-sub">
	            <span>
	                <i class="font-icon font-icon-comments active"></i>
	                <span class="lbl">Messages</span>
	            </span>
	            <ul>
	                <li><a href="messenger.html"><span class="lbl">Messenger</span></a></li>
	                <li><a href="chat.html"><span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span></a></li>
	                <li><a href="chat-write.html"><span class="lbl">Write Message</span></a></li>
	                <li><a href="chat-index.html"><span class="lbl">Select User</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="mail.html">
	                <i class="font-icon glyphicon glyphicon-send"></i>
	                <span class="lbl">Mail</span>
	            </a>
	        </li>
	        <li class="gold with-sub">
	            <span>
	                <i class="font-icon font-icon-edit"></i>
	                <span class="lbl">Forms</span>
	            </span>
	            <ul>
	                <li><a href="ui-form.html"><span class="lbl">Basic Inputs</span></a></li>
	                <li><a href="ui-buttons.html"><span class="lbl">Buttons</span></a></li>
	                <li><a href="ui-select.html"><span class="lbl">Select &amp; Tags</span></a></li>
	                <li><a href="ui-checkboxes.html"><span class="lbl">Checkboxes &amp; Radios</span></a></li>
	                <li><a href="ui-form-validation.html"><span class="lbl">Validation</span></a></li>
	                <li><a href="typeahead.html"><span class="lbl">Typeahead</span></a></li>
	                <li><a href="steps.html"><span class="lbl">Steps</span></a></li>
	                <li><a href="ui-form-input-mask.html"><span class="lbl">Input Mask</span></a></li>
	                <li><a href="form-flex-labels.html"><span class="lbl">Flex Labels</span></a></li>
	                <li><a href="ui-form-extras.html"><span class="lbl">Extras</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="tables.html">
	                <span class="glyphicon glyphicon-th"></span>
	                <span class="lbl">Tables</span>
	            </a>
	        </li>
	        <li class="magenta with-sub">
	            <span>
	                <span class="glyphicon glyphicon-list-alt"></span>
	                <span class="lbl">Datatables</span>
	            </span>
	            <ul>
	                <a href="datatables-net.html"><span class="lbl">Datatables.net</span></a></li>
	                <a href="bootstrap-datatables.html"><span class="lbl">Bootstrap Table</span></a></li>

	                <!--<li><a href="datatables.html"><span class="lbl">Default</span></a></li>
	                <li><a href="datatables-fixed-columns.html"><span class="lbl">Fixed Columns</span></a></li>
	                <li><a href="datatables-reorder-rows.html"><span class="lbl">Reorder Rows</span></a></li>
	                <li><a href="datatables-reorder-columns.html"><span class="lbl">Reorder Columns</span></a></li>
	                <li><a href="datatables-resize-columns.html"><span class="lbl">Resize Columns</span></a></li>
	                <li><a href="datatables-mobile.html"><span class="lbl">Mobile</span></a></li>
	                <li><a href="datatables-filter-control.html"><span class="lbl">Filters</span></a></li>-->
	            </ul>
	        </li>
	        <li class="green with-sub">
	            <span>
	                <i class="font-icon font-icon-widget"></i>
	                <span class="lbl">Components</span>
	            </span>
	            <ul>
	                <li><a href="widgets.html"><span class="lbl">Widgets</span></a></li>
	                <li><a href="elements.html"><span class="lbl">Bootstrap UI</span></a></li>
	                <li><a href="ui-datepicker.html"><span class="lbl">Date and Time Pickers</span></a></li>
	                <li><a href="multipicker.html"><span class="lbl">Multi Picker</span></a></li>
	                <li><a href="form-steps.html"><span class="lbl">Form Steps</span></a></li>
	                <li><a href="components-upload.html"><span class="lbl">Upload</span></a></li>
	                <li><a href="sweet-alerts.html"><span class="lbl">SweetAlert</span></a></li>
	                <li><a href="color-picker.html"><span class="lbl">Color Picker</span></a></li>
	                <li><a href="tabs.html"><span class="lbl">Tabs</span></a></li>
	                <li><a href="panels.html"><span class="lbl">Panels</span></a></li>
	                <li><a href="notifications.html"><span class="lbl">Notifications</span></a></li>
	                <li><a href="range-slider.html"><span class="lbl">Sliders</span></a></li>
	                <li><a href="editor-summernote.html"><span class="lbl">Editors</span></a></li>
	                <li><a href="nestable.html"><span class="lbl">Nestable</span></a></li>
	                <li><a href="blockui.html"><span class="lbl">BlockUI</span></a></li>
	                <li><a href="alerts.html"><span class="lbl">Alerts</span></a></li>
	                <li><a href="player.html"><span class="lbl">Players</span></a></li>
	            </ul>
	        </li>
	     <!--   <li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-speed"></i>
	                <span class="lbl">Performance</span>
	            </a>
	        </li>-->
	        <li class="pink-red">
	            <a href="activity.html">
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Activity</span>
	            </a>
	        </li>
	        <li class="blue with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Profile</span>
	            </span>
	            <ul>
	                <li><a href="profile.html"><span class="lbl">Version 1</span></a></li>
	                <li><a href="profile-2.html"><span class="lbl">Version 2</span></a></li>
	            </ul>
	        </li>
	        <li class="orange-red with-sub">
	            <span>
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </span>
	            <ul>
	                <li><a href="documentation.html"><span class="lbl">Docs (example)</span></a></li>
	                <li><a href="faq.html"><span class="lbl">FAQ Simple</span></a></li>
	                <li><a href="faq-search.html"><span class="lbl">FAQ Search</span></a></li>
	            </ul>
	        </li>
	        <li class="red">
	            <a href="contacts.html" class="label-right">
	                <i class="font-icon font-icon-contacts"></i>
	                <span class="lbl">Contacts</span>
	                <span class="label label-custom label-pill label-danger">35</span>
	            </a>
	        </li>
	        <li class="magenta opened">
	            <a href="scheduler.html">
	                <i class="font-icon font-icon-calend"></i>
	                <span class="lbl">Calendar</span>
	            </a>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <span class="glyphicon glyphicon-duplicate"></span>
	                <span class="lbl">Pages</span>
	            </span>
	            <ul>
	                <li><a href="email_templates.html"><span class="lbl">Email Templates</span></a></li>
	                <li><a href="blank.html"><span class="lbl">Blank</span></a></li>
	                <li><a href="empty.html"><span class="lbl">Empty List</span></a></li>
	                <li><a href="prices.html"><span class="lbl">Prices</span></a></li>
	                <li><a href="typography.html"><span class="lbl">Typography</span></a></li>
	                <li><a href="sign-in.html"><span class="lbl">Login</span></a></li>
	                <li><a href="sign-up.html"><span class="lbl">Register</span></a></li>
	                <li><a href="reset-password.html"><span class="lbl">Reset Password</span></a></li>
	                <li><a href="new-password.html"><span class="lbl">New Password</span></a></li>
	                <li><a href="error-404.html"><span class="lbl">Error 404</span></a></li>
	                <li><a href="error-500.html"><span class="lbl">Error 500</span></a></li>
	                <li><a href="cards.html"><span class="lbl">Cards</span></a></li>
	                <li><a href="avatars.html"><span class="lbl">Avatars</span></a></li>
	                <li><a href="ribbons.html"><span class="lbl">Ribbons</span></a></li>
	                <li><a href="icons-startui.html"><span class="lbl">Icons</span></a></li>
	                <li><a href="invoice.html"><span class="lbl">Invoice</span></a></li>
	                <li><a href="helpers.html"><span class="lbl">Helpers</span></a></li>
	            </ul>
	        </li>
	        <li class="blue-dirty">
	            <a href="list-tasks.html">
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Tasks</span>
	            </a>
	        </li>
	        <li class="aquamarine">
	            <a href="contacts-page.html">
	                <i class="font-icon font-icon-mail"></i>
	                <span class="lbl">Contact form</span>
	            </a>
	        </li>
	        <li class="blue">
	            <a href="files.html">
	                <i class="font-icon glyphicon glyphicon-paperclip"></i>
	                <span class="lbl">File Manager</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="gallery.html">
	                <i class="font-icon font-icon-picture-2"></i>
	                <span class="lbl">Gallery</span>
	            </a>
	        </li>
	        <li class="red">
	            <a href="project.html">
	                <i class="font-icon font-icon-case-2"></i>
	                <span class="lbl">Project</span>
	            </a>
	        </li>
	        <li class="brown with-sub">
	            <span>
	                <span class="font-icon font-icon-chart"></span>
	                <span class="lbl">Charts</span>
	            </span>
	            <ul>
	                <li><a href="charts-c3js.html"><span class="lbl">C3.js</span></a></li>
	                <li><a href="charts-peity.html"><span class="lbl">Peity</span></a></li>
	                <li><a href="charts-plottable.html"><span class="lbl">Plottable.js</span></a></li>
	            </ul>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <span class="font-icon font-icon-burger"></span>
	                <span class="lbl">Nested Menu</span>
	            </span>
	            <ul>
	                <li><a href="#"><span class="lbl">Level 1</span></a></li>
	                <li><a href="#"><span class="lbl">Level 1</span></a></li>
	                <li class="with-sub">
	                    <span>
	                        <span class="lbl">Level 2</span>
	                    </span>
	                    <ul>
	                        <li><a href="#"><span class="lbl">Level 2</span></a></li>
	                        <li><a href="#"><span class="lbl">Level 2</span></a></li>
	                        <li class="with-sub">
	                            <span>
	                                <span class="lbl">Level 3</span>
	                            </span>
	                            <ul>
	                                <li><a href="#"><span class="lbl">Level 3</span></a></li>
	                                <li><a href="#"><span class="lbl">Level 3</span></a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	        </li>
	    </ul>

	    <section>
	        <header class="side-menu-title">Tags</header>
	        <ul class="side-menu-list">
	            <li>
	                <a href="#">
	                    <i class="tag-color green"></i>
	                    <span class="lbl">Website</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color grey-blue"></i>
	                    <span class="lbl">Bugs/Errors</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color red"></i>
	                    <span class="lbl">General Problem</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color pink"></i>
	                    <span class="lbl">Questions</span>
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="tag-color orange"></i>
	                    <span class="lbl">Ideas</span>
	                </a>
	            </li>
	        </ul>
	    </section>
	</nav><!--.side-menu-->

@yield('content')

	<div class="control-panel-container">
	    <ul>
	        <li class="tasks">
	            <div class="control-item-header">
	                <a href="#" class="icon-toggle">
	                    <span class="caret-down fa fa-caret-down"></span>
	                    <span class="icon fa fa-tasks"></span>
	                </a>
	                <span class="text">Task list</span>
	                <div class="actions">
	                    <a href="#">
	                        <span class="fa fa-refresh"></span>
	                    </a>
	                    <a href="#">
	                        <span class="fa fa-cog"></span>
	                    </a>
	                    <a href="#">
	                        <span class="fa fa-trash"></span>
	                    </a>
	                </div>
	            </div>
	            <div class="control-item-content">
	                <div class="control-item-content-text">You don't have pending tasks.</div>
	            </div>
	        </li>
	        <li class="sticky-note">
	            <div class="control-item-header">
	                <a href="#" class="icon-toggle">
	                    <span class="caret-down fa fa-caret-down"></span>
	                    <span class="icon fa fa-file"></span>
	                </a>
	                <span class="text">Sticky Note</span>
	                <div class="actions">
	                    <a href="#">
	                        <span class="fa fa-refresh"></span>
	                    </a>
	                    <a href="#">
	                        <span class="fa fa-cog"></span>
	                    </a>
	                    <a href="#">
	                        <span class="fa fa-trash"></span>
	                    </a>
	                </div>
	            </div>
	            <div class="control-item-content">
	                <div class="control-item-content-text">
	                    StartUI – a full featured, premium web application admin dashboard built with Twitter Bootstrap 4, JQuery and CSS
	                </div>
	            </div>
	        </li>
	        <li class="emails">
	            <div class="control-item-header">
	                <a href="#" class="icon-toggle">
	                    <span class="caret-down fa fa-caret-down"></span>
	                    <span class="icon fa fa-envelope"></span>
	                </a>
	                <span class="text">Recent e-mails</span>
	                <div class="actions">
	                    <a href="#">
	                        <span class="fa fa-refresh"></span>
	                    </a>
	                    <a href="#">
	                        <span class="fa fa-cog"></span>
	                    </a>
	                    <a href="#">
	                        <span class="fa fa-trash"></span>
	                    </a>
	                </div>
	            </div>
	            <div class="control-item-content">
	                <section class="control-item-actions">
	                    <a href="#" class="link">My e-mails</a>
	                    <a href="#" class="mark">Mark visible as read</a>
	                </section>
	                <ul class="control-item-lists">
	                    <li>
	                        <a href="#">
	                            <h6>Welcome to the Community!</h6>
	                            <div>Hi, welcome to the my app...</div>
	                            <div>
	                                Message text
	                            </div>
	                        </a>
	                        <a href="#" class="reply-all">Reply all</a>
	                    </li>
	                    <li>
	                        <a href="#">
	                            <h6>Welcome to the Community!</h6>
	                            <div>Hi, welcome to the my app...</div>
	                            <div>
	                                Message text
	                            </div>
	                        </a>
	                        <a href="#" class="reply-all">Reply all</a>
	                    </li>
	                    <li>
	                        <a href="#">
	                            <h6>Welcome to the Community!</h6>
	                            <div>Hi, welcome to the my app...</div>
	                            <div>
	                                Message text
	                            </div>
	                        </a>
	                        <a href="#" class="reply-all">Reply all</a>
	                    </li>
	                </ul>
	            </div>
	        </li>
	        <li class="add">
	            <div class="control-item-header">
	                <a href="#" class="icon-toggle no-caret">
	                    <span class="icon fa fa-plus"></span>
	                </a>
	            </div>
	        </li>
	    </ul>
	    <a class="control-panel-toggle">
	        <span class="fa fa-angle-double-left"></span>
	    </a>
	</div>

	<script src="{{ asset('admin/js/lib/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/lib/popper/popper.min.js') }}"></script>
	<script src="{{ asset('admin/js/lib/tether/tether.min.js') }}"></script>
	<script src="{{ asset('admin/js/lib/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/js/plugins.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/js/lib/jqueryui/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/lib/lobipanel/lobipanel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/lib/match-height/jquery.matchHeight.min.js') }}"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function() {
            $('.panel').each(function () {
                try {
                    $(this).lobiPanel({
                        sortable: true
                    }).on('dragged.lobiPanel', function(ev, lobiPanel){
                        $('.dahsboard-column').matchHeight();
                    });
                } catch (err) {}
            });

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						}
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
@yield('footer_js')
<script src="{{ asset('admin/js/app.js') }}"></script>
</body>
</html>
