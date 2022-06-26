<?php

try {
    $db = new PDO("mysql:host=localhost:10018;dbname=local", "root", "root");
} catch (PDOException $e) {
    echo "$e -> getMessage()";
    die();
}

$q = $db->prepare("SELECT post_title, post_excerpt, guid FROM wp_posts WHERE post_type = 'post' AND post_status = 'publish'");
$q->execute();
$data = $q->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");

echo "[";

$i = 0;
foreach ($data as $item) {
    echo "{\n\t";
    $j = 0;
    foreach ($item as $key => $value) {
        echo "\"$key\": \"$value\"";
        if (!(++$j === count($item))) {
            echo ",";
        }
        echo "\n\t";
    }
    echo "\n}";
    if (!(++$i === count($data))) {
        echo ",";
    }
    echo "\n";
}

echo "]";
