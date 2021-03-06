<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="<?= base_url('img/logo_favicon.png') ?>">

	    <title>Colores Painting Company</title>

	    <!-- Bootstrap core CSS -->
	    <!-- <link rel="stylesheet" href="<?php echo site_url('css/DataTables/bootstrap.css'); ?>"> -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- DataTables -->
    	<link rel="stylesheet" href="<?php echo site_url('css/DataTables/dataTables.bootstrap4.min.css'); ?>">
	    <!-- Custom styles for this template -->
	    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat" rel="stylesheet">

	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	    <link href="<?php echo base_url("css/style.css") ?>" rel="stylesheet">
	  </head>


	<body>
    	<header>


			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom shadow-sm  px-md-4 ">
				<div class="container pt-1 pb-1">
    				<a class="navbar-brand p-1" href="<?= base_url() ?>">
				    	<img src="<?= base_url("img/logo-web-343x66.jpg")?>"  height="50" alt="">
				  	</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav justify-content-end w-100">
					    	<li class="nav-item">
						        <a class="nav-link text-uppercase my-link2  px-3 text-dark" href="<?= base_url('projects') ?>">Projects</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link text-uppercase my-link2  px-3 text-dark" href="<?= base_url('news') ?>">News</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link text-uppercase my-link2 px-3 text-dark" href="<?= base_url('categories') ?>">Categories</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link text-uppercase my-link2 px-3 text-dark" href="<?= base_url('sessions/logout') ?>">Logout</a>
						    </li>

					    </ul>



					</div>
				</div>
			</nav>
		</header>