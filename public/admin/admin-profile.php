<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Timberly Ltd</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styles/admin-profile.css">
        <link rel="stylesheet" href="./styles/components/header.css">
        <link rel="stylesheet" href="./styles/components/sidebar.css">
    </head>
    <body>
        <div class="dashboard-container">
            <?php include "./components/sidebar.php"?>
            <div class="main-content">
                <?php include "./components/header.php"?>
                <div class="profile">

                    <img src="./images/pic3.jpg" alt="profile"  />
                    <h2>Nimal Dahanayake</h2>

                    <div class="profile-info">
                        <div class="info-item">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <h4>Email</h4>
                            <p style="margin-left: 20px;">nimal0@gmail.com</p>
                        </div>
                        <div class="info-item">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <h4>Contact</h4>
                            <p>0756652544</p>
                        </div>
                        <div class="info-item">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <h4>Address</h4>
                            <p>No. 32, Main Town Road, Colombo 7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>