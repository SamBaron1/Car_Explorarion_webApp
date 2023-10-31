
//   document.getElementById('toggleReviews').addEventListener('click', function() {
//     var reviewsSection = document.getElementById('reviews');
//     if (reviewsSection.style.display === 'none') {
//         reviewsSection.style.display = 'block';
//     } else {
//         reviewsSection.style.display = 'none';
//     }
// });
// var buttons = document.getElementsByTagName("button");

// for (var i = 0; i < buttons.length; i++) {
//   buttons[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//   });
// }



// MEDIA SCREEN  
const opennav=document.querySelector('#opennavbtn');
const closenav=document.querySelector('#closenavbtn');
const menu=document.querySelector('.nav-list');


const open=()=>{
  opennav.style.display='none';
  closenav.style.display='block';
  menu.style.display='flex';
}

const close=()=>{
  opennav.style.display="block";
  closenav.style.display="none";
  menu.style.display="none";
}

opennav.addEventListener('click',open);
closenav.addEventListener('click',close);