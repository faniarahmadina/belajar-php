<?php
include "koneksi.php";
//sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=4";
if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connection->error;
}



?>