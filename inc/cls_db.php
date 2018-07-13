<?php
class SaisaiDB
{
    private static $db_handle = null; //singleton DB Connection

    /**
     * 생성자
     * DB 연결이 존재하면 그대로 반환하고, 아니면 연결을 생성하고 가져온다.
     */
    private function __construct()
    {
        $db_handle = mysqli_connect('localhost', DB_USER, DB_PASS, DB_NAME);
    }

    public static function getInstance()
    {
        if (self::$db_handle == null) {
            self::$db_handle = new SaisaiDB();
        }

        return self::$db_handle;
    }

    /**
     * DB 연결이 있으면 해제한다.
     */
    public function __destruct()
    {
        if (self::$db_handle) {
            self::$db_handle->close();
        }
        $db_handle = null;
    }

    public function query()
    {

    }
}
