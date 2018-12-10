<?php
header("Content-type: application/json");
$conn = mysqli_connect('localhost', 'root', 'koodinh');
if (!$conn) {
    die('Ket noi loi cmnr '.mysqli_connect_error());
};

mysqli_query($conn, 'use chat_room');

$sql = 'SELECT * FROM msgs ORDER BY id DESC LIMIT 10';
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$data=array();
if (mysqli_num_rows($result) > 0) {
    while ($row=mysqli_fetch_assoc($result)) {
        array_push($data, $row);
    };
    echo json_encode(array('data'=>$data, 'num'=>10));
} else {
    echo json_encode(array('num'=>0));
};
