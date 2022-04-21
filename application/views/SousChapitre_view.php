<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
  <title> Sous Chapitres </title>
  <?php include('link.php'); ?>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea'
    });
  </script>
  <style>
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
      margin-top: 40px;
    }
    .table {
      margin-top: 40px;
    }

    img {
      width: 2em;
    }
    .Ajouter {
      margin-top: 40px;
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
    <div class="col-sm-8">
      <div class="container">
        <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Sous Chapitre </a>
          </div>
        </nav>
        <br>
        <!-- Button trigger modal -->
        <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nouveaux Sous Chapitre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="form" action="<?php echo base_url('SousChapitre/Ajouter'); ?>" method="post">
                  <div class="mb-3">
                    <label class="form-label">Titre </label>
                    <input type="text" class="form-control" name="titre" id="titre">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <br>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Decription" style="height: 100px" id="description" name="description"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="validationCustom04" class="form-label">chapitres</label>
                    <select class="form-select form-select-sm" name="chapitre" id="chapitre">
                      <option selected disabled>choisir Chapitre </option>
                      <?php
                      foreach ($chapitre as $row) {
                        echo '<option value="' . $row->id_ch . '">' . $row->titre . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="card">
        <div class="card-header">
          <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">Informations Sous Chapitre </a>
              <form class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="Ajouter"> <i class="fa fa-plus"></i>
                  Ajouter Sous Chapitre
                </button>
              </form>
            </div>
          </nav>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <th>Titre</th>
              <th>Description</th>
              <th> Chapitre </th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php
              foreach ($query as  $row) { ?>
                <tr>
                  <td> <?php echo $row->titreChapitre; ?></td>
                  <td> <?php echo $row->descriptionCh; ?></td>
                  <td> <?php echo $row->titre; ?></td>
                  <td><a href="<?php echo site_url('SousChapitre/edit/' . $row->id_SousCh) ?>" class="btn btn-success">Edit</a>
                    <a href="<?php echo site_url('SousChapitre/Supprimer/' . $row->id_SousCh) ?>" class="btn btn-danger"> Delete</a>
                  <td>
                </tr>
              <?php }; ?>
            </tbody>
          </table>
        </div>
       </div>
    </div>
</body>
</html>