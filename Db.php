<?php


class Db
{

    protected PDO $dbh;
    private static $conn;

    public static function instance()
    {
        if(self::$conn == null) {
            self::$conn = new self();
        }
        return self::$conn;
    }

     private function __construct()
    {
        $config = new \App\Config();
        $dsn = "pgsql:host=" . $config->data['db']['host'] . ";port=" . $config->data['db']['port'] .";dbname=" . $config->data['db']['dbname'] . ";";
        try {
            $this->dbh = new \PDO($dsn, $config->data['db']['user'], $config->data['db']['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $exception) {
            throw new \Exceptions\DBException('You have to connect to database!');
        }
    }

    public function query($sql, $class = stdClass::class, $params = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

//    public function queryOne ($sql, $class = stdClass::class, $params = [])
//    {
//        $sth = $this->dbh->prepare($sql);
//        $sth->execute($params);
//        return $sth->fetchObject($class);
//    }

    public function execute($query, $params = []): bool
    {
        return $this->dbh->prepare($query)->execute($params);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }

}
