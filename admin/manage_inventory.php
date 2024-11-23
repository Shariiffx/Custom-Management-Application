<?php
// Include necessary files
include '../includes/db_connect.php';
// Include header and navbar here

// Function to display products
function displayProducts($conn)
{
    $query = "SELECT * FROM products";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['quantity']}</td>
            <td>{$row['price']}</td>
            <td>{$row['expiry_date']}</td>
            <td>
                <a href='edit_product.php?id={$row['id']}'>Edit</a> | 
                <a href='delete_product.php?id={$row['id']}'>Delete</a>
            </td>
        </tr>";
    }
}
?>

<h1>Manage Inventory</h1>
<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Expiry Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php displayProducts($conn); ?>
    </tbody>
</table>