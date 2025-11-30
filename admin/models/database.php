<?php
// 1. Bật hiển thị mọi lỗi (để nếu sai sẽ hiện chữ lên màn hình thay vì trang trắng)
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
ini_set('display_errors', 1);

// 2. Xác định đường dẫn file config
// Đi ra khỏi thư mục 'models', ra khỏi 'admin' -> Về thư mục gốc -> Vào 'models'
$config_path = __DIR__ . '/../../models/config.php';

// 3. Kiểm tra xem file config có tồn tại không TRƯỚC khi gọi
if (!file_exists($config_path)) {
    // Nếu không thấy file, in ra đường dẫn hệ thống đang tìm để bạn kiểm tra
    die("<h3>LỖI NGHIÊM TRỌNG: Không tìm thấy file config!</h3><br>" . 
        "Hệ thống đang tìm file tại đường dẫn: <strong>" . $config_path . "</strong><br>" .
        "Vui lòng kiểm tra lại xem file config.php của bạn đang nằm ở đâu.");
}

// Nếu file tồn tại thì mới gọi vào
include_once($config_path);

class database {
    // Dùng 'public' thay vì 'var' để chuẩn PHP mới
    public $_dbh = '';
    public $_sql = '';
    public $_cursor = NULL;        
    
    public function __construct() {
        // Kiểm tra xem Hằng số đã được định nghĩa trong config.php chưa
        if (!defined('DB_HOST')) {
            die("<h3>LỖI: File config.php đã được nạp nhưng không chứa thông tin DB_HOST.</h3>" . 
                "Vui lòng mở file models/config.php và kiểm tra xem đã có dòng 'define' chưa.");
        }

        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        
        try {
            $this->_dbh = new PDO($dsn, DB_USER, DB_PWD);
            $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $this->_dbh->query('set names "utf8"');
        } catch (PDOException $e) {
            die('<h3>Lỗi kết nối Database:</h3> ' . $e->getMessage());
        }
    }
    
    public function setQuery($sql) {
        $this->_sql = $sql;
    }
    
    public function execute($options=array()) {
        $this->_cursor = $this->_dbh->prepare($this->_sql);
        if($options) {  
            for($i=0;$i<count($options);$i++) {
                $this->_cursor->bindParam($i+1,$options[$i]);
            }
        }
        $this->_cursor->execute();
        return $this->_cursor;
    }
    
    public function loadAllRows($options=array()) {
        if(!$options) {
            if(!$result = $this->execute()) return false;
        } else {
            if(!$result = $this->execute($options)) return false;
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function loadRow($option=array()) {
        if(!$option) {
            if(!$result = $this->execute()) return false;
        } else {
            if(!$result = $this->execute($option)) return false;
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }
    
    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute()) return false;
        } else {
            if(!$result = $this->execute($option)) return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
    
    public function getLastId() {
        return $this->_dbh->lastInsertId();
    }
    
    public function disconnect() {
        $this->_dbh = NULL;
    }
}
?>