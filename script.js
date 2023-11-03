
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
//**************deno ***********AFTER SIGING UP */
function signIn() {
  alert("Successfully Signed In. Welcome :)");
  document.getElementById("loginLinks").style.visibility = "hidden";
  window.location.href = "index.html";
};