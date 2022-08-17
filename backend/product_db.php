<?php
require_once "DBController.php";

class product_db extends DBController{

    function getAllProduct()
    {
        $query = "SELECT * FROM roomdb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getNormal()
    {
        $query = "SELECT * FROM roomdb WHERE roomType='Normal'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getDeluxe()
    {
        $query = "SELECT * FROM roomdb WHERE roomType='Deluxe'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getExecutive()
    {
        $query = "SELECT * FROM roomdb WHERE roomType='Executive'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getRoomType()
    {
        $query = "SELECT roomType FROM roomdb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }
}

?>
