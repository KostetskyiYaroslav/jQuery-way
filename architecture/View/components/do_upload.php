<?php
session_start();

if($_POST['upload'] == "1")
{
    $to = '../../../components/uploads/' . $_FILES['file']['name'];

    if (file_exists($to)) {
        echo 'File existing!';
        exit('<p><a href="javascript:history.go(-1)">&laquo; Go Back</a> /' .
             '<a href="http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER["SERVER_PORT"] .'/less13">Go Home &raquo;</a></p>');
    } else
        move_uploaded_file($_FILES['file']['tmp_name'], $to);

    if(isset($_FILES['file'])){
        $file = $_FILES['file'];
        $file['date'] = date("l jS \of F Y h:i:s A");

        $_SESSION['file'] = array(
            'fileName' => $file['name'],
            'fileSize' => $file['size'],
            'fileDate' => $file['date']
        );
    }

    header("Location: http://".$_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"]."/less13/index.php");
    die();
}
