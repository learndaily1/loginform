<?php
if (isset($_POST['submit'])) {

    $username = $_POST['FirstName'];
    $email = $_POST['Email'];
    $connection = mysqli_connect('localhost', 'root', '', 'signin');
    if (!$connection) {
        echo "Error";
    }
   
    
$result=mysqli_query($connection,"INSERT INTO table1(FirstName,Email) VALUES('$username', '$email')");
if(!$result){
    echo "Error";
}

}
?>