<?php
// Hiển thị lỗi để dễ debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load config (nằm trong thư mục models/)
include_once(__DIR__ . '/config.php');

class database {

    protected $_dbh = null;
    protected $_sql = '';
    protected $_cursor = null;

    public function __construct() {
        // Kiểm tra biến cấu hình
        if (!defined('DB_HOST')) {
            die("<h3>LỖI: Không load được config.php</h3>");
        }

        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";

        try {
            $this->_dbh = new PDO($dsn, DB_USER, DB_PWD);
            $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("<h3>Lỗi kết nối Database:</h3> " . $e->getMessage());
        }
    }

    // Gán câu SQL
    public function setQuery($sql) {
        $this->_sql = $sql;
    }

    // Chuẩn bị + thực thi
    public function execute($options = array()) {
        if ($this->_dbh === null) {
            die("<h3>LỖI: PDO chưa được khởi tạo. Constructor không chạy!</h3>");
        }

        $this->_cursor = $this->_dbh->prepare($this->_sql);

        if ($options) {
            for ($i = 0; $i < count($options); $i++) {
                $this->_cursor->bindParam($i + 1, $options[$i]);
            }
        }

        $this->_cursor->execute();
        return $this->_cursor;
    }

    public function loadAllRows($options = array()) {
        $result = $this->execute($options);
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function loadRow($options = array()) {
        $result = $this->execute($options);
        return $result->fetch(PDO::FETCH_OBJ);
    }

    public function loadRecord($options = array()) {
        $result = $this->execute($options);
        return $result->fetch(PDO::FETCH_COLUMN);
    }

    public function getLastId() {
        return $this->_dbh->lastInsertId();
    }

    public function disconnect() {
        $this->_dbh = null;
    }
}
?>
