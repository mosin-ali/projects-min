<?php
session_start();
session_destroy(); 
echo"<script>alert('logout account sucssefully.');
window.location='login.php';
</script>";
?>