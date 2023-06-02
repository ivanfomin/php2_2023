<?php


class Db
{

    protected PDO $dbh;

    public function __construct()
    {
        $db = include __DIR__ . '/config_local.php';
        $dsn = "pgsql:host=$db[host];port=$db[port];dbname=$db[dbname];";
        $this->dbh = new \PDO($dsn, $db['user'], $db['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
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

    public function execute($query, $params = [])
    {
        //var_dump($query);die();
        return $this->dbh->prepare($query)->execute($params);
    }

}
