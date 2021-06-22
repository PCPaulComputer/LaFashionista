
<?php
//header template
require_once 'templates/header.tpl.php';
$fashion = new Fashion;
$subscribe = new Subscribe;
?>
<?php
    //Display landing page or other page contents - Single page application
    if (isset($_GET['page'])) {
        $fashion->display($_GET['page']);
    }elseif (!isset($_GET['page'])) {
        $fashion->display('cities');       
    }
?>
        
<?php 
  //footer template
  require_once 'templates/footer.tpl.php'; 
  ?>

