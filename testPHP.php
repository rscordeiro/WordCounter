<!DOCTYPE html>
<html>
<head>
	<?php
			  $word = $_POST["word"];
			  $text = $_POST["text"];
			  
			  echo substr_count($text, $word);
	?>
</head>
<body>



</body>
</html>
