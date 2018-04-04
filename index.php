<!DOCTYPE html>
<html lang="en">
<head>
     
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
    <div id="wrapper">
       
    </div>

   
<script type="text/javascript">
    
$("#buttonIDHere").click(function(){
    FunctionNameHere();
});

    function FunctionNameHere() {
    $.ajax({
        type: "post",
        url: "/config/Controller.php?insert",
        dataType: "json",
        data: {
            username:"InptHere",
            pwd:"inputHere"
        },
        success: function(data) {
            //  console.log(data)
            $.each(data, function(i, e) {
                // console.log(e[1]);
                $("#notification-message").text(e[1]);
            });
        }
    });
}

</script>



</body>
</html>
