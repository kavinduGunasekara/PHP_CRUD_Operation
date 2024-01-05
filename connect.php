<?php
$con= new mysqli('localhost','root','','crudoperation');
if($con){


    echo "Con successsfull";
}else{


    die(mysqli_error($con));

}
?>