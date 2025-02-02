# PHP Security Bug: Deprecated mysql_* Functions

This repository demonstrates a common but critical bug in PHP code: the use of deprecated `mysql_*` functions. These functions are highly insecure and have been removed from recent PHP versions due to significant vulnerabilities.

**The Problem:**
The `bug.php` file shows code that directly interacts with a MySQL database using `mysql_connect`, `mysql_select_db`, `mysql_query`, `mysql_fetch_assoc`, and `mysql_close`. These functions are vulnerable to SQL injection and other attacks.

**The Solution:**
The `bugSolution.php` file provides a corrected version using the much safer MySQLi or PDO extensions.  These modern extensions offer prepared statements to prevent SQL injection and improve overall security and performance.

**How to reproduce:**
1.  Clone this repository.
2.  Configure the database credentials in `bug.php` and `bugSolution.php`.
3.  Run `bug.php` and observe the output. Then run `bugSolution.php`.
4.  Compare the outputs and note the improved security in the corrected version.

**Why this is important:**
Using deprecated functions can expose your applications to severe security risks. Always update your code to use secure and supported alternatives.