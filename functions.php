<?php
    require_once './Services/Database.php';


    echo $_POST['method']();

    function GetNewsTitle()
    {
    $database = new Database();
    $return = new stdClass();
    $return->success = true;
    $return->errorMessage = "";
    $return->data = $database->GetNewsTitle(); 
    $json = json_encode($return);
    return $json;
    }

    function GetCategories()
    {
    $database = new Database();
    $return = new stdClass();
    $return->success = true;
    $return->errorMessage = "";
    $return->data = $database->GetCategories(); 
    $json = json_encode($return);
    return $json;
    }
?>