<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Timberly-Admin</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styles/designerDetails.css">
        <link rel="stylesheet" href="./styles/components/header.css">
        <link rel="stylesheet" href="./styles/components/sidebar.css">
    </head>
    <body>
        <div class="dashboard-container">
            <?php include "./components/sidebar.php" ?>
            <div class="main-content">
                <?php include "./components/header.php" ?>
                <p class="page-type-banner">designer</p>
                <div class="designer-header">
                    <!-- <h2><?php echo htmlspecialchars($designer['name']); ?></h2> -->
                     <h2>Kasun Mendis</h2>
                    <div>
                        <!-- <a href="./editDesigner.php?customer_id=<?php echo urlencode($designer_id);?>" class="designer-edit">Edit</a> -->
                        <a href="./editDesigner.php" class="designer-edit">Edit</a>
                        <button class="delete-button" onclick="deleteDesigner(<?php echo htmlspecialchars($designer_id); ?>)">Delete</button>
                    </div>
                </div>
                <div class="page-content">
                    <div class="designer-detail-panel">
                        <div class="designer-info">
                            <img src="./images/image.png" alt="designer-foto">
                            <!-- <p class="name"><?php echo htmlspecialchars($designer['name']); ?></p>
                            <p class="email"><?php echo htmlspecialchars($designer['email']); ?></p>
                            <p class="customer_id"><?php echo htmlspecialchars($designer_id); ?></p> -->
                            <p class="name">Kasun Mendis</p>
                            <p class="email">kasun-designer@mail.com</p>
                            <p class="designer_id">10204</p>
                        </div>
                        <div class="designer-stats">
                            <p class="stat-title">Registered</p>
                            <!-- <p class="stat-value"><?php echo htmlspecialchars($time_ago)?></p> -->
                             <p class="stat-value">1 month ago</p>
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
                                        <td style="color: red">To be designed before</td>
                                        <td>February 21, 2025</td>
                                        <td>Rs. 170.00</td>
                                    </tr>
                                    <tr>
                                        <td class="order-no" onclick="window.location.href='orderDetails.php?order_id=%23RD1243'">#RD1243</td>
                                        <td style="color: green">Designed on</td>
                                        <td>February 21, 2025</td>
                                        <td>Rs. 540.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="contact-details">
                            <h3>Contact details</h3>
                            <p class="detail-title">Address</p>
                            <!-- <p class="detail-value"><?php echo htmlspecialchars($designer['address']) ?></p> -->
                            <p class="detail-value">N0. 7, Temple road, Colombo.</p>
                            <p class="detail-title">Telephone number</p>
                            <!-- <p class="detail-value"><?php echo htmlspecialchars($designer['phone']) ?></p> -->
                             <p class="detail-value">0769837264</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>