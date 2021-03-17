<html>

<body>

<?php
		
			include("ayar.php");
			
			$p = $_GET["p"];
			
			
			$veri = $vt->prepare("select * from iletisim where id=?");
			$veri->execute(array($p));
			
			$row = $veri->fetch(PDO::FETCH_ASSOC);
				/*echo "<table border='1'>
					<tr>
						<td><a href='s.php?p=".$row["id"]."'><strong>".$row["kim"]."</strong></a></td>
					</tr>
					
					<tr>
						<td>".$row["yazi"]."</td>
					</tr>
				
				";*/
				
				echo "
			
				".$row["ileti"]." 
				
				";
				
		?>

</body>

</html>