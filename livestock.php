<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Livestock</title>
<link href="../php/livestock.css" rel="stylesheet" type="text/css">
<!--adding stylesheet for this page-->
</head>

<body>
<?php
$curpage = 'livestock.php';
/*this value is a current number of page you are at*/
 require '../php/menu.php';
  /*this page must use a subpage "menu.php" that's why it's required*/
 ?>
<h1>About livestock</h1>

<p>Livestock are domesticated animals raised in an agricultural setting to produce commodities such as food, fiber, and labor. The term is often used to refer solely to those raised for food, and sometimes only farmed ruminants, such as cattle and goats. In recent years, some organizations have also raised livestock to promote the survival of rare breeds. The breeding, maintenance, and slaughter of these animals, known as animal husbandry, is a component of modern agriculture that has been practiced in many cultures since humanity's transition to farming from hunter-gatherer lifestyles.
<br>
Animal husbandry practices have varied widely across cultures and time periods. Originally, livestock were not confined by fences or enclosures, but these practices have largely shifted to intensive animal farming, sometimes referred to as "factory farming". These practices increase yield of the various commercial outputs, but have led to increased concerns about animal welfare and environmental impact. Livestock production continues to play a major economic and cultural role in numerous rural communities.</p>
<img src="livestock.png" width="572" height="272" alt=""/>
<?php require '../php/footer.php';
/*This page is using code from file: "footer.php" that's why it's required*/
?>
</body>
</html>