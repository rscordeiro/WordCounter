<!DOCTYPE html>
<html>
<head>
 	<?php
			  $word = $_POST["word"];
			  $text = $_POST["text"];
			  $answer = substr_count($text, $word);
    ?>	 
			 <script language="javascript">alert('Your word appers: <?= $answer ?> time(s)!')</script>
</head>
<body>
</body>
</html>
