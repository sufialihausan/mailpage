<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" id="five">500</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="one">1000</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="fifteen">1500</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="fifty">5000</a>
                </li>
            </ul>
            <form method="post" class="form">
                <div class="form-group">
                    <label for="">Donation Amount</label>
                    <input type="number" name="" id="da" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="email" name="" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="number" name="" id="contact" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" id="submit">
                    <p id="msg"></p>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $("#five").click(function(){
        var five=$("#five").text();
        $("#da").val(five);
    });
    $("#one").click(function(){
        var one=$("#one").text();
        $("#da").val(one);
    });
    $("#fifteen").click(function(){
        var fifteen=$("#fifteen").text();
        $("#da").val(fifteen);
    });
    $("#fifty").click(function(){
        var fifty=$("#fifty").text();
        $("#da").val(fifty);
    });
    $("#submit").click(function(){
        // var name=$("#name").val();
        // var email=$("#email").val();
        // var contact=$("#contact").val();
        // var da=$("#da").val();
        // $.ajax(
        //     url:"backend.php",
        //     type:"POST",
        //     data:{name:name,email:email,contact:contact,da:da},
        //     success: function (response) {
        //         $("#msg").html(response);
        //     }
        // );
        alert("hell")
        
    });
</script>
</body>
</html>