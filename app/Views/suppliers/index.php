<?php

namespace App\Views\suppliers;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Suppliers List</h1>
        <a href="<?= site_url('suppliers/create') ?>">Add New Supplier</a>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= esc($supplier->id) ?></td>
                    <td><?= esc($supplier->name) ?></td>
                    <td><?= esc($supplier->email) ?></td>
                    <td><?= esc($supplier->phone) ?></td>
                    <td>
                        <a href="<?= site_url('suppliers/edit/' . $supplier->id) ?>">Edit</a>
                        <a href="<?= site_url('suppliers/delete/' . $supplier->id) ?>" onclick="return confirm('Are you sure you want to delete this supplier?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>