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
    <body class="histoire">
        <?php include 'header.php'; ?>
        
        <h1 class="text-center">La collection</h1>

        <div class="row col-12">
            <div class="col-4"></div>
            <div id="butt" class="col-4 text-center"> <a class="scrollFonction" href="#page-1"><i  class="fas fa-arrow-alt-circle-down fa-4x align-items-center"></i></a></div>
            <div class="col-4"></div>
        </div>

        <div id="page-1" class="paragraphePrincipaleHistoire col-12">
            <div id="galerie">
                <ul id="galerie_mini">
                    <li>
                        <a href="img/img1.png" title="Titre d 1"><img src="images/minis/m_photo1.png" alt="Le titro 1" /></a>    </li>
                    <li>
                        <a href="img/img2.png" title="Titre de la photo 2"><img src="images/minis/m_photo2.png" alt="Le titre de la photo 2" /></a>    </li>
                    <li>
                        <a href="img/img3.png" title="Titre de la photo 3"><img src="images/minis/m_photo3.png" alt="Le titre de la photo 3" /></a>    </li>
                    <li>
                        <a href="img/img1.png" title="Titre de la photo 4"><img src="images/minis/m_photo4.png" alt="Le titre de la photo 4" /></a>    </li>
                    <li>
                        <a href="img/img2.png" title="Titre de la photo 5"><img src="images/minis/m_photo5.png" alt="Le titre de la photo 5" /></a>    </li>
                    <li>
                        <a href="img/img3.png" title="Titre de la photo 6"><img src="images/minis/m_photo6.png" alt="Le titre de la photo 6" /></a>    </li>
                    <li>
                        <a href="img/img1.png" title="Titre de la photo 7"><img src="images/minis/m_photo7.png" alt="Le titre de la photo 7" /></a>    </li>
                </ul>

                <dl id="photo">
                    <dt>Titre de la photo 1</dt>
                    <dd><img id="big_pict" src="images/photo1.png" alt="Photo 1 en taille normale" /></dd>
                </dl>
            </div>
        </div>

        <script src="javascript/jquery.js" type="text/javascript"></script>
        <script src="javascript/alternateBG.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="javascript/scroll.js" type="text/javascript"></script>
    </body>
</html>

