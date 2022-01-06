var signIn = document.getElementById("sign-in");
var signUp = document.getElementById("sign-up");
signUp.classList.add("display-none");
function getSignUp(){
    signIn.classList[0] === "display-none" ? ((signIn.classList.add("display-block")), (signIn.classList.remove("display-none")))  :((signIn.classList.add("display-none")), (signIn.classList.remove("display-block")));
    signUp.classList[0] === "display-none" ? ((signUp.classList.add("display-block")), (signUp.classList.remove("display-none"))) : ((signUp.classList.add("display-none")), (signUp.classList.remove("display-block")));
}




// Contact Map function

function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.036 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }