<?php
/*****************************
FAZ A NAVEGAÇÃO AMIGÁVEL
 *****************************/
    $url = $_GET['url'];
    $url = explode('/',$url);
    $url[0] = ($url[0] = null ? 'index': $url[0]);
    
