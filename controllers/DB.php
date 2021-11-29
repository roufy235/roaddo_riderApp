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

    public function login(array $loginData) : array {
        $hash = sha1($loginData['password']);
        $email = $loginData['email'];
        $stmt = $this->conn->prepare(app_login);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passwordStr', $hash);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $loginToken = TokenGenerator::createToken($row);
            setUserData($row, true);
            $this->response['token'] = $loginToken;
            $this->response['status'] = true;
        }
        return $this->response;
    }
}
