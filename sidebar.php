<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/font-awesome.min.css">
    
    <title>sidebar</title>
    <style>
        body{
            display: flex;
            font-family: Arial, sans-serif;
            text-align: center;
        
        }
        .sidebar{
            width: 250px;
            height: 100vh;
            background: #343a40;
            padding: 15px;
            color: white;
            margin-top: 50px
        }
        .content{
            flex-grow:1;
            padding: 20px;
        }
        .akra{
            border: 1px solid black;
        }
        .shiv{
            margin-left: 20px;
        }

        .akk{
            align-items: centre;
        }
        .anik{
            line-height: normal;
            display: inline-block;
            color: #fff;
            padding: 2px 4px 2px 6px;
            border-radius: 3px;
            font-weight: 500;
            font-size: 12px;
            vertical-align: middle;
            background-color: #388e3c;
            margin-left: 20px;
         }
         .aloo{ 
           padding-left: 8px;
           font-weight: 500;
           color: #878787
         }
         .aka img{
            border: 1px solid black;
            margin: 5px;
         }
         .gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0px;
            margin-top: 0px;
        }

        .thumbnail {
            width: 120px;
            height: auto;
            cursor: pointer;
            border-radius: 5px;
            transition: transform 0.2s;
        }

        .thumbnail:hover {
            transform: scale(1.1);
        }

        /* Modal Styles */
        .modal {
            display: none; /* Default band rahega */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            width: 300px; /* Modal ka size chhota kiya */
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }

        .close:hover {
            color: red;
        }
    </style>
</head>
<body>
      
    <div class="sidebar" id="sidebar">
        
        <h4>Admin</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="#" class="nav-link"><i class="bibi-house"></i>HOME</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="bibi-house"></i>PROFILE</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="bibi-house"></i>SETTING</a></li>
        </ul>
    </div>
    <div>
        <!--toggle button-->
        <button class="toggle-btn" id="togglebtn">
            <i class="bibi-list"></i>
        </button>
        
        <?php include('navbar.html'); ?>
        
        <!--main content-->
        <div class="content" id="content">
            <div class="col-sm-12 row">

                <div class="col-sm-1 gallery">
                    <div class="col-sm-12 aka">
                     <div class="thumbnail col-sm-2"><img src="pad.png" alt="" height="80" width="70" onclick="openModal('pad.png')"> </div>
                     <div class="thumbnail col-sm-2"><img src="pad.png" alt="" height="80" width="70" onclick="openModal('pad.png')"> </div>
                     <div class="thumbnail col-sm-2"><img src="pad.png" alt="" height="80" width="70" onclick="openModal('pad.png')"> </div>
                     <div class="thumbnail col-sm-2"><img src="pad.png" alt="" height="80" width="70" onclick="openModal('pad.png')"> </div>
                     <div class="thumbnail col-sm-2"><img src="pad.png" alt="" height="80" width="70" onclick="openModal('pad.png')"> </div>
                     
                     
                    </div>
                    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        function openModal(imageSrc) {
            let modal = document.getElementById("imageModal");
            let modalImage = document.getElementById("modalImage");
            
            modalImage.src = imageSrc;
            modal.style.display = "flex"; // Show modal
        }

        function closeModal() {
            document.getElementById("imageModal").style.display = "none";
        }
    </script>
        </div>
                <div class="col-sm-4">
                    <div class="pho"><img src="projector.png" alt="">
                </div>
                <!--BUTTONS-->
                <div class="akk">
                    <button type="submit" class="btn btn-danger">Add to Cart</button>
                <button type="submit" class="btn btn-danger">Buy Now</button></div>
            </div>
            <!--DETAILS-->
                <div class="col-sm-7"><div class="shiv">ZEBRONICS Zeb-Pixaplay 65 (ZEB-QLP 3) (8500 lm) Portable 1080p 
                    Native with 4K Support, 200-inch Screen Size, Electronic Focus, Built-in Speaker, 
                    Bluetooth, HDMI, USB, WIFI, AUX, Android Projector</div>
                    <div class="anik">4.1</div>
                    <span class="aloo">45 Ratings & 8 reviews   
                    </span>
                </div>
            </div>
            <h2></h2>
        </div>
    </div>
    <script>
        const sidebar=document.getElementById('sidebar');
        const content=document.getElementById('content');
        const togglebtn=document.getElementById('togglebtn');
        togglebtn.addEventListner(click,()->{
        sidebar.classList.toggle('sidebar-hidden');
        content.classList.toggle('content-expanded');
        })

    </script>
</body>
</html>