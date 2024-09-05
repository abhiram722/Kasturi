<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Events</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <style>
        .reflinks{
            width: 87vw;
            display: flex;
            justify-content: space-around;

        }
        ul{
            list-style: none;
        }
        li{
            cursor: pointer;
        }
        #listevnets{
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

    </style>
</head>

<body>
<nav>
       <div>
        <img class="logoimg" src="./images/logo.jpeg" alt="Logo Here">
        <p>Kasthuri</p>
        </div>
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
                    <p class="linkinfo">Expand/<br> Collapse</p>
                </li>
            </ul>
        </aside>
        <div class="container">
        <section >
           <ul class="reflinks">
            <li class="items" id="item1" onclick="upcoming()" >Upcoming </li>
            <li class="items" id="item2" onclick="ongoing()">Ongoing </li>
            <li class="items" id="item3" onclick="ended()">Ended</li>
           </ul>
        </section>
        <article id="listevnets">

</article>
        </div>
       
    </main>
    <script src="index.js">

    </script>
    <script src="myevents.js"></script>
</body>

</html>