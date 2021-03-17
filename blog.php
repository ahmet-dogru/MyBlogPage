<html>
<head>
<title>Ahmet</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href = "blog.css" type = "text/css" rel = "stylesheet"/>
<link href = "darkblog.css" type = "text/css" rel = "stylesheet"/>
<script src="https://kit.fontawesome.com/e7d40e7ebc.js" crossorigin="anonymous"></script>



<style>
@media screen and (max-width: 750px) and (min-width: 400px) {
  #sol {
    width: 100%;
	margin-left: 0%;
	margin-right: 0%;
	border-right-style: none;
	float: left;
  }
  
  #metin {
	width: 100%;
	float: left;
  }
  
  
  .baslik {
	margin-top: 5%;
	margin-bottom: 5%;
  }
  
  
  #code {
	width: 100%;
	float: left;
  }
  
  #cikti {
	width: 100%;
	float: left;
  }
  
 #sag {
    width: 100%;
	height: 60%;
	margin-top: 5%;
	margin-right: 0%;
  }
  
  #sag1 {
    width: 100%;
	height: 60%;
	margin-top: 5%;
	margin-right: 0%;
  }
  
  #sag11 {
    width: 100%;
	margin-right: 0%;
	margin-top: 20%;
  }
  
   #sagust {
    width: 100%;
	margin-top: 5%;
	margin-right: 0%;
	display: block;
  }
  
  #mesaj {
    width: 50%;
	margin-left: 0%;
	left: 0px;
  }
  
  #ust {
    display: none;
  }
  
  #ustm {
    display: block;
  }
  
  
}

@media screen and (max-width: 400px) and (min-width: 320px) {
  #sol {
    width: 100%;
	margin-left: 0%;
	margin-right: 0%;
	border-right-style: none;
	float: left;
  }
  
  #metin {
	width: 100%;
	float: left;
  }
  
  
  .baslik {
	margin-top: 5%;
	margin-bottom: 5%;
  }
  
  
  #code {
	width: 100%;
	float: left;
  }
  
  #cikti {
	width: 100%;
	float: left;
  }
  
 #sag {
    width: 100%;
	height: 60%;
	margin-top: 5%;
	margin-right: 0%;
  }
  
  #sag1 {
    width: 100%;
	height: 60%;
	margin-top: 5%;
	margin-right: 0%;
  }
  
  #sag11 {
    width: 100%;
	margin-right: 0%;
	margin-top: 20%;
  }
  
   #sagust {
    width: 100%;
	margin-top: 5%;
	margin-right: 0%;
	display: block;
  }
  
  #mesaj {
    width: 50%;
	margin-left: 0%;
	left: 0px;
  }
  
  #ust {
    display: none;
  }
  
  #ustm {
    display: block;
  }
  
  .menuu {
    margin-top: -20%;
  }
  
  
}

@media screen and (max-width: 320px) and (min-width: 0px) {
  #sol {
    width: 100%;
	margin-left: 0%;
	margin-right: 0%;
	border-right-style: none;
	float: left;
  }
  
  #metin {
	width: 100%;
	float: left;
  }
  
  
  .baslik {
	margin-top: 5%;
	margin-bottom: 5%;
  }
  
  
  #code {
	width: 100%;
	float: left;
  }
  
  #cikti {
	width: 100%;
	float: left;
  }
  
 #sag {
    width: 100%;
	height: 60%;
	margin-top: 5%;
	margin-right: 0%;
  }
  
  #sag1 {
    width: 100%;
	height: 60%;
	margin-top: 5%;
	margin-right: 0%;
  }
  
  #sag11 {
    width: 100%;
	margin-right: 0%;
	margin-top: 20%;
  }
  
   #sagust {
    width: 100%;
	margin-top: 5%;
	margin-right: 0%;
	display: block;
  }
  
  #mesaj {
    width: 50%;
	margin-left: 0%;
	left: 0px;
  }
  
  #ust {
    display: none;
  }
  
  #ustm {
    display: block;
  }
  
  .menuu {
    margin-top: -25%;
  }
  
  
}
</style>


</head>

<body>
<div id="ust">
	<a href="index.php"><button class="buton secili"><i class="fas fa-home" ></i> Ana Sayfa</button></a>
	<a href="hakkimizda.php"><button class="buton"><i class="fas fa-question-circle"></i> Hakkımızda</button></a>
	<a href="iletisim.php"><button class="buton"><i class="fas fa-envelope"></i> İletişim</button></a>
	
	
	<div id="gg">
	<button class="gg" onclick="gece()"><i class="fas fa-adjust" style="font-size: 20px;"></i></button>
	</div>
	<div id="dark-gg">
	<button class="dark-gg" onclick="gunduz()"><i class="fas fa-adjust" style="font-size: 20px;"></i></button>
	</div>
			

	<button id="bildirim" onclick="msgac()"><i class="fas fa-bell" style="font-size: 20px;"></i></button>
	<button id="bildirimk" onclick="msgkapa()"><i class="fas fa-bell" style="font-size: 20px;"></i></button>
