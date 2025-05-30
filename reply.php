<?php
include('admin/dbcon.php');
include('session.php');
$sender_id = $_POST['sender_id'];
$sender_name = $_POST['sender_name'];
$my_name = $_POST['reciever_name'];
$my_message = $_POST['content'];

mysqli_query($conn,"insert into message (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$sender_id','$my_message',NOW(),'$session_id','$sender_name','$my_name')")or die(mysqli_error());
mysqli_query($conn,"insert into message_sent (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$sender_id','$my_message',NOW(),'$session_id','$sender_name','$my_name')")or die(mysqli_error());
?>