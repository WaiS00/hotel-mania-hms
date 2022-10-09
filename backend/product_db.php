<?php
require_once "DBController.php";

class product_db extends DBController{

    function getAllProduct()
    {
        $query = "SELECT * FROM roomtypedb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getNormal()
    {
        $query = "SELECT * FROM roomtypedb WHERE roomType='Normal'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getDeluxe()
    {
        $query = "SELECT * FROM roomtypedb WHERE roomType='Deluxe'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getExecutive()
    {
        $query = "SELECT * FROM roomtypedb WHERE roomType='Executive'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getRoomType()
    {
        $query = "SELECT roomType FROM roomtypedb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function cartItem()
    {
        $query = "SELECT * FROM bookingcartdb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getRoomRate()
    {
        $query   = "SELECT * FROM bookingcartdb b, roomtypedb c WHERE b.roomType= c.roomType";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getBookingHistory()
    {
        $query = "SELECT * FROM bookingdb WHERE userId = '{$_SESSION['userId']}'";

        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getUserInfo()
    {
        $query = "SELECT * FROM userdb WHERE userId = '{$_SESSION['userId']}'";

        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getWorkerInformation()
    {
        $query = "SELECT * FROM workerdb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getRating()
    {
        $query = "SELECT * FROM ratingdb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }
    
    function getAttendance()
    {
        $query = "SELECT * FROM attendancedb WHERE fullName = '{$_SESSION['fullName']}'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getAllAttendance()
    {
        $query = "SELECT * FROM attendancedb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    public function getData($query)
	{		
        $productResult = $this->getDBResult($query);
        return $productResult;
	}   

}

?>
