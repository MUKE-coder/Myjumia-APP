<?php

require 'database.php';
class User extends Database{

    public function insertInto($fields,$table){
        //get table columns
        $columns = implode(',', array_keys($fields));
        
        $placeholder =implode(", :" , array_keys($fields));
        
        // create sql query
        //"INSERT INTO employees (name,email,password)VALUES(:name,:password,:email)";
        $sql = "INSERT INTO $table ($columns) VALUES (:".$placeholder.")";

        $stmt = $this->conn->prepare($sql);

        foreach ($fields as $key => $value) {
            $stmt->bindValue(':'.$key,$value);
        }
        $result =$stmt->execute();
        return $result;  
    }
    //fetch data

    public function getRecord($table){

        $result=$this->conn->query("SELECT*FROM $table");
        
        if($result->rowCount()>0){
            while ($row = $result->fetch()) {
               $data[] = $row;
            }
            return $data;
        }
    }

    public function SpecificRecord($id,$table){
        $sql ="SELECT * FROM $table WHERE id =:id";
		$stmt=$this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result =$stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
    }
    public function UpdateRecord($id,$fields,$table){
        $st ="";
        $counter=1;
        $total_fields =count($fields);
        foreach ($fields as $key => $value) {
            if($counter===$total_fields){
                $set ="$key=:".$key;
                $st =$st.$set;
            }else{
                $set ="$key=:".$key.", ";
                $st =$st.$set;
                $counter++;
            }
        }
        
        $sql ="";
        $sql .="UPDATE $table SET".$st;
        $sql .="WHERE id=".$id;
        
        $stmt = $this->conn->prepare($sql);

        foreach ($fields as $key => $value) {
            $stmt->bindValue(':'.$key,$value);
        }
        $result =$stmt->execute();
        return $result; 
    }
//delete record
    public function DeleteRecord($id,$table){
        $sql ="DELETE FROM $table WHERE id =:id";
		$stmt=$this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		
		
        
    }


}




?>