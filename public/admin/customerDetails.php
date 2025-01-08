<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Timberly-Admin</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styles/customerDetails.css">
        <link rel="stylesheet" href="./styles/components/header.css">
        <link rel="stylesheet" href="./styles/components/sidebar.css">
    </head>
    <body>
        <div class="dashboard-container">
            <?php include "./components/sidebar.php" ?>
            <div class="main-content">
                <?php include "./components/header.php" ?>
                <p class="page-type-banner">customer</p>
                <div class="customer-header">
                    <!-- <h2><?php echo htmlspecialchars($customer['name']); ?></h2> -->
                     <h2>Lal Kantha</h2>
                    <div>
                        <!-- <a href="./editCustomer.php?customer_id=<?php echo urlencode($customer_id);?>" class="customer-edit">Edit</a> -->
                        <a href="./editCustomer.php" class="customer-edit">Edit</a>
                        <button class="delete-button" onclick="deleteCustomer(<?php echo htmlspecialchars($customer_id); ?>)">Delete</button>
                    </div>
                </div>
                <div class="page-content">
                    <div class="customer-detail-panel">
                        <div class="customer-info">
                            <img src="./images/image.png" alt="customer-foto">
                            <!-- <p class="name"><?php echo htmlspecialchars($customer['name']); ?></p>
                            <p class="email"><?php echo htmlspecialchars($customer['email']); ?></p>
                            <p class="customer_id"><?php echo htmlspecialchars($customer_id); ?></p> -->
                            <p class="name">Lal Kantha</p>
                            <p class="email">lal.kr@mail.com</p>
                            <p class="customer_id">10024</p>
                        </div>
                        <div class="customer-stats">
                            <p class="stat-title">Registered</p>
                            <!-- <p class="stat-value"><?php echo htmlspecialchars($time_ago)?></p> -->
                             <p class="stat-value">3 weeks ago</p>
                            <p class="stat-title">Last delivery</p>
                            <p class="stat-value">1 hour ago</p>
                            <p class="stat-title">Total deliveries</p>
                            <p class="stat-value">32</p>
                        </div>
                    </div>
                    <div class="work-panel">
                        <div class="delivery-table">
                            <h3>Orders</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="order-no" onclick="window.location.href='orderDetails.php?order_id=%23RT0923'">#RT0923</td>
                                        <td>Chinese chair</td>
                                        <td>February 21, 2025</td>
                                        <td>Rs. 1870.00</td>
                                    </tr>
                                    <tr>
                                        <td class="order-no" onclick="window.location.href='orderDetails.php?order_id=%23RD1243'">#RD1243</td>
                                        <td>Triple leged Table</td>
                                        <td>February 21, 2025</td>
                                        <td>Rs. 3540.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="contact-details">
                            <h3>Contact details</h3>
                            <p class="detail-title">Address</p>
                            <!-- <p class="detail-value"><?php echo htmlspecialchars($customer['address']) ?></p> -->
                            <p class="detail-value">N0. 7, Temple road, Colombo.</p>
                            <p class="detail-title">Telephone number</p>
                            <!-- <p class="detail-value"><?php echo htmlspecialchars($customer['phone']) ?></p> -->
                             <p class="detail-value">0769837264</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>