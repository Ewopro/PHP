<?php session_start (); include ("header.php");  ?>
<?php 
if (!isset($_SESSION['Username'])) {
	header('Location: formulaire.php');
}
?>



<html>
	<head>
	        <meta charset="utf-8" />
	        <link rel="stylesheet" href="formulaire.css"/>
			<title>Formulaire</title>
	</head>

	<body>
	<div class="container">
		<p>
			coucou
		</p>
	</div>
	</body>
</html>
