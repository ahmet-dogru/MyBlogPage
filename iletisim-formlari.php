
<html>
<head>
<title>Ahmet</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href = "iletisim-formlari.css" type = "text/css" rel = "stylesheet"/>
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


</script>




<div id="komple">


<div id="goruntuleust">

<div id="ad">
<center>AD</center>
</div>

<div id="soyad">
<center>SOYAD</center>
</div>

<div id="eposta">
<center>E-POSTA</center>
</div>

<div id="mesaj">
<center>İLETİ</center>
</div>

</div>



<?php
		
			include("ayar.php");
			
			$veri = $vt->prepare("select * from iletisim order by id desc");
			$veri->execute();
			
			while($row = $veri->fetch(PDO::FETCH_ASSOC)) {
				/*echo "<table border='1'>
					<tr>
						<td><a href='s.php?p=".$row["id"]."'><strong>".$row["baslik"]."</strong></a></td>
					</tr>
					
					<tr>
						<td>".$row["metin"]."</td>
					</tr>
				
				";*/
					echo "
					
					<div class='ad'>
					<center>".$row["ad"]."</center>
					</div>
					
					<div class='soyad'>
					<center>".$row["soyad"]."</center>
					</div>
					
					<div class='eposta'>
					<center><a href='mailto:".$row["eposta"]."'>".$row["eposta"]."</a></center>
					</div>
					
					<div class='mesaj'>
					<a href='mesaj.php?p=".$row["id"]."'><center>OKU</center></a>
					</div>
				
	
				";
				
				
				
			}
		?>

</body>

</html>