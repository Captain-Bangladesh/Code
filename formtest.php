<?php
	echo <<<_END
		<html>
			<head>
				<title>Form test</title>
			</head>
		<body>
		<form method = "post" action = "formtest.php">
			Как вас зовут?
			<input type = "text" name = "name">
			<input type = "submit">
		</form>
		</body>
	</html>
_END;
?>