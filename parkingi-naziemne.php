
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/jpg" href="image/icone.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" type="text/css" href="css/popupCookie.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/above-ground-parking-lot.css">
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="js/popupMenu.js" async></script>
<script src="js/sendingEmail.js" defer></script>
<script src="js/popupCookie.js" defer></script>

  <title>Parkingi Naziemne B/C  - Nowoczesne Osiedle w Zawierciu</title>
</head>
<body>

<!-- navbar start -->
<div class="top">
<div class="navbar">
<a class="navbar__item logo" href="./">  <img class="navbar__item logo" href="./"><img class="navbar__item logo"  src="image/lpp.webp"></a>
<div class="navbar__menu">
<a class="navbar__item navbar__link white-border" href="mieszkania">Mieszkania</a>
<div class="navbar__item navbar__link dropdown">Parkingi
<div class="dropdown-content">
<a href="parkingi-naziemne.php">Parkingi Naziemne B/C</a>
<br>
  <a href="parkingi-naziemneA.php">Parkingi Naziemne A</a>
  <br>
<a href="budynek-b-garaze-podziemne.php">Garaże podziemne B</a>
<br>
<a href="budynek-c-garaze-podziemne.php">Garaże podziemne C</a>
<br>
<a href="budynek-a-garaze-podziemne.php">Garaże podziemne A</a>
</div>
</div>
<a class="navbar__item navbar__link" href="galeria">Galeria</a>
<a class="navbar__item navbar__link" href="oferta-inwestycyjna">Oferta inwestycyjna</a>
<a class="navbar__item navbar__link" href="lifestyle">Lifestyle</a>
<a class="navbar__item navbar__link" href="kontakt">Kontakt</a>
<a class="navbar__item navbar__link" href="https://diamond-hill.com.pl/">Deweloper</a>
</div>
<!-- Popup start -->
<button id="showPopup">Zapytaj o mieszkania</button>
<!-- Popup end -->
<span class="hamburger hamburger--collapse navbar__item" id="js-navbar-toggle">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</span>
</div>
</div>
<div id="popup" class="popup">
<div class="popup-content">
  <!-- email  start -->
    <!-- View information about the sending status start -->
    <div class="textValue"></div>

       <!-- View information about the sending status end -->
    <form id="formPopup" class="topBefore" method="post">
        <input id="text1" class="firstName" type="text" placeholder="Imie" >
        <input class="email" type="email" placeholder="Emial">
        <input class="phone" type="number" placeholder="Telefon">
        <textarea class="message" type="text" placeholder="Dotyczy mieszkania"></textarea>
        <!-- send request start -->
        <input class="send" id="submit" type="button" value="Wyślij zapytanie"> 
          <!-- send request end -->
          <!-- checkbox start   -->
          <div class="checkbox-wrapper-32">
            <input type="checkbox" name="checkbox-32" id="checkbox-32"  class="checkbox0">
            <label for="checkbox-32">
            Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.
            </label>
     
            <svg viewBox="0 0 100 100">
              <path d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
              <path d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
            </svg>
          </div>
    
          <div class="checkbox-wrapper-33">
            <input type="checkbox" name="checkbox-33" id="checkbox-33"  class="checkbox1">
            <label for="checkbox-33">
            Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.
            </label>
     
            <svg viewBox="0 0 100 100">
              <path d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
              <path d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
            </svg>
          </div>
    
    
    
          <div class="checkbox-wrapper-34">
            <input type="checkbox" name="checkbox-34" id="checkbox-34"  class="checkbox2">
            <label for="checkbox-34">
            Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne.
            </label>
     
            <svg viewBox="0 0 100 100">
              <path d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
              <path d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
            </svg>
          </div>
          <!-- checkbox end   -->
        
          <div class="text"></div>
          <div class="text1"></div>
          </form>
            <!-- email  end -->
   
  <div class="allAvailableApartmentsAvailable"></div>
  <span class="close" id="closePopup">X</span>
  
  </div>
  </div>
<!-- navbar end -->

<header class="contact">
    <!-- top and middle of the page start -->
    <div class="centerLifestyle">
      <p class="titleTextGallery">Parkingi naziemne C/B</p>
  
    </header>
  <img class = "map" src             = "image/above-ground-parking-lot-map.webp">
  <div id    = "popupImageMap" class = "popupImageMap">

    <img  class = "popupContentImageMap"></img>
    <span id    = "closePopupImageMap"></span>
  </div>
