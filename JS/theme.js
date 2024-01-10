import { setAchievementThemeElectric, setAchievementThemeGo } from "./achievement.js";
import { setTeamThemeElectric, setTeamThemeGo } from "./team.js";
import { setGalleryThemeElectric, setGalleryThemeGo } from "./gallery.js";
import { setContactThemeGo, setContactThemeElectric } from "./contact.js"

const button = document.getElementById('themeButton');
const navbar = document.querySelector('.navbar');
const navLinks = document.querySelectorAll('.nav-link');
const logo = document.getElementById('logo-img')
const footbg = document.querySelector('.footer')
const footcol = document.querySelectorAll('.footer-col')


function isHomepage() {
    const currentPage = window.location.href.split('/').pop();
    console.log(currentPage) // Get the current page from the URL
    return currentPage === 'Electric.html' || currentPage === 'home.html' || currentPage === 'home.html#';
}

function currentPage() {
    const currentPage = window.location.href.split('/').pop();
    return currentPage
}

function setThemeElectric() {
    if (isHomepage()) {
        let url = window.location.href.toString();
        let page = url.substring(url.lastIndexOf('/') + 1);
        console.log(page)
        if (page !== 'Electric.html') {
            window.location.href = '/Electric.html'
        }
    }

    localStorage.setItem('theme', 'electric')

    button.textContent = 'GoKart';
    logo.src = "./Images/logo-ev.png"

    button.classList.remove('btn-go')
    button.classList.add('btn-elec')
        // footer

    footbg.classList.remove('footbg-go')
    footbg.classList.add('footbg-elec')
    footcol.forEach(element => {
        element.classList.remove('footer-col-go')
        element.classList.add('footer-col-elec')
    });
    //navbar
    navbar.classList.remove('navbar-go')
    navbar.classList.add('navbar-elec')



    navLinks.forEach(element => {
        element.classList.remove('nav-link-go')
        element.classList.add('nav-link-elec')
    });

    let cp = currentPage()
    if (cp === "team.html")
        setTeamThemeElectric()
    if (cp === "achivement.html")
        setAchievementThemeElectric()

    if (cp.toLowerCase() === "gallery.html")
        setGalleryThemeElectric()

    if (cp === "ReachOut1.php")
        setContactThemeElectric()

}

function setThemeGo() {
    if (isHomepage()) {
        console.log("homepageloaded")
        let url = window.location.href.toString();
        let page = url.substring(url.lastIndexOf('/') + 1);
        console.log(page)
        if (page !== 'home.html') {
            window.location.href = '/home.html'
        }
    }

    localStorage.setItem('theme', 'gokart')

    button.textContent = 'Electric';
    logo.src = "./Images/logo-go.png"
        // footer

    footbg.classList.remove('footbg-elec')
    footbg.classList.add('footbg-go')
    footcol.forEach(element => {
        element.classList.remove('footer-col-elec')
        element.classList.add('footer-col-go')
    });
    //Navbar 
    navbar.classList.remove('navbar-elec')
    navbar.classList.add('navbar-go')

    navLinks.forEach(element => {
        element.classList.remove('nav-link-elec')
        element.classList.add('nav-link-go')
    });

    button.classList.remove('btn-elec')
    button.classList.add('btn-go')

    let cp = currentPage()
    if (cp === "team.html")
        setTeamThemeGo()
    if (cp === "achivement.html")
        setAchievementThemeGo()
    if (cp.toLowerCase() === "gallery.html")
        setGalleryThemeGo()
    if (cp === "ReachOut1.php")
        setContactThemeGo()
}

function toggleTheme() {
    if (button.textContent === 'Electric') {
        setThemeElectric();
    } else {
        setThemeGo();
    }
    location.reload();
}

document.addEventListener("DOMContentLoaded", () => {
    let theme = localStorage.getItem('theme')
    console.log("Content loaded theme is " + theme)
    if (theme === 'electric')
        setThemeElectric();
    else {
        setThemeGo();
    }
})

themeButton.addEventListener('click', () => {
    toggleTheme();
});