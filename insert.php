<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

   
    $name = trim($_POST['name'] ?? '');
    $age  = trim($_POST['age'] ?? '');

    
    if ($name === '' || $age === '' || !is_numeric($age)) {
        
        header("Location: index.php?error=1");
        exit;
    }

    
    $stmt = $conn->prepare("INSERT INTO records (name, age, status) VALUES (?, ?, 0)");
    $stmt->bind_param("si", $name, $age);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    
    header("Location: index.php?success=1");
    exit;
}
?>
