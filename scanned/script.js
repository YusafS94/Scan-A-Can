let progressBar = document.querySelector(".circular-progress");
let valueContainer = document.querySelector(".value-container");

let progressValue = 0;
let progressEndValue = 101;
let speed = 50;

let progress = setInterval(() => {
  progressValue++;
  valueContainer.textContent = `${progressValue}/150`;
  progressBar.style.background = `conic-gradient(
      #4d5bf9 ${progressValue * 2}deg,
      #cadcff ${progressValue * 3}deg
  )`;
  if (progressValue == progressEndValue) {
    clearInterval(progress);
  }
}, speed);

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

var map = new google.maps.Map(document.getElementById("map"), options);
//add marker
var marker = new google.maps.Marker({
  position: { lat: 53.643902, lng: -1.78036 },
  option: option,
});
var infoWindow = new google.maps.infoWindow({
  content: "<h1> My University </h1>",
});
