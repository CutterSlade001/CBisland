<?php declare(strict_types=1);


/**
 * Establishes and returns a persistent connection to the MySQL database.
 *
 * This function creates a new mysqli instance if one does not already exist,
 * using the database connection details defined in the DB configuration array.
 *
 * @return mysqli The active MySQLi database connection instance.
 */
function connect(): mysqli
{
    static $mysqli;

    if (!$mysqli) {
        $mysqli = new mysqli(DB['host'], DB['user'], DB['pass'], DB['name'], DB['port']);
    }

    return $mysqli;
}


/**
 * Executes the given SQL query on the MySQL database connection and returns the result.
 *
 * This function uses the active MySQL connection to run the provided query
 * and retrieves the resulting data or metadata.
 *
 * @param string $query The SQL query string to be executed.
 *
 * @return mysqli_result The result set returned by the executed query.
 */
function query(string $query): mysqli_result
{
    $mysqli = connect();

    return $mysqli->query($query);
}

