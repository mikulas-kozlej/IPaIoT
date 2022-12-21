<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" href="style.css" >-->
    <title>IoT</title>
<?php
        
        $file1 = fopen("sensors.txt","r") or die("Unable to open file!");
        $toSplit = explode(";", file_get_contents("https://phpiotmikulas.azurewebsites.net/sensors.txt"));
        $temp = $toSplit[0];
        $moist = $toSplit[1];
        
?>
<script type="text/javascript">

var xmlHttp=createXmlHttpObject();
  // function to create XML object
  function createXmlHttpObject(){
    if(window.XMLHttpRequest){
      xmlHttp=new XMLHttpRequest();
    }
    else{
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlHttp;
  }

  var open = 0;


 function ButtonPress(){
     

     if (open==0){
        
         document.getElementById("led").innerHTML="Yes";
         document.getElementById("open").innerHTML="CLOSE FRIDGE";
         open=1;
     }
     else if (open==1){

         document.getElementById("led").innerHTML="No";
         document.getElementById("open").innerHTML="OPEN FRIDGE"
         open=0;
     }
 }

setInterval(repeat,100);

function repeat(){

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("temperature").innerHTML =
      this.responseText.split(";")[0]+"°C";
      document.getElementById("moisture").innerHTML =
      this.responseText.split(";")[1]+"%"; 
    }
  };
  xhttp.open("GET", "https://phpiotmikulas.azurewebsites.net/sensors.txt", true);
  xhttp.send();
  

}




</script>

    <style>
body{

font-family: Bahnschrift;
background: url("res/6225108.png") repeat-x;
animation: slide 60s linear infinite;
}

#open{
font-weight: bold;
background-color: goldenrod;
border: none;
border-radius: 7px;
padding: 2%;
font-size: 1.3em;
cursor: pointer;
filter: drop-shadow(-7px 7px  black);
}

#open:active{
filter: drop-shadow(-5px 5px  black);
transform: translate(-2px, 2px);
}


caption{
font-size: 5em;

}

.sliding-background{
display: block;
height: 100vh;
width: 100vw;

}

@keyframes slide {
0%{
    background-position: 0px 0px;
}
100%{
    background-position: -3000px 0px;
}
}

th,td{
padding-right: 40px;
font-size: 2em;

}



button{
margin: auto;
}

table{
margin: auto;
margin-bottom: 20%;
margin-top: 10%;
}

.shadow{
margin: auto;
margin-top: 5%;
display: block;
max-width: 60%;

padding: 1%;
padding-left: 2%;
border-radius: 7px;
background-color: beige;
filter: drop-shadow(-10px 10px 10px black);
}




    </style>
</head>
<body>

<div class="shadow">
<table>
    <caption style="font-weight: bold;" >Smart Fridge</caption>
    <thead>
    <tr>
        <th>Temperature</th>
        <th>Humidity</th>
        <th>Open?</th>
    </tr>
    </thead>
    <tbody>
    <tr>

        <td><div id="temperature"></div></td>
        <td><div id="moisture"></div></td>
        <td><div id="led">No</div></td>

    </tr>

</table>

    <button id="open"  onclick="ButtonPress()">OPEN FRIDGE</button>
</div>




</body>




</html>
