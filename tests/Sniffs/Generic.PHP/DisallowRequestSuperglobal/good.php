<?php declare(strict_types = 1);

// Using $_GET and $_POST instead of $_REQUEST - correct
$value = $_GET['param'] ?? $_POST['param'] ?? null;
$data = $_GET['data'];
$postData = $_POST['field'];
