// agenda dans page welcome
    window.onload = function() {
  showMonth();
};

function showMonth() {
  var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
  var d = new Date();
  var n = month[d.getMonth()];
  document.getElementById("month_name").innerHTML = n;
}

// dashboard
var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
// js for owl carousel
// $('.owl-carousel').owlCarousel({
//   loop:true,
//   margin:10,
//   nav:true,
//   responsive:{
//       0:{
//           items:1
//       },
//       600:{
//           items:3
//       },
//       1000:{
//           items:5
//       }
//   }
// })