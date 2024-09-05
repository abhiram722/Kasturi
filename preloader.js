


// var entryx ;
// var entryy ;
// var flag = true;
setTimeout(()=>{
    location.href= "/kasthuriupdated" ;
},1500) ;
var centerx;
var centery;
var dx = 1;
var colors = ["red", "orange", "blue", "green"];

window.addEventListener("load", () => {
   
    var canvas = document.querySelector('canvas');
    var c = canvas.getContext('2d');
    canvas.width = window.innerWidth - 5;
    canvas.height = window.innerHeight - 5;

    function Circle(x, y, dx, dy, color) {
        this.x = x;
        this.y = y;
        this.dx = dx;
        this.dy = dy;
        this.color = color;

        this.draw = () => {
            c.beginPath();
            c.arc(this.x, this.y, 10, 0, 2 * Math.PI);
            c.fillStyle = this.color;
            c.fill();
        };

        this.update = () => {
            if (this.x + 10 >= canvas.width || this.x - 10 <= 0) {
                this.dx = -this.dx;
            }
            if (this.y + 10 >= canvas.height || this.y - 10 <= 0) {
                this.dy = -this.dy;
            }
            this.y += this.dy;
            this.x += this.dx;
            this.draw();
        };
    }

    var circlelist = [];

    function gencir() {
        for(var i = 0 ; i < 100 ; i ++ ){
        var x = Math.random() * canvas.width;
        var y = Math.random() * canvas.height;
        var dir = (Math.random() - 0.5) *10 ;
        var dy = (Math.random() - 0.5 ) * 10 ;
        var temp = Math.floor(Math.random() * colors.length);
        var t = new Circle(x, y, dir, dy, colors[temp]);
        circlelist.push(t);
        t.draw();
        }
    }

    function animation() {
        requestAnimationFrame(animation);
        c.clearRect(0, 0, canvas.width, canvas.height);
        for (var i = 0; i < circlelist.length; i++) {
            circlelist[i].update();
        }
    }
    gencir(); 
    animation();

    window.onresize = f;

    function f() {
        canvas.width = window.innerWidth - 5;
        canvas.height = window.innerHeight - 5;
    }
  
    
});


// document.addEventListener('mouseleave' , ()=>{
//     c.clearRect( 0 , 0 , canvas.width , canvas.height ) ;
// }) ;
// document.addEventListener('mouseenter' , (event )=>{
//     entryx = event.x ;
//     entryy = entryy ;
// }) ;
// document.addEventListener('dblclick' , (event)=>{
//     flag = !flag ;
//     entryx = event.x ;
//     entryy = event.y ;
// });
// document.addEventListener('mousemove' , (event) =>{
//    // mousecircle(event.x , event.y ) ;
//    if( flag )
//    lines(event.x , event.y ) ;

// }) ;
// function mousecircle( x , y ){
//     c.clearRect(0,0, canvas.width , canvas.height  ) ;
//     c.beginPath() ;
//     c.arc( x+ 2 , y-2 , 20 , 2 * Math.PI , false );
//     c.fillStyle = "#f1234" ;
//     c.fill() ;


// }

function lines(x, y) {
    c.beginPath();
    c.moveTo(entryx, entryy);
    c.lineTo(x, y);
    c.stroke();
    entryx = x;
    entryy = y;
}
