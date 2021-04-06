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
       </div>
        <div class="container">

            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                        Is child able to look around after hearing any sound of say name or any thing like"where is your ball?, where is your cup? etc
                    </div>
                    <input type="range" id="relating" name="relating" min="1" max="4" step="1" labels="1, 2, 3, 4">
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                       
                        Is child able to look for hidden objects e.g toys, balls, dolls etc?
                    </div>
                    <input type="range" id="speech" name="speech" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                        Is child able to imitate new gestures?
                    </div>
                    <input type="range" id="phrases" name="phrases" min="1" max="4" step="1" labels="1, 2, 3, 4">                  
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                        Is child able to drink from the cup with little spilling?
                    </div>
                    <input type="range" id="pronouns" name="pronouns" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                        Is child able to scoop something using a spoon?
                    </div>
                    <input type="range" id="unrelated_answers" name="unrelated_answers" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                        Is child able to dress and undress self?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                        Is child able to point at  pictures e.g in a book, on the wall etc to draw parent's attention to it?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                        Is child able to use words to ask for help?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        
                       Is child able to use a potty or toilet rightly?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        Is child able to wash and dry hands?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        Is child able to try to get parents to watch what he/she is doing by saying "look at me"?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        Is child able to engage in imaginative play?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        
                    </div>
                     <button class="btn btn-lg btn-primary btn-block" name="play_interaction" type="submit">->&nbsp;Go to Motor &amp; Fine Skills </button>                   
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