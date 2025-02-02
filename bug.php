This code uses the `mysql_*` functions, which are deprecated and have been removed from recent PHP versions.  Using them can lead to security vulnerabilities and compatibility issues.

```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}

mysql_select_db('database', $link);

$result = mysql_query("SELECT * FROM table", $link);

if (!$result) {
die('Could not query: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print_r($row);
}

mysql_close($link);
?>
```