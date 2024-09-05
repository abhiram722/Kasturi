function upcoming(){
    $("#item1"  ).css("color" , "blue") ;
    $("#item1" ).css("text-decoration" , "underline") ;
    $("#item2" ).css("color" , "black") ;
    $("#item2").css("text-decoration" , "none") ;
    $("#item3" ).css("color" , "black") ;
    $("#item3").css("text-decoration" , "none") ;
    var xhttp = new XMLHttpRequest() ;
    xhttp.onreadystatechange = function(){
        if( this.readyState == 4 ){
            var upcoming = JSON.parse(this.responseText) ;
           
            upcoming.forEach(element => {
                var str = "" ;
                str +="<p>" + element.name + "</p>" ;
                str +="<p>" + element.pin + "</p>" ;
                str +="<p>" + element.url + "</p>" ;
                document.getElementById("listevnets").innerHTML = str ;
            });
        }
    }
    
    var parse = "?user=" + encodeURIComponent(localStorage.getItem("user")) + "&q=upcoming" ;
    xhttp.open ('GET' , 'myeventshelper.php'+ parse , true ) ;
    xhttp.send() ;
}
function ongoing(){
    $("#item2" ).css("color" , "blue") ;
    $("#item2" ).css("text-decoration" , "underline") ;
    $("#item1" ).css("color" , "black") ;
    $("#item1").css("text-decoration" , "none") ;
    $("#item3" ).css("color" , "black") ;
    $("#item3").css("text-decoration" , "none") ;
    var xhttp = new XMLHttpRequest() ;
    xhttp.onreadystatechange = function(){
        if( this.readyState == 4 ){
            var upcoming = JSON.parse(this.responseText) ;
            alert(this.responseText) ;
            upcoming.forEach(element => {
                var str = "" ;
                str +="<p>" + element.name + "</p>" ;
                str +="<p>" + element.pin + "</p>" ;
                str +="<p>" + element.sdate + "</p>" ;
                document.getElementById("listevnets").innerHTML = str ;
            });
        }
    }
    
    var parse = "?user=" + encodeURIComponent(localStorage.getItem("user")) + "&q=ongoing" ;
    xhttp.open ('GET' , 'myeventshelper.php'+ parse , true ) ;
    xhttp.send() ;
}
$(document).ready( ()=>{
    upcoming() ;
});
function ended(){
    $("#item3" ).css("color" , "blue") ;
    $("#item3" ).css("text-decoration" , "underline") ;
    $("#item1" ).css("color" , "black") ;
    $("#item1").css("text-decoration" , "none") ;
    $("#item2" ).css("color" , "black") ;
    $("#item2").css("text-decoration" , "none") ;
    var xhttp = new XMLHttpRequest() ;
    xhttp.onreadystatechange = function(){
        if( this.readyState == 4 ){
          
            var upcoming = JSON.parse(this.responseText) ;
            if( upcoming.length > 0 ){
                
            upcoming.forEach(element => {
                var str = "" ;
                str +="<p>" + element.name + "</p>" ;
                str +="<p>" + element.pin + "</p>" ;
                str +="<p>" + element.sdate + "</p>" ;
                document.getElementById("listevnets").innerHTML = str ;
            });
        }

            else{
              
                document.getElementById("listevnets").innerHTML = "No records Found " ;
            }
        }
    }
    
    var parse = "?user=" + encodeURIComponent(localStorage.getItem("user")) + "&q=ended" ;
    xhttp.open ('GET' , 'myeventshelper.php'+ parse , true ) ;
    xhttp.send() ;
}
