<?php
function connect($connString = connString, $user = user, $pass = pass) {
    try {
        // $connString = "mysql:host=localhost;dbname=artwork";
        // $user = "root";
        // $pass = "123456";


        $pdo = new PDO($connString, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Print host information
        //echo "Connect Successfully. Host info: " . 
        //$pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));

        // $sql = "select * from users";
        // $result = $pdo->query($sql);

        // while ($row = $result->fetch()) {
        //     echo $row['name'] . "-" . $row['email'] . "<br/>";
        // }
        // $pdo = null;
        return $pdo;
    } catch (PDOException $e) {
        //throw $th;
        die($e->getMessage());
    }
}
//执行一条SQL语句，返回结果集对象或返回布尔值
function execute($pdo, $sql) {
    try {
        //code...
        $result = $pdo->query($sql);
        return $result;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
//执行一条SQL语句，返回布尔值


//一次性执行多条SQL语句
function execute_multi($conn, $arrayQuery) {
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, 1);

    $mx = true;
    $conn->beginTransaction();
    try {
        foreach ($arrayQuery AS $item) {
            $stmt = $conn->prepare($item["query"]);
            $stmt->execute($item["params"]);
            $result = $stmt->rowCount();
            if($result == 0)
                $mx = false;
         }
         if($mx == true)
             $conn->commit();
         else
             $conn->rollBack();
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Failed: " . $e->getMessage();
    }
    return $mx;
    
}
//获取记录数
function num($pdo, $sql_count) {
    $result = $pdo->query($sql_count);
    $count = $result->fetchColumn();
    return $count;
}
//数据入库之前进行转义，确保数据顺利入库

//关闭与数据库的连接
?>