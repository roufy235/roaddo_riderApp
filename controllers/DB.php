<?php
class DB {
    public array $response = array();
    public PDO $conn;
    protected array $_emptyJson;
    protected string $_todayDate;

    public function __construct () {
        $this->response['status'] = false;
        $this->response['statusStr'] = '';
        $this->_todayDate = Date('Y-m-d H:i:s');
        /** @noinspection PhpUnhandledExceptionInspection */
        $this->_emptyJson = json_decode('{}', true, 512, JSON_THROW_ON_ERROR);
        try {
            $this->conn = new PDO('mysql:dbname='.$_ENV['DB_NAME'].';host='.$_ENV['DB_HOST'], $_ENV['USER'], $_ENV['PASSWORD']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'connected';
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}
