<?php

function user_exist($con, $query, $email)
{
    $stmt = $con->prepare($query);
    $stmt->bind_param('s', $email);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        $stmt->close();
        return $res;
    }
    $stmt->close();
    return false;
}

function insert_user($con, $query, ...$vars)
{
    $stmt = $con->prepare($query);
    $stmt->bind_param('sss', ...$vars);
    if ($stmt->execute()) {
        $id = $stmt->insert_id;
        $stmt->close();
        return $id;
    }
    $stmt->close();
    return -1;
}