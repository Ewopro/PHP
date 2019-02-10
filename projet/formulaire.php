
<?php
	include ("header.php");
	$logged =false;

	if (isset($_POST['send'])){
		$logged =true;
	}
    if ( isset($_POST['Username']) && isset($_POST['pwd']) && $_POST ['Username'] == "admin"  && $_POST['pwd'] == "admin" ) {
        echo $_POST ['Username'] ."-". $_POST ['pwd'];
        session_start ();
        $_SESSION['Username'] = $_POST['Username'];
        header('Location: login.php');
 		exit();	
 	}
?>

<html>
	 <head>
          <meta charset="utf-8" />
          <link rel="stylesheet" href="bootstrap.min.css"/>
          <link rel="stylesheet" href="bootstrap.min.js"/>
          <link rel="stylesheet" href="popper.min.js"/>
          <link rel="stylesheet" href="formulaire.css"/>
      <title>Formulaire</title>
    </head>

	<body>
	<div class="container">
		<form action="" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Username" placeholder="Entre votre Identifiant" >
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
			  </div>
			  <?php 
				if ($logged) {
					echo '<div class="alert alert-danger" role="alert">
  								Merci d\'utiliser le compte admin !
					</div>';
				}
				?>
			  <button type="submit" name="send" class="btn btn-primary">Submit</button>
		</form>
	</div>
	</body>
</html>
