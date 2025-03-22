<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        
        .anik{
            border: 2px solid black;
            height: 500px;
            width: 400px;
        }
        .mb-3 input{
            width: 50%;
        }
        .mt-4{
            border: 2px solid black;
            width: 30%;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="">
        <form action="java.html" onsubmit="return checkvlidation()">
            <div class="mb-3">
                
                <label for="email" class="form-label"></label>
                <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"></label>
                <input type="password" class="form-control" id="password" placeholder="Enter Your password">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
        </div>
    </div>
</body>
</html>