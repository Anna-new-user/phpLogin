<?php
    include("connection.php");

    if(isset($_POST['submit'])){
//THIS IS HOW WE EXTRACT INFO FROM TEXTBARS:
    $username = $_POST['user'];
    $password = $_POST['pass'];

//COMPARING DATA
    $sql = "select * from login where username = '$username' and password = '$password'";
    }

//SAVING RESULTS
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

//GOING TO WELCOME PAGE IF SUCCESSFUL
if($count == 1){
    header("Location:welcome.php");
}
else{
        echo("Login failed. Incorrect username or password");
}

?>