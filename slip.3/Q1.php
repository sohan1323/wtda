<?php
//Startsession
Session_start();
//Checkifloginformhasbeensubmitted
If(isset($_POST[‘submit’])){
//Getusernameandpasswordinputfromuser
$username=$_POST[‘username’];
$password=$_POST[‘password’];
//Setcorrectusernameandpassword
$correct_username=‘myusername’;
$correct_password=‘mypassword’;
//Checkifenteredusernameandpasswordarecorrect
If($username==$correct_username&&$password==$correct_password){
//Setsessionvariabletomarkuserasloggedin
$_SESSION[‘loggedin’]=true;
//Redirectusertowelcomepage
Header(‘Location:welcome.php’);
Exit;
}else{
//Decrementloginattempts
If(isset($_SESSION[‘attempts’])){
$_SESSION[‘attempts’]--;
}else{
$_SESSION[‘attempts’]=3;
}
//Displayerrormessageifmaximumloginattemptsexceeded
If($_SESSION[‘attempts’]<=0){
Echo“Maximumloginattemptsexceeded.Pleasetryagainlater.”;
}else{
//Displayerrormessage
Echo“Invalidusernameorpassword.Youhave“.$_SESSION[‘attempts’].”Attempt(s)left.”;
}
}
}
?>
<!—HTMLformforuserinput
<formmethod=”post”>
<labelfor=”username”>Username:</label>
<inputtype=”text”id=”username”name=”username”required><br><br>
<labelfor=”password”>Password:</label>
<inputtype=”password”id=”password”name=”password”required><br><br>
<inputtype=”submit”name=”submit”value=”LogIn”>
</form>