<?php



      if (isset($_COOKIE['data_username'])) {
        setcookie("data_username", "", time() - 3600, "/");
        unset($_COOKIE['data_username']);
       }
       header('Location: index.php');
    
  ?>