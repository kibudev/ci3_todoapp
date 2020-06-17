<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todo List</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  <!-- Open Sans -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" crossorigin="anonymous"></script>

  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('assets')['css'] ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('assets')['css'] ?>/custom.css">

</head>
<body>

<header>
	<a href="<?php echo site_url("app/logout") ?>"><i class="fa fa-sign-out"></i> Logout</a>
</header>
