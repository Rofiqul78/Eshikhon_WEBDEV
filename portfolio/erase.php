<?php
include 'db_config.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $tables = array(
    'about_table' => 'about_admin.php',
    'exp_table' => 'exp_admin.php',
    'edu_table' => 'edu_admin.php',
    'skill_table' => 'skill_admin.php',
    'int_table' => 'int_admin.php',
    'award_table' => 'award_admin.php'
  );

  foreach ($tables as $table => $redirect) {
    $sql = "DELETE FROM $table WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query){
      header("location: $redirect");
      exit;
    }
  }
}
?>
