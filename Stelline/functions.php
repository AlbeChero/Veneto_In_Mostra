<?php

function userRating($userId, $restaurantId, $conn)
{
    $average = 0;
    $avgQuery = "SELECT rating FROM tbl_rating WHERE user_id = '" . $userId . "' and restaurant_id = '" . $restaurantId . "'";
    $total_row = 0;

    if ($result = mysqli_query($conn, $avgQuery)) {

        $total_row = mysqli_num_rows($result);
    }

    if ($total_row > 0) {
        foreach ($result as $row) {
            $average = round($row["rating"]);
        }
    }
    return $average;
}

function totalRating($restaurantId, $conn)
{
    $totalVotesQuery = "SELECT * FROM tbl_rating WHERE restaurant_id = '" . $restaurantId . "'";

    if ($result = mysqli_query($conn, $totalVotesQuery)) {
        $rowCount = mysqli_num_rows($result);
        mysqli_free_result($result);
    }

    return $rowCount;
}
