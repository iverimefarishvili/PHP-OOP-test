<?php


class Database {
    protected function connect(){
      $this->servername='localhost';
      $this->username='root';
      $this->password='';
      $this->dbname='juniortest';
      $connection = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
      return $connection;
   }
}
