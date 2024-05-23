<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akuan Akad Nikah/Within Country</title>
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
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

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

        .container3 {
            background-color: #9BBDFF;
            margin-top: 0%;
            width: 820px;
            color: black;
            text-align: center;
            border-radius: 10px;
        }

        .container4 {
            background-color: #29429B;
            margin-top: 3%;
            width: 860px;
            color: #fff;
        }

        .container5 {
            background-color: #AFECDA;
            margin-top: 1%;
            width: 200px;
            color: black;
            border-radius: 50px;
            text-align: center;
            margin-bottom: 10%;
            margin-left: 13%;

        }

        .container6 {
            background-color: white;
            width: 350px;
            height: 100px;
            color: black;
            margin-top: 0%;
            margin-right: 15%;
            text-align: center;
        }

        .container7 {
            background-color: #29429B;
            width: 820px;
            color: white;
            text-align: center;

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
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 10%;
            cursor: pointer;
            border-radius: 16px;
        }

        .button1 {
            margin-left: 80%;
            background-color: #9BBDFF;
            border: none;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            border-radius: 16px;


        }

        .button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="\public\Images\KAFAmsheader.png" width="100%" height="155px">
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <div class="container5">
                    <h4><b>Marriage Within Country </b></h4>
                </div>

                <div class="sidenav">
                    <a href="#about" class="button"><b>MARRIAGE REQUEST FORM</b></a>
                    <a href="#services" class="button"><b>WALI AGREEMENT/WAKALAHWALI</b></a>
                    <a href="#clients" class="button active" style="background-color: #4A6BB3;"><b>AKUAN
                            AKAD NIKAH</b></a>
                    <a href="#contact" class="button"><b>MARRIAGE CERTIFICATE
                            /MARRIAGE CARD</b></a>
                    <a href="#about" class="button"><b>PROOF OF PAYMENT</b></a>
                </div>
            </div>

        </div>
        <div class="rightcolumn">
            <div class="card">
                <div class="tabs">
                    <div class="tab">
                        <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                        <label for="tab-1" class="tab-label">AKUAN AKAD NIKAH</label>
                        <div class="tab-content">
                            <div class="container7">
                                <h4><b>AKUAN AKAD NIKAH</b></h4>
                            </div>
                            <div class="container3">
                                <h4>PLEASE UPLOAD AKUAN AKAD NIKAH DOCUMENT</h4>
                            </div>
                            <div class="group">
                                <h5>AKUAN AKAD NIKAH DOCUMENT :</h5>
                                <div class="container6">
                                    <form method="post">
                                        <input id="file" name="file" type="file" />
                                    </form>
                                </div>
                            </div>
                            <button class="button1">Save & Update</button>
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