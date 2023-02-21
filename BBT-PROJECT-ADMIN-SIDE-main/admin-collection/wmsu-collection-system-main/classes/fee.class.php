<?php

require_once 'database.class.php';

class Fee {
    //attributes
    public $feeID;
    public $feeType;
    public $feeAmount;
    public $feeDescription;
    public $feeDueDate;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods
    function add(){
        $sql = "INSERT INTO fees (fee_id, fee_type, fee_amount, fee_description, fee_due_date) VALUES 
        (:fee_id, :fee_type, :fee_amount, :fee_description, :fee_due_date);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':fee_id', $this->feeID);
        $query->bindParam(':fee_type', $this->feeType);
        $query->bindParam(':fee_amount', $this->feeAmount);
        $query->bindParam(':fee_description', $this->feeDescription);
        $query->bindParam(':fee_due_date', $this->feeDueDate);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function update(){
        $sql = "UPDATE fees SET fee_type=:fee_type, fee_amount=:fee_amount, fee_description=:fee_description, fee_due_date=:fee_due_date WHERE fee_id=:fee_id";
    
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':fee_type', $this->feeType);
        $query->bindParam(':fee_amount', $this->feeAmount);
        $query->bindParam(':fee_description', $this->feeDescription);
        $query->bindParam(':fee_due_date', $this->feeDueDate);
        $query->bindParam(':fee_id', $this->feeID);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }


    function delete(){
        $sql = "DELETE FROM fees WHERE fee_id=:fee_id";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':fee_id', $this->feeID);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show(){
        $sql = "SELECT * FROM `fees` ORDER BY `fees`.`fee_id` ASC";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}

?>