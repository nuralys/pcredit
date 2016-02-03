$(document).ready(function() {
    var mobnav = document.querySelector(".mob_nav");
    var nav = document.querySelector(".nav");
    var mobclose = document.querySelector(".mob_close");
    mobnav.addEventListener("click",function(){
        nav.classList.add("nav_show");  
    });
    mobclose.addEventListener("click",function(){
        nav.classList.remove("nav_show");  
    });
    $('.js-callback').attr('name', 'other_amount');
});