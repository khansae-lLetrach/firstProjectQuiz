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
    </style>
</head>

<body>
    <div class="row">
        <div class="col-sm-3 nav">
            <nav class="navbar  flex-column">
                <a class="navbar-brand" href="#" style="color:#fff ; font-size:40px;">Quiz</a>
                <nav class="nav  flex-column">
                    <a class="nav-link" href="#" style="color:#fff ; font-size:20px;"><i class="fa fa-home"></i>HOME</a>
                    <a class="nav-link" href="<?php echo base_url() ?>Chapitre" style="color:#fff ; font: size 20px;"><i class="fa fa-th-list"></i>&nbsp;LES CHAPITRES</a>
                    <a class="nav-link" href="<?php echo base_url() ?>SousChapitre" style="color:#fff ; font-size:20px;"><i class="fa fa-list-ol"></i>&nbsp;LES SOUS CHAPITRES</a>
                    <a class="nav-link" href="<?php echo base_url() ?>Quiz" style="color:#fff ; font-size:20px;"><i class="fa fa-question-circle"></i>&nbsp;LES Questions</a>
                    <a class="nav-link" href="#" style="color:#ccc; opacity:0,1 ; font-size:20px;">&nbsp;<i class="fa fa-cog"></i>&nbsp;Setting</a>
                    <a class="nav-link" href="#" style="color:#fff ; font-size:20px;"><i class="fa fa-user"></i>Users</a>
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
                <div class="card">
                    <div class="card-header">
                        Modifier Question
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo site_url('Quiz/update') ?>/<?php echo $info->id_quiz; ?>">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="validationCustom04" class="form-label">Chapitre</label>
                                    <select class="form-select form-select-sm" name="chapitre" id="chapitre" value="<?php echo $info->id_ch; ?>">
                                        <option selected disabled>choisir Chapitre </option>
                                        <?php
                                        foreach ($chapitre as $row) {
                                            echo '<option value="' . $row->id_ch . '">' . $row->titre . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Question</label>
                                    <input type="text" class="form-control" id="Question" name="Question" value="<?php echo $info->question; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Reponse 1 :</label>
                                    <input type="text" class="form-control" id="reponse" name="reponse" value="<?php echo $info->reponse; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Reponse 2 :</label>
                                    <input type="text" class="form-control" id="Correction" name="Correction" value="<?php echo $info->correction; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                <a href="<?php echo site_url('Quiz') ?>"><button type="button" class="btn btn-danger">Fermer</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>