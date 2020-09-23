<html>
    <head>
        <title>blob datatype</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>
    <form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>Select File</td>
        <td><input type="file" name="f1"></td>
</tr>
<tr>
    <td><input type="submit" name="submit1" value="upload"></td>
    <td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>

<?php
$host="localhost";
$user="root";
$password="";
$db="anil";

$con=mysqli_connect($host, $user, $password);
mysqli_select_db($con,$db);


if(isset($_POST["submit1"]))
{ 
        $image=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
        $insert = mysqli_query($con, "insert into tblblob (image) values('$image')");
        if($insert){
            echo "Successfully uploaded.";
        } else{
            echo "Failed to upload.";
        }
}
if(isset($_POST["submit2"]))
{
    $res=mysqli_query($con, "select * from tblblob");
    echo"<table>";
    echo "<tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<td>";
        echo '<img src="data:image/jpg;base64, '.base64_encode($row['image']).'"height="100" width="100">';
        echo "<td>";
    }
}
?>
</body>
</html> 
