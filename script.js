
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

// image change animation
let car_images = ["url(images/images/featured-cars/suzuki.jpeg)",
                  "url(images/images/featured-cars/blueranger.jpeg)",
                  "url(images/images/featured-cars/defender.jpeg)",
                  "url(images/images/featured-cars/newfortuner.jpeg)",
                  "url(images/images/featured-cars/fordeverest.jpeg)",
                  "url(images/images/featured-cars/forester.jpeg)",
                  "url(images/images/featured-cars/newaudi.jpeg)",
                  "url(images/images/featured-cars/fordranger.jpeg)",
                  "url(images/images/featured-cars/toyotacrown.jpeg)",
                  "url(images/images/featured-cars/lexus2.jpeg)",
                  "url(images/images/featured-cars/newtx.jpeg)",
                  "url(images/images/featured-cars/isuzudmux.jpeg)",
                  "url(images/images/featured-cars/discovery.jpeg)",
                  "url(images/images/featured-cars/rangerover2.jpeg)",
                  "url(images/images/featured-cars/pajero.jpeg)",
                  "url(images/images/featured-cars/alphard.jpeg)",
                  "url(images/images/featured-cars/matatuhiace.jpeg)",
                  "url(images/images/featured-cars/chrysler.jpg)",
                  "url(images/images/featured-cars/damemobius.jpeg)",
                  "url(images/images/featured-cars/gwagon.jpeg)",
                  "url(images/images/featured-cars/mercedes1.jpeg)",
                  "url(images/images/featured-cars/bmw2.jpeg)",
                  "url(images/images/featured-cars/lexus1.jpeg)",
                  "url(images/images/featured-cars/volkswagen.jpeg)",
                  "url(images/images/featured-cars/lc200.jpeg)"
                  ];
let car_names = ["SUZUKI",
                  "FORDRANGER",
                  "DEFENDER",
                  "FORTUNER",
                  "FORDEVEREST",
                  "FORESTER",
                  "AUDI",
                  "RANGER",
                  "TOYOTA CROWN",
                  "LEXUS",
                  "LANDCRUISER TX",
                  "ISUZU DMUX",
                  "DISCOVERY",
                  "RANGE ROVER",
                  "PAJERO",
                  "ALPHARD",
                  "HIACE",
                  "BENTLEY",
                  "MOBIUS",
                  "G-WAGON",
                  "MERCEDES BENZ",
                  "BMW NEWMODEL",
                  "LEXUS L600",
                  "VOLKSWAGEN",
                  "LANDCRUISER LC300"
                  ];
let no_of_cars = car_images.length;
let no_of_car_names = car_names.length;
let  current = 0;
document.getElementById("car_picture").style.backgroundImage = car_images[current];
document.getElementById("car_name").innerHTML = car_names[current];

setInterval(()=>{
  document.getElementById("car_picture").style.backgroundImage = car_images[current];
  document.getElementById("car_name").innerHTML = car_names[current];

  current++;
},2000)
