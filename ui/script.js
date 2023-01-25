let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}

function prev(){
  slides[index].classList.remove('active');
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add('active');
}

document.querySelectorAll('.featured-image-1').forEach(image_1 =>{
  image_1.addEventListener('click', () =>{
    var src = image_1.getAttribute('src');
    document.querySelector('.big-image-1').src = src;
  });
});

document.querySelectorAll('.featured-image-2').forEach(image_2 =>{
  image_2.addEventListener('click', () =>{
    var src = image_2.getAttribute('src');
    document.querySelector('.big-image-2').src = src;
  });
});

document.querySelectorAll('.featured-image-3').forEach(image_3 =>{
  image_3.addEventListener('click', () =>{
    var src = image_3.getAttribute('src');
    document.querySelector('.big-image-3').src = src;
  });
});



//load more button
let loadmore=document.querySelector("#load");
let currentitem=4;


loadmore.onclick=() =>{
  let boxes= [...document.querySelectorAll('.products .box-container .box')];
  for(var i= currentitem; i < currentitem+4; i++){
    boxes[i].style.display='inline-block';
  }
  currentitem=currentitem+4;

  if(currentitem >=boxes.length){ 
    loadmore.style.display='none';
  }
}



//review
let load=document.querySelector('#loadreview');
let currentitemreview=3;

load.onclick=()=>{
  let boxreview=[...document.querySelectorAll('.review .box-container .box')];

  for(var j=currentitemreview;j<currentitemreview+3;j++){
    boxreview[j].style.display='inline-block';
  }
  currentitemreview+=3;

  if(currentitemreview >=boxreview.length){
    load.style.display='none';
  }
}


