let exp = true;
let flag ;
var count = 0 ;
var imgs = ["./images/intro.jpg", "./images/haldi.jpg" , "./images/inf.jpg", "./images/orchestra.jpg" ] ;

window.addEventListener('load', ()=>{
   
    var state = localStorage.getItem("mode") ;
    flag = state == 1 ? true : false ;
    if( localStorage.getItem("user") !== null ){
        document.getElementById("logbtn").innerText = localStorage.getItem("user") ;
    }
    mode() ;
    var scircles  = "" ;
    for(var i = 0 ; i < imgs.length; i ++ ){
        var temp = "scircle" + i ;
        scircles += `<div class= "scircle ${temp}"  ></div>`;
    }
    $(".circles").html(scircles) ;
    count = -1 ;
    increase() ;
    $(".cardarticle").on("click" , (event)=>{
        var eve = $(event.currentTarget).data("card-id") ;    
       location.href = "/kasthuriupdated/cards.php?page="+ eve ;
    });
    
});
$("#expand").on("click", () => {
  
    if (exp) {
        $(".unorderedlist").removeClass("collapse").addClass("expand");
        setTimeout(()=>{
            $(".linkinfo").addClass("expandtxt");
        } , 500) ;
       
    } else {
        
        $(".unorderedlist").removeClass("expand").addClass("collapse");
        $(".linkinfo").removeClass("expandtxt").addClass("linkinfo");
    }
    
    exp = !exp;
});

$("#contrastcontrol").on("click", () =>{
    
    flag = !flag ;
    var state = flag ? 1 : 0 ;
    localStorage.setItem("mode" , state ) ;
    mode() ;
    
} );
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
function mode(){
    if( flag ){
        $("body").addClass("black").removeClass("white") ;
        $(".contrast").addClass("invert").removeClass("back");
        $(".unorderedlist").css("background-color", "black" ) ;
        $(".linksside").addClass("invert").removeClass("back") ;
        $(".articleimg").addClass("invert").removeClass("back") ;
        }
    else{
       
    $("body").removeClass("black").addClass("white") ;
    $(".contrast").addClass("back") ;
    $(".unorderedlist").css("background-color", "white" ) ;
        $(".linksside").addClass("back") ;
        $(".articleimg").addClass("back") ;
    }
   
}
function login(){
    var loginbutton = document.getElementById("logbtn") ;
    if( loginbutton.innerText == "Login") {
        $(".splash").removeClass("u2d").addClass("d2u") ;
        document.body.style.overflow = "hidden";
        $("main").css("opacity" , 0.4) ;
    }
    else{
        if(confirm("Are you sure to logout")){
            localStorage.removeItem("user") ;
            location.reload() ;
        }
        
    }
   
}
$("#closetab").on("click" , ()=>{
    $(".splash").addClass("u2d") ;
    $("main").css("opacity" , 1) ;
    document.body.style.overflow = "visible";
});
$("#mainlogin").on("click" , ()=>{
    var user = document.getElementsByClassName("input");
    var uname = user[0].value ;
    var pwd = user[1].value ;
    alert(uname + pwd) ;
    var xhttp = new XMLHttpRequest() ;
    xhttp.onreadystatechange= function(){
        if(this.readyState == 4  ){
            alert(this.responseText) ;
            if( this.responseText.indexOf("Success") != -1){
                alert("Login SuccessFull")
                localStorage.setItem("user" , uname) ;
                location.reload() ;
            }
        }
    }
    xhttp.open('POST' ,'post.php' , true ) ;
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var parse = "uname="+uname +"&pwd="+ pwd +"&q=login";
    xhttp.send(parse) ;
    
});

$("#Register").on("click" , ()=>{
    $("#logindiv").css("display" , "none") ;
    $("#registerdiv").css("display" , "flex") ;
   
});
$("#mainreg").on("click" , ()=>{
    var uname = $("#regname").val() ;
    var pwd = $("#regpwd").val() ;
    var xhttp = new XMLHttpRequest() ;
    xhttp.onreadystatechange= function(){
        if(this.readyState == 4 ){
            alert(this.responseText) ;
            if( this.responseText == "Success"){
                $(".splash").css("display" , "none") ;
                localStorage.setItem("user" , uname ) ;
               alert("Login") ;
            }
        }
    }
    xhttp.open('POST' ,'post.php' , true ) ;
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var parse = "uname="+uname +"&pwd="+ pwd +"&q=register";
    xhttp.send(parse) ;
    
    
});
$("#revertlogin").on("click" , ()=>{
    $("#logindiv").css("display" , "flex") ;
    $("#registerdiv").css("display" , "none") ;

})
