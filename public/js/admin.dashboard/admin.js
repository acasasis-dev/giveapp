var initial = true;
        
function changeColor() {
    var property = document.getElementById(id+"div");
    if (initial) {
        property.style.backgroundColor = "white";
    } else {
        property.style.backgroundColor = "yellow";
    }
    initial = !initial;
}