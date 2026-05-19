<!DOCTYPE html>
<html lang="en">
<?php include 'header.inc'; ?>
<?php
session_start();
if (isset($_SESSION['user'])) {
echo "Welcome, ".$_SESSION['user'];
} else {
header('Location: login.php');
}
?>
<?php include 'footer.inc'; ?>
</html>