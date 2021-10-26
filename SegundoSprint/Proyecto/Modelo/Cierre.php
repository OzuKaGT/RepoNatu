<?php 

 if(isset($_POST['Close'])){
    session_start();
    session_destroy();
    echo ("<meta http-equiv='refresh' content='3; url=../Index.php'>");
    echo ("Todo se cerró");
    exit();
 }

?>