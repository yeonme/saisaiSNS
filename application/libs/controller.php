<?php

// 컨트롤러들은 이 클래스를 상속받게 한다...

class Controller
{
    public $db = null;

    /**
     * 생성자
     * DB 연결이 존재하면 그대로 반환하고, 아니면 연결을 생성하고 가져온다.
     */
    public function __construct()
    {
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    /**
     * DB 연결이 있으면 해제한다.
     */
    public function __destruct()
    {
        if (self::$db) {
            self::$db->close();
        }
        $db = null;
    }

    public function loadModel($model_name)
    {
        require 'application/models/' . strtolower($model_name) . '.php';
        return new $model_name($this->db);
    }

}
