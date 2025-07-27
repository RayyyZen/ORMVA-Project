<?php
    function connexionDB(){
        try{
            $mysqldb = new PDO (
                'mysql:host=localhost; dbname=ormvasmdb; charset=utf8',
                'root',
                ''
            );
            $mysqldb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $mysqldb;
    }
?>