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
            background-color: black;
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
            height: 200px;
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
        <br>
        <div class="col-sm-8">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Les Chapitres </a>
                </div>
            </nav>
            <button type="button" class="btn btn-outline-dark btn-lg" id="addCart">
                Ajouter
            </button>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                foreach ($ajax as $row) {
                    echo '
            <div class="col-md-4   ">
            <div class="col">
            <div class="card-content">
            <div class="card h-100">
            <img src="' . base_url() . 'uploads/images/' . $row->image . '"class="card-img-top img-card" />
                <div class="card-body">
                    <h5 class="card-title">' . $row->titre . '</h5>
                    <h3 class="text-danger" style="font-size:20px;" >' . $row->description . '</h3>
                </div>
 
            </div>
            </div>
            <div class="card-read-more">
            <a class="btn btn-link btn-block" href="">
                Read More
            </a>
        </div>
        </div>
        </div> 
    ';
                    '
      </div>';
                }
                ?>
            </div>
        </div>
        <!------------Ajouter Cart ------>
        <!-- Modal - Ajouter------>
        <div class="modal fade" id="ModalCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouveau Cart </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data" id="form">
                            <div id="imageshow">
                                <img src="<?php echo base_url() ?>/uploads/images/th.jpg" id="imageshow " class="col-md-12 mb-3">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="imageCart">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">titre</label>
                                <input type="text" class="form-control" id="titre" name="titre">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">description</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                        <button type="button" class="btn btn-primary" id="insertCart">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
      
</body>

<script>
    /*********************Ajouter cart *********************** */
    $(document).on('click', "#addCart", function() {
        $('#ModalCart').modal('show');
    }).on("click", "#insertCart", function(e) {
        e.preventDefault();
        var titre = $("#titre").val();
        var description = $("#description").val();
        var image = $("#imageCart")[0].files[0];
        // console.log('nom');
        if (titre == "" || description == "" || image.name == "") {
            alert("All field are required");
        } else {
            var fd = new FormData();
            fd.append("titre", titre);
            fd.append("description", description);
            fd.append("image", image);

            $.ajax({
                url: "<?php echo base_url(); ?>createC",
                type: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                data: fd,
                success: function(response) {
                    if (response.res == "success") {
                        $('#ModalCart').modal('hide');
                        $('#form')[0].reset();
                        $("#imageshow").html(`
                    <img src="${base_url}uploads/images/${data.post.image}" width="200" height="200" />
                `);
                        fetchCart();
                        toastr["success"](data.message);
                    } else {
                        toastr["error"](data.message);
                    }
                }
            });
        }

    });

    /*******Afficher*****************/
    function fetchCart() {
        $.ajax({
            url: "<?php echo base_url(); ?>Chapitre/fitch",
            type: "get",
            dataType: "json",
            success: function(data) {
                var i = 1;
                var div = "";
                for (var key in data) {
                    div += ' <div class="col-md-4  ">'
                    div += '<div class="col">'
                    div += '<div class="card-content">'
                    div += '<div class="card h-100">'
                    div += '<img src=" <?php echo base_url() ?>uploads/images/' + data[key]['image'] + '"/>'
                    div += '<div class="card-body">'
                    ' <h5 class="card-title">' + data[key]['titre'] + '</h5>'
                    '<h3 class="text-danger" style="font-size:20px;" >' + data[key]['description'] + '</h3>'
                    div += ' </div>'
                    div += ' </div>'
                    div += '</div>'
                    div += '<div class="card-read-more">'
                    ' <a class="btn btn-link btn-block" href="http://www.fostrap.com/">'
                    ' Read More'
                    '</a>'
                    div += '</div>'
                    div += '</div>'
                    div += '</div>'
                    div += '</div>';
                }

                $("#div").html(div);
            }
        });
    }
    fetchCart();
</script>
</body>

</html>