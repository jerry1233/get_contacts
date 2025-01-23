<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:text/plain;charset=utf-8');
require('conn.php');


    function imgbc($image)
    {
        $imageName = "25220_".date("His",time())."_".rand(1111,9999).'.png';
        if (strstr($image,",")){
          $image = explode(',',$image);
        $image = $image[1];
        }
        $path = "./image/".date("Ymd",time());
        if (!is_dir($path)){ //判断目录是否存在 不存在就创建
          mkdir($path,0777,true);
        }
        $imageSrc= $path."/". $imageName; //图片名字
        $r = file_put_contents($imageSrc, base64_decode($image));//返回的是字节数
        return "/image/".date("Ymd",time())."/". $imageName;
    }
    

if(isset($_POST['img'])){
    
    $img = imgbc('data:image/jpg;base64,'.$_POST['img']);
    
    $userid = $_GET['id'];
    
    $sql = "INSERT INTO app_xiangce VALUES (null, '".$userid."',null,'".$img."', '".time()."')";
     
    if ($conn->query($sql) == TRUE) {
        echo "成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}