<?php

function get_component($name, array $data = [])
{
    $name = 'components/' . $name;
    ob_start();
    extract($data);
    require $name;
    $result = ob_get_clean();
    return $result;
}

function get_data($link, $sql) {
    $result = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_data_one($link, $sql)
{
    $result = mysqli_query($link, $sql);
    return mysqli_fetch_assoc($result);
}