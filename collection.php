<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title>Gourmandise, Seraphin Parys</title>
        <script src="javascript/jquery.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/c88ba75710.js' crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href="jquery.roadmap.min.css" rel="stylesheet">
        <script src="javascript/timeline.js" type="text/javascript"></script>
    </head>
    <body class="collection">
        <?php include 'header.php'; ?>

        <h1 class="text-center">La collection</h1>

        <div class="row col-12">
            <div class="col-4"></div>
            <div id="butt" class="col-4 text-center"> <a class="scrollFonction" href="#page-1"><i  class="fas fa-arrow-alt-circle-down fa-4x align-items-center"></i></a></div>
            <div class="col-4"></div>
        </div>

        <div id="page-1" class="fondCollection col-12">

            <!-- Projects Section -->
            <section id="projects" class="projects-section bg-light">
                <div class="container">

                    <div class="radio-but row align-items-center">
                        <input name="projects-type" type="radio" value="collection1"  onclick="displayProject()" /> collection 1
                        <input name="projects-type" type="radio" value="collection2"  onclick="displayProject()" /> collection 2
                        <input name="projects-type" type="radio" value="collection3"  onclick="displayProject()" /> collection 3
                    </div>
                    
                    <!-- collection 1 -->
                    <div class="all collection1">
                        <img class="img-fluid" src="img/collection2.png" alt="">
                    </div>
                    
                    <!-- collection 2 -->
                    <div class="all collection2">
                        <img class="img-fluid mb-3 mb-lg-0" src="img/collection1.png" alt="">
                    </div>

                    <!-- collection 3 -->
                    <div class="all collection3">
                        <img class="img-fluid" src="img/collection3.png" alt="">
                    </div>

                </div>
            </section>
        </div>

        <script src="javascript/jquery.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="javascript/scroll.js" type="text/javascript"></script>
        <script src="javascript/collectionJS.js" type="text/javascript"></script>
    </body>
</html>

