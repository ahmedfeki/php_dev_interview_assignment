<?php
require_once 'config2.php';
$user_id = 1;
$favid = trim(mysqli_real_escape_string($connexion, $_GET['fav']));

$result = mysqli_query($connexion, "DELETE FROM favorite WHERE id='$favid' AND user_id='$user_id' ");
if ($result) {
    echo json_encode(array('result' => 1));
} else {
    echo json_encode(array('result' => 0, 'error' => mysqli_errno($connexion)));
}
?>
