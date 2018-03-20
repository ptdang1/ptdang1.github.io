<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Contact_Portfolio";

$username1 = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$comment = $_POST['Comment'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Contact_Portfolio (Name, Email,Subject,Comment)
VALUES ('$username1','$email','$subject','$comment')";

if(empty($username1) || empty($email) || empty($subject) || empty($comment))
{
    echo "You did not fill out the required fields.";
}
elseif (mysqli_query($conn, $sql)) {
    echo "Thank You!";
} 


else {
    echo "Please try it again with the correct one!" . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>