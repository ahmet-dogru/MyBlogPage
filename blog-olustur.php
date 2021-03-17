<?php
	include("ayar.php");
	
	if($_POST){
		$foto = $_POST["foto"];
		$baslik = $_POST["baslik"];
		$devami = $_POST["devami"];
		$metin = $_POST["metin"];
		$date = $_POST["date"];
		
		$veri = $vt->prepare("insert into yazilimblog set foto=?,
		baslik=?, devami=?, metin=?, date=?");
		$veri->execute(array($foto,$baslik,$devami,$metin,$date));
		
		if($veri) {
			echo "<font size='5' color='green'>Başarıyla Gönderildi.</font><br>";
			header("refresh: 2; url=index.php");
		}else {
			echo "<font size='5' color='Red'>Mesaj Gönderilemedi.</font><br>";
		}
	}
?>





<html lang="tr">
<head>
<title>Ahmet</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href = "blog-olustur.css" type = "text/css" rel = "stylesheet"/>
<link href = "darkblog.css" type = "text/css" rel = "stylesheet"/>
<script src="https://kit.fontawesome.com/e7d40e7ebc.js" crossorigin="anonymous"></script>




<style>
@media screen and (max-width: 750px) and (min-width: 0px) {
  #gonderiler {
    width: 100%;
	margin-left: 0%;
	border-right-style: none;
	
  }
  
  #sag {
    width: 100%;
	height: 40%;
	margin-top: 5%;
	margin-right: 0%;
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

<body onkeydown="myFunction(event)">




<div id="ustm">	
		adas
</div>





<div id="ozellik">
		<a href="index.php"><button class="ozellikbuton"><i class="fas fa-newspaper" style="font-size:25px;"></i> Gönderiler</button></a>
		<a href="iletisim-formlari.php"><button class="ozellikbuton"><i class="fas fa-inbox" style="font-size:25px;"></i> İletişim Formları</button></a>
		<a href="yazarlar.php"><button class="ozellikbuton"><i class="fas fa-users" style="font-size:25px;"></i> Yazarlar</button></a>
		<a href="blog-olustur.php"><button class="ozellikbuton"><i class="fas fa-pen" style="font-size:25px;"></i> Gönderi Oluştur</button></a>
		<a href="site-ayarlari.php"><button class="ozellikbuton"><i class="fas fa-cog" style="font-size:25px;"></i> Site Ayarları</button></a>
</div>



<script>

//document.designMode = "on";

//document.getElementById("ozellik").contentEditable = false
//document.getElementById("ust").contentEditable = false
//document.getElementById("ustm").contentEditable = false
//document.getElementById("sag").contentEditable = false

function gorselekle() {
let div = document.createElement('div');
  div.className = "img";

  document.getElementById("blog").append(div);
  suanimg = suanimg+=imgno;
}

function edit() {
    document.getElementById("text").disabled = false;
	document.getElementById("edit").style.display = "none";
	document.getElementById("finish").style.display = "block";
}

function finish() {
    document.getElementById("text").disabled = true;
	document.getElementById("edit").style.display = "block";
	document.getElementById("finish").style.display = "none";
}



function editt() {
    document.getElementById("baslik").disabled = false;
	document.getElementById("editt").style.display = "none";
	document.getElementById("finishh").style.display = "block";
}

function finishh() {
    document.getElementById("baslik").disabled = true;
	document.getElementById("editt").style.display = "block";
	document.getElementById("finishh").style.display = "none";
}



function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}




function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}


function bold(event) {
    document.execCommand("bold");
}


document.querySelector("#today").valueAsDate = new Date();




</script>


<div id="komple">


	
	
	
<div id="sag">
	
	<div id="post">	
	
	
	<div id="metinozellik">
			METİN DÜZENLEME KODLARI
			</div>
	<textarea id="kodlar" oninput="auto_grow(this)" disabled style="color: #ff0000">
<text style="color:renk"> Kelime </text> = Kelimenin rengini değiştirir.
<text style="background-color:renk"> Kelime </text> = Kelimenin arka plan rengini değiştirir.
<strong> Kelime </strong> = Kelimeyi kalın yazar.
<a href="link"> Kelime </a> = Kelimeye link verir.
<i> Kelime </i> = Kelimeyi eğik yazar.
....<br> = Alt satıra geçer.
	</textarea>
	
		<form action="" method="POST">
		
			<div id="metinozellik">
			<i id="duzen" class="fas fa-undo" onclick="document.execCommand('undo',false,null);" style="font-size: 25px;"></i>
			<i id="duzen" class="fas fa-redo" onclick="document.execCommand('redo',false,null);" style="font-size: 25px;"></i>
			BAŞLIK
			</div>
			
		<textarea id="baslik" name="baslik" oninput="auto_grow(this)">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
			
			<div id="metinozellik">
			<i id="duzen" class="fas fa-undo" onclick="document.execCommand('undo',false,null);" style="font-size: 25px;"></i>
			<i id="duzen" class="fas fa-redo" onclick="document.execCommand('redo',false,null);" style="font-size: 25px;"></i>
			DEVAMI METNİ
			</div>
			
		<textarea id="baslik" name="devami" oninput="auto_grow(this)" >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
	
	
		<div id="metinozellik">
			<i id="duzen" class="fas fa-undo" onclick="document.execCommand('undo',false,null);" style="font-size: 25px;"></i>
			<i id="duzen" class="fas fa-redo" onclick="document.execCommand('redo',false,null);" style="font-size: 25px;"></i>
			BLOG METNİ
			</div>
			
		<textarea id="text" name="metin" oninput="auto_grow(this)" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien erat, pulvinar at tempor sed, pulvinar eu sem. Integer imperdiet imperdiet neque eget tempus. Nam purus ex, volutpat id felis non, tempus ultrices massa. Pellentesque vestibulum sodales libero nec dignissim. Cras felis diam, malesuada at ligula et, consectetur euismod turpis.</textarea>
	
		<div class="img">
			<img id="frame" style="width:100%; height:100%;"/>
		</div>
	
	<center><input style="display:block;" id="foto" class="form-control gorselekle" name="foto" type="file" onchange="preview()"/></center>
			<center><input id="today" type="date" name="date"></center>
	<center><input type="submit" value="Gönderiyi Paylaş" id="gonderipaylas"/></center>
		</form>
	</div>
	
</div>
		
	</div>

</body>

</html>