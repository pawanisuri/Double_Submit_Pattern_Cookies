<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
            function getCookie() {
                    var name = "admin" + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var ca = decodedCookie.split(';');
                    for(var i = 0; i <ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') {
                            c = c.substring(1);
                        }
                        if (c.indexOf(name) == 0) {
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                }                     
    </script>
</head>
<body>
    <form action="main_action.php" method="post" name="document">
        <div class="imgcontainer">
            <img src="images/jobs.png" width='200' height='200'>
        </div>
        <div class="container">
            <input type="text" name="csrf_token" id="csrf_token" />
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name">

            <label><b>Position</b></label>
            <input type="text" placeholder="Enter your position" name="position" id="position">

            <label><b>Education Qualification</b></label>
            <input type="text" placeholder="Enter Education Qualifications" name="Edu" id="Edu">

            <button type="submit">Submit</button>
        </div>
    </form>
    <script>
    window.onload=function() {
        var csrfToken=getCookie();
        var x=document.cookie;                 
        var val=  document.getElementById("csrf_token");
        val.value=csrfToken;
    } 
    </script>
</body>
</html>