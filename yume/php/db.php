<?php

class DB
{
    // Объект класса PDO
    private $db;

    // Соединение с БД
    public function __construct()
    {
        $host = 'localhost';
        $db = 'db_dyelog';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';
        $this->db = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $charset, $user, $pass);
    }

    // Операции над БД
    public function query($sql, $params = [])
    {
        // Подготовка запроса
        $stmt = $this->db->prepare($sql);

        // Обход массива с параметрами и подставление значений
        if(!empty($params)){
            foreach ($params as $key => $value){
                $stmt->bindValue(":$key", $value);
            }
        }

        // Выполнение запроса
        $stmt->execute();
        
        // Возвращение ответа в виде ассоциативного массива
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>