<?php
if (isset($_POST['button']) && !empty($_POST['name']) && !empty($_POST['surname']) &&
!empty($_POST['birthday'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];

  require_once('./connect/connect.php');
//dokonczyc
  $sql = "INSERT INTO `user`(`id`, `name`, `surname`, `birthday`) VALUES
   ([value-1],[value-2],[value-3],[value-4])";
}else{
  header('location: ../');
}
 ?>
