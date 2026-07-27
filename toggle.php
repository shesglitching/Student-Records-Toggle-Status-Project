<?php

require_once "db.php";

header('Content-Type: application/json');


$id = $_POST['id'] ?? null;

if (!$id || !is_numeric($id)) {
    echo json_encode(["success" => false, "message" => "Invalid ID"]);
    exit;
}


$stmt = $conn->prepare("SELECT status FROM records WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    
    $newStatus = $row['status'] == 1 ? 0 : 1;

    $update = $conn->prepare("UPDATE records SET status = ? WHERE id = ?");
    $update->bind_param("ii", $newStatus, $id);
    $update->execute();
    $update->close();

    echo json_encode(["success" => true, "id" => $id, "status" => $newStatus]);
} else {
    echo json_encode(["success" => false, "message" => "Record not found"]);
}

$stmt->close();
$conn->close();
?>
