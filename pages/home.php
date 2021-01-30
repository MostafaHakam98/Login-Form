<html>

<head>
	<title>Welcome!</title>
	<?php include('./includes/validations.php'); ?>

</head>

<body>
	<div>
        <div class="form">
            <form name="homeForm" action="redirections.php" method="POST">
                <h1>HomePage</h1>
            	<button type = "submit" name = "page" onclick = "return logOut()">Log out</button>
            </form>
        </div>
    </div>
</body>

</html>
