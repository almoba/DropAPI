<?php

require 'app/start.php';


$_SESSION['token'] =list($accessToken)=$webAuth->finish($_GET);

header('Location: index.php')



  ?>
