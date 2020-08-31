<?php 

class Database{
	private $dsn = "mysql:host=localhost; dbname=shopee";
	private $dbuser = "root";
	private $dbpass = "";

	public $conn;

	public function __construct(){

		try{
			$this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);

		}catch(PDOException $e){
			echo 'Error:'.$e->getMessage();
		}
		return $this->conn;
	}

	//check Inputs

	public function test_input($data){

		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}

	//function for displaying Error and sucees Messages

	public function showMessage($type,$message){
		return '<div class = "alert alert-'.$type.' alert-dismissible">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong class="text-center">'.$message.'</strong>
				</div>';
    }
    
    //get token

    public function getToken($len) {

        $rand_str = md5(uniqid(mt_rand(), true));
        $base64_encode = base64_encode($rand_str);
        $modified_base64_encode = str_replace(array('+', '='), array('', ''), $base64_encode);
        $token = substr($modified_base64_encode, 0, $len);
        return $token;

    }
}

 ?>