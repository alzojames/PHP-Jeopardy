<?php
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Web programming Jeopardy</title>
<style type="text/css">
body {
background-color:#333333;
}
body, table, table td {
border:0px;
border-collapse:collapse;
margin:0px;
padding:0px;
}
a {
color:#FFFF00;
}
#board {
margin-left:20px;
color:#FFFF00;
}
#board #categories td {
background-color:#000000;
background-image:none;
border:#FFFFFF solid 3px;
}
#board tr td{
background-image:url(boardelementgrad.gif);
background-repeat:none;
height:100px;
width:180px;
border:#000000 solid 3px;
border-collapse:collapse;
text-align:center;
font-size:24px;
}
#container {
text-align:center;
padding:20px;
}
#score {
margin-left:20px;
margin-top:20px;
background-color:#000000;
color:#FFFF00;
}
#score tr td {
border:#FFFFFF solid 3px;
border-collapse:collapse;
text-align:center;
font-size:24px;
height:50px;
width:180px;
}
.team {
background-color:#000000;
color:#FFFF00;
font-size:18px;
border:none;
max-width:180px;
}
.score {
background-color:#000000;
color:#FFFF00;
font-size:18px;
border:none;
max-width:180px;
text-align:right;
}
</style>
</head>
 
<body>
<div id="container">
<table id="board">
  <tr id="categories">
    <td id="categories1">Cat 1</td>
    <td id="categories2">Cat 2</td>
    <td id="categories3">Cat 3</td>
    <td id="categories4">Cat 4</td>
    <td id="categories5">cat 5</td>
  </tr>
  <tr id="row1">
    <td id="row1_1"><a href='index.php?cat1100=true'>100</a></td>
    <td id="row1_2"><a href='index.php?cat2100=true'>100</a></td>
    <td id="row1_3"><a href='index.php?cat3100=true'>100</a></td>
    <td id="row1_4"><a href='index.php?cat4100=true'>100</a></td>
    <td id="row1_5"><a href='index.php?cat5100=true'>100</a></td>
  </tr>
  <tr id="row2">
    <td id="row1_1"><a href='index.php?cat1200=true'>200</a></td>
    <td id="row1_2"><a href='index.php?cat2200=true'>200</a></td>
    <td id="row1_3"><a href='index.php?cat3200=true'>200</a></td>
    <td id="row1_4"><a href='index.php?cat4200=true'>200</a></td>
    <td id="row1_5"><a href='index.php?cat5200=true'>200</a></td>
  </tr>
  <tr id="row3">
    <td id="row1_1"><a href='index.php?cat1300=true'>300</a></td>
    <td id="row1_2"><a href='index.php?cat2300=true'>300</a></td>
    <td id="row1_3"><a href='index.php?cat3300=true'>300</a></td>
    <td id="row1_4"><a href='index.php?cat4300=true'>300</a></td>
    <td id="row1_5"><a href='index.php?cat5300=true'>300</a></td>
  </tr>
  <tr id="row4">
    <td id="row1_1"><a href='index.php?cat1400=true'>400</a></td>
    <td id="row1_2"><a href='index.php?cat2400=true'>400</a></td>
    <td id="row1_3"><a href='index.php?cat3400=true'>400</a></td>
    <td id="row1_4"><a href='index.php?cat4400=true'>400</a></td>
    <td id="row1_5"><a href='index.php?cat5400=true'>400</a></td>
  </tr>
  <tr id="row5">
    <td id="row1_1"><a href='index.php?cat1500=true'>500</a></td>
    <td id="row1_2"><a href='index.php?cat2500=true'>500</a></td>
    <td id="row1_3"><a href='index.php?cat3500=true'>500</a></td>
    <td id="row1_4"><a href='index.php?cat4500=true'>500</a></td>
    <td id="row1_5"><a href='index.php?cat5500=true'>500</a></td>
  </tr>
</table>
<table id="score">
<tr><td><input type="text" value="" class="team" /></td><td><input type="text" value="" class="score" id="score1" /></td><td><input type="button" value="+100" class="score" onclick="document.getElementById('score1').value = parseFloat(document.getElementById('score1').value)+100" /><input type="button" value="-100" class="score" onclick="document.getElementById('score1').value = parseFloat(document.getElementById('score1').value)-100"/></td></tr>
<tr><td><input type="text" value="" class="team" /></td><td><input type="text" value="" class="score" id="score2"/></td><td><input type="button" value="+100" class="score" onclick="document.getElementById('score2').value = parseFloat(document.getElementById('score2').value)+100" /><input type="button" value="-100" class="score" onclick="document.getElementById('score2').value = parseFloat(document.getElementById('score2').value)-100"/></td></tr>

