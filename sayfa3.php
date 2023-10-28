<?php
session_start();

$_SESSION['page']++;
// echo $_SESSION['page'];
echo "Welcome, {$_SESSION['firstname']}";
?>

<h3>Sayfa 3</h3>
<br><br>
<a href="sayfa2.php">Sayfa 2</a><br><br>
<a href="sayfa3.php">Sayfa 3</a><br><br>
<a href="sayfa4.php">Sayfa 4</a><br><br>
<a href="exit.php">Çıkış</a><br>