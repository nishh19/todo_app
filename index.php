<?php
require 'config.php';
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="quote-banner">
        📌 “The secret of getting ahead is getting started.” – Mark Twain
    </div>
    <div class="container">
        <h1>My Tasks</h1>

 
        <form action="add.php" method="POST">
            <input type="text" name="title" placeholder="Add a new task" required>
            <button type="submit">Add</button>
        </form>

        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
                <li class="<?= $row['is_completed'] ? 'completed' : '' ?>">
                    <span class="task-text"><?= htmlspecialchars($row['title']) ?></span>
                    <div class="actions">
                        <?php if (!$row['is_completed']): ?>
                            <form action="complete.php" method="GET">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button title="Mark as complete">✅</button>
                            </form>
                        <?php endif; ?>
                        <form action="delete.php" method="GET" onsubmit="return confirm('Delete this task?')">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button title="Delete task">🗑️</button>
                        </form>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>
