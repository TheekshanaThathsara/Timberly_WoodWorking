<?php
// Mock data for customers
$customerData = [
    ['customer_id' => '#QA15932456', 'name' => 'Lal Kantha', 'registered_on' => 'May 15, 2021', 'tele_num' => '0114879568', 'email' => 'lal.k@mymail.com'],
    ['customer_id' => '#WE15936541', 'name' => 'Sajith Rajapaksha', 'registered_on' => 'February 26, 2021', 'tele_num' => '0119652354', 'email' => 'sajith@wowmail.com'],
    ['customer_id' => '#ZA15937153', 'name' => 'Akila Dhanuddara', 'registered_on' => 'August 5, 2020', 'tele_num' => '0119548562', 'email' => 'akiid@wowmail.com'],
    ['customer_id' => '#KQ15987512', 'name' => 'Ranjith Heshan', 'registered_on' => 'December 31, 2021', 'tele_num' => '0112659480', 'email' => 'ranjaa@omail.gov']
];
?>

<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Timberly Ltd</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styles/customers.css">
        <link rel="stylesheet" href="./styles/components/header.css">
        <link rel="stylesheet" href="./styles/components/sidebar.css">
    </head>
    <body>
    <div class="dashboard-container">
        <?php include "./components/sidebar.php" ?>
        <div class="main-content">
            <?php include "./components/header.php" ?>
            <div class="customers-display-box">
                <div style="display: flex;
                            justify-content: space-between;
                            align-items: center;"
                        class="content-header">
                    <h2>Customers</h2>
                    <a href="./addCustomer.php"><i class="fa-solid fa-circle-plus" style="margin-right: 8px"></i>Add Customer</a>
                </div>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Name</th>
                            <th>Registered on</th>
                            <th>Telephone no</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($customerData as $item): ?>
                        <tr onclick="window.location.href='./customerDetails.php?customer_id=<?php echo urlencode($item['customer_id']); ?>'">
                            <td><?php echo $item['customer_id']; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['registered_on']; ?></td>
                            <td><?php echo $item['tele_num']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>