<?php
	// Initialize session
	session_start();
  ini_set('display_errors','Off'); 
	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
	
	switch($_SESSION['userrole']){
    case "admin":
        
        break;
    case "user":
        header('location: welcome.php');
        break;
                                   }
  	
  	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tu cuenta | <?php echo $_SESSION['username']; ?></title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<style>
        .wrapper{ 
        	width: 500px; 
        	padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
	</style>
</head>
<body>
	<main>
		<section class="container wrapper">
			<div class="page-header">
			
				<h2 class="display-5">Admin Panel</h2>
			</div>

			<a href="password_reset.php" class="btn btn-block btn-outline-warning">Cambiar contraseña</a>
			<a href="logout.php" class="btn btn-block btn-outline-danger">Cerrar Sesión</a>
		</section>
	</main>
</body>
</html>