<?
require 'connecttion.php';
if(isset($_POST[ "submit"])){
    $yourname = $_POST[ "yourname"];
    $email = $_POST[ "email"];
    $subject = $_POST[ "subject"];
    $yourmessage = $_POST[ "yourmessage"];
    $query = "INSERT INTO tb_data VALUES('','$yourname', ,'$email','$subject','$yourmessage')";
    mysqli_query($conn, $query);
    echo
    "
    <script> alert ('Data Inserted Successs...') </script>
    
    ";
    
}
?>