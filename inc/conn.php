<?php 

 // XAMPP ماله باسوورد افتراضي مثل MAMP
$conn = mysqli_connect('localhost','root','','ziyad_albarakati');
if (!$conn) {
    echo 'Error' . mysqli_connect_error();

}