<?php
include ('connection.php');


if(isset($_POST['submit'])){

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

$link = mysqli_query ($conn, "insert into user (ID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, ADDRESS, GENDER, CITY, STATE) values (NULL, '$firstName', '$lastName', '$email', '$password', '$address', '$gender', '$city', '$state')");

if($link){?>
<script>
    window.location.href="data.php";
</script>
    
<?php
}
};