
const navbar = document.getElementById('navbar');

function handleNavbar (){

    if(window.scrollY > 65) 
        navbar.style.position = "fixed";
    
    else 
        navbar.style.position = "absolute";
    
}

window.addEventListener("scroll",handleNavbar);

const arrowIcon = document.getElementById('arrow');

arrowIcon.style.transform = "rotate(0)";

const imageContainer = document.getElementById('image-container');

imageContainer.addEventListener('click',handleMenu);

function handleMenu(){
    const arrowIcon = document.getElementById('arrow');
    
    const userMenuContainer = document.getElementById('user-menu-container')

    if(arrowIcon.style.transform === "rotate(0deg)"){
        arrowIcon.style.transform = "rotate(180deg)";
        userMenuContainer.style.transform = "translateY(620px)"
    }
    else {
        arrowIcon.style.transform = "rotate(0deg)";
        userMenuContainer.style.transform = "translateY(0px)"
    }

}

function handleLogOut(){
    document.cookie = "login-data=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.href = "/";
}
