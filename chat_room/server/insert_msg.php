<?php
header("Content-type: application/json");
$conn = mysqli_connect('localhost', 'root', 'koodinh');
if (!$conn) {
    die('Ket noi loi cmnr '.mysqli_connect_error());
};
mysqli_query($conn, 'use chat_room');

if (isset($_POST['user_name'])) {
    $username= $_POST['user_name'];
    $msg = $_POST['msg'];
    //chen vao csdl
    mysqli_query($conn, 'INSERT INTO msgs(username,message) VALUES("'.$username.'","'.$msg.'")');
    echo json_encode(array('username'=>$username,'message'=>$msg));
}
