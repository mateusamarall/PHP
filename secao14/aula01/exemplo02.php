<?php

$images =  scandir("images");

$data =array();

foreach ($images as $img) {
    if(!in_array($img, array(".", ".."))){

        $filename = "images". DIRECTORY_SEPARATOR . $img;
        
        $info = pathinfo($filename);

        $info["size"] = filesize($filename);
        $info["modefied"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/PHP/secao14/aula01/". str_replace("\\","/",$filename);


        array_push($data, $info);
    }
}
echo json_encode($data);

?>