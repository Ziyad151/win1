<?php 

//$FirstName = $_POST['FirstName'];
//$LastName = $_POST['LastName'];
//$Email = $_POST['Email'];

$Error = [
    'FirstNameError' => '',
    'LastNameError' => '',
    'EmailError' => '',
];
IF (isset($_POST['submit'])) {
$FirstName = mysqli_real_escape_string($conn,$_POST['FirstName']);
$LastName = mysqli_real_escape_string($conn,$_POST['LastName']);
$Email = mysqli_real_escape_string($conn,$_POST['Email']);
//echo $FirstName . ' ' . $LastName . ' ' . $Email;
 $SQL = "INSERT INTO users(FirstName, LastName, Email) VALUES ('$FirstName', '$LastName', '$Email')";

if (empty($FirstName)) {
    $Error['FirstNameError'] = 'أدخل الاسم الأول';
    
}if (empty($LastName)) {
    $Error['LastNameError'] = 'أدخل اسم العائلة';

}if (empty($Email)) {
    $Error['EmailError'] = 'أدخل الإيميل';


}elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
    $Error['EmailError'] = 'يرجى إدخال ايميل صحيح';

}else{
 if (mysqli_query($conn, $SQL)) {
    header('Location:index.php' );
 }else{
    echo 'Error' . mysqli_error($conn);

 }
}}