</div>
<?php



  function getQuestion($myQuestion) {

    //echo $myQuestion;

    $questions = array(
      "cat1100" => ["HTTP Status Not Found", "What is 404"],
      "cat2100" => ["HTTP Status Created", "What is 200"],
      "cat3100" => ["HTTP Status Forbidden", "What is 403"],
      "cat4100" => ["HTTP Status Not Found", "What is 404"],
      "cat5100" => ["HTTP Status Not Found", "What is 404"],

      "cat1200" => ["HTTP Status Not Found", "What is 404"],
      "cat2200" => ["HTTP Status Not Found", "What is 404"],
      "cat3200" => ["HTTP Status Not Found", "What is 404"],
      "cat4200" => ["HTTP Status Not Found", "What is 404"],
      "cat5200" => ["HTTP Status Not Found", "What is 404"],

      "cat1300" => ["HTTP Status Not Found", "What is 404"],
      "cat2300" => ["HTTP Status Not Found", "What is 404"],
      "cat3300" => ["HTTP Status Not Found", "What is 404"],
      "cat4300" => ["HTTP Status Not Found", "What is 404"],
      "cat5300" => ["HTTP Status Not Found", "What is 404"],

      "cat1400" => ["HTTP Status Not Found", "What is 404"],
      "cat2400" => ["HTTP Status Not Found", "What is 404"],
      "cat3400" => ["HTTP Status Not Found", "What is 404"],
      "cat4400" => ["HTTP Status Not Found", "What is 404"],
      "cat5400" => ["HTTP Status Not Found", "What is 404"],

      "cat1500" => ["HTTP Status Not Found", "What is 404"],
      "cat2500" => ["HTTP Status Not Found", "What is 404"],
      "cat3500" => ["HTTP Status Not Found", "What is 404"],
      "cat4500" => ["HTTP Status Not Found", "What is 404"],
      "cat5500" => ["HTTP Status Not 5500", "What is 200"],
    );

    print_r ($questions[$myQuestion][0]);
  }

  function displayQuestion($question){
    
  }

  if (isset($_GET['cat1100'])) {
    getQuestion("cat1100");
  }else if(isset($_GET['cat2100'])){
    getQuestion("cat2100");
  }else if(isset($_GET['cat3100'])){
    getQuestion("cat3100");
  }else if(isset($_GET['cat4100'])){
    getQuestion("cat4100");
  }else if(isset($_GET['cat5100'])){
    getQuestion("cat5100");
  }

  if (isset($_GET['cat1200'])) {
    getQuestion("cat1200");
  }else if(isset($_GET['cat2200'])){
    getQuestion("cat2200");
  }else if(isset($_GET['cat3200'])){
    getQuestion("cat3200");
  }else if(isset($_GET['cat4200'])){
    getQuestion("cat4200");
  }else if(isset($_GET['cat5200'])){
    getQuestion("cat5200");
  }

  if (isset($_GET['cat1300'])) {
    getQuestion("cat1300");
  }else if(isset($_GET['cat2300'])){
    getQuestion("cat2300");
  }else if(isset($_GET['cat3300'])){
    getQuestion("cat3300");
  }else if(isset($_GET['cat4300'])){
    getQuestion("cat4300");
  }else if(isset($_GET['cat5300'])){
    getQuestion("cat5300");
  }

  if (isset($_GET['cat1400'])) {
    getQuestion("cat1400");
  }else if(isset($_GET['cat2400'])){
    getQuestion("cat2400");
  }else if(isset($_GET['cat3400'])){
    getQuestion("cat3400");
  }else if(isset($_GET['cat4400'])){
    getQuestion("cat4400");
  }else if(isset($_GET['cat5400'])){
    getQuestion("cat5400");
  }

  if (isset($_GET['cat1500'])) {
    getQuestion("cat500");
  }else if(isset($_GET['cat2500'])){
    getQuestion("cat2500");
  }else if(isset($_GET['cat3500'])){
    getQuestion("cat3500");
  }else if(isset($_GET['cat4500'])){
    getQuestion("cat4500");
  }else if(isset($_GET['cat5500'])){
    getQuestion("cat5500");
  }
?>

</body>
</html>