<?php

require_once "db.php";


$sql = "SELECT id, name, age, status FROM records ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Records - Toggle Status Project</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Records</h1>

    <?php if (isset($_GET['success'])): ?>
        <p class="message success">Record added successfully.</p>
    <?php elseif (isset($_GET['error'])): ?>
        <p class="message error">Please enter a valid Name and Age.</p>
    <?php endif; ?>

    <!-- Single-line form: Name, Age, Submit -->
    <form action="insert.php" method="POST" class="inline-form">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="number" name="age" placeholder="Enter your age" min="1" max="150" required>
        <button type="submit">Submit</button>
    </form>

 
    <table id="recordsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr id="row-<?php echo $row['id']; ?>">
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['age']); ?></td>
                        <td>
                            <span class="status-badge" id="status-<?php echo $row['id']; ?>">
                                <?php echo $row['status']; ?>
                            </span>
                        </td>
                        <td>
                            <button
                                class="toggle-btn"
                                data-id="<?php echo $row['id']; ?>"
                                onclick="toggleStatus(<?php echo $row['id']; ?>)">
                                Toggle
                            </button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="5">No records yet. Add one above.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="script.js"></script>
</body>
</html>
<?php $conn->close(); ?>
