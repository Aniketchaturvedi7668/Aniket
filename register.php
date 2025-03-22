<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php include('navbar.html'); ?>
    <title>Login form</title>
    <style>
        body{
        
            background-color: blueviolet;
        
        }
        .for{
            background-color: aquamarine;
            border: 2px solid black;
            height: 420px;
            width: 400px;
            margin-top: 90px;
            align-items: center;
        }
        .ent{
            margin: 20px;
            
        }
        .des{
           margin-left: 33px;
        }
        
        .cit{
            padding: 2px;
        }
        .cit option{
            width: 100%;
            border: 1px solid white;
        }
        .abc input{
            margin-bottom: .5rem;
    
            height: 20px;
            
            border: 1px solid wheat;
            border-radius: 1px;
            font-size: 12px;
            margin-left: 10px;
        
        }
        .sub{
            margin-left: 120px;
        }
        .err{
            color: red;
            margin-bottom: 2px;
            text-align: center;
        }
        .ent h1{
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="java.html" onsubmit="return checkvlidation()">
    <div class="container for">
    
        <div class="col-sm 12 ent">
       
            <h1><b><u>Register yourself</u></b></h1>
            <div class="col-sm 2 abc">
            Name :

        <input type="text" placeholder="Full Name"  id="aniket" >
           <div class="err" id="Name_errer"></div>
    </div>
       <div class="col-sm 2 cit">
       State :
       <select name="" >
         <option value="disabled selected">Select the State</option>
            <option value="">Assam</option>
            <option value="">Bhutan</option>
            <option value="">Rajesthan</option>
            <option value="">Uttar Pradesh</option>
            <option value="">Uttrakhand</option>
       </select>
    </div>
    
        <div class="col-sm 2 cit">
        City :
        <select name="" >
         <option value="disabled selected">Select the City</option>
            <option value="">Agra</option>
            <option value="">Farrukhabad</option>
            <option value="">kanpur</option>
            <option value="">Pune</option>
            <option value="">Mathura</option>
        </select>
    </div>
        <div class="col-sm 2 abc">
        Pin code :
        <input type="number" placeholder="Pincode" id="shi" >
        <div class="err" id="bhoot"></div>
        </div>
        
        <div class="col-sm 2 abc">
        Email :
        <input type="email" placeholder="Email" id="arena" >
        <div class="err" id="are"></div>
        </div>
        <div class="col-sm 2 abc">
        Phone Number :
        <input type="number" placeholder="Phone Number" id="agra" >
        <div class="err" id="area"></div>
     </div>
    
     <div class="sub">
    <input type="submit" value="Submit">
     </div>
    </div>
    </div>
    </form>
</body>

</html>
<script>
function checkvlidation(){
 let x= document.getElementById('aniket').value;
 if(x==""){
    let n= document.getElementById('Name_errer');
    n.textContent= ("Name is required");
    //alert("name is required");
    return false;
 
 }
 else {let n = document.getElementById('Name_errer');
    n.textContent= ("");}

let y=document.getElementById('shi').value;


if(y==""){
    
    let m= document.getElementById('bhoot');
    m.textContent=("Pin code is required");
   // alert("Pincode is empty");
    return false;
}
let z=document.getElementById('arena').value;
if(z==""){
      let d=document.getElementById('are');
      d.textContent=("email is required");
    //alert("email is empty");
    return false;
}
let a=document.getElementById('agra').value;
if(a==""){
    let f=document.getElementById('area');
      f.textContent=("Phone number is required");
   //prompt("phone number is empty");
   return false;
}

}

</script>