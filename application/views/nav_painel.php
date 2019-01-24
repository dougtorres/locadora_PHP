<!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title; ?></title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/reset.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style-dashboard.css'); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</head>
  <body >

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Esconder menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">Jr Locadora</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
        
            <li><a><?php print_r($username); ?></a></li>
            <li><a href="#">Minha Conta</a></li>
            <li><a href="<?php echo base_url('login/login/logout');?>">Sair</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
