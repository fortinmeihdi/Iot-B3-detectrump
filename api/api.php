<?php
    header('Access-Control-Allow-Origin: *');
    $db = mysqli_connect('localhost','root', 'blop');
    mysqli_select_db($db, 'trumpbox');
    
    if(isset($_POST['get_data'])){
        $id = $_POST['get_data'];

        $sql = 'select SO_ID, SO_DATE from SOUND where BOX_ID = '.$id.'';
        $res = mysqli_query($db, $sql);
        $data1 = mysqli_fetch_all($res);
        
        $sql = 'select MO_ID, MO_DATE from MOVE where BOX_ID = '.$id.'';
        $res = mysqli_query($db, $sql);
        $data2 = mysqli_fetch_all($res);
        

        $data = ["sound"=>$data1,"move"=>$data2];

        if($data1 == null && $data2 == null){
            print(json_encode(["error"=>"true"]));
        }else{
            print(json_encode($data));
        }
    }
?>
