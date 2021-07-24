<?php

function insert_into_cart($con, $query, ...$vars)
{
    $stmt = $con->prepare($query);
    $stmt->bind_param('iii', ...$vars);
    if ($stmt->execute()) {
        $id = $stmt->insert_id;
        $stmt->close();
        return $id;
    }
    $stmt->close();
    return -1;
}

function fetch_cart_id($con, $query, $user_id)
{
    $stmt = $con->prepare($query);
    $stmt->bind_param('i', $user_id);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        $stmt->close();
        $cart = [];
        while ($data = $res->fetch_assoc()) {
            $cart[] = $data;
        }
        return $cart;
    }
    $stmt->close();
    return array();
}