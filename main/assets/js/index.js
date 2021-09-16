// recup le modal
var modal = document.getElementById("myModal");

// recup le btn qui ouvre le modal
var btn = document.getElementById("myBtn");

// recup le span qui close le modal
var span = document.getElementsByClassName("close")[0];

// au clique du btn, ouvre le modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// au clique du span (x), pour close le modal
span.onclick = function() {
  modal.style.display = "none";
}

// clique en dehors du modal le ferme 
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




// function blurMe() {
//     var element = document.getElementByName("body");
//     element.classList.add("blur");
//      
//         element.classList.remove("blur");
//       
//   }


