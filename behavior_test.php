<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Austism Screening application for children below 24 Months">
    <meta name="author" content="Haron Gichuhi">
    <title>Autism | Screening Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <style>
    body 
    {
        position: relative; 
        font-family: 'Kanit', sans-serif;
    }
    .col-sm-12
    {
        padding-bottom:70px;
        padding-top:32px;
    }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#">
            <img src="img/autism_logo.png" alt="Logo" style="width:100px;">&nbsp;&nbsp;
        </a>
        Autism Screening Tool for Children below 24 Months
        
    </nav>
    <div id="section1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
        <center>
            <h2>
                <b>
                    Use this tool for screening purposes only - This is not a diagnostic tool!
                </b>
            </h2>
            <p>
                Simply drag the slider to a scale of 1 to 4 as a response to the question
            </p>
        </center>
      
        <div class="container">

            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child show obsessive interests?
                    </div>
                    <input type="range" id="relating" name="relating" min="1" max="4" step="1" labels="1, 2, 3, 4">
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Do you notice child plays with toys the same way every other time?
                    </div>
                    <input type="range" id="speech" name="speech" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child pick interest and only like specific parts of objects e.g wheels?
                    </div>
                    <input type="range" id="phrases" name="phrases" min="1" max="4" step="1" labels="1, 2, 3, 4">                  
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child appear very organised or always following routine  e.g during play etc?
                    </div>
                    <input type="range" id="pronouns" name="pronouns" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child always line up toys or other objects?
                    </div>
                    <input type="range" id="unrelated_answers" name="unrelated_answers" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child appear to always have a short attention span?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child often get upset by minor changes?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child flap hands, rocks body or spins self in circles?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                       Does child often show completely no fear for certain things as would be expected of fellow agemates?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child often show extreme fear for certain things as would be expected of fellow agemates?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                       Is child always aggressive and throwing temper tantrums?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        Does child occassionally cause self injury?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-12">  
                    </div>
                     <button class="btn btn-lg btn-primary btn-block" name="play_interaction" type="submit">->&nbsp;Go to Self-Help Test </button>                   
                </div>
            </div>
        </div>
        <!-- <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1><center><div class="result"></div></center></h1>
                </div>
            </div>
        </div> -->
    </div>
    <script src='https://rawgit.com/andreruffert/rangeslider.js/develop/dist/rangeslider.min.js'></script>
    <script src="js/index.js"></script>
    <script>
        $("input").bind("change", function(){
            var sex = $("#sex").val();
            var age = $("#age").val();
            var status = $("#status").val();
            var income = $("#income").val();
            var chat = $("#chat").val();
            var social = $("#social").val();
            var streaming = $("#streaming").val();
            var email = $("#email").val();
            var game = $("#game").val();
            var internet = $("#internet").val();
            var wifi = $("#wifi").val();

        
                $.ajax({
                    type: "POST",
                    url: "comm_results.php",
                    cache: false,
                    data: "sex="+sex+"&age="+age+"&status="+status+"&income="+income+"&chat="+chat+"&social="+social+"&streaming="+streaming+"&email="+email+"&game="+game+"&internet="+internet+"&wifi="+wifi,
                    success: function(msg){
                        
                        $(".result").text(msg);
                    }
                });
        });

    </script>
</body>
</html>