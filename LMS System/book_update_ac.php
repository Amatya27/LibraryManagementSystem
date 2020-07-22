<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="lms_database"; // Database name
$tbl_name="books"; // Table name
// Connect to server and select database.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
$id=$_GET['id'];
$bookname=$_GET['bookname'];
$authorname=$_GET['authorname'];
// update data in mysql database
$sql="UPDATE $tbl_name SET bookname='$bookname', authorname='$authorname' WHERE id='$id'";
$result=mysqli_query($conn,$sql);
// if successfully updated.
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='book_view.php'>View result</a>";
}
else
{
echo "ERROR";
}
?>

