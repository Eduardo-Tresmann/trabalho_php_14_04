<?php

// filepath: /codeigniter-project/codeigniter-project/app/Views/payments/index.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Payments</h1>
        <a href="<?= site_url('payments/create') ?>">Add New Payment</a>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($payments)): ?>
                    <?php foreach ($payments as $payment): ?>
                        <tr>
                            <td><?= esc($payment->id) ?></td>
                            <td><?= esc($payment->amount) ?></td>
                            <td><?= esc($payment->date) ?></td>
                            <td>
                                <a href="<?= site_url('payments/edit/' . $payment->id) ?>">Edit</a>
                                <a href="<?= site_url('payments/delete/' . $payment->id) ?>" onclick="return confirm('Are you sure you want to delete this payment?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No payments found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>
</body>
</html>