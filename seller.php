<?php
include("dbconnect.php");
$rs = mysqli_query($con, "select * from appdata");



if (isset($_POST['colorsearch'])) {
    $colorhere = trim($_POST["searchcolor"]);
    $rss = mysqli_query($con, "select * from appdata where color='$colorhere'");
    echo "<table border='1' align='center' width='100%'>";
    echo "<tr><th> Barcode </th> <th> Name </th> <th> Price </th> <th> Address </th> <th> Color </th> <th> Weight </th> <th> Size </th></tr>";
    while ($row = mysqli_fetch_object($rss)) {
        echo "<tr ><td>  " . $row->barcode . "</td>";
        echo "<td>" . $row->name . "</td> ";
        echo "<td>" . $row->price . "</td> ";
        echo "<td>" . $row->address . "</td> ";
        echo "<td>" . $row->color . "</td> ";
        echo "<td>" . $row->weight . "</td> ";
        echo "<td>" . $row->size . "</td> </tr>";
    }
    echo "</table>";
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
</head>

<style>
    main div.table {
        align-self: center;
    }

    main div.table tr {
        padding: 20px;
    }
</style>

<body>
<div class="container">
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
                                <li><a href="#">Home<span class="sr-only"></span></a></li>
                                <li><a href="seller.php">Seller</a></li>
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
        <div class="row table" align="center">
            <?php
            echo "<table border='1' align='center' width='80%'>";
            echo "<tr><th> Barcode </th> <th> Name </th> <th> Price </th> <th> Address </th> <th> Color </th> <th> Weight </th> <th> Size </th></tr>";
            while ($row = mysqli_fetch_object($rs)) {
                echo "<tr ><td>  " . $row->barcode . "</td>";
                echo "<td>" . $row->name . "</td> ";
                echo "<td>" . $row->price . "</td> ";
                echo "<td>" . $row->address . "</td> ";
                echo "<td>" . $row->color . "</td> ";
                echo "<td>" . $row->weight . "</td> ";
                echo "<td>" . $row->size . "</td> </tr>";
            }
            echo "</table>";
            ?>
        </div>
        <div class="row " align="right">
            <a href="coursescl.php">change in single field</a>
        </div>

        <div>
            <h3>Change in Multiple filled</h3>

        </div>
        <div>
            <form action="" method="post">
                <div>
                    <div align="left"><label>color</label></div>
                    <div align="right"><input type="text" name="searchcolor" id="searchcolor"
                                              placeholder="Enter a color">
                    </div>
                    <input type="submit" name="colorsearch" id="colorsearch" value="colorsearch">
                </div>
            </form>
        </div>

    </main>

</div>

</body>
</html>
