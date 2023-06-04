/* pour scroll fluide */
let span = document.querySelector(".up");
window.addEventListener('scroll', function() {
  // console.log(window.scrollY);
  if (window.scrollY >= 600) {
    console.log(this.screenY);
    span.classList.add("show");
  } else {
    span.classList.remove("show");
  }
});

// span.onclick = function() {
 //   window.scrollTo({
 //     top: 0,
///     behavior: "smooth"
 //   });
// };

window.addEventListener('scroll', reveal);

function reveal() {
  var reveals = document.querySelectorAll('.reveal');
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var revealTop = reveals[i].getBoundingClientRect().top;
    var revealPoint = 150;
    if (revealTop < windowHeight - revealPoint) {
      reveals[i].classList.add('active');
    } else {
      reveals[i].classList.remove('active');
    }
  }
}

const myButton = document.getElementById('myButton');

myButton.addEventListener('click', function() {
  alert('Thanks for donation');
});



 









console.log("%cLRDSI","color:red;font-size:30px","color:blue;font-size:30px")

