<!DOCTYPE html>
<html>
<head>
    <!-- meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/layout.css"  media="screen,projection"/>
    
    <title>Portfolio</title>
</head>

<body class="blue-grey darken-4">
    <!-- navbar -->
    <nav class="blue-grey darken-3">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo center contrast-text">Timon Platz</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/cv/">CV</a></li>
                <li><a href="/projects/">Projects</a></li>
            </ul>

            <a href="." data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="sidenav blue-grey darken-3" id="mobile-demo">
                <li><a href="/" class="white-text">Home</a></li>
                <li class="active"><a href="/cv/" class="white-text">CV</a></li>
                <li><a href="/projects/" class="white-text">Projects</a></li>
            </ul>
        </div>
    </nav>

    <!-- content -->
    <main>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h2 class="header center contrast-text">A brief summary of mine</h2>
                <br><br>
            </div>

            <!-- Login -->
            <div class="container">
                <div class="row">
                    <?php
                        session_start();
                        if (!isset($_SESSION["show_cv"]) || $_SESSION["show_cv"] == -1) { ?>
                            <div class="col s8 offset-s2 m4 offset-m4 l4 offset-l4">
                                <form method="POST" action="login.php" id="login_form">
                                    <h5 class="contrast-text">Password:</h5>
                                    <input type="password" name="password" id="password"><br>
                                    <button class="btn waves-effect waves-light contrast-color black-text" type="submit" name="submit">Submit</button>
                                </form>
                            </div>
                            <?php
                                if ($_SESSION["show_cv"] == -1) {
                                    echo "<div class=\"col s8 offset-s2 m4 offset-m4 l4 offset-l4\">";
                                    echo "<br><h6 class=\"s6 red-text darken-4\">Invalid password</h6>";
                                    echo "</div>";
                                    session_destroy();
                                }
                        } else {
                            echo "<div class=\"col s12 cv";
                            echo $_SESSION["show_cv"];
                            echo "\"></div>";
                            session_destroy();
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="page-footer blue-grey darken-4">
        <div class="footer-copyright blue-grey darken-3">
            <div class="container">
                2021 Timon Platz<a href="mailto:timon.platz@gmail.com" class="contrast-text right">Contact</a>
            </div>
        </div>
    </footer>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script src="/js/init.js"></script>
</body>
</html>