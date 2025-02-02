This code uses the MySQLi extension, which is a much safer and more modern approach to database interaction in PHP.

```php
<?php
$mysqli = new mysqli('localhost', 'user', 'password', 'database');

if ($mysqli->connect_errno) {
die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM table");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
    $result->free_result();
} else{
die('Query Error (' . $mysqli->errno . ') '. $mysqli->error);
}

$mysqli->close();
?>
```

Alternatively, PDO could also be used for even greater flexibility and database portability.