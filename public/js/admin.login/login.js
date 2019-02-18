var svgNS = "http://www.w3.org/2000/svg";

$('.pic').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask1')[0];
    
    var circle = document.createElementNS(svgNS,"circle");
    circle.setAttribute("cx", upX);
    circle.setAttribute("cy", upY);
    circle.setAttribute("r", "30");
    circle.setAttribute("fill", "white");
    circle.setAttribute("filter", "url(#filter2)");
    
    mask.appendChild(circle);
    
    setTimeout(function(){ 
        circle.style.opacity = '0';
        setTimeout(function(){ 
            mask.removeChild(circle);
        }, 300);
    }, 300);
});