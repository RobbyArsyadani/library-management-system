<?php
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<br>
<table class="table table-hover">
  <thead>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

<?php
$keyword="";
        if (isset($_POST['keyword'])) {
            $kata_kunci=$_POST['keyword'];
        }
?>
    <tr>
        <th>
            <input type="text" name="keyword" value =" <?php echo $keyword;?>" required/>
            <input type ="submit" value="pilih">
        </th>
    </tr>
</form>
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">librarian ID</th>
      <th scope="col">Available Stock</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
 

 if (isset($_POST['keyword'])) {
    $keyword=trim($_POST['keyword']);
    $sql="select * from books where book_title like '%".$keyword."%'  order by id asc";

}else {
    $sql="select * from books order by id asc";
}


$hasil=pg_query($db,$sql);
$no=0;
while ($row = pg_fetch_array($hasil)) {
    $no++;

    


?>
	<tr>
        <td> <?php print $row['id'] ?> </td>
		<td> <?php print $row['book_title'] ?> </td>
		<td> <?php print $row['author'] ?> </td>
        <td> <?php print $row['librarianid']?></td>		
		<td> <?php print $row['stock'] ?> </td>
      
        <td><button><a href="bookupdate.php?id=<?php print $row["id"];?>">Update Stock</a><button><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></button></td>
	<?php 
}
?>
  </tbody>
</table>

<a href="index.php">Home</a>
</body>
</html>