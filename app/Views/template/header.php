<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title></title>

</head>
<body>
	<?php 
		//$uri = service('uri');
	?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php //if (session()->get('isLoggedIn')): ?>
		    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				      <li class="nav-item <? //= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
				        <a class="nav-link" href="/profile">Profile</a>
				      </li>
				     </ul>
				     <ul class="navbar-nav my-2 my-lg-0">
				      <li class="nav-item">
				        <a class="nav-link" href="/logout">logout</a>
				      </li>
				    </ul>
		    <?php // else: ?>
		    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				      <li class="nav-item <? //= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
				        <a class="nav-link" href="/">Login</a>
				      </li>
				      <li class="nav-item <? //= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
				        <a class="nav-link" href="/register">Register</a>
				      </li>
				    </ul>
			<?php // endif?>
		</div>
	</div>
</nav>
 -->

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lear IT Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>