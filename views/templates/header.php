<?php
if (!isset($_SESSION)) {
  session_start();
}
$auth = $_SESSION['login'] ?? false;
?>
<header>
  <div class="">
    <h3>Header</h3>
  </div>
</header>