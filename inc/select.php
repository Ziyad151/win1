<?php
$SQL = 'SELECT * FROM users ORDER BY RAND() limit 1 ';
$result = mysqli_query($conn, $SQL);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);