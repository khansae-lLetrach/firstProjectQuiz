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


            border-radius: 2px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            transition: box-shadow .25s;
            padding-top: 40px;
            max-width: 70em;
            justify-content: center;
            padding-left: 50px;
            background-color: #ccc;
            margin-left: 50px;
            margin-top: 30px;
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

        .card-header {
            margin-top: 0px;
            font-weight: 700;
            font-size: 2em;
            color: black;
            margin: 3rem auto;
            padding: 2rem;
            cursor: default;
            border-radius: 1rem;
        }

        .card-title {
            margin-top: 0px;
            font-weight: 600;
            font-size: 1em;
            color: black;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            border-radius: 1rem;

        }

        .card-title a {
            color: #000;
            text-decoration: none !important;
        }

        .card-text {
            color: red;
            font-size: 1.50em;
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

        .next {
            margin-right: 20px;
            padding: 0.2rem 1.5rem;
            border: none;
            outline: none;
            font-size: 1.5rem;
            border-radius: 1.5rem;
            color: rgba(93, 53, 156, 0.98);
            background: rgba(161, 177, 19, 0.82);
        }

        #title {
            text-align: center;
            padding: 0.8rem 0;
            font-size: 3rem;
            color: rgb(49, 70, 7);
            background: rgba(105, 224, 90, 0.55);
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .option {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            border-bottom: solid 0.1rem blue;
            width: 15rem;
            background: lightblue;
            border-radius: 1rem;
        }

        .option:hover {
            color: black;
        }

        ol {
            position: relative;
            padding: 0 1.5rem;
            color: rgb(1, 73, 73);
        }

        span {
            display: block;
            padding: 0.1rem 0.7rem;
            border-radius: 1rem;
        }

        #answer {
            margin-top: 2.5rem;
        }

        #stat {
            margin-top: 1.5rem;
            color: rgb(6, 17, 168);
        }

        .buttons {
            text-align: center;
        }

        button {
            padding: 0.2rem 1.5rem;
            border: none;
            outline: none;
            font-size: 1.5rem;
            border-radius: 1.5rem;
            color: rgba(93, 53, 156, 0.98);
            background: rgba(161, 177, 19, 0.82);
        }

        button:active {
            background: lavender;
        }

        #scoreboard,
        #answerBank,
        #quiz-container {
            background: rgba(230, 230, 250, 0.77);
            padding: 2rem;
            text-align: center;
            margin: auto;
            position: relative;
            top: 5rem;
            display: none;

        }

        #scoreboard {
            display: none;
        }


        #score-title {
            margin: 1rem 0;
        }

        /* 
        #next {
            padding: 0.2rem 1.5rem;
            border: none;
            outline: none;
            font-size: 1.5rem;
            border-radius: 1.5rem;
            color: rgba(93, 53, 156, 0.98);
            background: rgba(161, 177, 19, 0.82);
            text-align: center;
        } */

        #score-btn,
        #check-answer {
            margin-top: 1rem;
        }

        #score {
            font-size: 2.5rem;
        }

        #answerBank li {
            text-align: left;
            margin-bottom: 0.2rem;
            font-size: larger;
        }

        #answers {
            margin-top: 1rem;
        }



        .next {
            margin-left: 40px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-sm-3 nav">
            <nav class="navbar  flex-column">cdcedd
                <a class="navbar-brand" href="#" style="color:#fff ; font-size:40px;">Quiz</a>
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
                    <a class="navbar-brand" href="#"> <i class="fa fa-user"></i>&nbsp;User</a>
                </div>
            </nav>
            <div id="container">
                <div id="Quizz">
                    <?php
                    foreach ($questions as $row) { ?>
                        <?php $ans_array = array($row->titreChapitre, $row->descriptionCh, $row->date_updated, $row->id_ch, $row->id_SousCh, $row->titre); ?>

                        <!-- quiz-container -->
                        <div class="card ">
                            <h5 class="card-header" id="chapitre"> <?= $ans_array[3] ?><?= $ans_array[5] ?></h5>
                            <!-- question container -->
                            <h2 id="titreChapitre"><?= $ans_array[0] ?></h2>
                            <div class="card-body">
                                <h5 class="card-title " id="descriptionCh"> <?= $ans_array[1] ?>
                                    Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Tempore, earum in nostrum voluptate commodi eos numquam laboriosam eveniet facilis
                                    maxime dignissimos alias,voluptate
                                    dicta labore illo possimus quam architecto sed. Laborum.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea,
                                    s tempore, officia dolore quidem, dicta sapiente harum neque
                                    At architecto iste deleniti ut harum vero repellendus aliquam?
                                </h5>
                                <p class="card-text" id="date"> <?= $ans_array[2] ?></p>
                            </div>
                            <br><br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end buttons">
                                <button type="button" class="btn btn-primary btn-lg suiv">Next</button>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
            <!-- quiz-container -->
            <div id="quiz-container">
                <div class="card ">
                    <!-- question container -->
                    <div class="questions">
                        <?php foreach ($quiz as $row) { ?>
                            <?php $ans_array = array($row->question, $row->reponse, $row->correction, $row->titre); ?>

                            <h2 id="titre"><?= $ans_array[3] ?></h2>
                            <h2 id="question"><?= $ans_array[0] ?></h2>
                            <ol type="A">
                                <li class="option"><span id="option0" onclick="calcScore(this)"><?= $ans_array[1] ?></span></li>
                                <li class="option"><span id="option1" onclick="calcScore(this)"><?= $ans_array[2] ?></span></li>
                            </ol>
                            <h4 id="stat"></h4>

                        <?php } ?>

                    </div>
                    <div class="buttons">
                        <button type="button" class="next">Next</button>
                    </div>
                </div>
            </div>
            <div id="scoreboard">

                <h2 id="score-title">Your Score</h2>
                <h2 id="score"></h2>
                <button type="button" id="score-btn" onclick="backToQuiz()">Retour au Chapitres</button>
                <button type="button" id="check-answer" onclick="checkAnswer()">Vérifier les réponses</button>
            </div>
            <div id="answerBank">
                <h2>Answers :</h2>
                <ol type="1" id="answers">
                </ol>
                <button type="button" id="score-btn" onclick="backToQuiz()">Retour au Chapitres</button>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        /*  $("#next").click(function() {
                $("#scoreboard").hide();
            }); */

        // $("#show").click(function() {
        //     $("p").show();
        // });

        var SousChapitre = [{
                id_ch: 15,
                chapitre: 'PHP',
                titreChapitre: 'PHP Variables',
                descriptionCh: ['Variables are used'],
                date: '2021-06-29'
            },
            {
                id_ch: 15,
                chapitre: 'PHP',
                titreChapitre: 'PHP Variables',
                descriptionCh: ['Variables are used'],
                date: '2021-06-29'
            },
            {
                id_ch: 15,
                chapitre: 'PHP',
                titreChapitre: 'PHP Arrays',
                descriptionCh: ['Un tableau est une variable spéciale, qui peut contenir plusieurs valeurs à la fois.">'],
                date: '2021-06-29',
            },
            {
                id_ch: 16,
                chapitre: 'HTML',
                titreChapitre: 'HTML Elements',
                descriptionCh: ['Un élément HTML est défini par une '],
                date: '2021-06-29'
            },
            {
                id_ch: 16,
                chapitre: 'HTML',
                titreChapitre: 'Attributs HTML',
                descriptionCh: ['Les attributs HTML fournissent des informations s'],
                date: '2021-06-29'
            },
            {
                id_ch: 16,
                chapitre: 'HTML',
                titreChapitre: 'Listes HTML',
                descriptionCh: ['Les listes HTML permettent aux développeurs Web de regrouper ">'],
                date: '2021-06-29'
            },
            {
                id_ch: 16,
                chapitre: 'HTML',
                titreChapitre: 'Listes HTML',
                descriptionCh: ['Les listes HTML permettent aux développeurs Web de regrouper ">'],
                date: '2021-06-29'
            },
            {
                id_ch: 17,
                chapitre: 'JavaScript',
                titreChapitre: 'Syntaxe JavaScript',
                descriptionCh: ['La syntaxe JavaScript est l ensemble des règles'],
                date: '2021-06-30'
            },
            {
                id_ch: 17,
                chapitre: 'JavaScript',
                titreChapitre: 'JavaScript Variables',
                descriptionCh: ['Les variables sont des conteneurs pour stocker des données (valeurs).'],
                date: '2021-06-30'
            },
            {
                id_ch: 17,
                chapitre: 'JavaScript',
                titreChapitre: 'Opérateurs JavaScript',
                descriptionCh: ['Attribuez des valeurs aux variables'],
                date: '2021-06-30'
            },
            {
                id_ch: 18,
                chapitre: 'PYTHON',
                titreChapitre: 'Python Syntax',
                descriptionCh: ['Comme nous l avons appris dans la page précédente, la syntaxe Python'],
                date: '2021-06-30'
            },
            {
                id_ch: 18,
                chapitre: 'PYTHON',
                titreChapitre: 'Python Variables',
                descriptionCh: ['Les variables sont des conteneurs pour stocker des valeurs de données.'],
                date: '2021-06-30'
            },
            {
                id_ch: 19,
                chapitre: 'SQL SERVER',
                titreChapitre: 'SQL Syntax',
                descriptionCh: ['Une base de données contient le plus souvent une ou ">'],
                date: '2021-06-30',

            },
            {
                id_ch: 20,
                chapitre: 'Asp.Net',
                titreChapitre: 'ASP Syntax',
                descriptionCh: ['Tous nos exemples montrent le code ASP en rouge.</">'],
                date: '2021-07-1',

            },
            {
                id_SousCh: 20,
                chapitre: 'Asp.Net',
                titreChapitre: 'ASP Procedures',
                descriptionCh: ['Tous nos exemples montrent le code ASP en rouge.</">'],
                date: '2021-07-1',

            },
            {
                id_SousCh: 21,
                chapitre: 'CSS',
                titreChapitre: 'CSS Syntax',
                descriptionCh: ['Une règle CSS se compose d un seac'],
                date: '2021-07-1',
            },
            {
                id_ch: 21,
                chapitre: 'CSS',
                titreChapitre: 'Sélecteurs CSS',
                descriptionCh: ['Un sélecteur CSS sélectionne le ou">'],
                date: '2021-07-1',
            },
            {
                id_ch: 21,
                chapitre: 'CSS',
                titreChapitre: 'Sélecteurs CSS',
                descriptionCh: ['Un sélecteur CSS sélectionne le ou">'],
                date: '2021-07-1',
            }
        ]

        var titreChapitre = document.getElementById('titreChapitre');
        var chapitre = document.getElementById('chapitre');
        var date = document.getElementById('date');
        // var quiz = document.querySelector('.quiz');
        var quizContainer = document.getElementById('quiz-container');
        var Quizz = document.getElementById('Quizz');
        var scorecard = document.getElementById('scorecard');
        var descriptionCh = document.getElementById('descriptionCh');
        var next = document.querySelector('.next');
        var points = document.getElementById('score');
        var span = document.querySelectorAll('span');
        var scoree = document.querySelector('#score');
        var question = document.getElementById('question');
        var option0 = document.getElementById('option0');
        var option1 = document.getElementById('option1');
        var suiv = document.querySelector('.suiv');
        var titre = document.getElementById('titre');
        var score = 0;
        var i = 0;

        function displayQuestion(SousChapitre) {
            chapitre.innerHTML = SousChapitre[i].chapitre;
            titreChapitre.innerHTML = SousChapitre[i].titreChapitre;
            date.innerHTML = SousChapitre[i].date;
            descriptionCh.innerHTML = SousChapitre[i].descriptionCh;
            if (SousChapitre[i].chapitre == "HTML") {
                if (SousChapitre[i].titreChapitre == "HTML Elements") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<strong>HTML <u>Chapitre </u></strong>',
                        showConfirmButton: false,
                        timer: 1500,
                    })
                }
            }
            if (SousChapitre[i].chapitre == "JavaScript") {
                if (SousChapitre[i].titreChapitre == "Syntaxe JavaScript") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<strong>JavaScript <u>Chapitre </u></strong>',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
            if (SousChapitre[i].chapitre == "PYTHON") {
                if (SousChapitre[i].titreChapitre == "Python Syntax") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<strong>PYTHON <u>Chapitre </u></strong>',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
            if (SousChapitre[i].chapitre == "CSS") {
                if (SousChapitre[i].titreChapitre == "CSS Syntax") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<strong>CSS <u>Chapitre </u></strong>',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
            if (SousChapitre[i].chapitre == "Asp.Net") {
                if (SousChapitre[i].titreChapitre == "ASP Syntax") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<strong>Asp.Net <u>Chapitre </u></strong>',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
            // if(questionBank.length == questionBank[i]){
            //     chapitre.innerHTML = ;
            // }
            // stat.innerHTML = "SousChapitre" + ' ' + (i + 1) + ' ' + 'of' + ' ' + questionBank.length;
        }

        function nextQuestion() {
            if (i < SousChapitre.length) {
                i = i + 1;
                displayQuestion(SousChapitre);
                quizContainer.style.display = 'none'

            } else {
                Quizz.style.display = 'none';
                quizContainer.style.display = 'block'
            }
        }
        //click events to next button
        suiv.addEventListener('click', nextQuestion);
        //click events to next button
        // next.addEventListener("click", nextQuestion);
        // document.getElementById('next').addEventListener('click', nextQuestion);
        /////////////Question//////////////////////
        /////////////////////////// Questions ////////////////////////////////
        var Questions = [{
                chapitre: 'PHP',
                question: 'Les fichiers PHP ont l’extension …. ',
                option: ['php', 'HTML'],
                answer: 'php'
            },
            {
                chapitre: 'PHP',
                question: 'Nous pouvons utiliser ___ pour commenter une seule ligne?',
                option: ['//', '/?'],
                answer: '//'

            },
            {
                chapitre: 'PHP',
                question: 'Laquelle des déclarations PHP suivantes affichera Hello World à l’écran?',
                option: ['echo ( ', 'sprintf ('],
                answer: 'echo ('
            },
            {
                chapitre: 'PHP',
                question: 'Question:Laquelle des fonctions suivantes trie un tableau dans l’ordre inverse?',
                option: ['rsort()', 'shuffle()'],
                answer: 'rsort()'

            },
            {
                chapitre: 'HTML',
                question: 'Question:HTML est considéré comme ______ ?',
                option: ['Langage de balisage', 'Langage POO'],
                answer: 'Langage de balisage'

            },
            {
                chapitre: 'HTML',
                question: 'Question:Un document HTML est enregistré avec l’extension ____.?',
                option: [' .html', '.hml'],
                answer: '.html'

            },
            {
                chapitre: 'HTML',
                question: 'Le document HTML contient une balise racine appelée ____?',
                option: ['HTML', 'HEAD'],
                answer: 'HTML'
            },
            {
                chapitre: 'JavaScript',
                question: 'Dans quel balise HTML plaçons-nous le code JavaScript?',
                option: ['La balise script ', 'La balise js'],
                answer: 'La balise script'
            }
        ]
        ////////Quizz////////////////////
        var j = 0;

        function displayQuizz() {
            for (var a = 0; a < span.length; a++) {
                span[a].style.background = 'none';
            }
            titre.innerHTML = Questions[j].chapitre;
            question.innerHTML = Questions[j].question;
            option0.innerHTML = Questions[j].option[0];
            option1.innerHTML = Questions[j].option[1];
            stat.innerHTML = "Question" + ' ' + (j + 1) + ' ' + 'of' + ' ' + Questions.length;
        }

        //function to calculate scores
        function calcScore(e) {
            if (e.innerHTML === Questions[j].answer && score < Questions.length) {
                score = score + 1;
                document.getElementById(e.id).style.background = 'limegreen';
            } else {
                document.getElementById(e.id).style.background = 'tomato';
            }
            setTimeout(nextQuiz, 300);
        }

        //function to display next question
        function nextQuiz() {
            if (j < Questions.length - 1) {
                j = j + 1;
                displayQuizz();
            } else {
                points.innerHTML = score + '/' + Questions.length;
                quizContainer.style.display = 'none';
                scoreboard.style.display = 'block'
            }
        }

        //click events to next button
        next.addEventListener('click', nextQuiz);
        //Back to Quiz button event
        function backToQuiz() {
            location.reload();
        }

        //function to check Answers
        function checkAnswer() {
            var answerBank = document.getElementById('answerBank');
            var answers = document.getElementById('answers');
            answerBank.style.display = 'block';
            scoreboard.style.display = 'none';
            for (var a = 0; a < Questions.length; a++) {
                var list = document.createElement('li');
                list.innerHTML = Questions[a].answer;
                answers.appendChild(list);
            }
        }
        displayQuizz();
    </script>

</body>

</html>