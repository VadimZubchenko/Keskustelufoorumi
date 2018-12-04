<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="css/indexstyles.css" type="text/css" rel="stylesheet" />

    <title>Project</title>

    <!-- Fade in -->
    <style>
    .js-reveal {
    opacity: 1;
    transition: opacity .7s ease-in, margin-top .7s ease-out;
    }

    .js-reveal--hidden {
    opacity: 0;
    margin-top: 3em;
    }
    </style>


</head>
<body onload="myFunction()">
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3100);
    }

    function showPage() {
        document.getElementById("pulse").style.display = "none";
        document.getElementById("home").style.display = "block";
    }
</script>

<div class="pulse" id="pulse"></div>
<section id="home" style="display:none;" class="animate-bottom">

<nav class="navbar navbar-expand-lg navbar-light">
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="document.getElementById('id01').style.display='block'">Log In</a></button>
        </form>
    </div>
</nav>

 <!-- The Modal -->
    <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content animate" action="login.php" method="post">
            <div class="imgcontainer">
                <img src="https://content.wdl.org/576/thumbnail/1430159334/616x510.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
        </form>
    </div>


    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>You need us</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="js-reveal"> This chat is better than life!</p>
                </div>
            </div>
        </div>
    </header>


    <section id="first">
        <div class="container-fluid p-0">
            <div class="row no-gutters popup-gallery">
                <div class=" col-sm-6">
                    <a class="supabox" onclick="document.getElementById('id01').style.display='block'">
                        <img class="img-fluid" src="https://www.lean.org/LeanPost/Images/469_large.jpg" alt="">
                        <div class="supabox-caption">
                            <div class="supabox-caption-content">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="supabox">
                        <div id="txt" class="js-reveal"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus lacinia luctus. Integer dictum lorem quis maximus feugiat.
                        </div>
                    </a>
                </div>

                <div class="col-sm-6">
                    <a class="supabox">
                        <div id="txt" class="js-reveal"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus lacinia luctus. Integer dictum lorem quis maximus feugiat.

                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="supabox" onclick="document.getElementById('id01').style.display='block'">
                        <img class="img-fluid" src="http://indiafacts.org/wp-content/uploads/2018/02/Indic-Language-Families-and-Indo-European-02.jpg" alt="">
                        <div class="supabox-caption">
                            <div class="supabox-caption-content">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="second">
        <div class="container-fluid p-0">
            <div class="row no-gutters popup-gallery">
                <div class="col-sm-6">
                    <a class="supabox" onclick="document.getElementById('id01').style.display='block'">
                        <img class="img-fluid" src="http://www.web-translations.com/wp-content/uploads/2011/04/communicationsprobs.jpg" alt="">
                        <div class="supabox-caption">
                            <div class="supabox-caption-content">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="supabox">
                        <div id="txt" class="js-reveal"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus lacinia luctus. Integer dictum lorem quis maximus feugiat.

                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="supabox">
                        <div id="txt" class="js-reveal"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus lacinia luctus. Integer dictum lorem quis maximus feugiat.

                </div>
            </a>
        </div>
            <div class="col-sm-6">
                <a class="supabox" onclick="document.getElementById('id01').style.display='block'">
                    <img class="img-fluid" src="https://i2.wp.com/verdict.justia.com/wp-content/uploads/2017/10/shutterstock_509785477.jpg?quality=100&resize=1200%2C440&strip=all&fit=1000%25&ssl=1" alt="">
                    <div class="supabox-caption">
                        <div class="supabox-caption-content">
                        </div>
                    </div>
                </a>
            </div>
            </div>
        </div>
    </section>
</section>


<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>



<!-- Fade in -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/jquery.scroll-reveal.js"></script>

<script>
    $.fn.scrollReveal();
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>

