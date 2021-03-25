<?php
use Laminas\Db\Adapter\Adapter as DbAdapter;

// Create a SQLite database connection
$dbAdapter = new DbAdapter([
                               'driver'   => 'Pdo_Sqlite',
                               'database' => 'data/users.db',
                           ]);

// Build a simple table creation query
$sqlCreate = 'CREATE TABLE [users] ('
             . '[id] INTEGER  NOT NULL PRIMARY KEY, '
             . '[username] VARCHAR(50) UNIQUE NOT NULL, '
             . '[password] VARCHAR(32) NULL, '
             . '[real_name] VARCHAR(150) NULL)';

// Create the authentication credentials table
$dbAdapter->query($sqlCreate);

// Build a query to insert a row for which authentication may succeed
$sqlInsert = "INSERT INTO users (username, password, real_name) "
             . "VALUES ('my_username', 'my_password', 'My Real Name')";

// Insert the data
$dbAdapter->query($sqlInsert);