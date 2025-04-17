<?php
// app/bootstrap.php

session_start();

// Load base model + database
require_once __DIR__ . '/models/BaseModel.php';
$db = new SQLite3(__DIR__ . '/../database/app.db');
BaseModel::setDB($db);

// Load router (sets $view)
require_once __DIR__ . '/router.php';

// Fallback view if none set
$view ??= __DIR__ . '/views/static/404.php';

// Header + footer paths
$header = __DIR__ . '/views/partials/header.php';
$footer = __DIR__ . '/views/partials/footer.php';
