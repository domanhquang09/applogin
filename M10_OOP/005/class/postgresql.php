<?php

class Postgresql extends Database implements Crud , Log , Search {
    public function connect()
    {
        // TODO: Implement connect() method.
        $db_connection = pg_connect("host=localhost dbname=DBNAME user=USERNAME password=PASSWORD");

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
