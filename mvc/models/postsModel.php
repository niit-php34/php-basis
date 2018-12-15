<?php
require 'DB.php';
class postsModel
{
    const TABLE_NAME = 'posts';
    var $pdo;

    function __construct()
    {
        $db = new DB();
        $this->pdo = $db->connect();
    }

    function getAll()
    {
        $stmn = $this->pdo->prepare('SELECT * from '.self::TABLE_NAME);
        $stmn->execute();
        $row = array();
        while ($r=$stmn->fetch(PDO::FETCH_OBJ)) {
            array_push($row, $r);
        }
        return $row;
    }

    function delete($id)
    {
        $stmn = $this->pdo->prepare('DELETE FROM '.self::TABLE_NAME.' WHERE id=?');
        $stmn->execute(array($id));
    }

    function update($id, $title, $content)
    {
        $stmn = $this->pdo->prepare('UPDATE '.self::TABLE_NAME.'
         SET title=:title,
         SET content=:content WHERE id=:id');
        $stmn->execute(
            array(
                ':title'=>$title,
                ':content'=>$content,
                ':id'=>$id
            )
        );
    }

    function insert($title, $content)
    {
        $stmn = $this->pdo->prepare('INSERT INTO '.self::TABLE_NAME.'(title,content) VALUES(:title,:content)');
        $stmn->execute(
            array(
                ':title'=>$title,
                ':content'=>$content
            )
        );
    }

    function findById($id)
    {
        $stmn = $this->pdo->prepare('SELECT * from '.self::TABLE_NAME.' WHERE id=?');
        $stmn->execute(array($id));
        return $stmn->fetch(PDO::FETCH_ASSOC);
    }
}
