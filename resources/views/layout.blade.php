<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>KAFA Management System</title>

    <style>
        /* The side navigation menu */
        .sidebar {
    margin: 0;
    padding: 0;
    width: 250px;
    background-color: #bff6c3; /* Lighter green background color */
    position: absolute; /* Change from fixed to absolute */
    height: 100%;
    overflow: auto;
    transition: width 0.5s;
}

        
    /* Sidebar links */
        .sidebar a {
            display: block;
            color: #333; /* Dark text color */
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #ace1af; /* Light green for active link */
            color: white; /* White text color */
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #b0ebb4; /* Lighter shade of green on hover */
            color: white; /* White text color */
        }

        /* Page content */
        .content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.5s;
        }

        /* Style the dropdown button */
        .dropdown-btn {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #333; /* Dark text color */
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .dropdown-btn:hover {
            background-color: #b0ebb4; /* Lighter shade of green on hover */
            color: white; /* White text color */
        }

        /* Add an active class to the active dropdown button */
        .dropdown-btn.active {
            background-color: #ace1af; /* Light green for active button */
            color: white; /* White text color */
        }

        /* Dropdown container */
        .dropdown-container {
            display: none;
            background-color: #e0fbe2; /* Very light shade of green */
            padding-left: 15px;
        }

        /* Style the dropdown links */
        .dropdown-container a {
            color: #333; /* Dark text color */
            padding: 15px;
            text-decoration: none;
            display: block;
            font-size: 16px;
        }

        /* On hover */
        .dropdown-container a:hover {
            background-color: #b0ebb4; /* Lighter shade of green on hover */
            color: white; /* White text color */
        }

        /* Media queries for responsiveness */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
 /* Test */
            .sidebar a, .dropdown-btn {
                text-align: center;
                float: none;
            }

            .content {
                margin-left: 0;
            }
        }

        @media screen and (max-height: 450px) {
            .sidebar { padding-top: 15px; }
            .sidebar a { font-size: 18px; }
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <a class="navbar-brand" href="#">
            
            <img src="{{ asset('images/KAFAlogo.jpeg') }}" alt="Logo" width="25%" height="155px">
            <h2 style="display: inline; vertical-align: middle;">KAFA MANAGEMENT SYSTEM</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="sidebar">
        <a class="active" href="#registration"><i class="fas fa-clipboard-list"></i> Registration</a>
        <button class="dropdown-btn"><i class="fas fa-chalkboard-teacher"></i> KAFA Activity <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="{{ url('/ManageKafaActivity/teachers') }}"><i class="fas fa-user-tie"></i> Teacher</a>
            <a href="{{ url('/ManageKafaActivity/admins') }}"><i class="fas fa-user-shield"></i> Admin</a>
            <a href="{{ url('/ManageKafaActivity/parents') }}"><i class="fas fa-user-friends"></i> Parent</a>
        </div>
        <a href="#report"><i class="fas fa-chart-line"></i> Report</a>
        <a href="#about"><i class="fas fa-info-circle"></i> About</a>
    </div>

    <div class="content">
        @yield('content')
        
    </div>

    
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>
</html>
