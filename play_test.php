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
        <!-- <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <div class="row">
                <div class="col-sm-6">            
                    <div class="form-group">
                        <label for="sel1">Child Gender :</label>
                        <select class="form-control" id="sex">
                            <option value="Male">Female</option>
                            <option value="Female">Male</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">Age in Months :</label>
                        <select class="form-control" id="age">
                            <option value="0 - 6Mths">0 - 6 Mths</option>
                            <option value=">6-12Mths">6-12 Mths</option>
                            <option value=">12-18Mths">12-18 Mths</option>
                            <option value=">18-24Mths">18-24 Mths</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">Location :</label>
                        <select class="form-control" id="status">
                            <option value="kampala">Kampala</option>
                            <option value="Entebbe">Entebbe</option>
                            <option value="Jinja">Jinja</option>
                        </select>
                    </div>
                </div> -->
                <!-- <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">Occupation :</label>
                        <select class="form-control" id="income">
                            <option value=">3000">3,000 - 5,000 </option>
                            <option value="6000between10000">6,000 - 10,000</option>
                            <option value=">10000">> 10,000</option>
                        </select>
                    </div>
                </div> 
            </div>
            </div>
        </div> -->
        <div class="container">

            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child respond to name by 12 months of age onwards?
                    </div>
                    <input type="range" id="relating" name="relating" min="1" max="4" step="1" labels="1, 2, 3, 4">
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child share same or similar interests like other children of same age?
                    </div>
                    <input type="range" id="speech" name="speech" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child prefer playing alone?
                    </div>
                    <input type="range" id="phrases" name="phrases" min="1" max="4" step="1" labels="1, 2, 3, 4">                  
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child make and maintain eye-contact with others?
                    </div>
                    <input type="range" id="pronouns" name="pronouns" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child interact with others only to achieve certain desired goals?
                    </div>
                    <input type="range" id="unrelated_answers" name="unrelated_answers" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does your child show flat inappropriate facial expressions in various situations?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child understand personal space boundaries?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child commonly avoid or resist physical contact?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                       Does child accept or feel comforted by others during distress?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child have trouble understanding other people's feelings or talking about own feelings?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                       Does child get upset by minor changes?
                    </div>
                    <input type="range" id="gesture" name="gesture" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        Does child play "pretend" or "make believe" games e.g. pretend to feed a doll etc by 18 months?
                    </div>
                    <input type="range" id="talk" name="talk" min="1" max="4" step="1" labels="1, 2, 3, 4">                   
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        
                    </div>
                     <button class="btn btn-lg btn-primary btn-block" name="play_interaction" type="submit">->&nbsp;Go to Behaviour Test </button>                   
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