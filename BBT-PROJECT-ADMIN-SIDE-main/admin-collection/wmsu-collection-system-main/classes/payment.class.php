<?php
require_once "database.class.php";

//This is unofficial and unfinished.
//will wait muna sa final confirmation ng erd about sa flow ng payment para mapicture out ko ano ba talaga.
class Payment extends Database{
    // Store input
    private $student_id;
    private $amount;

    //sanitize
    function __construct($student_id, $amount){
        $this->student_id = htmlspecialchars(strip_tags(trim($student_id)));
        $this->amount = htmlspecialchars(strip_tags(trim($amount)));
    }

    //method to pay fees
    function payFees(){
        // Connect to database
        $conn = $this->connect();
        // Check if the student exists
        $checkStudentStmt = $conn->prepare("SELECT * FROM wmsu_students WHERE student_id = :student_id");
        $checkStudentStmt->bindParam(':student_id', $this->student_id);
        if($checkStudentStmt->execute()){
            // Fetch the student data
            $studentResult = $checkStudentStmt->fetch();
            // If the student exists
            if($studentResult){
                // Prepare a db query to select data from the wmsu_students_fees where student_id is equal to the input.
                $stmt = $conn->prepare("SELECT * FROM wmsu_students_fees WHERE student_id = :student_id");
                // Bind the input value to the statement using data from the database
                $stmt->bindParam(':student_id', $this->student_id);
                // After binding, let's execute the statement
                if($stmt->execute()){
                    // Fetch data
                    $result = $stmt->fetch();
                    // If there is a result
                    if($result){
                        // Update the amount in the database
                        $updateStmt = $conn->prepare("UPDATE wmsu_students_fees SET amount_paid = amount_paid + :amount WHERE student_id = :student_id");
                        $updateStmt->bindParam(':amount', $this->amount);
                        $updateStmt->bindParam(':student_id', $this->student_id);
                        if($updateStmt->execute()){
                            return true;
                        }
                    }
                }
            }
        }
        return false;
    }
}