<?php
$data = require __DIR__ . '/blog-data.php';

$q = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];

if ($q !== '') {
    foreach ($data as $row) {
        if (stripos($row[0], $q) !== false) {
            $results[] = [
                'title' => $row[0],
                'date'  => $row[1],
                'image' => $row[2],
                'link'  => $row[3],
            ];
        }
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($results);
exit;
