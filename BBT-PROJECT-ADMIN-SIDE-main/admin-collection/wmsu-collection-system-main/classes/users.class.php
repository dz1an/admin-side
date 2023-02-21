<?php

// Include the database class
require_once 'database.class.php';

// Declare the Users class
class Users{

    // Class properties
    public $id;
    public $username;
    public $password;
    public $email;
    public $type;

    // protected property to store the database connection
    protected $db;

    // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

    // Method to log a user in
    function log_in(){
        // SQL statement to retrieve the user with the matching username and password
        $sql = "SELECT * FROM users WHERE BINARY user_name = :username AND BINARY user_password = :password;";

        // Prepare the SQL statement for execution
        $query=$this->db->connect()->prepare($sql);

        // Bind the parameters to the SQL statement
        $query->bindParam(':username', $this->username);
        $query->bindParam(':password', $this->password);

        // Execute the SQL statement
        if($query->execute()){
            // Check if the user was found
            if($query->rowCount()>0){
                // Return true if the user was found
                return true;
            }
        }
        // Return false if the user was not found
        return false;
    }

    // Method to retrieve the user's account information
    function get_users_info($id=0){
        // Check if the id parameter was provided
        if($id == 0){
            // SQL statement to retrieve the user with the matching username and password
            $sql = "SELECT * FROM users WHERE BINARY user_name = :username AND BINARY user_password = :password;";

            // Prepare the SQL statement for execution
            $query=$this->db->connect()->prepare($sql);

            // Bind the parameters to the SQL statement
            $query->bindParam(':username', $this->username);
            $query->bindParam(':password', $this->password);
        }else{
            // SQL statement to retrieve the user with the matching id
            $sql = "SELECT * FROM users WHERE user_id = :id;";

            // Prepare the SQL statement for execution
            $query=$this->db->connect()->prepare($sql);

            // Bind the parameter to the SQL statement
            $query->bindParam(':id', $id);
        }

        // Execute the SQL statement
        if($query->execute()){
            // Fetch the data
            $data = $query->fetchAll();
        }
        // Return the data
        return $data;
    }


    function get_all_users(){
        // SQL statement to retrieve all users
        $sql = "SELECT * FROM users;";
    
        // Prepare the SQL statement for execution
        $query=$this->db->connect()->prepare($sql);
    
        // Execute the SQL statement
        if($query->execute()){
            // Fetch the data
            $data = $query->fetchAll();
        }
        // Return the data
        return $data;
    }

}

?>

<!-- INCASE IF I WANT TO MAKE only ROLE TABLE for collector Because only officer can-->
<!-- // Check if the user is an officer
if ($_SESSION['role_type'] !== 'officer') {
  // If the user is not an officer, return an error message
  echo 'Error: Only officers can create collector users.';
  exit;
}

// If the user is an officer, proceed with creating the collector user

// Insert the collector user into the database
$sql = "INSERT INTO users (username, password, role_id) VALUES (:username, :password, :role_id)";
$query = $db->prepare($sql);
$query->bindParam(':username', $username);
$query->bindParam(':password', $password);
$query->bindParam(':role_id', $role_id);
$query->execute();

// Return a success message
echo 'Success: Collector user created.'; -->


<!-- 
//Incase I want to change my db table of users to have fk of role.
    // function get_users_info($id=0){
    //     // Check if the id parameter was provided
    //     if($id == 0){
    //         // SQL statement to retrieve the user with the matching username and password, and join with the roles table to get the role_type
    //         $sql = "SELECT users.*, roles.role_type FROM users 
    //                 JOIN roles ON users.role_id = roles.role_id
    //                 WHERE BINARY user_name = :username AND BINARY user_password = :password;";
    
    //         // Prepare the SQL statement for execution
    //         $query=$this->db->connect()->prepare($sql);
    
    //         // Bind the parameters to the SQL statement
    //         $query->bindParam(':username', $this->username);
    //         $query->bindParam(':password', $this->password);
    //     }else{
    //         // SQL statement to retrieve the user with the matching id, and join with the roles table to get the role_type
    //         $sql = "SELECT users.*, roles.role_type FROM users 
    //                 JOIN roles ON users.role_id = roles.role_id
    //                 WHERE user_id = :id;";
    
    //         // Prepare the SQL statement for execution
    //         $query=$this->db->connect()->prepare($sql);
    
    //         // Bind the parameter to the SQL statement
    //         $query->bindParam(':id', $id);
    //     }
    
    //     // Execute the SQL statement
    //     if($query->execute()){
    //         // Fetch the data
    //         $data = $query->fetchAll();
    //     }
    //     // Return the data
    //     return $data;
    // } -->