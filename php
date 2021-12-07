<html>
<head>
<style>
body{
align:center;
background-color:orange;
padding:20px;
font-family:Bell MT;
}
</style>
</head>
<body>
<center>
<h1>Enter data for Student</h1>
</center>
<center>
<form action="Student.php" method="post">
Name:<input type="text" name="name"/><br/><br/>
Roll number:<input type="text" name="rno"/><br/><br/>
D.O.B:<input type="text" name="dob"/><br/><br/>
Age:<input type="number" name="age"/><br/><br/>
Branch:<input type="text" name="branch"/><br/><br/>
<input type="submit" name="OK"/>
</form>
</center>
</body>
</html>
Student.php :
<?php  
$con=mysqli_connect("localhost","root","","student");
if(isset($_POST['OK'])){
$p =$_POST['name'];
$f =$_POST['rno'];
$s=$_POST['dob'];
$a=$_POST['age'];
$b=$_POST['branch'];
echo "Name:$p";
echo " Rollno:$f";
echo " D.O.B.:$s";
echo " Age:$a";
echo " Branch:$b";
$sql=mysqli_query($con,"INSERT INTO students (name,rno,dob,age,branch) VALUES ('$p','$f','$s','$a','$b')");
}
?>
