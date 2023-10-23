<?php
    session_start();
    // No session variable "user" => no login
    if ( !isset($_SESSION["user"]) ) {
         // redirect to login page
         header("Location: ../index.php"); 
         exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script defer src="navbar.js"></script>

    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid">
                <!-- Left Logo -->
                <a class="navbar-brand" href="#" style="font-size: 30px; flex: 0;">
                    <img src="../images/logo.jpg" alt="Logo" style="width: 150px;">
                </a>
        
                <!-- Navbar Toggler Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 28px;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 28px;">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 28px;">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 28px;">Leaderboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 28px;">Profile</a>
                        </li>
                    </ul>
                </div>
        
                <!-- Right Logo (Duplicated) -->
                <a class="navbar-brand" href="#" style="font-size: 30px; flex: 0;">
                    <img src="../images/filler.jpg" alt="Logo" style="width: 150px;">
                </a>
            </div>
            <div id="indicator"></div>
        </nav>

        <h1>Homepage</h1>

    </div>

    <script>
        Vue.createApp({
            methods: {
                logOut() {
                    axios.post("../../server/api/logout.php")
                    .then(r => {
                        alert("Logout successfully");
                        window.location.href = "../index.php";
                    })
                }
            }
        }).mount('body');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>