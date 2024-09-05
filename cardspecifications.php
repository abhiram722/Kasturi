<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardDetails</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./cards.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        #description{
            display: flex;
            gap: 8vw;
            
        }
         .rightarrow{

            position: absolute ;
            left: 10px;

        }
        .leftarrow{
            position: absolute;
            right: 10px;
        }
        .slider{
            width: 51vw;
        }
        .cardnames{
            font-size: 30px;
            font-weight: 600;
            letter-spacing: 0.6px;
        }
        
        .carddes{
            color: grey;
            font-size: 17px;
        }
        .cardprice{
            font-size: 25px;
        }
        #carddescription{
            width: 30vw;
        }
        #imagechange > img{
            width: 30vw;
            height: 60vh;
        }
        @media (max-width:600px) {
            #description{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            #carddescription{
            width: 70vw;
        }
        .cardnames{
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.6px;
        }
        .carddes{
            color: grey;
            font-size: 12px;
        }
        .cardprice{
            font-size: 25px;
        }
        }
    </style>
</head>

<body>
    <?php include './variables.php' ?>
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
        <div id="description">
            <div class="slider">
                <img id="decrease" class="rightarrow" src="./images/arrow.png" alt="">
                <div id="imagechange">
                   
                </div>
                <img id="increase" class="leftarrow" src="./images/arrow.png" alt="">
                <div class="circles">

                </div>
            </div>
           
            <div id="carddescription">
                <p class="cardnames"><?php echo $invcards[0][0]?></p>
                <p class="carddes"> <?php echo $invcards[0][1]?> </p>
              
            <div>
                <?php for($i = 0; $i < $invcards[0][4]; $i++): ?>
                    <img class="ratingimg" src="./images/star.png" alt="">
                <?php endfor; ?>
            </div>
            <p ><strike><?php echo $invcards[0][5]; ?></strike></p>
            <p class="cardprice">₹<?php echo " ".$invcards[0][6]; ?></p>
      
                
                <button class="longinbtn" id="addeve">Add to Event</button>
            </div>
          
            </div>

           

    </div>
   </main>
 <script>
    var count = 0 ;
    var imgs = ["./images/intro.jpg", "./images/haldi.jpg", "./images/inf.jpg", "./images/orchestra.jpg"];
    <?php 
    foreach ($invcards[0][7] as $image) {
        echo "imgs.push('" . $image . "');";
    }
    ?>
    alert(imgs) ;
window.addEventListener('load' , ()=>{
    if( localStorage.getItem("user") !== null ){
        document.getElementById("logbtn").innerText = localStorage.getItem("user") ;
    }
    var scircles  = "" ;
    for(var i = 0 ; i < imgs.length; i ++ ){
        var temp = "scircle" + i ;
        scircles += `<div class= "scircle ${temp}"  ></div>`;
    }
    $(".circles").html(scircles) ;
    count = -1 ;
    increase() ;
$("#decrease").on("click", decrease) ;
$("#increase").on("click", increase) ;
function decrease(){
    var temp = ".scircle"+ count ;
    $(temp).css("background-color" , "transparent") ;
    count = ( imgs.length + ( count - 1 ) ) % imgs.length ;
    var img ='<img class = "slideimg" src=' + imgs[count] + "  > " ;
    $("#imagechange").html(img) ; 
    $(".slideimg").addClass("slideimgl2r").removeClass("slideimgr2l") ;
    temp = ".scircle" + count ;
    
    $(temp).css("background-color" , "orange") ;
    
}
function increase(){
   var temp = ".scircle"+ count ;
    $(temp).css("background-color" , "transparent") ;
    count = (count + 1 ) % imgs.length ;
    var img ='<img class = "slideimg" src=' + imgs[count] + "  > " ;
    $("#imagechange").html(img) ;
    temp = ".scircle" + count ;
  
    $(temp).css("background-color" , "orange") ;
    


}
});

 </script>

</body>

</html>