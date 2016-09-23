<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home page</title>
<link href="../php/stylehomage.css" rel="stylesheet" type="text/css">
<!--adding stylesheet for this page-->
</head>
<body>

<?php
$curpage = 'homepage.php';
/*this value is a current number of page you are at*/

 require '../php/menu.php' ;
 /*this page must use a subpage "menu.php" that's why it's required*/
?>
 

<h1>Hello!</h1>

<p>Welcome at our website dedicated to different kind of animals. By reading this you will gain knowladdge about various spieces and diffent kind of animal. Hope you will enjoy reading this as much as we enjoy creating this for you! :)</p>
<img src="groupofanimals.png" width="525" height="480" alt=""/>
<?php require '../php/footer.php';
/*This page is using code from file: "footer.php" that's why it's required*/
?>

</body>
</html>