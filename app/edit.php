<?php
require '../db_conn.php';
if (isset($_GET['update'])) {
    $id = $_GET['id'];
    $result = $mysqli->query(SELECT * FROM todos WHERE id = $id) or die ($mysqli->error());

}
