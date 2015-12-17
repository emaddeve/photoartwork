<html>
<head>
    <title>PhotoArtWork2</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <!-- stylesheets -->
    <link href="../ui/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../ui/css/colour.css" rel="stylesheet" type="text/css" />
    <link href="../ui/css/uploadedImg.css" rel="stylesheet" type="text/css" />

    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <meta charset=utf-8 />
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="../ui/js/uploadedImg.js"></script>

</head>
<body>
<div id="main">
<!-- begin header -->
<header>
    <div id="logo"><h1>by<a href="#">Al Rifai</a>Emad</h1></div>
    <nav>
        <ul class="sf-menu" id="nav">
            <li class="selected"><a href="../index.html">home</a></li>
            <li><a href="uploads.php">upload</a></li>
            <li><a href="#">my portfolio</a>
                <ul>
                    <li><a href="portfolio_one.html">portfolio_one</a></li>
                    <li><a href="portfolio_two.html">portfolio_two</a></li>
                </ul>
            </li>
            <li><a href="About.html">About</a></li>
            <li><a href="contact.html">contact</a></li>
        </ul>
    </nav>
</header>

<!--
<form action="edit.php" method="post" enctype="multipart/form-data">

    Name</br>

    <input style="display: none" type="text" name="Name"  value="" id="Name" /></br>

    Title</br>
    <input type="text" name="Title" value="" id="Title" /></br>
    Description</br>
    <textarea  name="Description" value="" id="Description"></textarea></br>
    Country</br>
    <input type="text" name="Country" value="" id="Country" /></br>
    City</br>
    <input type="text" name="City" value="" id="City" /></br>
    DateCreated</br>
    <input type="text" name="DateCreated" value="" id="DateCreated" /></br>
    <input id="submit" type="submit" value="Edit data" class="myButton" />

</form>
-->
    <?php


    $imgid = $_GET['imgid'];
    $jsonPath = "../ui/output/$imgid.json";

    $json=file_get_contents("../output/$imgid.json");
    $data =  json_decode($json);
    //$result = $data[0].EXIF.Orientation;
    ?>
    <img id='img' src="../ui/uploads/<?php echo $imgid;?>">
    <form class="form-style-7" action="edit.php" method="post" enctype="multipart/form-data">
        <ul>

                <input style="display: none" type="text" name="Name"  value="" id="Name">

        
            <li>
                <label for="Country">Country</label>
                <input type="text" name="Country" value="" id="Country">

            </li>
            <li>
                <label for="City">City</label>
                <input type="text" name="City" value="" id="City" >

            </li>
            <li>
                <label for="DateCreated">DateCreated</label>
                <input type="text" name="DateCreated" value="" id="DateCreated" >

            </li>

            <li>
                <label for="Title">Title</label>
                <input type="text" name="Title" value="" id="Title">

            </li>

            <li>
                <label for="bio">Description</label>
                <textarea name="Description"  id="Description" onclick="adjust_textarea(this)"></textarea>
                <span>click to expand</span>
            </li>
            <li>
                <input id="submit" type="submit" value="Edit data" class="myButton" >
            </li>
        </ul>
    </form>


<script type = "text/javascript" language = "javascript">


    $(window).ready(function() {
        $.getJSON("<?php echo $jsonPath?>", function(jd) {
            $('#Name').val(jd[0].File.FileName);
            $('#Title').val(jd[0].XMP.Title);
            $('#Description').val(jd[0].XMP.Description);

            $('#Country').val(jd[0].XMP.Country);
            $('#City').val(jd[0].XMP.City);
            $('#DateCreated').val(jd[0].XMP.DateCreated);
        });
    });


</script>




</div>
</body>
</html>
