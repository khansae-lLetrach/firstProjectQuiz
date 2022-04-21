<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
    <title>Quiz </title>
    <?php include('link.php'); ?>
    <style>
        .card:hover {
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .nav {
            background-image: radial-gradient(circle farthest-corner at -8.9% 51.2%, rgba(255, 124, 0, 1) 0%, rgba(255, 124, 0, 1) 15.9%, rgba(255, 163, 77, 1) 15.9%, rgba(255, 163, 77, 1) 24.4%, rgba(19, 30, 37, 1) 24.5%, rgba(19, 30, 37, 1) 66%);
            color: white;
            padding-top: 20px;
            padding-bottom: 60em;
        }

        .navbar {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .quiz {
            margin-top: 20px;
            ;
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
                    <img src=" <?php echo base_url() ?>/uploads/images/ADMI.png" id="imageshow "> Admin
                </a>
                <nav class="nav  flex-column">
                    <a class="nav-link" href="#" style="color:#fff ; font-size:20px;"><i class="fa fa-home"></i>HOME</a>
                    <a class="nav-link" href="<?php echo base_url() ?>Chapitre" style="color:#fff ; font: size 20px;"><i class="fa fa-th-list"></i>&nbsp;LES CHAPITRES</a>
                    <a class="nav-link" href="<?php echo base_url() ?>SousChapitre" style="color:#fff ; font-size:20px;"><i class="fa fa-list-ol"></i>&nbsp;LES SOUS CHAPITRES</a>
                    <a class="nav-link" href="<?php echo base_url() ?>Quiz" style="color:#fff ; font-size:20px;"><i class="fa fa-question-circle"></i>&nbsp;LES Questions</a>
                    <a class="nav-link" href="#" style="color:#ccc; opacity:0,1 ; font-size:20px;">&nbsp;<i class="fa fa-cog"></i>&nbsp;Setting</a>
                    <a class="nav-link" href="<?php echo base_url() ?>User" style="color:#fff ; font-size:20px;"><i class="fa fa-user"></i>Users</a>
                    <a class="nav-link" href="#"></a>
                    <a class="nav-link" href="#"></a>
                </nav>
            </nav>
        </div>
        <div class="col-sm-8">
            <div class="container">
                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Quiz</a>
                    </div>
                </nav>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter Question
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="card">
                                    <h5 class="card-header">Question</h5>
                                    <div class="card-body">
                                        <form action="<?php echo base_url('Quiz/Ajouter'); ?>" method="post">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Question </label>
                                                <input type="text" class="form-control" id="Question " name="Question">
                                            </div>
                                            <label class="form-label">Reponse 1</label>
                                            <div class="input-group">
                                                <input type="text" id="reponse" class="form-control" name="reponse">

                                            </div>
                                            <label class="form-label">Reponse 2</label>
                                            <div class="input-group">

                                                <input type="text" id="correction" class="form-control" name="correction">
                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom04" class="form-label">Ville</label>
                                                <select class="form-select form-select-sm" name="chapitre" id="chapitre">
                                                    <option selected disabled>choisir Chapitre </option>
                                                    <?php
                                                    foreach ($chapitre as $row) {
                                                        echo '<option value="' . $row->id_ch . '">' . $row->titre . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card quiz">
                    <h5 class="card-header">Les Questions</h5>
                    <div class="card-body">

                        <?php
                        foreach ($query as  $row) { ?>
                            <li class="reponse"> Chapitre:<?php echo $row->titre; ?></li>
                            <ol>
                                <li> Question:<?php echo $row->question; ?>
                                    <ol>
                                        <li class="reponse"> Reponse1:<?php echo $row->reponse; ?></li>
                                        <li class="reponse"> Reonse2:<?php echo $row->correction; ?></li>
                                        <a href="<?php echo site_url('Quiz/edit/' . $row->id_quiz) ?>" class="btn btn-outline-success"><i class="fa fa-file-o"></i></a>
                                        <a href="<?php echo site_url('Quiz/Supprimer/' . $row->id_quiz) ?>" class="btn btn-outline-warning"> <i class="fa fa-trash"></i></a>

                                        <hr>
                                    </ol>
                                </li>
                            </ol>
                        <?php }; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>