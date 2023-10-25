<?php
include 'function.php'; // Include the file containing the database connection and functions for adding, updating, and deleting data

    if (isset($_POST['submit'])) {
    // Check if the form was submitted with the 'submit' button
        $menu_name = trim($_POST['menuName']); 
        $menu_desc = trim($_POST['menuDesc']); 
        $price = trim($_POST['price']); 

    add_data($menu_name, $menu_desc, $price); // Call the function to add the new data to the database
}

    if (isset($_POST['edit'])) {
    // Check if the form was submitted with the 'edit' button
        $id = trim($_POST['id']); 
        $menu_name = trim($_POST['menuName']); 
        $menu_desc = trim($_POST['menuDesc']); 
        $price = trim($_POST['price']); 

    update_data($menu_name, $menu_desc, $price, $id); // Call the function to update the data in the database
}

    if (isset($_POST['delete'])) {
    // Check if the form was submitted with the 'delete' button
        $id = trim($_POST['delete']); 
    delete_data($id); // Call the function to delete the data from the database
}