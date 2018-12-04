<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/styles.css" type="text/css" rel="stylesheet" />

    <title>Forum</title>
</head>


<body>
<!-- NAVBAR TÄHÄN LOGOUT JA ...?? -->
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
    </li>
</ul>



<!--CHATTI-->

<div class="row chat-wrap">


    <!--VASEN REUNA KESKUSTELUT-->

    <div class="col-sm-3 panel-wrap">

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#chat1">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#chat2">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
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
            <div class="row content-wrap messages" id="messagess">

                <!--Yksi viesti-->
                <div class="msg">
                    <div class="media-body">
                        <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>

                        <h5 class="media-heading">Testihenkilö</h5>
                        <?php
                        if (empty($this->messages)) {
                            echo "There is no messages in chat...";
                        } else {
                            foreach ($this->messages as $message) {
                                echo htmlspecialchars($message) . "<br>";
                            }
                        }
                        ?>

                    </div>
                </div>

            </div>

            <!--Tekstiboksi ja lähetysnappula-->
            <div class="row send-wrap">
                <div class="send-message">
                    <form action="?action=send" method="post">

                        <input type="text" name="message">
                        <input type="submit" value="Send">
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/forumchat.js"></script>

</body>
</html>
