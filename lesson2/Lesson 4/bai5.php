<!DOCTYPE html>
<html>
<head>
	<title>Dãy số từ 1 đến 100</title>
</head>
<body>
	<?php
		function runPrint(){
			for($i = 1; $i <= 100; $i++) {
				if($i % 2 == 0) {
					echo "<b>" . $i . "</b> ";
				} else {
					echo $i . " ";
				}
			}
		}
		runPrint();
	
	?>
</body>
</html>