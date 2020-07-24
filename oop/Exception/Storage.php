<?php
class ServerLoadException extends Exception {}
class NetworkException extends Exception {}
class DiskFullException extends Exception {}

interface NetworkStorage {
    function connect();
    function getName();
    function report($data);
}

class MySQLServer implements NetworkStorage {
    function connect() {
        throw new DiskFullException();
    }
    function getName() {
        return 'MYSQL';
    }
    function report($data)
    {
        
    }
}

class PostgreSQLServer implements NetworkStorage {
    function connect() {
        var_dump($this);
        return $this;
        
    }
    function getName() {
        return "PostgreSql";
    }
    function report($data)
    {
        
    }
}
class MSSQLServer implements NetworkStorage {
    function connect() {
        throw new ServerLoadException();
    }
    function getName() {
        return "MSSQL";
    }
    function report($data)
    {
        
    }
}

class ConnectionPool {
    private $connection;
    private $stroage;
    function __construct() {
        $this->stroage = array();
    }
    function addStroage( NetworkStorage $stroage ) {
        array_push( $this->stroage, $stroage );
    }
    function getConnection() {
        foreach ( $this->stroage as $stroage ) {
            // print_r( $stroage );
            try {
                $this->connection = $stroage->connect();
            } catch ( ServerLoadException $e ) {
                echo $stroage->getName() . " Is facing hugh load\n";
                $stroage->report(array("ip"=>"10.133.133","error"=>"load"));
            } catch ( NetworkException $e ) {
                echo $stroage->getName() . "has It's full disk\n";
                $stroage->report(array("ip"=>"11.123.14","error"=>"Network"));
            } catch ( DiskFullException $e ) {
                echo $stroage->getName() . " Has having some problam\n";
                $stroage->report(array("ip"=>"14.1234.125","error"=>"DiskFull"));
            }
            if ( $this->connection ) {
                break;
            }
        }
        if ( $this->connection ) {
            return $this->connection;
        }
        return false;
    }
}
$mySql = new MySQLServer();
$postgrSql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$connection = new ConnectionPool();
$connection->addStroage( $mySql );
$connection->addStroage( $postgrSql );
$connection->addStroage( $mssql );

 $display = $connection->getConnection();
 print_r($display);