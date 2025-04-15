<?php

namespace App\Views\classes;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Classes</h1>
        <a href="<?= site_url('classes/create') ?>">Add New Class</a>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classes as $class): ?>
                <tr>
                    <td><?= esc($class->id) ?></td>
                    <td><?= esc($class->name) ?></td>
                    <td><?= esc($class->description) ?></td>
                    <td>
                        <a href="<?= site_url('classes/edit/' . $class->id) ?>">Edit</a>
                        <a href="<?= site_url('classes/delete/' . $class->id) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>