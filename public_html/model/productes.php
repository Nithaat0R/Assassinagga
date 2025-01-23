<?php

/* NOT IMPLEMENTED */
function getProductById(int $productId, $conn): array
{
    $sql = 'SELECT * FROM producte WHERE id = $1';

    $params = [$productId];
    $result = pg_query_params($conn, $sql, $params);
    $producte = pg_fetch_assoc($result);
    return $producte;
}

function getProductsByCategoryId(int $categoryId, $conn): array
{
    $sql = 'SELECT * FROM producte WHERE category_id = $1';

    $params = [$categoryId];
    $result = pg_query_params($conn, $sql, $params);
    $productes = pg_fetch_all($result);
    return $productes;
}

