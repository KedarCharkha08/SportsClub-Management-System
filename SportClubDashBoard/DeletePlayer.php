<?php
include('Homepageconstants.php');
$regid = $_GET['id'];

$sql = "DELETE FROM casual_play WHERE reg_id='$regid'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result == TRUE) {
    $_SESSION['delete'] = "Event Deleted Successfully";
    header('location:http://localhost/sportsclub/sportclubdashboard/Bookings.php');
    exit(0);
} else {
    $_SESSION['delete'] = "Failed to delete Event";
    header('location:http://localhost/sportsclub/sportclubdashboard/Bookings.php');
    exit(0);
}
