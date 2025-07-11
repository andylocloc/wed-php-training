<?php
    if (isset($_GET['req'])) {
        $request = $_GET['req'];
        switch ($request) {
            case 'userview':
                require './element_VVHL/mUser/userView.php';
                break;
            case 'hanghoaView':
              require './element_VVHL/hanghoa/hanghoaView.php';
                break;
           
        }
    } else 
        
    
?>