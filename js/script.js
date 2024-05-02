// navigation bar start
document.querySelector(".hamburger").addEventListener("click", function() {
document.querySelector(".hamburger").classList.toggle("is-active");
document.querySelector(".navbar__menu").classList.toggle("navbar__menu--active");
document.querySelector(".top").classList.toggle("top--open");
});
window.addEventListener("scroll", function() {
let scroll = window.pageYOffset || document.documentElement.scrollTop;
if (scroll >= 60) {
document.querySelector(".top").classList.add("top--scrolling");
} else {
document.querySelector(".top").classList.remove("top--scrolling");
}
});
// navigation bar end

// popup start
document.addEventListener("DOMContentLoaded", function () {
let showPopupButton = document.getElementById('showPopup');
let popup = document.getElementById('popup');
let closePopupButton = document.getElementById('closePopup');
showPopupButton.addEventListener('click', () => {
popup.style.display = 'block';
});
closePopupButton.addEventListener('click', () => {
popup.style.display = 'none';
});
window.addEventListener('click', (event) => {
if (event.target === popup) {
popup.style.display = 'none';
}
});
let form = document.getElementById('form');
let btn = document.getElementById('button');  
});
// popup end

// slides one  start
let tracking1,rightTracking1,$slider=$(".slideshow .slider"),maxItemsOne=$(".item",$slider).length,draggingOne=!1;for($sliderRight=$(".slideshow").clone().addClass("slideshow-right").appendTo($(".split-slideshow")),reverseItems=(rightItems=$(".item",$sliderRight).toArray()).reverse(),$(".slider",$sliderRight).html(""),i=0;i<maxItemsOne;i++)$(reverseItems[i]).appendTo($(".slider",$sliderRight));function changeSlideOne(){$(".slideshow-left").slick("slickNext")}$slider.addClass("slideshow-left"),$(".slideshow-left").slick({vertical:!0,verticalSwiping:!0,arrows:!1,infinite:!0,dots:!0,speed:1e3,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"}).on("beforeChange",function(s,e,l,t){l>t&&0==t&&l==maxItemsOne-1?($(".slideshow-right .slider").slick("slickGoTo",-1),$(".slideshow-text").slick("slickGoTo",maxItemsOne)):l<t&&0==l&&t==maxItemsOne-1?($(".slideshow-right .slider").slick("slickGoTo",maxItemsOne),$(".slideshow-text").slick("slickGoTo",-1)):($(".slideshow-right .slider").slick("slickGoTo",maxItemsOne-1-t),$(".slideshow-text").slick("slickGoTo",t))}).on("onclick",function(s){s.preventDefault(),s.deltaX>0||s.deltaY<0?$(this).slick("slickNext"):(s.deltaX<0||s.deltaY>0)&&$(this).slick("slickPrev")}).on("onclick",function(){draggingOne=!0,tracking=parseInt((tracking=$(".slick-track",$slider).css("transform")).split(",")[5]),rightTracking=parseInt((rightTracking=$(".slideshow-right .slick-track").css("transform")).split(",")[5])}).on("onclick",function(){draggingOne&&(diffTracking=(newTracking=parseInt((newTracking=$(".slideshow-left .slick-track").css("transform")).split(",")[5]))-tracking,$(".slideshow-right .slick-track").css({transform:"matrix(1, 0, 0, 1, 0, "+(rightTracking-diffTracking)+")"}))}).on("onclick",function(){draggingOne=!1}),$(".slideshow-right .slider").slick({swipe:!1,vertical:!0,arrows:!1,infinite:!0,speed:950,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",initialSlideOne:maxItemsOne-1}),$(".slideshow-text").slick({swipe:!1,vertical:!0,arrows:!1,infinite:!0,speed:900,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"}),setInterval(changeSlideOne,2500);
// slides one end

// slides dwo start
 let tracking,rightTracking,$sliderTwo=$(".slideshowTwo .sliderTwo"),maxItems=$(".itemTwo",$sliderTwo).length,dragging=!1;for($sliderRight=$(".slideshowTwo").clone().addClass("slideshowTwo-right").appendTo($(".split-slideshowTwo")),reverseItems=(rightItems=$(".itemTwo",$sliderRight).toArray()).reverse(),$(".sliderTwo",$sliderRight).html(""),i=0;i<maxItems;i++)$(reverseItems[i]).appendTo($(".sliderTwo",$sliderRight));function changeSlide(){$(".slideshowTwo-left").slick("slickNext")}$sliderTwo.addClass("slideshowTwo-left"),$(".slideshowTwo-left").slick({vertical:!0,verticalSwiping:!0,arrows:!1,infinite:!0,dots:!0,speed:1e3,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"}).on("beforeChange",function(s,e,l,t){l>t&&0==t&&l==maxItems-1?($(".slideshowTwo-right .sliderTwo").slick("slickGoTo",-1),$(".slideshowTwo-text").slick("slickGoTo",maxItems)):l<t&&0==l&&t==maxItems-1?($(".slideshowTwo-right .sliderTwo").slick("slickGoTo",maxItems),$(".slideshowTwo-text").slick("slickGoTo",-1)):($(".slideshowTwo-right .sliderTwo").slick("slickGoTo",maxItems-1-t),$(".slideshowTwo-text").slick("slickGoTo",t))}).on("onclick",function(s){s.preventDefault(),s.deltaX>0||s.deltaY<0?$(this).slick("slickNext"):(s.deltaX<0||s.deltaY>0)&&$(this).slick("slickPrev")}).on("onclick",function(){dragging=!0,tracking=parseInt((tracking=$(".slick-track",$sliderTwo).css("transform")).split(",")[5]),rightTracking=parseInt((rightTracking=$(".slideshowTwo-right .slick-track").css("transform")).split(",")[5])}).on("onclick",function(){dragging&&(diffTracking=(newTracking=parseInt((newTracking=$(".slideshowTwo-left .slick-track").css("transform")).split(",")[5]))-tracking,$(".slideshowTwo-right .slick-track").css({transform:"matrix(1, 0, 0, 1, 0, "+(rightTracking-diffTracking)+")"}))}).on("onclick",function(){dragging=!1}),$(".slideshowTwo-right .sliderTwo").slick({swipe:!1,vertical:!0,arrows:!1,infinite:!0,speed:950,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",initialSlide:maxItems-1}),$(".slideshowTwo-text").slick({swipe:!1,vertical:!0,arrows:!1,infinite:!0,speed:900,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)"}),setInterval(changeSlide,2500);
// slides dwo end

 // Map start
// Map
let mapOpp = L.map('map').setView([50.47837212922883, 19.45183168289603], 17);

L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
 
}).addTo(mapOpp);

L.marker([50.478224952788814, 19.451750127726374]).addTo(mapOpp)
    .bindPopup('Biuro sprzedaży - Osiedle Park Paderewskiego')
    .openPopup();
 // Map end







// email  start 

 let send = document.querySelector('.send');
let text = document.querySelector('.text');
let test = document.querySelector('.test');
let textValue = document.querySelector('.textValue');

let email = document.querySelector('.email');
let firstName = document.querySelector('.firstName');
let message = document.querySelector('.message');
let phone = document.querySelector('.phone');
let checkbox0 = document.getElementById('checkbox-32');
let checkbox1 = document.getElementById('checkbox-33');
let checkbox2 = document.getElementById('checkbox-34');


checkbox0.addEventListener('click', () => {

    test.innerHTML ="Accepted";


if(test.textContent =="Accepted")
{
    checkbox0.value = "ZGODA_MARKETING Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.";
}
else 
{
    checkbox0.value= "Not accepted";
}
});



checkbox1.addEventListener('click', () => {

    test.innerHTML ="Accepted";


if(test.textContent =="Accepted")
{
    checkbox1.value= "ZGODA_MAIL Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.";
}
else 
{
    checkbox1.value= "Not accepted";
}
});

checkbox2.addEventListener('click', () => {

    test.innerHTML ="Accepted";


if(test.textContent =="Accepted")
{
    checkbox2.value = "ZGODA_TEL Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne.";
}
else 
{
    checkbox2.value= "Not accepted";
}
});

checkbox0.value= "Not accepted";
checkbox1.value= "Not accepted";
checkbox2.value= "Not accepted";
send.addEventListener('click', () => {

    
sendEamil = () => {



if(firstName.value == '' || firstName.value == null || email.value == '' || email.value == null ||number.value == '' || number.value == null || email.value == '' || email.value == null ||message.value == '' || message.value == null)
{
    firstName.placeholder = " pole Imie";
}
else
{


    
Email.send({
SecureToken : "",
To : '',
From : "",

Subject : `strona www - ${firstName.value}`,
Body :` INWESTYCJA: inwestycji Park Paderewskiego <br><br> IMIE: ${firstName.value} <br><br>  
EMAIL: ${email.value}<br><br>
TELEFON: ${phone.value}<br><br> 
OPIS: ${message.value} <br><br>
ZGODY: <br>${checkbox0.value} <br><br>
${checkbox1.value} <br><br>
${checkbox2.value}`
}).then(
message =>  
{
text.innerHTML = message
if(text.textContent === "OK")
{
textValue.innerHTML = "Good";
}
else 
{
textValue.innerHTML = "error";
}
text.style.display = "none";
}); 

};
};
sendEamil();

});

// email  end 