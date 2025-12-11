<?php
include "views/header.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$file = "modules/" . $page . ".php";

if (file_exists($file)) {
    include $file;
} else {
    echo "<h2>404 - Halaman tidak ditemukan</h2>";
}

include "views/footer.php";
?>
