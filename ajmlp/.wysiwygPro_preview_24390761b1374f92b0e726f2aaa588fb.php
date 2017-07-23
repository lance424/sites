<?php
if ($_GET['randomId'] != "ooCwXu27e2uHe8ZucLeoqyLrE6GA2InUrPgL3DbMoDuf54eEPekEs3tppHKArfVu") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
