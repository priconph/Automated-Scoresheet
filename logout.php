<?php
if(isset($_REQUEST['logoutBtn']))
{
    session_start();
    session_destroy();
    echo 
    '<script type="text/JavaScript">
            window.location.href = "index.php";
    </script>
    ';
}
?>