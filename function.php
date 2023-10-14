<?php

function conn_db()
{
    try {
        return new PDO('mysql:host=localhost:3306;dbname=pointofsale', 'root', '');
    } catch (PDOException $ex) {
        echo "Connection Error: ", $ex->getMessage();
    }
}

function add_data($menu_name, $menu_desc)
{
    $db = conn_db();
    $sql = "INSERT INTO ref_menu (menu_name, menu_desc) VALUES (:menu_name, :menu_desc)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':menu_name', $menu_name);
    $stmt->bindParam(':menu_desc', $menu_desc);
    $stmt->execute();
    $db = null;
}

function view_data()
{
    $db = conn_db();
    $sql = "SELECT * FROM ref_menu ORDER BY id ASC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $db = null;
    return $rows;
}

function update_data($menu_name, $menu_desc, $id)
{
    $db = conn_db();
    $sql = "UPDATE ref_menu SET menu_name = :menu_name, menu_desc = :menu_desc, WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':menu_name', $menu_name);
    $stmt->bindParam(':menu_desc', $menu_desc);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $db = null;
}

function delete_data($id)
{
    $db = conn_db();
    $sql = "DELETE FROM ref_menu WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $db = null;
}