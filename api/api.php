<?php
    header('Access-Control-Allow-Origin: *');
    $db = mysqli_connect('localhost','root', '');
    mysqli_select_db($db, 'trumpbox');
    
    if(isset($_POST['get_data'])){
        $id = $_POST['get_data'];

        $sql = 'CALL get_sound('.$id.')';
        $res = mysqli_query($db, $sql);
        $data1 = mysqli_fetch_all($res);
        $data2 = "";
        /*
        $sql = 'CALL get_move('.$id.')';
        $res = mysqli_query($db, $sql);
        $data2 = mysqli_fetch_all($res);
        */

        $data = ["sound"=>$data1,"move"=>$data2];

        if($data1 == null && $data2 == null){
            print(false);
        }else{
            print(json_encode($data));
        }
    }
?>