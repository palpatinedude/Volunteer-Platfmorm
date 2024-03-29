<?php
// update vehicle markers when the rescuer moves them on the map
session_start();
include("../../connection.php");


$markerId = $_POST['id'];
$newLatitude = $_POST['latitude'];
$newLongitude = $_POST['longitude'];

$sql = "UPDATE markers SET latitude = ?, longitude = ? WHERE marker_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ddi", $newLatitude, $newLongitude, $markerId);

if ($stmt->execute()) {
    echo "Coordinates updated successfully";
} else {
    echo "Error updating coordinates: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
