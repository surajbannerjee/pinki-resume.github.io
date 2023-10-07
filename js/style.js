'use strict';
const tabs = document.querySelectorAll('[data-id]');
const contents = document.querySelectorAll('[data-content]');
let id = 0;

tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
        tabs[id].classList.remove('active');
        tab.classList.add('active');
        id = tab.getAttribute('data-id');
        contents.forEach(function (box) {
            box.classList.add('hide');
            if (box.getAttribute('data-content') == id){
                box.classList.remove('hide');
                box.classList.add('show');
            }
        });
    });
});

// Day Night 
var switchBody = document.getElementById("switch");
//"hsl(238, 50%, 12%)";
var main = document.getElementById("main1");
switchBody.addEventListener("click", toggle);

function toggle(){
  switchBody.classList.toggle("off");
  main.classList.toggle("dark_mode");
// main.style.transition="all 0.5s linear ease-in-out";
}
// Day Night 


// model open 
let toggleBtn = document.querySelector('.modal_btn');
let toggleMenu = document.querySelector('.modal_sec');
let closeBtn = document.querySelector('.cut_btn');
let closeBg = document.querySelector('.close_Bg');


toggleBtn.addEventListener('click', () => {
    toggleMenu.classList.add('active')
})
closeBtn.addEventListener('click', () => {
    toggleMenu.classList.remove('active')
}) 
closeBg.addEventListener('click', () => {
  toggleMenu.classList.remove('active')
}) 
