<?php
	include("ayar.php");
	
	if($_POST){
		$ad = $_POST["ad"];
		$soyad = $_POST["soyad"];
		$eposta = $_POST["eposta"];
		$ileti = $_POST["ileti"];
		
		$veri = $vt->prepare("insert into iletisim set ad=?,
		soyad=?, eposta=?, ileti=?");
		$veri->execute(array($ad,$soyad,$eposta,$ileti));
		
		if($veri) {
			echo "<font size='5' color='green'>Başarıyla Gönderildi.</font><br>";
			header("refresh: 2; url=iletisim.php");
		}else {
			echo "<font size='5' color='Red'>Mesaj Gönderilemedi.</font><br>";
		}
	}
?>




		

<html>
<head>
<title>Ahmet</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href = "iletisim.css" type = "text/css" rel = "stylesheet"/>
<link href = "darkiletisim.css" type = "text/css" rel = "stylesheet"/>
<script src="https://kit.fontawesome.com/e7d40e7ebc.js" crossorigin="anonymous"></script>




<style>
@media screen and (max-width: 750px) and (min-width: 0px) {
  #iletisim {
    width: 100%;
	margin-left: 5%;
	margin-right: 0%;
	border-right-style: none;
	border-bottom-style: solid;
	border-bottom-color: #038eff;
	margin-top: 10%;
  }
  
  #sag {
    width: 100%;
	margin-right: 0%;
	font-size: 10%;
  }
  
  
  #mail {
    width: 100%;
	margin-right: 0%;
	font-size: 2000%;
  }
  
  
  #ig {
    width: 100%;
	margin-right: 0%;
	font-size: 2000%;
  }
  
  
  
  #sag1 {
    width: 100%;
	height: 40%;
	margin-top: 5%;
	margin-right: 0%;
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

@media screen and (max-width: 900px) and (min-width: 751px) {

	#ustm {
	  display: none;
	}	
	
	#menu {
	  display: none;
	}

}
</style>




</head>

<body>

<div id="ust">
	<a href="index.php"><button class="buton"><i class="fas fa-home" ></i> Ana Sayfa</button></a>
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
   
   document.getElementById("gg").style.display = "none";
   document.getElementById("dark-gg").style.display = "block";
   
   document.getElementById("ggm").style.display = "none";
   document.getElementById("dark-ggm").style.display = "block";
  
  
}

function gunduz() {
   var element = document.body;
   element.classList.toggle("dark-mode");
  
   document.getElementById("gg").style.display = "block";
   document.getElementById("dark-gg").style.display = "none";
   
   document.getElementById("ggm").style.display = "block";
   document.getElementById("dark-ggm").style.display = "none";
   
   
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
</script>


<div id="mesaj">

		<div id="mesajici">
		<center style="color:red; font-size:20px; ">Hoş Geldin!</center>
		<p>Keyifli Vakitler Dileriz.
		</div>

</div>


<div id="iletisim">

	<form action="" method="POST">
		 <br><asd><i class="fas fa-user" style="font-size: 30px;"></i></asd><input type="text" id="ad" name="ad" placeholder="Ad" style="width:65%; height:8%;" required><br>
		
		 <br><asd><i class="fas fa-user" style="font-size: 30px;"></i></asd><input type="text" id="soyad" name="soyad" placeholder="Soyad" style="width:65%; height:8%;" required><br>
		
		 <br><asd><i class="fas fa-envelope" style="font-size: 30px;"></i></asd><input type="email" id="ad" name="eposta" placeholder="E-Posta" style="width:65%; height:8%;" required><br>
		
		 <br><asddd><i class="fas fa-sticky-note" style="font-size: 30px;"></i></asddd><textarea name="ileti" style="width:65%; height:20%;" placeholder="İletinizi buraya yazınız..." required></textarea><br>
		 
		 <input class="gonder" type="submit" value="Gönder"/>
	</form>

</div>


<div id="sag">
	<div id="ilacik">
	<center>
		<h1><b>Merhaba!</b><br> İletişim formundan bize sorularınızı,<br> önerilerinizi ve şikâyetlerinizi yazabilirsiniz.<br> Dilerseniz mail ve instagram üzerinden de yazabilirsiniz.</h1>
		<a href="mailto:ahmeteileti@outlook.com"><div id="mail"> <text>ahmeteileti@outlook.com</text></a>
</center>
	
	</div>
	
	<div id="ig"> <center><a href="https://www.instagram.com/ahmet_dogru._/?hl=tr" target="_blank"><text>ahmet.dogru_</text></a></center>

	</div>
	</div>
</div>


</body>

</html>