<h1>All Users</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user->id) ?></td>
                <td><?= htmlspecialchars($user->username) ?></td>
                <td><?= htmlspecialchars($user->email) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        margin: 2rem auto;
        background: white;
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 0.75rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f1f1f1;
    }

    tr:hover {
        background-color: #f9f9f9;
    }
</style>