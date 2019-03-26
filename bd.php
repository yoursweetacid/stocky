<?php
function get_single($query, $database)
{
    $result = $database->query($query);
    return $result ? $result->fetch_assoc() : $result;
}
function get_multiple($query, $database)
{
    $result = $database->query($query);
    if (!$result)
        return $result;
    $container = [];
    while ($current = $result->fetch_assoc())
        $container[] = $current;
    return $container;
}

$database = new mysqli("localhost", "root", "", "stocky");
$database->query("SET NAMES 'utf8'");
$database->query("SET CHARACTER SET 'utf8'");
$database->query("SET SESSION collation_connection = 'utf8_general_ci'");
?>