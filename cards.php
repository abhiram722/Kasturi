<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="cards.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <?php include './variables.php';
    if ($_REQUEST['page'] == 'invcards')
        $myvar = $invcards;
    else if ($_REQUEST['page'] == 'concert')
        $myvar = $concert;

    ?>
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
            <div class="templates">
                <div>
                    <?php $index = 0 ?>
                    <?php foreach ($myvar as $card): ?>
                        <article class="cardarticle" data-card-ind = "<?php echo $index++; ?>">
                            <img class="articleimg" src="<?php echo $card[3]; ?>" alt="">
                            <p class="articlename"><?php echo $card[0]; ?> </p>
                            <p class="articlecontext"><?php echo $card[1]; ?></p>
                            <div class="ratings">
                                <div>
                                    <?php for ($i = 0; $i < $card[4]; $i++): ?>
                                        <img class="ratingimg" src="./images/star.png" alt="">
                                    <?php endfor; ?>
                                </div>
                                <p class="cardprice">₹<strike><?php echo $card[5]; ?></strike><?php echo " " . $card[6]; ?>
                                </p>
                            </div>
                            <button class="articlebtn">Get It <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" fill="currentColor"
                                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg>
                                </span></button>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(".cardarticle").on('click' , ()=>{
           var str =  $(event.currentTarget).data("card-ind") ;
           
        });
    </script>
    <script src="index.js"></script>
</body>

</html>