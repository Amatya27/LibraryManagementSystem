<!DOCTYPE html>
<html>
<head>
<title>Student database</title>

</head>
<body>

<table>
<style>
table {

	  border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

</style>
<tr>
<th>id</th>
<th>bookname</th>
<th>authorname</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "lms_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,bookname, authorname FROM books ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['bookname']; ?></td>
<td><?php echo $rows['authorname']; ?></td>

<td align="center"><a href="update_book_details.php?id=<?php echo $rows['id']; ?>">update</a></td>
<td align="center"><a href="delete_books.php?id=<?php echo $rows['id']; ?>">delete</a></td>
</tr>
<?php
}

echo "</table>";



} else { echo "No results found"; }
$conn->close();
?>
</table>

</body>
</html>
