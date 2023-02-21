<?php
require_once "../classes/database.class.php";

function performSearch($query) {
    // Reuse the existing database connection
    $db = new Database();
    $conn = $db->connect();
    
    // Prepare the SQL statement
    $sql = "SELECT username FROM students WHERE username LIKE :query OR school_id LIKE :query";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":query", '%' . $query . '%');
    
    // Execute the statement
    $stmt->execute();
    
    // Get the results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $results;
}
  