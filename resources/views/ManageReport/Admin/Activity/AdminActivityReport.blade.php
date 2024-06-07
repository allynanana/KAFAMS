<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Activity Report Full</title>

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

        * {
            box-sizing: border-box;
        }

        /* Add a gray background color with some padding */
        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }


        

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {
            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        .tabs {
            position: relative;
            margin-bottom: 15%;
            background: #fff;
            height: 14.75rem;
        }

        .tabs::before,
        .tabs::after {
            content: "";
            display: table;
        }

        .tabs::after {
            clear: both;
        }

        .tab {
            float: left;
        }

        .tab-switch {
            display: none;
        }

        .tab-label {
            position: relative;
            display: block;
            line-height: 1em;
            height: 2.75rem;
            width: 9rem;
            padding: 0 2em;
            background: #29429B;
            border-right: 0.125rem solid #16a085;
            color: white;
            cursor: pointer;
            top: 0;
            transition: all 0.25s;
            text-align: center;
        }

        .tab-label:hover {
            top: -0.25rem;
            transition: top 0.25s;
        }

        .tab-content {
            height: auto;
            position: absolute;
            z-index: 1;
            top: 2.75em;
            left: 0;
            padding: 1.618rem;
            background: #D9D9D9;
            color: #2c3e50;
            border-bottom: 0.25rem solid #bdc3c7;
            opacity: 0;
            transition: all 0.35s;
            width: 85%;
        }

        .tab-switch:checked + .tab-label {
            background: #5B73C6;
            color: black;
            border-bottom: 0;
            border-right: 0.125rem solid #fff;
            transition: all 0.35s;
            z-index: 1;
            top: -0.0625rem;
        }

        .tab-switch:checked + label + .tab-content {
            z-index: 2;
            opacity: 1;
            transition: all 0.35s;
        }





        label {
            display: inline-block;
            width: 250px;
            text-align: right;
        }

        .container {
            position: relative;
            position: absolute;
            bottom: 10px;
            right: 10px; /* Changed from left to right */
        }

        .btn-primary {
            position: absolute;
            bottom: 10px;
            right: 10px; /* Changed from left to right */
        }

        .table {
            width: 100%; /* 70% longer than 100% */
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
        <div class="tabs">
            <div class="tab">
                <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                <label for="tab-1" class="tab-label">YEAR 1</label>
                <div class="tab-content">
                    
                        
                            <!-- Year 1 table report -->
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Activity</th>
                                    <th scope="col">Total Participant</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td></td>
                                    <td>the Bird</td>
                                    
                                  </tr>
                                </tbody>
                              </table>
                            <button  href="" class="btn btn-primary" >View Summarised Report</button>
                </div>
            </div>
            <div class="tab">
                <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                <label for="tab-2" class="tab-label">YEAR 2</label>
                <div class="tab-content">
                    <!-- YEAR 2 GRAPH REPORT -->
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Activity</th>
                            <th scope="col">Total Participant</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td></td>
                            <td>the Bird</td>
                            
                          </tr>
                        </tbody>
                      </table>

                      <button class="btn btn-primary" type="submit">View Summarised Report</button>
                </div>
            </div>
            <div class="tab">
                <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
                <label for="tab-3" class="tab-label">YEAR 3</label>
                <div class="tab-content">
                   <!-- YEAR 3 GRAPH REPORT -->
                   <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Total Participant</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td>the Bird</td>
                        
                      </tr>
                    </tbody>
                  </table>

                  <button class="btn btn-primary" type="submit">View Summarised Report</button> 
                </div>
            </div>
            
            <div class="tab">
                <input type="radio" name="css-tabs" id="tab-4" class="tab-switch">
                <label for="tab-4" class="tab-label">YEAR 4</label>
                <div class="tab-content">
                   <!-- YEAR 4 GRAPH REPORT -->
                   <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Total Participant</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td>the Bird</td>
                        
                      </tr>
                    </tbody>
                  </table>

                  <button class="btn btn-primary" type="submit">View Summarised Report</button> 
                </div>
            </div>
            
            <div class="tab">
                <input type="radio" name="css-tabs" id="tab-5" class="tab-switch">
                <label for="tab-5" class="tab-label">YEAR 5</label>
                <div class="tab-content">
                   <!-- YEAR 5 GRAPH REPORT -->
                   <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Total Participant</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td>the Bird</td>
                        
                      </tr>
                    </tbody>
                  </table>

                  <button class="btn btn-primary" type="submit">View Summarised Report</button> 
                </div>
            </div>

            <div class="tab">
                <input type="radio" name="css-tabs" id="tab-6" class="tab-switch">
                <label for="tab-6" class="tab-label">YEAR 6</label>
                <div class="tab-content">
                   <!-- YEAR 6 GRAPH REPORT -->
                   <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Total Participant</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td>the Bird</td>
                        
                      </tr>
                    </tbody>
                  </table>

                  <button class="btn btn-primary" type="submit">View Summarised Report</button> 
                </div>
            </div>
        </div>
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
