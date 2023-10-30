
  document.getElementById('toggleReviews').addEventListener('click', function() {
    var reviewsSection = document.getElementById('reviews');
    if (reviewsSection.style.display === 'none') {
        reviewsSection.style.display = 'block';
    } else {
        reviewsSection.style.display = 'none';
    }
});
var buttons = document.getElementsByTagName("button");

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", function() {
    this.classList.toggle("active");
  });
}
