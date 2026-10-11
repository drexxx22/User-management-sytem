<?php
include('db_con.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQL CRUD</title>
    <style>
    </style>
</head>
<body>
    <h1>User Management Sytem</h1>

    <h2>Add New User</h2>
    <p>Full Name</p>
    <form method="POST" action="index.php">
        <label>Name:</label>
        <input type="text" name="name" required>
    <p>Email Address</p>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <input type="submit" name="add_user" value="Add User">
    </form>

    <h2>Registered Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                   <td><?php echo ['id']; ?></td>
                   <td><?php echo htmlspecialchars(['name']); ?></td>
                   <td><?php echo htmlspecialchars(['email']); ?></td>
                   <td><?php echo ['created_at']; ?></td>
                   <td>
                       <a class="btn-edit" href="edit.php?id=<?php echo ['id']; ?>">Edit</a>
                       <a class="btn-delete" href="delete.php?id=<?php echo ['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
                </tr>
        </tbody>
    </table>

</body>
</html>