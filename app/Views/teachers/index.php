<?php

namespace App\Views\teachers;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers List</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Teachers</h1>
        <a href="<?= site_url('teachers/create') ?>">Add New Teacher</a>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teachers as $teacher): ?>
                <tr>
                    <td><?= esc($teacher->id) ?></td>
                    <td><?= esc($teacher->name) ?></td>
                    <td><?= esc($teacher->email) ?></td>
                    <td>
                        <a href="<?= site_url('teachers/edit/' . $teacher->id) ?>">Edit</a>
                        <a href="<?= site_url('teachers/delete/' . $teacher->id) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>