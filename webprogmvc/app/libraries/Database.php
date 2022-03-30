<?php

/* PDO Database Class
 *  Connect To Database
 * Create Prepared Statements
 * Bind Values
 * Return rows and values
 */

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        // SET DNS 
        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';
        // Create PDO instance
        try {
            $this->dbh = new PDO($dns, $this->user, $this->pass);
            $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // Prepare Statement with query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    // Bind Value
    public function bind($param, $value)
    {
        $this->stmt->bindParam($param, $value);
    }

    // Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    // Get result set as array of object
    public function fetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    // Get single record as object
    public function fetch()
    {
        $this->execute();
        return $this->stmt->fetch();
    }

    // Get row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
