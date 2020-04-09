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
                    <!--Exercice slide 27-->
                    <div class="col-sd-12 col-md-12 col-lg-12 col-xl-12 radio-but">
                        <input name="projects-type" type="radio" value="vitrine" onclick="displayProject()" /> Sites vitrines
                        <input name="projects-type" type="radio" value="commerce" onclick="displayProject()" /> Sites e-commerces
                        <input name="projects-type" type="radio" value="all" checked onclick="displayProject()" /> Tous les projets
                    </div>
                    
                    <!-- Featured Project Row -->
                    <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                        <div class="col-xl-8 col-lg-7 all commerce">
                            <img class="img-fluid mb-3 mb-lg-0" src="img/collection1.png" alt="">
                        </div>
                        <div class="col-xl-4 col-lg-5 all commerce">
                            <div class="featured-text text-center text-lg-left">
                                <h4>Shoreline</h4>
                                <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project One Row -->
                    <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                        <div class="col-lg-6 all vitrine">
                            <img class="img-fluid" src="img/collection2.png" alt="">
                        </div>
                        <div class="col-lg-6 all vitrine">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-left">
                                        <h4 class="text-white">Misty</h4>
                                        <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                        <hr class="d-none d-lg-block mb-0 ml-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Two Row -->
                    <div class="row justify-content-center no-gutters">
                        <div class="col-lg-6 all vitrine">
                            <img class="img-fluid" src="img/collection3.png" alt="">
                        </div>
                        <div class="col-lg-6 order-lg-first all vitrine">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-right">
                                        <h4 class="text-white">Mountains</h4>
                                        <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                        <hr class="d-none d-lg-block mb-0 mr-0">
                                    </div>
                                </div>
                            </div>
                        </div>
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

