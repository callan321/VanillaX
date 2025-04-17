<?php

$dbFile     = __DIR__ . '/app.db';      // remove the extra dot
$schemaFile = __DIR__ . '/schema.sql';

if (file_exists($dbFile)) {
    echo "Removing existing database...\n";
    unlink($dbFile);
}

try {
    // create (or re‑create) the SQLite file
    $db = new SQLite3($dbFile);
    echo "Created new database: $dbFile\n";

    // read and execute the schema
    $schema = file_get_contents($schemaFile);
    if ($schema === false) {
        throw new Exception("Could not read schema file: $schemaFile");
    }

    $db->exec($schema);
    echo "Schema loaded successfully from $schemaFile\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}

echo "Setup complete.\n";
