<?php

/* 
 *listoffercontroler
 */
include "../../models/list.php";
$tablename = "offers";

    $listobject = new Display($tablename);
    $listoffers = $listobject->getAllData();
            
    //include "../../views/vendor/listOffer.php";
?>
