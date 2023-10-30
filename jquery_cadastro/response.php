<?php
function response($error, $message){
    header('Content-type: application/json');
    echo json_encode((object) ["error"=>$error, "message"=>$message], JSON_UNESCAPED_UNICODE);
    die();
}

?>