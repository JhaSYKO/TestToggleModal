<?php 

function test($id) {
    $sql = "SELECT * FROM veilles WHERE id = " . $id;
    $sth = $this->pdo->prepare($sql);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    return $result;
}