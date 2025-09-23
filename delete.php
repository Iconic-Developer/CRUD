<?php
include('connection.php');
$id=$_GET['id'];

$link= mysqli_query($conn, "delete from user where ID='$id' ");

if($link){
    ?>
    <script>
        window.location.href="data.php";
    </script>
    <?php
}

?>
