<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="public/css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="public/css/pupilscheck.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
    </head>

    <body>
        <header>
            <nav class="nav-wrapper">
                <a href="#!" class="brand-logo">Logo</a>
                <a href="#" data-activates="mobile-nav" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Un premier élément</a></li>
                    <li><a href="#">Un deuxième élément</a></li>
                    <li><a href="#">Un troisème élément</a></li>
                </ul>

                <ul class="side-nav" id="mobile-nav">
                    <li><a href="#">Un premier élément</a></li>
                    <li><a href="#">Un deuxième élément</a></li>
                    <li><a href="#">Un troisème élément</a></li>
                </ul>
            </nav>
        </header>

        <main>
        </main>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <!--<div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>

        <script type="application/javascript" src="public/js/jquery-1.12.3.js"></script>
        <script type="application/javascript" src="public/js/materialize.js"></script>
        <script type="application/javascript" src="public/js/pupilscheck.js"></script>
    </body>
</html>
