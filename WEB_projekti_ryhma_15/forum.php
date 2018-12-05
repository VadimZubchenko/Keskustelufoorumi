<?php
    session_start();

    $username = $_SESSION["username"];

    if (!isset($_SESSION['username'])) {
        header('location:index.html');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/forumstyles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Forum</title>
</head>

<body onload="myFunction()">

<div class="pulse" id="pulse"></div>

<section id="forum" style="display:none;" class="animate-bottom">

<!-- NAVBAR TÄHÄN LOGOUT JA ...?? -->
    <ul class="nav justify-content-end">
         <li class="nav-item">
             <a class="nav-link" href="php/logout.php">Logout</a>
        </li>
    </ul>

<!--CHATTI-->

    <div class="row chat-wrap">

        <!--VASEN REUNA KESKUSTELUT-->
        <div class="col-sm-3 panel-wrap">

                <ul class="nav flex-column" id="jaska">
                    <li class="nav-item active" id="1">
                        <a class="nav-link" href="#chat1" onclick="selectMessage(1)">Group 1</a>
                    </li>
                    <li class="nav-item" id="2">
                        <a class="nav-link" href="#chat2" onclick="selectMessage(2)">Group 2</a>
                    </li>
                    <li class="nav-item" id="3">
                        <a class="nav-link disabled" href="#" onclick="selectMessage(3)">Group 3</a>
                    </li>
                </ul>

        </div>

        <!-- CHATIT  -->
        <div class="col-sm-9 panel-wrap">

            <!--Main Content / Message List-->
            <div class="col-sm-9 section-wrap" id="Messages">

                <!--Header-->
                <div class="row header-wrap">
                    <div class="chat-header col-sm-12">
                        <h4>OTSIKKOTESTI</h4>
                    </div>
                </div>

                <!--Viestit-->
                <div class="row content-wrap messages" id="messages2">

                    <!--Yksi viesti-->
                    <!--
                    <div class="msg">
                        <div class="media-body">
                            <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>

                            <h5 class="media-heading">Testihenkilö</h5>
                            <small class="col-sm-11">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos...</small>
                        </div>
                    </div>
                    -->
                    <div class="container">
                        <h6> <?php echo $username; ?> </h6>
                        <small>Hello. How are you today?</small>
                        <small class="time-right">11:00</small>
                    </div>
                </div>
                <!--Tekstiboksi ja lähetysnappula-->
                <div class="row send-wrap">
                    <div class="send-message">
                        <div class="message-text">
                            <textarea id="text" class="no-resize-bar form-control" rows="2" placeholder="Write a message..."></textarea>
                        </div>
                        <div class="send-button">
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="sendMes('<?php echo $username; ?>')"> <i class="fa fa-send"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>


<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 3100);
    }

    function showPage() {
        document.getElementById("pulse").style.display = "none";
        document.getElementById("forum").style.display = "inline";
    }
</script>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></s>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/forumchat.js"></script>

</body>
</html>
