<?php


class DB {

    public function __construct ()
    {
      
    mysqli_connect("localhost", "root", "arsenaram081212","test");
    
    }
     
    public function  query ($sql, $class = 'stdClass')
    {
        
     $res = mysqli_query (mysqli_connect("localhost", "root", "arsenaram081212","test"), $sql);
     if (false===$res) {
        return false;        
     }
      
     $ret = [];
     while ($row = mysqli_fetch_object($res, $class)) {
        
       $ret[] = $row; 
        
     }
       return $ret;
    }

}


