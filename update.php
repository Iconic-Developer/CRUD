<?php
include('connection.php');

$id=$_GET['id'];

$res=mysqli_query($conn, "select * from user where ID='$id'");
while($row=mysqli_fetch_assoc($res)){

    $firstName = $row['FIRST_NAME'];
    $lastName=$row['LAST_NAME'];
    $email = $row['EMAIL'];
    $password = $row['PASSWORD'];
    $address = $row['ADDRESS'];
    $gender = $row['GENDER'];
    $city = $row['CITY'];
    $state = $row['STATE'];
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>

    <!-- bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap css end -->

    <link rel="stylesheet" href="style.css">

   

</head>
<body>
    


  <div id="main" class="container">



   <div class="row text-center mb-4 my-4">
    <div class="col">
      <h1>Update Details</h1>
    </div>
   </div>

    <form action="#" method="post" class="row g-3">

       <div class="col-md-6">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname" value="<?php echo $firstName;?>">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname" value="<?php echo $lastName;?>">
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $email;?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" value="<?php echo $password;?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="<?php echo $address;?>">
  </div>
 
  <div class="col-md-4">
    <label for="inputState" class="form-label">Gender</label>
    <select id="inputState" class="form-select" name="gender" >
      <option name="gender" value="choose">Choose...</option>
      <option name="gender" value="male" <?php if($gender=='male'){echo "selected";}?>
        >Male</option>
      <option name="gender" value="female" <?php if($gender=='female'){echo "selected";} ?>>Female</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $city;?>">
  </div>

   <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option  name="State">Choose...</option>
      <option name="state" value="West Bengal"
      <?php if($state=='West Bengal'){echo "selected";} ?>
      >West Bengal</option>
      <option name="state" value="Maharastra" 
      <?php if($state=='Maharastra'){echo "selected";} ?>>Maharastra</option>
      <option name="state" value="Delhi" 
      <?php if($state=='Delhi'){echo "selected";} ?>>Delhi</option>
      <option name="state" value="Goa" 
      <?php if($state=='Goa'){echo "selected";} ?>>Goa</option>
    </select>
  </div>


 
  <div class="col-12">
    <button type="submit" name="update" value="submit" class="btn btn-primary">Update</button>
  </div>
</form>


  </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- bootstrap js -->

<?php 

if(isset($_POST['update'])){

    $firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];

  $gender = null;
    if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
    }
$city = $_POST['city'];

 $state = null;
    if(isset($_POST['state'])){
        $state=$_POST['state'];
    }

    $link=mysqli_query($conn,"update user set ID='$id', FIRST_NAME='$firstName', LAST_NAME='$lastName', EMAIL='$email', PASSWORD='$password', ADDRESS='$address', GENDER='$gender', CITY='$city', STATE='$state' where ID='$id'");
    if($link){?>
<script>
    window.location.href="data.php";
   
</script>
<?php
}

}?>



</body>
</html>