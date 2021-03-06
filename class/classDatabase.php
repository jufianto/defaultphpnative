<?php

require_once '../config/config.php';

class classDatabase
{
    public $mysqli;
    private $temp;
    private $data;
    protected $arrData;
    protected function openConnection()
    {
        $this->mysqli=new mysqli(dbhost, dbuser, dbpass, dbname);
        if($this->mysqli->connect_errno)
        {
            echo "Cannot connect to database with error : ".$this->mysqli->connect_error;
            exit();
        }
    }
    protected function closeConnection()
    {
        mysqli_close($this->mysqli);
    }
    
    protected function execSql($sql)
    {
        /*
         * untuk run sql query insert/update/delete
         */
        $this->temp=$this->mysqli->query($sql);
        if($this->temp)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    protected function fetchAll($sql)
    {
        /*
         * untuk run sql query select
         */
        $this->temp=$this->mysqli->query($sql);
        $this->data=$this->temp->num_rows;
        if($this->data===0)
        {
            return FALSE;
        }
        else
        {   
            /*
             * return value dengan array in array, untuk multiple record
             */
            $this->arrData=$this->temp->fetch_all();
            return $this->arrData;
        }
    }
    protected function fetchOne($sql)
    {
        /*
         * untuk run sql query select
         */
        $this->temp=$this->mysqli->query($sql);
        $this->data=$this->temp->num_rows;
        if($this->data===0)
        {
            return FALSE;
        }
        else
        {   
            /*
             * return value array untuk single record
             */
            $this->data=$this->temp->fetch_assoc();
            return $this->data;
        }
    }
}