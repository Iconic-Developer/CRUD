<?php

include('connection.php');

$link =mysqli_query($conn, "select * from user");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
     <!-- bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap css end -->

  
</head>
<body >

<div class="container text-muted text-center my-3">
  <h2>List of Users</h2>
</div>

<div class="container my-4">

<div class="table-responsive">
<table class="table table-striped text-center">
  <thead class="bg-primary text-white">
    <tr >
      <th scope="col" >ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">GENDER</th>
      <th scope="col">CITY</th>
      <th scope="col">STATE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if($link-> num_rows >0){
    while($res=mysqli_fetch_assoc($link)){
      
      ?>
    
    
      
    <tr>
     <td><?php echo $res['ID'];?></td>
     <td><?php echo $res['FIRST_NAME'];?></td>
     <td><?php echo $res['LAST_NAME'];?></td>
     <td><?php echo $res['EMAIL'];?></td>
     <td><?php echo $res['ADDRESS'];?></td>
     <td><?php echo $res['GENDER'];?></td>
     <td><?php echo $res['CITY'];?></td>
     <td><?php echo $res['STATE'];?></td>
     <td><a href="update.php?id=<?php echo $res['ID'];?>"><button class="btn btn-primary">UPDATE</button></a>
     <a href="delete.php?id=<?php echo $res['ID'];?>"><button class="btn btn-danger">DELETE</button></a></td>
    </tr>
    <?php
    }
    }
    else{echo "<tr ><td class='nodata' colspan='9' >No Records Found</td></tr>";}
    ?>
    
  </tbody>
</table>
</div>

<div class="container text-center">
 <a href="index.html"> <button class="btn btn-large btn-success">Creat Account</button></a>
</div>

</div>

 <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
</body>
</html>