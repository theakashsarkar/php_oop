<?php
class ServerLoadException extends Exception {}
class NetworkException extends Exception {}
class DiskFullException extends Exception {}

interface NetworkStorage {
    function connect();
    function getName();
}

class MySQLServer implements NetworkStorage {
    function connect() {
        throw new DiskFullException();
    }
    function getName() {
        return 'MYSQL';
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
}
class MSSQLServer implements NetworkStorage {
    function connect() {
        throw new ServerLoadException();
    }
    function getName() {
        return "MSSQL";
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
            } catch ( NetworkException $e ) {
                echo $stroage->getName() . "has It's full disk\n";
            } catch ( DiskFullException $e ) {
                echo $stroage->getName() . " Has having some problam\n";
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