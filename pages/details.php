<html>
<head>
    <title>PhotoArtWork2</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <!-- stylesheets -->
    <link href="../ui/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../ui/css/colour.css" rel="stylesheet" type="text/css" />


    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="../ui/js/modernizr-1.5.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <meta charset=utf-8 />
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

    <script src="http://code.jquery.com/jquery-latest.js"></script>


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
    Search for <b>cats, dogs, cakes</b>, or anything else that takes your fancy :-)
    <br />
    <input id="searchterm" />
    <button id="search">search</button>
    <select id="searchterm">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>

<section class="tabs">
    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
    <label for="tab-1" class="tab-label-1">EXIF</label>

    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
    <label for="tab-2" class="tab-label-2">XMP</label>

    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
    <label for="tab-3" class="tab-label-3">IPTC</label>





<?php


$imgid = $_GET['imgid'];
echo  "<img id='img' src='$imgid'></br>";

echo "<a title=\"download the image.\"style='float: right;' href='../ui/images/' class='glyphicon glyphicon-download-alt' download='$imgid' > </a>";
echo "<a title=\"download XMP file.\" style='float: right;' href='../ui/xmp/' class='glyphicon glyphicon-file'  download=$imgid'.xmp'> </a>";

$json=file_get_contents("../ui/output/$imgid.json");
$data =  json_decode($json);
//$result = $data[0].EXIF.Orientation;
?>

    <div class="clear-shadow"></div>
<div class="content">
    <div class="content-1">



    <?php

    //$result = $data[0].EXIF.Orientation;




    foreach($data as $row)
    {
        foreach($row->EXIF as $key => $val)
        {

            echo "<b>$key</b>: $val</br>";
        }
    }




    ?>
</div>



    <div class="content-2">

    <?php

    foreach($data as $row)
    {
        foreach($row->XMP as $key => $val)
        {

            echo "<b>$key</b>: $val</br>";
        }
    }

    ?>
</div>


    <div class="content-3">


    <?php

    foreach($data as $row)
    {
        foreach($row->IPTC as $key => $val)

        {
            echo "<b>$key</b>: $val</br>";

        }
    }



    ?>
</div>
</div>
</section>
</div>
<div id="results">
</div>
<script src="../ui/js/SH.js"></script>
<script src="gettd.js"></script>
<script src="../ui/js/flickr.js"></script>





</body>
</html>
