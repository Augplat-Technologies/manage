<?php
$server='localhost';
$username='mykampai_zentao';
$password='LU8L3v=hU#uO';
$db='mykampai_zentao';
$conn=mysqli_connect($server,$username,$password,$db) ;

if($conn!=NULL)
{
    echo 'Hello world';
}


$query = "insert ignore into zt_module(root,name,grade,`order`,type) values(1,'Abc',1,10,'task')";
			mysqli_query($conn,$query);
?>