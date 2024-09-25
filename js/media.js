// navigation bar start
document.querySelector(".hamburger").addEventListener("click", () => {
    document.querySelector(".hamburger").classList.toggle("is-active");
    document.querySelector(".navbar__menu").classList.toggle("navbar__menu--active");
    document.querySelector(".top").classList.toggle("top--open");
    });
    window.addEventListener("scroll",  () =>{
    let scroll = window.pageYOffset || document.documentElement.scrollTop;
    if (scroll >= 60) {
    document.querySelector(".top").classList.add("top--scrolling");
    } else {
    document.querySelector(".top").classList.remove("top--scrolling");
    }
    });
    // navigation bar end
    
    // popup start
    let showPopupButton = document.getElementById('showPopup');
    let popup = document.getElementById('popup');
    let closePopupButton = document.getElementById('closePopup');
    showPopupButton.addEventListener('click', () => {
    popup.style.display = 'block';
    });
    closePopupButton.addEventListener('click', () => {
    popup.style.display = 'none';
    });
    // popup end


    let dropdown = document.querySelector(".dropdown");

dropdown.addEventListener("click", () =>
{
    document.querySelector(".dropdown-content").classList.toggle("dropdownShow");
})