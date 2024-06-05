<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
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

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 25%;
            font-size: 10px;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 75%;
            padding-left: 20px;

        }

        /* Fake image */


        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;

            height: auto;
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

        .sidenav {
            width: auto;
            position: sticky;
            z-index: 0;
            top: 20px;
            left: 10px;
            margin-left: 1%;
            overflow-x: hidden;
            padding: 8px 0;
            border-radius: 16px;
            margin-bottom: 3%;

        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 15px;
            color: black;
            display: block;
        }

        .sidenav a:hover {
            color: #064579;
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

        .tab-switch:checked+.tab-label {
            background: #5B73C6;
            color: black;
            border-bottom: 0;
            border-right: 0.125rem solid #fff;
            transition: all 0.35s;
            z-index: 1;
            top: -0.0625rem;
        }

        .tab-switch:checked+label+.tab-content {
            z-index: 2;
            opacity: 1;
            transition: all 0.35s;
        }

        .form {
            margin-top: 0%;
        }

        input[type=text],
        select,
        textarea {
            width: 40%;
            /* Full width */
            border: 1px solid #ccc;
            /* Gray border */
            border-radius: 4px;
            /* Rounded borders */
            box-sizing: border-box;
            /* Make sure that padding and width stays in place */
            margin-top: 3px;
            /* Add a top margin */
            margin-bottom: 5px;
            /* Bottom margin */
            resize: vertical;
            /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        input[type=file] {
            margin-top: 68px;
            margin-left: 140px;
        }

        label {
            display: inline-block;
            width: 250px;
            text-align: right;
            
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .button {
            background-color: #D9D9D9;
            border: none;
            color: black;
            height: 60%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 4%;
            cursor: pointer;
            
        }

        .btn-primary{

        }
        
        .container {
        position: relative;
        
        }

        .btn-primary {
        position: absolute;
        bottom: 10px; 
        right: 10px; 
        
         }

        .button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="header">
        
        <img src="{{ asset('images/KAFAmsheader.png') }}" alt="Logo" width="100%" height="155px">
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                

                <div class="sidenav">
                    <a href="#about" class="button"><b>Registration</b></a>
                    <a href="#services" class="button"><b>KAFA Activity</b></a>
                    <a href="#clients" class="button active" style="background-color: #4A6BB3;"><b>AKUAN
                            AKAD NIKAH</b></a>
                    <a href="#contact" class="button"><b>Report</b></a>
                </div>
            </div>

        </div>
        <div class="rightcolumn">
            <div class="card">
                <div class="tabs">
                    <div class="tab">
                        
                        <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                        <label for="tab-1" class="tab-label">YEAR 1</label>
                        <div class="tab-content">
                            <div class="row">
                                <div class="column">
                                    <!-- Year 1 graph chart -->
                                    j/njkkk
                                    <div class="container">
                                        <!-- Your content goes here -->
                                        <button class="btn btn-primary" type="submit">View Full Report</button>
                                    </div>
                                    
                                </div>
                            </div>
        
                        </div>
        
                    </div>
                    <div class="tab">
                        <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                        <label for="tab-2" class="tab-label">YEAR 2</label>
                        <div class="tab-content">
                            <!-- YEAR 2 GRAPH REPORT -->
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
                        <label for="tab-3" class="tab-label">YEAR 3</label>
                        <div class="tab-content">
                           <!-- YEAR 3 GRAPH REPORT --> 
                        </div>
                    </div>
                    
                    <div class="tab">
                        <input type="radio" name="css-tabs" id="tab-4" class="tab-switch">
                        <label for="tab-4" class="tab-label">YEAR 4</label>
                        <div class="tab-content">
                           <!-- YEAR 3 GRAPH REPORT --> 
                        </div>
                    </div>
                    
                    <div class="tab">
                        <input type="radio" name="css-tabs" id="tab-5" class="tab-switch">
                        <label for="tab-5" class="tab-label">YEAR 5</label>
                        <div class="tab-content">
                           <!-- YEAR 5 GRAPH REPORT --> 
                        </div>
                    </div>

                    <div class="tab">
                        <input type="radio" name="css-tabs" id="tab-6" class="tab-switch">
                        <label for="tab-6" class="tab-label">YEAR 6</label>
                        <div class="tab-content">
                           <!-- YEAR 6 GRAPH REPORT --> 
                        </div>
                    </div>

                    </div>
            </div>

        </div>
    </div>
<!-- PENAT WOII -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>