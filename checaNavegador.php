<?php 
    //echo $_SERVER["HTTP_USER_AGENT"];


    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
        echo 'Você usa internet explorer. <br />';
    } else {
        echo 'Não ta usando oque eu achei que seria.'; //ou não achou o arquivo 'MSIE'
    }
?>