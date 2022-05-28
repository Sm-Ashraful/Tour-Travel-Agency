let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let payBtn = document.querySelector('.pay-btn');
let loginFormContainer = document.querySelector('.login-form-container');
let paymentFormContainer = document.querySelector('.payment-form-container');
let formClose = document.querySelector('#form-close');
let paymentFormClose = document.querySelector('#payment-form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');
let registerBtn = document.querySelector('#register-btn');
let registerForm = document.querySelector('.registration-form');
let loginForm = document.querySelector('.login-form');
let loginNowBtn = document.querySelector('#login-now');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginFormContainer.classList.remove('active');
    registerForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginFormContainer.classList.add('active');
});


registerBtn.addEventListener('click', () => {
  registerForm.classList.remove('d-none');
  registerForm.classList.add('d-block');
  loginForm.classList.remove('d-block');
  loginForm.classList.add('d-none');
})

loginNowBtn.addEventListener('click', () => {
  loginForm.classList.remove('d-none');
  loginForm.classList.add('d-block');
  registerForm.classList.remove('d-block');
  registerForm.classList.add('d-none');
})

formClose.addEventListener('click', () =>{
    loginFormContainer.classList.remove('active');
});

paymentFormClose.addEventListener('click', () =>{
  paymentFormContainer.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },
      },
});

// modal

// Get the modal
var modal = document.getElementById("myModal");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function openModal() {
  modal.style.display = "block";
}