<?php

class Mongo extends Database implements Crud , Log , Search {
    public function connect()
    {
        // TODO: Implement connect() method.
        $conection = new MongoClient("mongodb://example.com:65432" );
    }
    public function insert(){

    }
    public function create()
    {
        // TODO: Implement create() method.
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }
    public function update()
    {
        // TODO: Implement update() method.
    }
    public function search()
    {
    }

    public function readLog()
    {
        // TODO: Implement readLog() method.
    }
    public function writeLog()
    {
        // TODO: Implement writeLog() method.
    }
}