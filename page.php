<?php

require_once('../connexionMySQL.php');
require_once('../fonctions.php');

$res = $db->query("SELECT * FROM employees");
$infos = resultAsArray($res);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information employés</title>
</head>
<body>
    <table>
    <th>employee</th>
    <?php
        foreach($infos as $info) {
            echo '<tr>'.
            "<td>{$info['employee_id']}</td>".
            "<td>{$info['first_name']}</td>".
            "<td>{$info['last_name']}</td>".
            "<td>{$info['email']}</td>".
            "<td>{$info['phone_number']}</td>".
            "<td>{$info['hire_date']}</td>".
            "<td>{$info['job_id']}</td>".
            "<td>{$info['salary']}</td>".
            "<td>{$info['commission_pct']}</td>".
            "<td>{$info['manager_id']}</td>".
            "<td>{$info['department_id']}</td>".
            '</tr>';
        }
        ?>
    </table>
</body>
</html>