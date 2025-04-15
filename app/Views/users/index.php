<?php

namespace App\Views\users;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <div class="container">
        <h1>User List</h1>
        <a href="<?= site_url('users/create') ?>" class="btn btn-primary">Add New User</a>
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
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user->id) ?></td>
                    <td><?= esc($user->name) ?></td>
                    <td><?= esc($user->email) ?></td>
                    <td>
                        <a href="<?= site_url('users/edit/' . $user->id) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('users/delete/' . $user->id) ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>