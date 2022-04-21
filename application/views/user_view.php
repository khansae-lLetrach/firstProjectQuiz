<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
    <title> Chapitres </title>
    <?php include('link.php'); ?>
    <style>
        .card {
            background-image: linear-gradient(109.5deg, rgba(229, 233, 177, 1) 11.2%, rgba(223, 205, 187, 1) 100.2%);
            display: block;
            margin-bottom: 40px;
            line-height: 1.42857143;
            max-width: 300px;
            border-radius: 2px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            transition: box-shadow .25s;
        }

        .card:hover {
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .img-card {
            width: 100%;
            height: 200px;
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
            display: block;
            overflow: hidden;
        }

        .img-card img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            transition: all .25s ease;
        }

        .card-title {
            margin-top: 0px;
            font-weight: 700;
            font-size: 1.65em;
            color: white;
        }

        .card-title a {
            color: #000;
            text-decoration: none !important;
        }

        .card-read-more {
            border-top: 1px solid #D4D4D4;
        }

        .card-read-more a {
            text-decoration: none !important;
            padding: 10px;
            font-weight: 600;
            text-transform: uppercase
        }

        .nav {
            background-image: radial-gradient(circle farthest-corner at -8.9% 51.2%, rgba(255, 124, 0, 1) 0%, rgba(255, 124, 0, 1) 15.9%, rgba(255, 163, 77, 1) 15.9%, rgba(255, 163, 77, 1) 24.4%, rgba(19, 30, 37, 1) 24.5%, rgba(19, 30, 37, 1) 66%);
            /* background-image: radial-gradient( circle 590px at 8.2% 13.8%,  rgba(18,35,60,1) 0%, #bbb 90% ); */
            color: white;
            padding-top: 20px;
            padding-bottom: 60em;
        }

        #addCart {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .container {
            margin-top: 50px;
        }

        .navbar {
            margin-top: 30px;
        }

        .border {
            background-image: linear-gradient(109.5deg, rgba(229, 233, 177, 1) 11.2%, rgba(223, 205, 187, 1) 100.2%);
        }

        img {
            width: 2em;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-sm-3 nav">
            <nav class="navbar  flex-column">
                <a class="navbar-brand" href="#" style="color:#fff ; font-size:40px;">
                    <img src=" <?php echo base_url() ?>/uploads/images/ADMI.png" id="imageshow "> User
                </a>
                <nav class="nav  flex-column">
                    <a class="nav-link" href="#" style="color:#ccc; opacity:0,1; font-size:20px;"><i class="fa fa-home"></i>HOME</a>
                    <a class="nav-link" href="<?php echo base_url() ?>Chapitre" style="color:#fff ; font: size 20px;"><i class="fa fa-th-list"></i>&nbsp;LES CHAPITRES</a>
                    <a class="nav-link" href="<?php echo base_url() ?>SousChapitre" style="color:#fff ; font-size:20px;"><i class="fa fa-list-ol"></i>&nbsp;LES SOUS CHAPITRES</a>
                    <a class="nav-link" href="<?php echo base_url() ?>Quiz" style="color:#fff ; font-size:20px;"><i class="fa fa-question-circle"></i>&nbsp;LES Questions</a>
                    <a class="nav-link" style="color:#ccc; opacity:0,1; font-size:20px;">&nbsp;<i class="fa fa-cog"></i>&nbsp;Setting</a>
                    <a class="nav-link" href="<?php echo base_url() ?>User" style="color:#fff ; font-size:20px;"><i class="fa fa-user"></i>Users</a>
                    <a class="nav-link" href="#"></a>
                    <a class="nav-link" href="#"></a>
                </nav>
            </nav>
        </div>
        <br>
        <div class="col-sm-8">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> <i class="fa fa-user"></i> &nbsp;User</a>
                </div>
            </nav>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    foreach ($query as  $row) { ?>
                        <div class="col-md-4 ">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="<?= base_url() ?>uploads/images/<?= $row->image ?>" class="card-img-top" />
                                    <div class="card-body">
                                        <h5 class="card-title   disabled" href="#" tabindex="-1" aria-disabled="true"> <?= $row->titre ?></h5>
                                        <p class="card-text"><?= $row->description ?></p>
                                        <?php if ($row->status == 1) { ?>
                                            <a href="<?php echo base_url(); ?>User/fitch/<?php echo $row->id_ch; ?>/<?php echo $row->status; ?>"class="btn btn-success next">Active</a>
                                        <?php } else { ?>
                                            <a href="<?php echo base_url(); ?>User/fitch/<?php echo $row->id_ch; ?>/<?php echo $row->status; ?>"class="btn btn-danger disabled next">Inactive </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
    <script>
       
    </script>
</body>

</html>