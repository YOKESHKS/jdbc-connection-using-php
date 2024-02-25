
<html> 
<body> 
<?php 
$STUDENT NAME=$_GET["usn"]; 
$STUDENT USN=$_GET["name"]; 
$branch=$_GET["branch"]; 
$sem=$_GET["sem"]; 
$email=$_GET["email"]; 
 
$conn = mysqli_connect("localhost","root","","studentdb"); 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
} 
$sql = "INSERT INTO user VALUES 
                     ('$', '$STUDENT USN', '$branch', $sem,'$email')"; 
if ($conn->query($sql) === TRUE) { 
  echo "New record created successfully"; 
} else { 
  echo "Error: " . $sql . "<br>" . $conn->error; 
} 
?> 
</body> 
</html>