<br><br>
  <div id = "columns">
    <figure>
      <figcaption>
        <figcaption>01: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>02: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>03: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>04: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>05: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>06: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>07: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      
      <figcaption>
        <figcaption>08: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>09: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>10: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>11: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>12: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>13: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>14: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>15: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>16: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>17: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>18: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>19: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>20: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>21: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>22: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>23: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>24: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>25: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>26: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>27: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>28: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>29: </figcaption>
        <figcaption class = "premiseStatusUR">Zarezerwowane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>30: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>31: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>32: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>

      <figcaption>
        <figcaption>33: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>34: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
    </figure>
    <figure>
      <figcaption>
        <figcaption>36: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>37: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>38: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>39: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>

      <figcaption>
        <figcaption>42: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>

      <figcaption>
        <figcaption>45: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>46: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>47: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
      <figcaption>
        <figcaption>48: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>
   
      <figcaption>
        <figcaption>61: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>

      <figcaption>
        <figcaption>74: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>

      <figcaption>
        <figcaption>75: </figcaption>
        <figcaption class = "premiseStatusUR">Zarezerwowane</figcaption>
      </figcaption>
      
  
      <figcaption>
        <figcaption>76: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>


      <figcaption>
        <figcaption>77: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>


      <figcaption>
        <figcaption>78: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>


      <figcaption>
        <figcaption>93: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>


      <figcaption>
        <figcaption>94: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>


      <figcaption>
        <figcaption>95: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>


      <figcaption>
        <figcaption>96: </figcaption>
        <figcaption class = "premiseStatus">Sprzedane</figcaption>
      </figcaption>



    </figure>
  </div>
  <br>
<!-- footer start -->
<footer>
    <div class="locationsAll">
    <div class="locationsLeft"> 
    <img src="image/dhd.webp"
    class="footer_logo">  <h5>DIAMOND HILL DEVELOPMENT jest ogólnopolskim<br>deweloperem segmentu premium. Tworzymy<br>nieruchomości cechujące się najwyższą jakością,<br> innowacyjnymi technologiami, funkcjonalnością i<br>ponadczasowym designem.</h5>
    <img src="image/pzfd.webp" class="footer_logo">
    </div>       
    <div class="locationsRight">  
    <h5>BIURO SPRZEDAŻY<br>ul.Paderewskiego 63a, 42-400 Zawiercie<br><a href="tel:+48 786 337 302 " style="color: #ffffff;">+48 786 337 302 </a><br>e-mail.<a href="mailto:biuro@parkpaderewskiego.pl" style="color:  #ffffff;"> biuro@parkpaderewskiego.pl</a><br>  <a href="mailto:sprzedaz@parkpaderewskiego.pl" style="color:  #ffffff;"> sprzedaz@parkpaderewskiego.pl</a><br>www.diamond-hill.com.pl</h5>                                                                           
    <!-- social media start -->
  <h5 class="smollText">   Bądź na bieżąco </h5>
    <a href="https://www.facebook.com/profile.php?id=100092554970321" class="fa fa-facebook"></a>
    <a href="https://www.linkedin.com/company/diamond-hill-development/" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/@ParkPaderewskiegoZawiercie" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/park_paderewskiego_zawiercie/" class="fa fa-instagram"></a>
  
  </div>
    <!-- social media end -->
    <div class="locationsCenter">    
    <div class="line"></div>
    <h5><a style="color:  #ffffff;" href="cookiesPolitics">Polityka cookies</a><br><a style="color:  #ffffff;" href="privacyPolicy">Polityka prywatności</a><br>Copyright © Diamond Hill Development, All Rights Reserved.</h5>
    </div>
    </div>
    </footer>
    <!-- footer end -->

    <!-- popup cookie  start -->
    <div class="containerCookie">
      <div class="headerCookie">
        <i class="bx bx-cookie"></i>
        <h2>Cenimy Twoją prywatność</h2>
      </div>

      <div class="textCookie">
        <p>Używamy plików cookie, aby poprawić komfort przeglądania, wyświetlać spersonalizowane reklamy lub treści oraz analizować nasz ruch. Klikając „Akceptuj wszystko”, wyrażasz zgodę na używanie przez nas plików cookie. <a href="cookiesPolitics"> Czytaj więcej...</a></p>
      </div>

      <div class="buttonsCookie">
        <button class="button" id="acceptBtn">Akceptuj wszystkie</button>
        <button class="button" id="declineBtn">Odrzuć wszystko</button>
      </div>
    </div>

  
   <!-- popup cookie  start -->
 <style>
  .premiseStatus
  {
    color: red;
  }


  .premiseStatusUR
  {
    color:#e6b800;
  }
 </style>
 

</body>
</html>

