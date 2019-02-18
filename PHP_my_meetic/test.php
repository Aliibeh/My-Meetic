<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="shortcut icon"  href="image/icon.ico" />
	<script src = "js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-nav.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>My_Meetic</title>
</head>
<body>
	<header>
	<a href="index.php"><img class="logo" src="image/logo.png" alt="logo_meet"></a>
<nav>
  <ul>
    <li><a href="#">Link 1</a></li>
    <li>
      <a href="#">Link 2</a>
      <ul class="fallback">
        <li><a href="#">Sub-Link 1</a></li>
        <li><a href="#">Sub-Link 2</a></li>
        <li><a href="#">Sub-Link 3</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Link 3</a>
      <ul class="fallback">
        <li><a href="#">Sub-Link 1</a></li>
        <li><a href="#">Sub-Link 2</a></li>
        <li><a href="#">Sub-Link 3</a></li>
        <li><a href="#">Sub-Link 4</a></li>
      </ul>
    </li>
    <li><a href="#">Link 4</a></li>
    <li><a href="#">Link 5</a></li>
    <li><a href="#">Link 6</a></li>
  </ul>
</nav>
</header>
<?php $_SESSION['login']; ?>
</body>
</html>