$(function(){
    let sidebar_btn = $('#sidebar-btn');
    let sidebar = $('#sidebar');
    let theme_change = $('li.change-theme');
    let sidebar_btn_icon = $('#hamburger');
    let navbar = $('nav.navbar');
    theme_change.click(function(){
        let sun_moon = $('i.moon_sun');
        sidebar.toggleClass('sidebar-dark bg-dark footer-dark');
        navbar.toggleClass('bg-dark');
        sun_moon.toggleClass('bi bi-emoji-smile');
        sun_moon.toggleClass('bi bi-emoji-sunglasses');
    })
    sidebar_btn.click(function(){
        sidebar.toggleClass('sidebar-show');
        sidebar_btn_icon.toggleClass('bi bi-x');
    })
})