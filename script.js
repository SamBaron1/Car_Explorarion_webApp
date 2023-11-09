
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
let car_images = ["url(images/suzuki.jpeg)",
                  "url(images/blueranger.jpeg)",
                  "url(images/defender.jpeg)",
                  "url(images/newfortuner.jpeg)",
                  "url(images/fordeverest.jpeg)",
                  "url(images/forester.jpeg)",
                  "url(images/newaudi.jpeg)",
                  "url(images/fordranger.jpeg)",
                  "url(images/toyotacrown.jpeg)",
                  "url(images/lexus2.jpeg)",
                  "url(images/newtx.jpeg)",
                  "url(images/isuzudmux.jpeg)",
                  "url(images/discovery.jpeg)",
                  "url(images/rangerover2.jpeg)",
                  "url(images/pajero.jpeg)",
                  "url(images/alphard.jpeg)",
                  "url(images/matatuhiace.jpeg)",
                  "url(images/chrysler.jpg)",
                  "url(images/damemobius.jpeg)",
                  "url(images/gwagon.jpeg)",
                  "url(images/mercedes1.jpeg)",
                  "url(images/bmw2.jpeg)",
                  "url(images/lexus1.jpeg)",
                  "url(images/volkswagen.jpeg)",
                  "url(images/lc200.jpeg)"
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
                  "CHRYSLER",
                  "MOBIUS",
                  "G-WAGON",
                  "MERCEDES BENZ",
                  "BMW NEWMODEL",
                  "LEXUS L600",
                  "VOLKSWAGEN",
                  "LANDCRUISER LC200"
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
