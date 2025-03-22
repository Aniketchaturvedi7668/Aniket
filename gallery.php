<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .grid-container{
            display: grid;
            grid-template-columns: auto auto auto auto;
            background-color: aquamarine;
            
        }
        .grid-item{
            background-color: white;
            border: 2px solid black;
            height: 300px;
            width: 300px;
            margin: 10px;
        }
       .grid-item img{
        height: 290px;
        width: 290px;
       }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img src="cycle.png" class="w-100 shadow-1-strong rounded mb-2" alt="Boat on Calm Water"/>
      
          <img src="mat.png" class="w-100 shadow-1-strong rounded mb-2" alt="Wintry Mountain Landscape" />
        </div>
      
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="Printer.png" class="w-100 shadow-1-strong rounded mb-2" alt="Mountains in the Clouds"/>
      
          <img src="shoes.png" class="w-100 shadow-1-strong rounded mb-2" alt="Boat on Calm Water"/>
        </div>
      
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="T.V.png" class="w-100 shadow-1-strong rounded mb-2" alt="Waves at Sea" />
      
          <img src="pexels-tofros-com-83191-359757.jpg" class="w-100 shadow-1-strong rounded mb-2" alt="Yosemite National Park"/>
        </div>
      </div>
</body>
</html>