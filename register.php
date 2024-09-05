<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
<nav>
       
       <img src="" alt="Logo Here">
       <div>
       <img id="contrastcontrol" class="contrast" src="contrast.png" alt="">
       <button onclick="login()" id="logbtn" class="longinbtn">Login</button>
       </div>
      
   </nav>
    <main>
        <aside>
            <ul class="unorderedlist">
                <li><img class="linksside" src="./images/vehicle.png" alt="">
                    <p class="linkinfo">Services</p>
                </li>
                <li><img class="linksside" src="./images/calendar.png" alt="">
                    <p class="linkinfo">My Events</p>
                </li>
                <li><img class="linksside" src="./images/inf.png" alt="">
                    <p class="linkinfo">About Us</p>
                </li>
                <li id="expand"><img class="linksside bottomone " src="./images/exp.png" alt="">
                    <p class="linkinfo">Expand</p>
                </li>
            </ul>
        </aside>
        <div class="container">
            <div class="track">
                <p class="track0"> <span  class="round">1</span> <span class="everegdetails"> Event Name</span></p>
                <div class="underline"></div>

                <p class="track1"><span  class="round">2</span><span class="everegdetails">Event Details</span></p>
                <div class="underline"></div>
              
                <p class="track2"><span  class="round">3</span><span class="everegdetails"> Event URL</span></p>
                
            </div>
        <section>
           <div class="section section1">
            <p class="eveheading">Name of the event</p>
            <input class="eveinput takeinp" type="text" name="name" id="evename" placeholder="Enter Name..." onkeyup="validatename()">
            <button class="longinbtn expbtn" id="next1" onclick="incevent()">Next</button>
           </div>
           <div class="section section2">
            <p>Start of the event</p>
            <div>
            <input class="takeinp" type="date" name="" id="">
            <select class="takeinp" name="time" id="">
                <?php for($i = 1 ; $i <= 24 ; $i++):?>
                    <?php for($j = 0 ; $j < 50 ; $j+=15) :?>
                        <?php 
                        $item = $i > 12 ? $i - 12 : $i ;
                        $zone = $i > 12 ? "PM" : "AM" ;
                        $hours = $item <= 9 ? "0".$item : "".$item ;
                        $min = $j < 9 ? "0".$j : "".$j ;
                        $time = $hours." : ".$min ." ".$zone;
                        echo "<option value=${time}>${time}</option>" ;
                        ?>
                        <?php endfor ?>
                        <?php endfor ?>
                       
            </select>
            </div>
            <p>End of the event</p>
            <div>
            <input class="takeinp" type="date" name="" id="">
            <select class="takeinp" name="time" id="">
                <?php for($i = 1 ; $i <= 24 ; $i++):?>
                    <?php for($j = 0 ; $j < 50 ; $j+=15) :?>
                        <?php 
                        $item = $i > 12 ? $i - 12 : $i ;
                        $zone = $i > 12 ? "PM" : "AM" ;
                        $hours = $item <= 9 ? "0".$item : "".$item ;
                        $min = $j < 9 ? "0".$j : "".$j ;
                        $time = $hours." : ".$min ." ".$zone;
                        echo "<option value=${time}>${time}</option>" ;
                        ?>
                        <?php endfor ?>
                        <?php endfor ?>
                       
            </select>
            </div>
           <p>Enter Location</p>
            <textarea class="eveinput takeinp" name="" id=""></textarea>
            
            <input class="eveinput takeinp" type="text" name="" id="" placeholder="Enter PINCODE">
            <div class="flex-row">
            <button class="back" id="back2" onclick="decevent()">Back</button>
            <button class="longinbtn expbtn" id="next2" onclick="incevent()">Next</button>
            </div>
           </div>
           <div class="section section3">
          
                <input class="eveinput takeinp" type="text" name="" id="" placeholder="Enter URL">
                <div class="flex-row">
                <button class="back" id="back3" onclick="decevent()">Back</button>
            <button class="longinbtn expbtn" id="next3"  onclick="loginhere()">Generate URL</button>
            </div>
            
            

           </div>
        </section>
        </div>
    </main>
    <div class="splash">
        <div id="closetab">

        </div>
       
    <section class="loginsec">
      
        <div id="logindiv">
        <input class="input" type="text" placeholder="UserName">
        <input class="input" type="text" placeholder="Password" name="" id="">
        <button id="mainlogin" class="reg longinbtn expbtn" name="action" value="login">Login</button>
       
        <div>
            <p style="padding:0px" class="notuser">Not a User?</p>
        <button class="reg longinbtn expbtn" name="action" value = "reg" id="Register">Click here to Register</button>
        </div>
        </div>
  
       <div id="registerdiv">
        
        <input class="input" type="text" name="" id="" placeholder="Enter Username">
            <input class="input" type="text" name="" id="" placeholder="Enter Gmail">
            <button class="reg longinbtn expbtn" name="action" value = "reg" id="Register">Register</button>
            <p class="notuser">Already a User? <span id="revertlogin" style="color: blue ; text-decoration:underline ; cursor:pointer;"> Login!!</p>
            </div>
       
        </section>
    
    </div>
    <script src="index.js?v=3">

    </script>
    <script src="register.js?v=2"></script>
</body>

</html>