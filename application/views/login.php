<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<!-- login.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('assets')['css'] ?>/login.css">

  <!-- Open Sans -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
	<!-- Gochi Hand -->
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">


</head>
<body>

  <section>

		<div class="titlePage"><i class="fa fa-paper-plane"></i><br />Todo App</div>
    <!-- Form -->
    <div class="loginForm">
			<?php if(function_exists('validation_errors')) {echo validation_errors();} ?>
			<?php if($errorLogin) {echo "Incorrect username or password";} ?>
      <form method="post" action="<?php echo site_url('welcome/login'); ?>">
        <label for="email">Email *</label>
        <input type="email" name="email" autocomplete="username">
        <label for="password">Password *</label>
        <input type="password" name="password" autocomplete="current-password">
        <button type="submit">Login</button>
      </form>

    </div>

		<div class="credentials">
			<p>Username: user@example.com</p>
			<p>Password: 12345</p>
		</div>

  </section>



</body>
</html>
