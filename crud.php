<?php

if (isset($_POST['submit'])) {
    $menu_name = trim($_POST['menuName']);
    $menu_desc = trim($_POST['menuDesc']);


    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        update_data($menu_name, $menu_desc, $id);
    } else {
        add_data($menu_name, $menu_desc);
    }
}

$edit_menuname = '';
$edit_menudesc = '';


if (isset($_POST['edit'])) {
    $edit_id = trim($_POST['edit']);
    $edit_menu = search_data($edit_id);

    if (!empty($edit_menu)) {
        $edit_menuname = isset($edit_menu['menu_name']) ? $edit_menu['menu_name'] : '';
        $edit_menudesc = isset($edit_menu['menu_desc']) ? $edit_menu['menu_desc'] : '';

    }
}

if (isset($_POST['delete'])) {
    $id = trim($_POST['delete']);
    delete_data($id);
}

if (isset($_POST['submit'])) {
    $menu_name = trim($_POST['menuName']);
    $menu_desc = trim($_POST['menuDesc']);

    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        update_data($menu_name, $menu_desc, $id);
    } else {
        add_data($menu_name, $menu_desc);
    }
}

$edit_menuname = '';
$edit_menudesc = '';


if (isset($_POST['edit'])) {
    $edit_id = trim($_POST['edit']);
    $edit_menu = search_data($edit_id);

    if (!empty($edit_menu)) {
        $edit_menuname = isset($edit_menu['menu_name']) ? $edit_menu['menu_name'] : '';
        $edit_menudesc = isset($edit_menu['menu_desc']) ? $edit_menu['menu_desc'] : '';
    }
}

if (isset($_POST['delete'])) {
    $id = trim($_POST['delete']);
    delete_data($id);
}