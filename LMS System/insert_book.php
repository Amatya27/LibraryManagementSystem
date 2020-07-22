<?php
$server="localhost";
$user="root";
$pass="";
$dbname="lms_database";

$conn = new mysqli($server,$user,$pass,$dbname);
if($conn->connect_error)
{
    die("Connection failed" .$conn->connect_error);
    
}

    $bookname=mysqli_real_escape_string($conn,$_POST['bookname']);
    $authorname=mysqli_real_escape_string($conn,$_POST['authorname']);
    
$sql="INSERT INTO books (bookname,authorname) VALUES('$bookname','$authorname')";

if($conn->query($sql)==TRUE)
{
    echo'Book Inserted Successfully!!please wait...';
     header("refresh:4;url=http://localhost/LMS%20system/book_view.php");

    
}

else
{
    
    echo"error".$sql ."<br/>".$conn->error;
}

$conn->close();

?>