<?php
//fetech data in databeas
function fetchData($table){
    // $GLOBALS['conn'];
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM $table ");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
//fetech data in databeas depend condition
function fetchDatacon($table, $condtion,$var){
    // $GLOBALS['conn'];
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM $table WHERE $condtion");
    $stmt->execute(array($var));
    $data = $stmt->fetchAll();
    return $data;
}
function insert($table,$name){
    global $conn;
     $stmt = $conn->prepare("INSERT INTO $table (name_category) VALUES (?) ");
     $stmt->execute(array($name));

}
function insertarticle($table,$title,$img,$des,$id_cate){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO $table (title,image,description,category_id ) VALUES (?,?,?,?) ");
   $stmt->execute(array($title,$img,$des,$id_cate));

}
function delete($table,$id,$condtion){
    global $conn;
 $stmt=$conn->prepare("DELETE FROM $table WHERE $condtion");
 $stmt->execute(array($id));
}
function updateData($table,$condtion,$var,$title,$img,$des,$id_cate){
    global $conn;
    $stmt = $conn->prepare("UPDATE $table SET title=?,image=?,description=?,category_id =?   WHERE $condtion ");
   $stmt->execute(array($title,$img,$des,$id_cate,$var));

}
function updateCate($table,$condtion,$var,$name){
    global $conn;
    $stmt = $conn->prepare("UPDATE $table SET name_category=? WHERE $condtion");
   $stmt->execute(array($name,$var));

}
function countData($table, $column_name,$condtion,$var){
    // $GLOBALS['conn'];
    global $conn;
    $stmt = $conn->prepare("SELECT count($column_name) FROM $table WHERE $condtion ");
    $stmt->execute(array($var));
    $data = $stmt->fetchAll();
    return $data;

}
function rightjoin($var){
    // $table1,$table2, $condtion,$var
    global $conn;
    $stmt = $conn->prepare("SELECT category.name_category ,artical.title ,artical.image, artical.description FROM category RIGHT JOIN artical ON category.cate_id  =  artical.category_id WHERE category_id=?");
    $stmt->execute(array($var));
    $data = $stmt->fetchAll();
    return $data;
}
function innerJoin(){
    global $conn;
    $stmt = $conn->prepare("SELECT c.cate_id , c.name_category, a.art_id, a.title FROM category c  INNER JOIN artical a ON c.cate_id  =  a.category_id");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;

}
?>