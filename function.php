<?php

// Establish a connection to the database
function conn_db()
    {
        try {
            
            return new PDO('mysql:host=localhost:3306;dbname=pointofsale', 'root', '');
        } catch (PDOException $ex) {
            echo "Connection Error: ", $ex->getMessage();
        }
    }

// Add a new menu item to the database
function add_data($menu_name, $menu_desc, $price)
    {
        $db = conn_db();
        $sql = "Insert into ref_menu(menu_name, menu_desc, price) values(?, ?, ?)";
        $st = $db->prepare($sql);

        if ($st->execute(array($menu_name, $menu_desc, $price))) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Created successfully!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php';
                    }
                });
            </script>";
        }
        $db = null;
    }

// Retrieve all menu items from the database
function view_data()
    {
        $db = conn_db();
        $sql = "SELECT * FROM ref_menu ORDER BY id ASC";
        $st = $db->prepare($sql);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
        $db = null;
        return $rows;
    }

// Update a specific menu item in the database
function update_data($menu_name, $menu_desc, $price, $id)
    {
        $db = conn_db();
        $sql = "UPDATE ref_menu SET menu_name=?, menu_desc=?, price=? WHERE id=?";
        $st = $db->prepare($sql);

        if ($st->execute([$menu_name, $menu_desc, $price, $id])) {
        
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Updated successfully!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php'; 
                    }
                });
            </script>";
        }
        $db = null;
    }

// Delete a specific menu item from the database
function delete_data($id)
    {
        $db = conn_db();
        $sql = "DELETE FROM ref_menu WHERE id=?";
        $st = $db->prepare($sql);

        if ($st->execute([$id])) {
            
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Menu item deleted!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php'; // Redirect to the main page
                    }
                });
            </script>";
        }
        $db = null;
    }

// Search for a specific menu item in the database
function search_data($id)
    {
        $db = conn_db();
        $sql = "SELECT * FROM ref_menu WHERE id=?";
        $st = $db->prepare($sql);
        $st->execute(array($id));
        $row = $st->fetch(PDO::FETCH_ASSOC);
        $db = null;
        return $row ?: [];
    }

?>