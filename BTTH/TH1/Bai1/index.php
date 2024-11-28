<?php include 'config.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
if ($_SESSION['role'] === 'admin') {
    header('Location: views/admin_view.php');
    exit;
} else {
    header('Location: views/guest_view.php');
    exit;
}
?>
