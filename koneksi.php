<?php
class DBconfig
{
    private $_host = 'localhost'; 
    private $_username = 'ramdan';
    private $_password = '';
    private $_database = 'dbsiswa';

    protected $connection;

    public function _construct()
    {
        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}

$conn = mysqli_connect('localhost','ramdan','','dbsiswa');

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
