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
    
    <title>Timon Platz - Projects</title>
</head>

<body class="blue-grey darken-4">
    <!-- navbar -->
    <nav class="blue-grey darken-3">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo center contrast-text">Timon Platz</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="/cv/">CV</a></li>
                <li class="active"><a href="/projects/">Projects</a></li>
            </ul>

            <a href="." data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="sidenav blue-grey darken-3" id="mobile-demo">
                <li><a href="/" class="white-text">Home</a></li>
                <li><a href="/cv/" class="white-text">CV</a></li>
                <li class="active"><a href="/projects/" class="white-text">Projects</a></li>
            </ul>
        </div>
    </nav>

    <!-- content -->
    <main>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h2 class="header center contrast-text">Some personal projects</h2>
                <br><br>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col s12 card blue-grey darken-3 z-depth-2 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title"><b>Data compression on FPGAs</b></span>
                        <p>
                            <br>
                            For by bachelor's thesis, I implemented the LZSS lossless data compression algorithm in VHDL.
                            The implementation adheres to the Intel Avalon Streaming Interface and is to be used as an accelerator for the Configurable Network Protocol Accelerator framework.
                            Working on this project, I have gained a lot of insights into FPGAs and digital circuit design.
                            <br><br>
                            Language: VHDL
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="https://github.com/T-Platz/LZSS-VHDL" class="contrast-text">GitHub</a>
                    </div>
                </div>


                <div class="col s12 card blue-grey darken-3 z-depth-2 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title"><b>A 'cat' clone</b></span>
                        <p>
                            <br>
                            In one of my earlier projects, I created a clone of the well-known Unix tool 'cat' in x86_64 assembly.
                            While the main motivation for this project was to write a program in assembly without the help of any higher-level language like C, I also learned a lot about system calls and the loading process of programs.
                            <br><br>
                            Language: x86_64 assembly
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="https://github.com/T-Platz/cat-asm" class="contrast-text">GitHub</a>
                    </div>
                </div>

                <div class="col s12 card blue-grey darken-3 z-depth-2 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title"><b>L4 microkernels</b></span>
                        <p>
                            <br>
                            As part of a practical course in university, we were given the task to port the Fiasco.OC microkernel to different SBCs.
                            In a team of three students, we created several drivers which allowed for the microkernel to run on the NanoPC-T3+ SBC.
                            This SBC incorporates the S5P6818 SoC, which the drivers were written for.
                            <br><br>
                            Language: C++
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="https://github.com/T-Platz/S5P6818-Fiasco.OC" class="contrast-text">GitHub</a>
                    </div>
                </div>

                <div class="col s12 card blue-grey darken-3 z-depth-2 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title"><b>A webpage</b></span>
                        <p>
                            <br>
                            Last but not least, I have created the website you are looking at right now with the help of the <a href="https://materializecss.com/" class="contrast-text">Materialize framework</a>.
                            <br><br>
                            Languages: HTML, PHP and some CSS
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="https://github.com/T-Platz/Portfolio" class="contrast-text">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="page-footer blue-grey darken-4">
        <div class="footer-copyright blue-grey darken-3">
            <div class="container">
                <?php echo date("Y")?> Timon Platz<a href="mailto:timon.platz@gmail.com" class="contrast-text right">Contact</a>
            </div>
        </div>
    </footer>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script src="/js/init.js"></script>
</body>
</html>