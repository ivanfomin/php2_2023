<?php

abstract class Model
{

    protected const TABLE = '';

    public int $id;

    public static function findAll(): array
    {
        $db = \Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id';
        return $db->query($sql, static::class);
    }

    public static function findById($id): static
    {
        $db = \Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';

        return $db->query($sql, static::class, ['id' => $id])[0];
    }

    protected function insert()
    {
        $props = get_object_vars($this);

        $columns = [];
        $binds = [];
        $params = [];
        foreach ($props as $name => $value) {
            $columns[] = $name;
            $binds[] = ':' . $name;
            $params[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(',', $columns) . ') VALUES (' . implode(',', $binds) . ');';

        $db = \Db::instance();
        $db->execute($sql, $params);
        $this->id = $db->lastId();
    }

    protected function update()
    {
        $props = get_object_vars($this);

        $params = [];
        $prepare = '';
        foreach ($props as $name => $value) {
            $prepare .= $name . ' = :' . $name . ', ';
            $params[':' . $name] = $value;
        }

        $sql = 'UPDATE ' . static::TABLE . ' SET ' . mb_substr($prepare, 0, -2) . ' WHERE id=:id';

        $db = \Db::instance();
        $db->execute($sql, $params);

    }

    public function save()
    {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {
        if (!empty($this->id)) {
            $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id;';
            $db = \Db::instance();
            $db->execute($sql, [':id' => $this->id]);
        }

    }

}
