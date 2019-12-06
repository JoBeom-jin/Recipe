<?php
    session_start();
    

    $_SESSION['is_logged'] = "NO";

    session_destroy();
    echo '<meta http-equiv="refresh" content="0;url=index.php" />';
?>
