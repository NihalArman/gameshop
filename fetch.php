<?php
//fetch.php
require 'config.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM gamestore 
  WHERE gameName LIKE '%".$search."%'
  OR about LIKE '%".$search."%' 
  OR releaseDate LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' 
  OR trailer LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM gamestore ORDER BY id
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Game Name</th>
     <th>Price</th>
     <th>about</th>
     <th>releaseDate</th>
     <th>trailer</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["gameName"].'</td>
    <td>'.$row["price"].'</td>
    <td>'.$row["about"].'</td>
    <td>'.$row["releaseDate"].'</td>
    <td>'.$row["trailer"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>