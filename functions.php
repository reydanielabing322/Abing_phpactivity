<?php
 
function conn_db()
                    {
    try {
        
        return new PDO('mysql:host=localhost:3306;dbname=pointofsale', 'root', '');
    } catch (PDOException $ex) {
        echo "Connection Error: ", $ex->getMessage();
    }
                     }

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
        function add_data($menu_name, $menu_desc)
        {
            $db = conn_db();
            $sql = "INSERT INTO ref_menu(menu_name, menu_desc)VALUES(?, ?)";
            $st = $db->prepare($sql);
            $st->execute(array($menu_name, $menu_desc));
            $db = null;
        }
        function delete_data($id)
        {
            $db = conn_db();
            $sql = "DELETE FROM ref_menu WHERE id=?";
            $st = $db->prepare($sql);
            $st->execute([$id]);
            $db = null;
        }
        function update_data($menu_name, $menu_desc, $id)
        {
            $db = conn_db();
            $sql = "UPDATE ref_menu SET menu_name=?, menu_desc=?, price=? WHERE id=?";
            $st = $db->prepare($sql);
            $st->execute([$menu_name, $menu_desc, $id]);
            $db = null;
        }
?>
