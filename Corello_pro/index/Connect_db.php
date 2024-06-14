<?
$conn = mysqli_connect('localhost', 'root ', '','new_db'
);
if($conn){
    echo"Successfull";

}else{
    echo"not connection";
}
?>