</div>
			
	
		


<div id="ustm">
		<input type="checkbox" id="myCheck" style="display:none;">
			<div class="icon">
		<button onclick="ac()"><i class="fas fa-bars icon" style="font-size: 35px;"></i></button>
		</div>

		<button id="bildirimm" onclick="msgac()"><i class="fas fa-bell" style="font-size: 35px;"></i></button>
		<button id="bildirimmk" onclick="msgkapa()"><i class="fas fa-bell" style="font-size: 35px;"></i></button>
		<div id="ggm">
	<button class="gg" onclick="gece()"><i class="fas fa-adjust" style="font-size: 35px;"></i></button>
	</div>
	<div id="dark-ggm">
	<button class="dark-gg" onclick="gunduz()"><i class="fas fa-adjust" style="font-size: 35px;"></i></button>
	</div>
	
			
		
</div>

<div class="menuu" id="menu">
	
		<br><button onclick="kapa()" class="butonm"><i class="fas fa-times"></i>  Kapat</button>
		<a href="index.php"><button class="butonm"><i class="fas fa-home"></i>  Ana Sayfa</button></a>
		<a href="hakkimizda.php"><button class="butonm"><i class="fas fa-question-circle"></i>  Hakkımızda</button></a>
		<a href="iletisim.php"><button class="butonm"><i class="fas fa-envelope"></i>  İletişim</button></a>
	
	
</div>

<script>
function ac() {
  document.getElementById("myCheck").checked = true;
  document.getElementById("menu").style.display = "block";
}

function kapa() {
  document.getElementById("myCheck").checked = false;
  document.getElementById("menu").style.display = "none";
}

function gece() {
   var element = document.body;
   element.classList.toggle("dark-mode");
  
   document.getElementById("code").style.color = "#1cfc03";
   document.getElementById("metin").style.color = "#1cfc03";
   
   document.getElementById("gg").style.display = "none";
   document.getElementById("dark-gg").style.display = "block";
   
   document.getElementById("ggm").style.display = "none";
   document.getElementById("dark-ggm").style.display = "block";
   
   document.getElementById("cikti").style.color = "white";
}

function gunduz() {
   var element = document.body;
   element.classList.toggle("dark-mode");
   
   document.getElementById("code").style.color = "black";
   document.getElementById("metin").style.color = "black";
   
   document.getElementById("gg").style.display = "block";
   document.getElementById("dark-gg").style.display = "none";
   
   document.getElementById("ggm").style.display = "block";
   document.getElementById("dark-ggm").style.display = "none";
   
   document.getElementById("cikti").style.color = "black";
}

function msgac() {
	document.getElementById("mesaj").style.display = "block";
	document.getElementById("bildirimk").style.display = "block";
	document.getElementById("bildirim").style.display = "none";
	document.getElementById("bildirimmk").style.display = "block";
	document.getElementById("bildirimm").style.display = "none";
	
}

function msgkapa() {
	document.getElementById("mesaj").style.display = "none";
	document.getElementById("bildirim").style.display = "block";
	document.getElementById("bildirimk").style.display = "none";
	document.getElementById("bildirimm").style.display = "block";
	document.getElementById("bildirimmk").style.display = "none";
}


function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}


</script>


<div id="mesaj">

		<div id="mesajici">
		<center style="color:red; font-size:20px; ">Hoş Geldin!</center>
		<p>Keyifli Vakitler Dileriz.
		</div>

</div>


<div id="sol">

	<div id="post">
	
		<?php
		
			include("ayar.php");
			
			$p = $_GET["p"];
			
			
			$veri = $vt->prepare("select * from yazilimblog where id=?");
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
				
					<!--<div class='image'>
					<img id='frame' src='".$row['foto']."' style='width:100%; height:100%;'>
					</div>-->
					
					<div class='baslik'><center><td><strong style='font-size:150%; color: '>".$row["baslik"]." </strong></td> ".$row["date"]."</center></div>
				
				<div id='metin'>
				".$row["metin"]." 
				</div>	
				
				";
				
		?>
		
		
		
		</div>
</div>
	

<div id="sagust">
<center><strong>SON YAZILANLAR</strong></center>
</div>

<div id="sag">
	
	<?php	
				$veri = $vt->prepare("select * from yazilimblog order by id desc LIMIT 10");
			$veri->execute();
			
			while($row = $veri->fetch(PDO::FETCH_ASSOC)) {
					echo "
					<div class='saggonderi'>
					<a href='blog.php?p=".$row["id"]."'><center>".$row["baslik"]."<center></a>
					</div>
			
				";
				
			}
		?>
	
</div>

<div id="sag11">

<?php	
				$veri = $vt->prepare("select * from ayarlar order by id desc LIMIT 1");
			$veri->execute();
			
			while($row = $veri->fetch(PDO::FETCH_ASSOC)) {
					echo "
					<center>".$row["footer"]."<center>
			
				";
				
			}
		?>

</div>


</body>

</html>
