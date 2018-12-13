<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] .'/myshop/config.php'; ?>
<?php


$_registerController = new controllers\Register();
$_output =  $_registerController-> register($_POST["userName"], $_POST["email"], $_POST["password"]);

?>
<p><?= $_output ?></p>