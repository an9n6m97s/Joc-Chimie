<?php

function title() {
    $pageTitle = basename($_SERVER['PHP_SELF'], '.php');
    $pageTitle = str_replace('_', ' ', $pageTitle);
    $pageTitle = ucwords($pageTitle);
    
    return $pageTitle;
}
    