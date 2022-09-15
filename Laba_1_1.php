<?
	if (isset($_GET["Sign_in"])) {
      header('Location:Laba_1_2.html');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Registration</title>
</head>

<body>
<div id="Registration" align="center">
<h1 align="center">Registration</h1>


<form method="GET" action="user.php">
	<input type="text" name="login" placeholder="Create login" class="Margin inputs"><br>
	<input type="password" name="password" placeholder="Create password" class="Margin inputs"><br>
	<input type="password" name="Confirm" placeholder="Confirm password" class="Margin inputs"><br>
	<input type="submit" name="Sign_up" value="Sign_up" class="Margin buttons"><br>
</form>
	<input type="submit" name="Sign_in" value="Sign_in" class="Margin buttons">


</div>
</body>
</html>