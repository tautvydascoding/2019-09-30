<?php
$manoSQL_StringDelete .= "DELETE FROM prekes WHERE id = '$id'; ";
$manoSQL_StringDelete .= "DELETE FROM img WHERE prekes_id = '$id'; ";

$delete = mysqli_multi_query(getPrisijungimas(), $manoSQL_StringDelete);


//$agentsquery .= "INSERT INTO LeaderBoard (`agent_name`, `job_number`, `job_value`, `points_value`) SELECT agent_name, job_number, job_value, points_value FROM jobs WHERE YEAR(booked_date) = $current_year && WEEKOFYEAR(booked_date) = $weeknum;";
//$agentsquery .= "INSERT INTO LeaderBoard (`agent_name`) SELECT DISTINCT agent_name FROM apps WHERE YEAR(booked_date) = $current_year && WEEKOFYEAR(booked_date) = $weeknum;";
//$agentsquery .= "SELECT agent_name, SUM(job_value), SUM(points_value) FROM leaderboard GROUP BY agent_name ORDER BY SUM(points_value) DESC";
//
//$i = 0;
//$agentsresult = mysqli_multi_query($link, $agentsquery);