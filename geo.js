
var  myloc = document.getElementById("coords");
function geo() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition)
    }
    else  {
        myloc.innerText = "your browser do not support the geolocalisation"
    }
}

function  showPosition(position) {
    myloc.innerText = "Laltitude : " + position.coords.latitude + " <br /> "+
        "longptitude : "+position.coords.longitude;

document.getElementById("f").style.backgroundColor ="#932aff";


}


