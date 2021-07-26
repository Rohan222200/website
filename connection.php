<?php




$server = "localhost";
$user = "root";
$password = "";
$dbname = "webregister";

$conn = mysqli_connect($server , $user , $password , $dbname);

if($conn){
    ?>
    <script>
        alert("Connection Successfully");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("not connected");
    </script>
    <?php
}
?>






?>