<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "UPDATE tasks SET is_completed = 1 WHERE id = $id";
    $conn->query($sql);
}
header("Location: index.php");
exit;
