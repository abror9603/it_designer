<?php

    include 'config.php';

    $pages = $_GET['pages'] ?? 'index';
   
    
    include $config['base']['path'] . '/webs/layout/index.php';

    