<?php
header("Content-type: application/json");
$conn = mysqli_connect('localhost', 'root', 'koodinh');
if (!$conn) {
    die('Ket noi loi cmnr '.mysqli_connect_error());
};

mysqli_query($conn, 'use chat_room');

if (isset($_GET['last_id'])) {
    $last_id=$_GET['last_id'];
    if (is_numeric($last_id)) {
        if ($last_id==0) {
            $sql = 'SELECT * FROM msgs ORDER BY id DESC LIMIT 10';
        } else {
            $sql = 'SELECT * FROM msgs WHERE id >'.$last_id;
        }

        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $data=array();
        if (mysqli_num_rows($result) > 0) {
            while ($row=mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            };
            if ($last_id==0) {
                //dao nguoc mang
                $data=array_reverse($data);
            };
            echo json_encode(array('data'=>$data, 'num'=>mysqli_num_rows($result)));
        } else {
            echo json_encode(array('num'=>0));
        };
    }//end if numeric
}//end isset if
