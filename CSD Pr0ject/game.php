<?php
$title = "Game";                   // (1) Set the title
include "header.php";                 // (2) Include the header
?>


<body>

    <!------JUST THE NAVBAR------->
    <div class="wrapper">
        <header>
            <nav>
                <div class="menu-icon">
                    <i class=" fa fa-bars fa-2x"></i>
                </div>

                <div id="logo">Vishvak</div>
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="game.php">Click Here To Play!</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <h1>---=Coming Soon=----</h1>
        </header>
    </div>

    <!-------- ABOUT GAME-------->
    <div class="container">
        <div class="row">
            <div class="row-header">
                <h2></h2>
            </div>
            <div class="row-content">
                <p> .</p>
            </div>
        </div>
        <div class="row">
            <div class="row-header">
                <h2></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="images/game-mode-2.jpg" width="500px" height="200px">
            </div>
            <div class="col-sm-6">
                <h4></h4>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h4></h4>
                <p>.</p>
            </div>
            <div class="col-sm-6">
                <img src="images/game-mode-1.jpg" width="500px" height="200px">
            </div>
        </div>
        <div class="row">
            <div class="row-header">
                <h2></h2>
            </div>
        </div>
        <div class="row">
            <div class="row-content">
                <p>.</p>
            </div>
        </div>
    </div>
    </div>

    <!-----------FOOTER------------->
    <?php
include "footer.php";                
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        //Menu toggle-effect
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                $("nav ul").toggleClass("showing");
            });
        });

        //Scrolling Effect
        $(window).on('scroll', function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black')
            }
        })

    </script>

</body>

</html>
