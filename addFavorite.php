<?php
require_once 'config2.php';
$userid = mysqli_real_escape_string($connexion,$_POST['userid']);
$thumb = mysqli_real_escape_string($connexion,$_POST['thumb']);
$url = mysqli_real_escape_string($connexion,$_POST['url']);
$des = trim(mysqli_real_escape_string($connexion,$_POST['des']));

$result = mysqli_query($connexion,"INSERT INTO favorite(`user_id`, `thumb`, `url`,`des`) VALUES ('$userid','$thumb','$url','$des')");
if ($result) {
    echo json_encode(array('result'=>1));
}else{
    echo json_encode(array('result'=>0,'error'=>  mysqli_errno($connexion)));    
}
?>