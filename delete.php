        <tbody>
                <tr>
                   <td><?php echo $row['id']; ?></td>
                   <td><?php echo htmlspecialchars($row['name']); ?></td>
                   <td><?php echo htmlspecialchars($row['email']); ?></td>
                   <td><?php echo $row['created_at']; ?></td>
                   <td>
                       <a class="btn-edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                       <a class="btn-delete" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
                </tr>
                <tr>
                    <td colspan="5">No users found.</td>
                </tr>
        </tbody>