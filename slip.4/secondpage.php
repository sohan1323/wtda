<?php
Session_start();
?>
<!DOCTYPEhtml>
<html>
<head>
<title>Earnings</title>
</head>
<body>
<h1>Earnings</h1>
<formmethod=”POST”action=”thirdpage.php”>
<labelfor=”basic”>Basic:</label>
<inputtype=”text”id=”basic”name=”basic”><br><br>
<labelfor=”da”>DA:</label>
<inputtype=”text”id=”da”name=”da”><br><br>
<labelfor=”hra”>HRA:</label>
<inputtype=”text”id=”hra”name=”hra”><br><br>
<inputtype=”submit”value=”Next”>
</form>
</body>
</html>
<?php
//Storeearningsinsession
If(isset($_POST[‘basic’])&&isset($_POST[‘da’])&&isset($_POST[‘hra’])){
$_SESSION[‘basic’]=$_POST[‘basic’];
$_SESSION[‘da’]=$_POST[‘da’];
$_SESSION[‘hra’]=$_POST[‘hra’];
}
?