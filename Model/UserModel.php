<?php
include("Db/Db.php");

class UserModel extends Db
{


    public function insertUer($firstname, $lastname, $phone, $cin, $email,  $paword)
    {

        $con = $this->connect();

        $sql = $con->prepare("INSERT INTO `utilisateurs`( `firstname`, `lastname`,`phone` , `cin`, `email`, `paword`) 
        VALUES (:a,:b,:c,:d,:e,:f);");
        $sql->bindParam(':a', $firstname);
        $sql->bindParam(':b', $lastname);
        $sql->bindParam(':c', $phone);
        $sql->bindParam(':f', $cin);
        $sql->bindParam(':e', $email);
        $sql->bindParam(':d', $paword);

        $sql->execute();
        $this->dbConn = null;
    }

    public function getUer()
    {
        $con = $this->connect();
        $sql = $con->prepare("SELECT * FROM `utilisateurs`");
        $sql->execute();
        $arr = $sql->fetchAll(PDO::FETCH_ASSOC);
        $this->dbConn = null;
        return $arr;
    }



}
