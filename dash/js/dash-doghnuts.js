$(document).ready(function(){

    $.ajax({
        url : "http://localhost/joy/dash/api/data.php",
        type: "GET",
        success : function(data){
            console.log(data);
            var score = {
                
            };

        },
        error: function(data){
            console.log(data);
        }
    });
})