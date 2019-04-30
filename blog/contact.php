<?php
ini_set('error_reporting', 1);ini_set('display_errors', E_ALL);
try {
    $pdo = new PDO ("mysql:dbname=root;host=localhost", 'root', 'root', array(PDO :: ATTR_PERSISTENT => true));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $pdo->beginTransaction();    /* Begin a transaction, turning off autocommit */

    $insertData = []; /* Data array*/
    $sql = ""; /*Sql statement*/
    $stmt = $pdo->prepare($sql);
    $stmt->execute($insertData);

//    $pdo->commit();    /* All good to go .  */
} catch (Exception $exception) {
//    $pdo->rollBack();/* Recognize mistake and roll back changes */
    die($exception->getMessage());
}