export  function header() {
fetch("header.html")
.then(resposne => resposne.text())
.then(header =>{
   
document.querySelector('.top').innerHTML = header

if( document.querySelector(".hamburger")){   document.querySelector(".hamburger").addEventListener("click", () => {
document.querySelector(".hamburger").classList.toggle("is-active");
document.querySelector(".navbar__menu").classList.toggle("navbar__menu--active");
document.querySelector(".top").classList.toggle("top--open");
});
window.addEventListener("scroll", () => {

let scroll = window.pageYOffset || document.documentElement.scrollTop;
if (scroll >= 60) {
document.querySelector(".top").classList.add("top--scrolling");
} else {
document.querySelector(".top").classList.remove("top--scrolling");
}
})};

let showPopupButton = document.getElementById('showPopup');
let popup = document.getElementById('popup');
let closePopupButton = document.getElementById('closePopup');

if(showPopupButton)  {showPopupButton.addEventListener('click', () => {
popup.style.display = 'block';



})};

if(showPopupButton) { closePopupButton.addEventListener('click', () => {
popup.style.display = 'none';
})};

let dropdown = document.querySelector(".dropdown");
   
if(dropdown){dropdown.addEventListener("click", () =>
{
document.querySelector(".dropdown-content").classList.toggle("dropdownShow");
})};

let formPopup = document.querySelector('#formPopup');
if(formPopup)   {formPopup.addEventListener('submit', async (e) => {
e.preventDefault();
let firstName = document.querySelector('.firstName').value;
let email = document.querySelector('.email').value;
let number = document.querySelector('.number').value;
let message = document.querySelector('.message').value;
let formData = new FormData();

formData.append("firstName", firstName);
formData.append("email", email);
formData.append("number", number);
formData.append("message", message);
await fetch('../controllers/post_email.php', {
method: "POST",
body: formData
}).then(response => {
if (response.status == 200){
setTimeout( () =>
{
textValue.innerHTML =  ``;
formPopup.style.display = "block";
},10000)
formPopup.style.display = "none";
let textValue = document.querySelector('.textValue');
textValue.style.color = "#ffff";
 textValue.innerHTML =  `Wiadomość została pomyślnie wysłana`;

} 
else
{
setTimeout( () =>
{
textValue.innerHTML =  ``;
formPopup.style.display = "block";
},10000)
formPopup.style.display = "none";
let textValue = document.querySelector('.textValue');
textValue.style.color = "red";
textValue.innerHTML =  `<br><br>Nieudało się wysłać wiadomość.<br> Może to być spowodowane zbyt liczną wysyłką wiadomość na raz.<br> Proszę wysłąć wiadomość po przez zakładkę <a href="https://parkpaderewskiego.pl/mieszkania/"> mieszkania</a><br><br>`;
          
}
});
})};
});
};
header();



