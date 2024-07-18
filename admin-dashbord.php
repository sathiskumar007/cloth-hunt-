<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Side Bar Navigation</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-color: #fff;
        }

        .side-navbar {
            width: 250px;
            height: 100%;
            position: fixed;
            margin-left: -300px;
            background-color: #100901;
            transition: 0.5s;
        }

        .nav-link:active,
        .nav-link:focus,
        .nav-link:hover {
            background-color: #ffffff26;
        }

        .my-container {
            transition: 0.4s;
        }

        .active-nav {
            margin-left: 0;
        }

        /* for main section */
        .active-cont {
            margin-left: 250px;
        }

        #menu-btn {
            background-color: #100901;
            color: #fff;
            margin-left: -62px;
        }

        .my-container input {
            border-radius: 2rem;
            padding: 2px 20px;
        }
    </style>
</head>

<body>
    <!-- Side-Nav -->
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12); " id="sidebar">
        <ul class="nav flex-row text-white  w-100 gap-3">
            <a href="#" class="nav-link text-white h3 w-100 bg-dark  my-4 mx-3">
                Cloth-hunt..
            </a>
            <a href="#" class="nav-link active w-100 text-white  d-block" id="v-pills-home-tab">
                <i class="bx bxs-dashboard "></i>
                <span class="mx-2">Home</span>
            </a>
            <a href="#" class="nav-link w-100 text-white " id="v-pills-profile-tab">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Profile</span>
            </a>
            <a href="#" class="nav-link w-100 text-white ">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Contact</span>
            </a>
        </ul>

        <span href="#" class="nav-link h4 w-100 mb-5">
            <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
            <a href=""><i class="bx bxl-facebook text-white"></i></a>
        </span>
    </div>

    <!-- Main Wrapper -->
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><p>acsdvssdvssdv</p></div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">th</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">is</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">h</div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>


<script>
    let menu_btn = document.querySelector("#menu-btn");
    let sidebar = document.querySelector("#sidebar");
    let container = document.querySelector(".my-container");
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
    });
</script>

</html>