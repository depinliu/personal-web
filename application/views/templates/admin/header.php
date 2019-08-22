<!DOCTYPE html>
<html>
<head>
	<title>Devin - <?=$judul;?></title>
	<link rel="shortcut icon" href="<?=base_url();?>assets/img/logo1.png">
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
	<div class="container">
	  <a class="navbar-brand font-weight-bold" href="<?php echo base_url();?>">
	  	<img src="<?=base_url();?>assets/img/logo.png" width="35px" class="mb-1">
	 	DevinLiu
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url();?>backend_devin">Pesan <span class="sr-only">(current)</span></a>
	      </li>
	      <!-- <li class="nav-item">
	        <a class="nav-link" href="<?= base_url()?>tentang">Tentang</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url()?>coming_soon">Blog</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url()?>coming_soon">Portofolio</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url()?>kontak">Kontak</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url()?>home/download_cv">Unduh CV</a>
	      </li> -->
	    </ul>
	     <form class="form-inline ml-auto">
		    <input class="form-control mr-sm-2" type="search" placeholder="Kata Kunci" aria-label="Search">
		    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
		</form>
	  </div>
	</div>
</nav>