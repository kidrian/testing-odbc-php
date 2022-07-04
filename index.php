<?php
$database = 'Driver={INTERSOLV InterBase ODBC Driver (*.gdb)};Database=C:\\MyRetail\\Windows\\Database\\MyRetail.gdb;';
$username = 'SYSDBA';
$password = 'masterkey';

$con = odbc_connect($database, $username, $password);

if ($con) {
  echo 'Hello World!';
} else {
  echo 'This is not connected';
}
?>
