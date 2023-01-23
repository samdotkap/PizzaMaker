<?php 

$conn = mysqli_connect('localhost', 'Shmuel', 'test1234', 'ninja_pizza');
if(!$conn){
    echo "Connection Error:" . mysqli_connect_error();
}

?>