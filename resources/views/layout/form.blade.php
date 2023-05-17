<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Smarthr - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Form Input Groups - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoIcon/favicon.png">

<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<link rel="stylesheet" href="asset/css/font-awesome.min.css">

<link rel="stylesheet" href="asset/css/line-awesome.min.css">

<link rel="stylesheet" href="asset/css/style.css">
<link rel="stylesheet" href="asset/css/videoStyle.css">

<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left" style="background-color: white">
<a href="{{('/')}}" class="logo">
<img src="assets/images/logoIcon/logo.png" width="50%" height="50%" alt="">
</a>
</div>

<a id="toggle_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
</div>

<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Employees</span>
</li>
<li class="submenu">
<a href="#" class="noti-dot"><i class="la la-user"></i> <span>Application Form</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="{{url('humcareform')}}">Humucare Job Application</a></li>
<li><a href="{{url('humcarecleanform')}}">Humucare Cleaning Application</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

@yield('content')
</div>


<script src="asset/js/jquery-3.5.1.min.js"></script>

<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

<script src="asset/js/jquery.slimscroll.min.js"></script>

<script src="asset/js/app.js"></script>
</body>
</html>
