<?php
include("dbconnect.php");
$barcode = "";
$name = "";
$price = "";
$address = "";
$color = "";
$weight = "";
$size = "";

if (isset($_POST["Submit"])) {
    $barcode = trim($_POST["barcode"]);
    $name = trim($_POST["name"]);
    $price = trim($_POST["price"]);
    $address = trim($_POST["address"]);
    $color = trim($_POST["color"]);
    $weight = trim($_POST["weight"]);
    $size = trim($_POST["size"]);

    $rs = mysqli_query($con, "insert into appdata value('$barcode','$name','$price','$address','$color','$weight','$size')");
    if ($rs) {
        echo "Saved";
    } else {
        echo "Not saved";
    }
}


if (isset($_POST["Show"])) {
    $barcode = trim($_POST["barcode"]);
    $rs = mysqli_query($con, "select * from appdata where barcode='$barcode'");
    if ($row = mysqli_fetch_object($rs)) {
        $name = $row->name;
        $price = $row->price;
        $address = $row->address;
        $color = $row->color;
        $weight = $row->weight;
        $size = $row->size;

    }
}

if (isset($_POST["update"])) {
    $barcode = trim($_POST["barcode"]);
    $name = trim($_POST["name"]);
    $price = trim($_POST["price"]);
    $address = trim($_POST["address"]);
    $color = trim($_POST["color"]);
    $weight = trim($_POST["weight"]);
    $size = trim($_POST["size"]);
    $rs = mysqli_query($con, " update appdata set name='$name',price='$price',address='$address',color='$color',weight='$weight',size='$size' where barcode=$barcode");
    if ($rs)
        echo "Data Updated";
    else
        echo "System fails to Update!!!";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Untitled Document</title>
    <style type="text/css">
        <!--
        .style1 {
            color: #6600CC;
            font-weight: bold;
            font-size: 36px;
            background-color: #FFCC99;
        }

        .style2 {

        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 500px;
            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 500px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:hover, .form button:active, .form button:focus {
            background: #43A047;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background-color: #559F55;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .s1 {
            color: #FFFFFF;
        }

        -->
    </style>
</head>

<body>
<header>
    <div class="row">
        <div class="col-md-5"><img src="img/logo.png" class="img img-responsive"></div>
        <div class="col-md-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">WEB</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home<span class="sr-only"></span></a></li>
                            <li><a href="seller.php">Seller</a></li>
                            <li><a href="coursescl.php">Change</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">City<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Downloads</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Papers <span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
    </div>

</header>

<main>
    <div class="login-page">
        <div class="form">
            <style>
                body {
                    background-color: #CCCCCC
                }
            </style>
            <form name="form1" method="post" action="">
                <p align="center" class="style1">Change In DataBase</p>
                <table width="100%" border="0">
                    <tr>
                        <td>
                            <div align="right"><strong>Barcode( Unique ): </strong></div>
                        </td>
                        <td><input name="barcode" type="text" id="barcode" value="<?php echo $barcode; ?>">
                            <input name="Show" style="background-color:#FFCC99; color: #222222;font-weight:bold"
                                   type="submit" id="Show" value="Show"></td>
                    </tr>
                    <tr>
                        <th width="48%" scope="col">
                            <div align="right">Name:</div>
                        </th>
                        <th width="52%" scope="col">
                            <div align="left">
                                <input name="name" type="text" id="name" value="<?php echo $name; ?>">
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <div align="right"><strong>Price :</strong></div>
                        </td>
                        <td><input name="price" type="text" id="price" value="<?php echo $price; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <div align="right"><strong>Address :</strong></div>
                        </td>
                        <td><input name="address" type="text" id="address" value="<?php echo $address; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <div align="right"><strong>Color: </strong></div>
                        </td>
                        <td><input name="color" type="text" id="color" value="<?php echo $color; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <div align="right"><strong>Weight :</strong></div>
                        </td>
                        <td><input name="weight" type="text" id="weight" value="<?php echo $weight; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <div align="right"><strong>Size :</strong></div>
                        </td>
                        <td><input name="size" type="text" id="size" value="<?php echo $size; ?>"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td><input class="style1" style="background-color:#FFCC99; color: #222222" type="submit"
                                   name="Submit" value="Submit">
                            <input name="update" style="background-color:#FFCC99; color: #222222 ; font-weight:bold"
                                   type="submit" id="update" value="Update">
                            <input name="reset" style="background-color:#FFCC99; color: #222222; font-weight:bold"
                                   type="submit" id="reset" value="Reset"></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</main>
</div>
</body>
</html>
