
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/above-ground-parking-lot.css">
<script src="js/script.js" defer></script>

  <title>Parkingi Naziemne</title>
</head>

<body>
<!-- navbar start -->
<div class="top">
<div class="navbar">
<a class="navbar__item logo" href="index.html">  <img class="navbar__item logo" href="index.html"><img class="navbar__item logo"  src="image/lpp.webp"></a>
<div class="navbar__menu">
<a class="navbar__item navbar__link white-border" href="apartments.html">Mieszkania</a>
<div class="navbar__item navbar__link dropdown">Parkingi
<div class="dropdown-content">
<a href="above-ground-parking-lot.php">Parkingi Naziemne</a>
<br>
<a href="underground-garages-B.php">Garaże podziemne B</a>
<br>
<a href="underground-garages-C.php">Garaże podziemne C</a>
</div>
</div>
<a class="navbar__item navbar__link" href="gallery.html">Galeria</a>
<a class="navbar__item navbar__link" href="investmentoffer.html">Oferta inwestycyjna</a>
<a class="navbar__item navbar__link" href="lifestyle.html">Lifestyle</a>
<a class="navbar__item navbar__link" href="kontakt.html">Kontakt</a>
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

<form id="formPopup" class="topBefore" method="post">
      <input class="email" type="email" placeholder="Emial">
      <input class="phone" type="number" placeholder="Telefon">
      <textarea class="message" type="text" placeholder="Dotyczy mieszkania"></textarea>
      <input class="send" id="submit" type="button" value="Wyślij zapytanie"> 
               <!-- checkbox start   -->
               <div class="checkbox-wrapper-32">
        <input type="checkbox" name="checkbox-32" id="checkbox-32">
        <label for="checkbox-32">
        Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.
        </label>
 
        <svg viewBox="0 0 100 100">
          <path d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
          <path d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
        </svg>
      </div>

      <div class="checkbox-wrapper-33">
        <input type="checkbox" name="checkbox-33" id="checkbox-33">
        <label for="checkbox-33">
        Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.
        </label>
 
        <svg viewBox="0 0 100 100">
          <path d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
          <path d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
        </svg>
      </div>



      <div class="checkbox-wrapper-34">
        <input type="checkbox" name="checkbox-34" id="checkbox-34">
        <label for="checkbox-34">
        Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne.
        </label>
 
        <svg viewBox="0 0 100 100">
          <path d="M 10 10 L 90 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
          <path d="M 90 10 L 10 90" stroke="#000" stroke-dasharray="113" stroke-dashoffset="113"></path>
        </svg>
      </div>
      <!-- checkbox end   -->
      <div class="textValue"></div>
      <div class="text"></div>
      <div class="test"></div>
   
  <div class="allAvailableApartmentsAvailable"></div>
  <span class="close" id="closePopup"></span>
  
  </div>
  </div>
<!-- navbar end -->

  <img class = "banner" src          = "image/above-ground-parking-lot.webp">
  <img class = "map" src             = "image/above-ground-parking-lot-map.webp">
  <div id    = "popupImageMap" class = "popupImageMap">

    <img  class = "popupContentImageMap"></img>
    <span id    = "closePopupImageMap"></span>
  </div>

  <div id = "columns">
    <figure>
      <figcaption>
        <figcaption>01: </figcaption>
        <figcaption class = "premiseStatus01PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>02: </figcaption>
        <figcaption class = "premiseStatus02PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>03: </figcaption>
        <figcaption class = "premiseStatus03PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>04: </figcaption>
        <figcaption class = "premiseStatus04PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>05: </figcaption>
        <figcaption class = "premiseStatus05PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>06: </figcaption>
        <figcaption class = "premiseStatus06PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>07: </figcaption>
        <figcaption class = "premiseStatus07PN"></figcaption>
      </figcaption>
      
      <figcaption>
        <figcaption>08: </figcaption>
        <figcaption class = "premiseStatus08PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>09: </figcaption>
        <figcaption class = "premiseStatus09PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>10: </figcaption>
        <figcaption class = "premiseStatus10PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>11: </figcaption>
        <figcaption class = "premiseStatus11PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>12: </figcaption>
        <figcaption class = "premiseStatus12PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>13: </figcaption>
        <figcaption class = "premiseStatus13PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>14: </figcaption>
        <figcaption class = "premiseStatus14PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>15: </figcaption>
        <figcaption class = "premiseStatus15PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>16: </figcaption>
        <figcaption class = "premiseStatus16PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>17: </figcaption>
        <figcaption class = "premiseStatus17PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>18: </figcaption>
        <figcaption class = "premiseStatus18PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>19: </figcaption>
        <figcaption class = "premiseStatus19PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>20: </figcaption>
        <figcaption class = "premiseStatus20PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>21: </figcaption>
        <figcaption class = "premiseStatus21PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>22: </figcaption>
        <figcaption class = "premiseStatus22PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>23: </figcaption>
        <figcaption class = "premiseStatus23PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>24: </figcaption>
        <figcaption class = "premiseStatus24PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>25: </figcaption>
        <figcaption class = "premiseStatus25PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>26: </figcaption>
        <figcaption class = "premiseStatus26PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>27: </figcaption>
        <figcaption class = "premiseStatus27PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>28: </figcaption>
        <figcaption class = "premiseStatus28PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>29: </figcaption>
        <figcaption class = "premiseStatus29PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>30: </figcaption>
        <figcaption class = "premiseStatus30PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>31: </figcaption>
        <figcaption class = "premiseStatus31PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>32: </figcaption>
        <figcaption class = "premiseStatus32PN"></figcaption>
      </figcaption>

      <figcaption>
        <figcaption>33: </figcaption>
        <figcaption class = "premiseStatus33PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>34: </figcaption>
        <figcaption class = "premiseStatus34PN"></figcaption>
      </figcaption>
    </figure>
    <figure>
      <figcaption>
        <figcaption>36: </figcaption>
        <figcaption class = "premiseStatus36PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>37: </figcaption>
        <figcaption class = "premiseStatus37PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>38: </figcaption>
        <figcaption class = "premiseStatus38PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>39: </figcaption>
        <figcaption class = "premiseStatus39PN"></figcaption>
      </figcaption>

      <figcaption>
        <figcaption>42: </figcaption>
        <figcaption class = "premiseStatus42PN"></figcaption>
      </figcaption>

      <figcaption>
        <figcaption>45: </figcaption>
        <figcaption class = "premiseStatus45PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>46: </figcaption>
        <figcaption class = "premiseStatus46PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>47: </figcaption>
        <figcaption class = "premiseStatus47PN"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>48: </figcaption>
        <figcaption class = "premiseStatus48PN"></figcaption>
      </figcaption>
   
      <figcaption>
        <figcaption>61: </figcaption>
        <figcaption class = "premiseStatus61PN"></figcaption>
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
<h5>BIURO SPRZEDAŻY<br>ul.Paderewskiego 63a, 42-400 Zawiercie<br><a href="tel:+48 786 337 302 " style="color: #ffffff;">+48 786 337 302 </a><br>e-mail.<a href="mailto:biuro@parkpaderewskiego.pl" style="color:  #ffffff;"> biuro@parkpaderewskiego.pl</a><br>  <a href="mailto:sprzedaz@parkpaderewskiego.pl" style="color:  #ffffff;"> sprzedaz@parkpaderewskiego.pl</a><br>www.diamond-hill.com.pl<br><br><br><br><br><br>Bądź na bieżąco</h5>                                                                           
<!-- social media start -->
<a href="https://www.facebook.com/profile.php?id=100092554970321" class="fa fa-facebook"></a>
<a href="https://www.linkedin.com/company/diamond-hill-development/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/@ParkPaderewskiegoZawiercie" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/park_paderewskiego_zawiercie/" class="fa fa-instagram"></a>
</div>
<!-- social media end -->
<div class="locationsCenter">    
<div class="line"></div>
<h5><a style="color:  #ffffff;" href="cookiesPolitics.html">Polityka cookies</a><br><a style="color:  #ffffff;" href="privacyPolicy.html">Polityka prywatności</a><br>Copyright © Diamond Hill Development, All Rights Reserved.</h5>
</div>
</div>
</footer>
<!-- footer end -->
  <?php
  $url         = "";
  $response    = file_get_contents($url);
  $xml         = simplexml_load_string($response);
  $realestates = $xml->xpath("//realestate");

  foreach ($realestates as $realestate) {
    $idValue         = (string)$realestate->id;
    $statusNameValue = (string)$realestate->status_name;
    if ($idValue === "2217"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText01PN  = "Sprzedane";
      $premiseStatusColor01PN = "red";
    } else if ($idValue === "2217"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText01PN  = "Zarezerwowane";
      $premiseStatusColor01PN = "#e6b800";
    } else if ($idValue === "2217"  && $statusNameValue === "Dostępne") {
      $premiseStatusText01PN  = "Dostępne";
      $premiseStatusColor01PN = "darkgreen";
    } else if ($idValue === "2218"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText02PN  = "Sprzedane";
      $premiseStatusColor02PN = "red";
    } else if ($idValue === "2218"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText02PN  = "Zarezerwowane";
      $premiseStatusColor02PN = "#e6b800";
    } else if ($idValue === "2218"  && $statusNameValue === "Dostępne") {
      $premiseStatusText02PN  = "Dostępne";
      $premiseStatusColor02PN = "darkgreen";
    } else if ($idValue === "2219"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText03PN  = "Sprzedane";
      $premiseStatusColor03PN = "red";
    } else if ($idValue === "2219"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText03PN  = "Zarezerwowane";
      $premiseStatusColor03PN = "#e6b800";
    } else if ($idValue === "2219"  && $statusNameValue === "Dostępne") {
      $premiseStatusText03PN  = "Dostępne";
      $premiseStatusColor03PN = "darkgreen";
    } else if ($idValue === "2220"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText04PN  = "Sprzedane";
      $premiseStatusColor04PN = "red";
    } else if ($idValue === "2220"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText04PN  = "Zarezerwowane";
      $premiseStatusColor04PN = "#e6b800";
    } else if ($idValue === "2220"  && $statusNameValue === "Dostępne") {
      $premiseStatusText04PN  = "Dostępne";
      $premiseStatusColor04PN = "darkgreen";
    } else if ($idValue === "2221"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText05PN  = "Sprzedane";
      $premiseStatusColor05PN = "red";
    } else if ($idValue === "2221"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText05PN  = "Zarezerwowane";
      $premiseStatusColor05PN = "#e6b800";
    } else if ($idValue === "2221"  && $statusNameValue === "Dostępne") {
      $premiseStatusText05PN  = "Dostępne";
      $premiseStatusColor05PN = "darkgreen";
    } else if ($idValue === "2222"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText06PN  = "Sprzedane";
      $premiseStatusColor06PN = "red";
    } else if ($idValue === "2222"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText06PN  = "Zarezerwowane";
      $premiseStatusColor06PN = "#e6b800";
    } else if ($idValue === "2222"  && $statusNameValue === "Dostępne") {
      $premiseStatusText06PN  = "Dostępne";
      $premiseStatusColor06PN = "darkgreen";
    } else if ($idValue === "2223"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText07PN  = "Sprzedane";
      $premiseStatusColor07PN = "red";
    } else if ($idValue === "2223"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText07PN  = "Zarezerwowane";
      $premiseStatusColor07PN = "#e6b800";
    } else if ($idValue === "2223"  && $statusNameValue === "Dostępne") {
      $premiseStatusText07PN  = "Dostępne";
      $premiseStatusColor07PN = "darkgreen";
    } else if ($idValue === "2224"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText08PN  = "Sprzedane";
      $premiseStatusColor08PN = "red";
    } else if ($idValue === "2224"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText08PN  = "Zarezerwowane";
      $premiseStatusColor08PN = "#e6b800";
    } else if ($idValue === "2224"  && $statusNameValue === "Dostępne") {
      $premiseStatusText08PN  = "Dostępne";
      $premiseStatusColor08PN = "darkgreen";

    } else if ($idValue === "2225"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText09PN  = "Sprzedane";
      $premiseStatusColor09PN = "red";
    } else if ($idValue === "2225"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText09PN  = "Zarezerwowane";
      $premiseStatusColor09PN = "#e6b800";
    } else if ($idValue === "2225"  && $statusNameValue === "Dostępne") {
      $premiseStatusText09PN  = "Dostępne";
      $premiseStatusColor09PN = "darkgreen";

      
      
    } else if ($idValue === "2226"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText10PN  = "Sprzedane";
      $premiseStatusColor10PN = "red";
    } else if ($idValue === "2226"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText10PN  = "Zarezerwowane";
      $premiseStatusColor10PN = "#e6b800";
    } else if ($idValue === "2226"  && $statusNameValue === "Dostępne") {
      $premiseStatusText10PN  = "Dostępne";
      $premiseStatusColor10PN = "darkgreen";


    } else if ($idValue === "2227"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText11PN  = "Sprzedane";
      $premiseStatusColor11PN = "red";
    } else if ($idValue === "2227"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText11PN  = "Zarezerwowane";
      $premiseStatusColor11PN = "#e6b800";
    } else if ($idValue === "2227"  && $statusNameValue === "Dostępne") {
      $premiseStatusText11PN  = "Dostępne";
      $premiseStatusColor11PN = "darkgreen";
    
    } else if ($idValue === "2228"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText12PN  = "Sprzedane";
      $premiseStatusColor12PN = "red";
    } else if ($idValue === "2228"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText12PN  = "Zarezerwowane";
      $premiseStatusColor12PN = "#e6b800";
    } else if ($idValue === "2228"  && $statusNameValue === "Dostępne") {
      $premiseStatusText12PN  = "Dostępne";
      $premiseStatusColor12PN = "darkgreen";

    } else if ($idValue === "2229"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText13PN  = "Sprzedane";
      $premiseStatusColor13PN = "red";
    } else if ($idValue === "2229"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText13PN  = "Zarezerwowane";
      $premiseStatusColor13PN = "#e6b800";
    } else if ($idValue === "2229"  && $statusNameValue === "Dostępne") {
      $premiseStatusText13PN  = "Dostępne";
      $premiseStatusColor13PN = "darkgreen";

    } else if ($idValue === "2230"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText14PN  = "Sprzedane";
      $premiseStatusColor14PN = "red";
    } else if ($idValue === "2230"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText14PN  = "Zarezerwowane";
      $premiseStatusColor14PN = "#e6b800";
    } else if ($idValue === "2230"  && $statusNameValue === "Dostępne") {
      $premiseStatusText14PN  = "Dostępne";
      $premiseStatusColor14PN = "darkgreen";


    } else if ($idValue === "2231"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText15PN  = "Sprzedane";
      $premiseStatusColor15PN = "red";
    } else if ($idValue === "2231"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText15PN  = "Zarezerwowane";
      $premiseStatusColor15PN = "#e6b800";
    } else if ($idValue === "2231"  && $statusNameValue === "Dostępne") {
      $premiseStatusText15PN  = "Dostępne";
      $premiseStatusColor15PN = "darkgreen";


    } else if ($idValue === "2232"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText16PN  = "Sprzedane";
      $premiseStatusColor16PN = "red";
    } else if ($idValue === "2232"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText16PN  = "Zarezerwowane";
      $premiseStatusColor16PN = "#e6b800";
    } else if ($idValue === "2232"  && $statusNameValue === "Dostępne") {
      $premiseStatusText16PN  = "Dostępne";
      $premiseStatusColor16PN = "darkgreen";


    } else if ($idValue === "2233"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText17PN  = "Sprzedane";
      $premiseStatusColor17PN = "red";
    } else if ($idValue === "2233"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText17PN  = "Zarezerwowane";
      $premiseStatusColor17PN = "#e6b800";
    } else if ($idValue === "2233"  && $statusNameValue === "Dostępne") {
      $premiseStatusText17PN  = "Dostępne";
      $premiseStatusColor17PN = "darkgreen";



    } else if ($idValue === "2234"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText18PN  = "Sprzedane";
      $premiseStatusColor18PN = "red";
    } else if ($idValue === "2234"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText18PN  = "Zarezerwowane";
      $premiseStatusColor18PN = "#e6b800";
    } else if ($idValue === "2234"  && $statusNameValue === "Dostępne") {
      $premiseStatusText18PN  = "Dostępne";
      $premiseStatusColor18PN = "darkgreen";
    } else if ($idValue === "2235"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText19PN  = "Sprzedane";
      $premiseStatusColor19PN = "red";
    } else if ($idValue === "2235"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText19PN  = "Zarezerwowane";
      $premiseStatusColor19PN = "#e6b800";
    } else if ($idValue === "2235"  && $statusNameValue === "Dostępne") {
      $premiseStatusText19PN  = "Dostępne";
      $premiseStatusColor19PN = "darkgreen";
    } else if ($idValue === "2236"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText20PN  = "Sprzedane";
      $premiseStatusColor20PN = "red";
    } else if ($idValue === "2236"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText20PN  = "Zarezerwowane";
      $premiseStatusColor20PN = "#e6b800";
    } else if ($idValue === "2236"  && $statusNameValue === "Dostępne") {
      $premiseStatusText20PN  = "Dostępne";
      $premiseStatusColor20PN = "darkgreen";

    } else if ($idValue === "2237"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText21PN  = "Sprzedane";
      $premiseStatusColor21PN = "red";
    } else if ($idValue === "2237"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText21PN  = "Zarezerwowane";
      $premiseStatusColor21PN = "#e6b800";
    } else if ($idValue === "2237"  && $statusNameValue === "Dostępne") {
      $premiseStatusText21PN  = "Dostępne";
      $premiseStatusColor21PN = "darkgreen";



    } else if ($idValue === "2238"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText22PN  = "Sprzedane";
      $premiseStatusColor22PN = "red";
    } else if ($idValue === "2238"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText22PN  = "Zarezerwowane";
      $premiseStatusColor22PN = "#e6b800";
    } else if ($idValue === "2238"  && $statusNameValue === "Dostępne") {
      $premiseStatusText22PN  = "Dostępne";
      $premiseStatusColor22PN = "darkgreen";
    } else if ($idValue === "2239"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText23PN  = "Sprzedane";
      $premiseStatusColor23PN = "red";
    } else if ($idValue === "2239"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText23PN  = "Zarezerwowane";
      $premiseStatusColor23PN = "#e6b800";
    } else if ($idValue === "2239"  && $statusNameValue === "Dostępne") {
      $premiseStatusText23PN  = "Dostępne";
      $premiseStatusColor23PN = "darkgreen";
    } else if ($idValue === "2240"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText24PN  = "Sprzedane";
      $premiseStatusColor24PN = "red";
    } else if ($idValue === "2240"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText24PN  = "Zarezerwowane";
      $premiseStatusColor24PN = "#e6b800";
    } else if ($idValue === "2240"  && $statusNameValue === "Dostępne") {
      $premiseStatusText24PN  = "Dostępne";
      $premiseStatusColor24PN = "darkgreen";


    } else if ($idValue === "2241"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText25PN  = "Sprzedane";
      $premiseStatusColor25PN = "red";
    } else if ($idValue === "2241"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText25PN  = "Zarezerwowane";
      $premiseStatusColor25PN = "#e6b800";
    } else if ($idValue === "2241"  && $statusNameValue === "Dostępne") {
      $premiseStatusText25PN  = "Dostępne";
      $premiseStatusColor25PN = "darkgreen";




    } else if ($idValue === "2242"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText26PN  = "Sprzedane";
      $premiseStatusColor26PN = "red";
    } else if ($idValue === "2242"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText26PN  = "Zarezerwowane";
      $premiseStatusColor26PN = "#e6b800";
    } else if ($idValue === "2242"  && $statusNameValue === "Dostępne") {
      $premiseStatusText26PN  = "Dostępne";
      $premiseStatusColor26PN = "darkgreen";



    } else if ($idValue === "2243"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText27PN  = "Sprzedane";
      $premiseStatusColor27PN = "red";
    } else if ($idValue === "2243"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText27PN  = "Zarezerwowane";
      $premiseStatusColor27PN = "#e6b800";
    } else if ($idValue === "2243"  && $statusNameValue === "Dostępne") {
      $premiseStatusText27PN  = "Dostępne";
      $premiseStatusColor27PN = "darkgreen";



    } else if ($idValue === "2244"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText28PN  = "Sprzedane";
      $premiseStatusColor28PN = "red";
    } else if ($idValue === "2244"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText28PN  = "Zarezerwowane";
      $premiseStatusColor28PN = "#e6b800";
    } else if ($idValue === "2244"  && $statusNameValue === "Dostępne") {
      $premiseStatusText28PN  = "Dostępne";
      $premiseStatusColor28PN = "darkgreen";



 
    } else if ($idValue === "2245"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText29PN  = "Sprzedane";
      $premiseStatusColor29PN = "red";
    } else if ($idValue === "2245"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText29PN  = "Zarezerwowane";
      $premiseStatusColor29PN = "#e6b800";
    } else if ($idValue === "2245"  && $statusNameValue === "Dostępne") {
      $premiseStatusText29PN  = "Dostępne";
      $premiseStatusColor29PN = "darkgreen";
    } else if ($idValue === "2246"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText30PN  = "Sprzedane";
      $premiseStatusColor30PN = "red";
    } else if ($idValue === "2246"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText30PN  = "Zarezerwowane";
      $premiseStatusColor30PN = "#e6b800";
    } else if ($idValue === "2246"  && $statusNameValue === "Dostępne") {
      $premiseStatusText30PN  = "Dostępne";
      $premiseStatusColor30PN = "darkgreen";
    } else if ($idValue === "2247"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText31PN  = "Sprzedane";
      $premiseStatusColor31PN = "red";
    } else if ($idValue === "2247"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText31PN  = "Zarezerwowane";
      $premiseStatusColor31PN = "#e6b800";
    } else if ($idValue === "2247"  && $statusNameValue === "Dostępne") {
      $premiseStatusText31PN  = "Dostępne";
      $premiseStatusColor31PN = "darkgreen";


    } else if ($idValue === "2248"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText32PN  = "Sprzedane";
      $premiseStatusColor32PN = "red";
    } else if ($idValue === "2248"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText32PN  = "Zarezerwowane";
      $premiseStatusColor32PN = "#e6b800";
    } else if ($idValue === "2248"  && $statusNameValue === "Dostępne") {
      $premiseStatusText32PN  = "Dostępne";
      $premiseStatusColor32PN = "darkgreen";

    } else if ($idValue === "2249"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText33PN  = "Sprzedane";
      $premiseStatusColor33PN = "red";
    } else if ($idValue === "2249"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText33PN  = "Zarezerwowane";
      $premiseStatusColor33PN = "#e6b800";
    } else if ($idValue === "2249"  && $statusNameValue === "Dostępne") {
      $premiseStatusText33PN  = "Dostępne";
      $premiseStatusColor33PN = "darkgreen";
    } else if ($idValue === "2250"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText34PN  = "Sprzedane";
      $premiseStatusColor34PN = "red";
    } else if ($idValue === "2250"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText34PN  = "Zarezerwowane";
      $premiseStatusColor34PN = "#e6b800";
    } else if ($idValue === "2250"  && $statusNameValue === "Dostępne") {
      $premiseStatusText34PN  = "Dostępne";
      $premiseStatusColor34PN = "darkgreen";
    } else if ($idValue === "2251"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText35PN  = "Sprzedane";
      $premiseStatusColor35PN = "red";
    } else if ($idValue === "2251"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText35PN  = "Zarezerwowane";
      $premiseStatusColor35PN = "#e6b800";
    } else if ($idValue === "2251"  && $statusNameValue === "Dostępne") {
      $premiseStatusText35PN  = "Dostępne";
      $premiseStatusColor35PN = "darkgreen";
    } else if ($idValue === "2252"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText36PN  = "Sprzedane";
      $premiseStatusColor36PN = "red";
    } else if ($idValue === "2252"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText36PN  = "Zarezerwowane";
      $premiseStatusColor36PN = "#e6b800";
    } else if ($idValue === "2252"  && $statusNameValue === "Dostępne") {
      $premiseStatusText36PN  = "Dostępne";
      $premiseStatusColor36PN = "darkgreen";
    } else if ($idValue === "2253"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText37PN  = "Sprzedane";
      $premiseStatusColor37PN = "red";
    } else if ($idValue === "2253"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText37PN  = "Zarezerwowane";
      $premiseStatusColor37PN = "#e6b800";
    } else if ($idValue === "2253"  && $statusNameValue === "Dostępne") {
      $premiseStatusText37PN  = "Dostępne";
      $premiseStatusColor37PN = "darkgreen";
    } else if ($idValue === "2254"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText38PN  = "Sprzedane";
      $premiseStatusColor38PN = "red";
    } else if ($idValue === "2254"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText38PN  = "Zarezerwowane";
      $premiseStatusColor38PN = "#e6b800";
    } else if ($idValue === "2254"  && $statusNameValue === "Dostępne") {
      $premiseStatusText38PN  = "Dostępne";
      $premiseStatusColor38PN = "darkgreen";
    } else if ($idValue === "2255"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText39PN  = "Sprzedane";
      $premiseStatusColor39PN = "red";
    } else if ($idValue === "2255"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText39PN  = "Zarezerwowane";
      $premiseStatusColor39PN = "#e6b800";
    } else if ($idValue === "2255"  && $statusNameValue === "Dostępne") {
      $premiseStatusText39PN  = "Dostępne";
      $premiseStatusColor39PN = "darkgreen";
    } else if ($idValue === "2258"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText42PN  = "Sprzedane";
      $premiseStatusColor42PN = "red";
    } else if ($idValue === "2258"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText42PN  = "Zarezerwowane";
      $premiseStatusColor42PN = "#e6b800";
    } else if ($idValue === "2258"  && $statusNameValue === "Dostępne") {
      $premiseStatusText42PN  = "Dostępne";
      $premiseStatusColor42PN = "darkgreen";
    } else if ($idValue === "2261"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText45PN  = "Sprzedane";
      $premiseStatusColor45PN = "red";
    } else if ($idValue === "2261"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText45PN  = "Zarezerwowane";
      $premiseStatusColor45PN = "#e6b800";
    } else if ($idValue === "2261"  && $statusNameValue === "Dostępne") {
      $premiseStatusText45PN  = "Dostępne";
      $premiseStatusColor45PN = "darkgreen";
    } else if ($idValue === "2262"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText46PN  = "Sprzedane";
      $premiseStatusColor46PN = "red";
    } else if ($idValue === "2262"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText46PN  = "Zarezerwowane";
      $premiseStatusColor46PN = "#e6b800";
    } else if ($idValue === "2262"  && $statusNameValue === "Dostępne") {
      $premiseStatusText46PN  = "Dostępne";
      $premiseStatusColor46PN = "darkgreen";
    } else if ($idValue === "2263"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText47PN  = "Sprzedane";
      $premiseStatusColor47PN = "red";
    } else if ($idValue === "2263"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText47PN  = "Zarezerwowane";
      $premiseStatusColor47PN = "#e6b800";
    } else if ($idValue === "2263"  && $statusNameValue === "Dostępne") {
      $premiseStatusText47PN  = "Dostępne";
      $premiseStatusColor47PN = "darkgreen";
    } else if ($idValue === "2264"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText48PN  = "Sprzedane";
      $premiseStatusColor48PN = "red";
    } else if ($idValue === "2264"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText48PN  = "Zarezerwowane";
      $premiseStatusColor48PN = "#e6b800";
    } else if ($idValue === "2264"  && $statusNameValue === "Dostępne") {
      $premiseStatusText48PN  = "Dostępne";
      $premiseStatusColor48PN = "darkgreen";

    } else if ($idValue === "2277"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText61PN  = "Sprzedane";
      $premiseStatusColor61PN = "red";
    } else if ($idValue === "2277"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText61PN  = "Zarezerwowane";
      $premiseStatusColor61PN = "#e6b800";
    } else if ($idValue === "2277"  && $statusNameValue === "Dostępne") {
      $premiseStatusText61PN  = "Dostępne";
      $premiseStatusColor61PN = "darkgreen";

    }
  }
  ?>
  <script>
 let premiseStatus01PN=document.getElementsByClassName("premiseStatus01PN")[0];premiseStatus01PN.innerHTML="<?php echo $premiseStatusText01PN; ?>",premiseStatus01PN.style.color="<?php echo $premiseStatusColor01PN; ?>";let premiseStatus02PN=document.getElementsByClassName("premiseStatus02PN")[0];premiseStatus02PN.innerHTML="<?php echo $premiseStatusText02PN; ?>",premiseStatus02PN.style.color="<?php echo $premiseStatusColor02PN; ?>";let premiseStatus03PN=document.getElementsByClassName("premiseStatus03PN")[0];premiseStatus03PN.innerHTML="<?php echo $premiseStatusText03PN; ?>",premiseStatus03PN.style.color="<?php echo $premiseStatusColor03PN; ?>";let premiseStatus04PN=document.getElementsByClassName("premiseStatus04PN")[0];premiseStatus04PN.innerHTML="<?php echo $premiseStatusText04PN; ?>",premiseStatus04PN.style.color="<?php echo $premiseStatusColor04PN; ?>";let premiseStatus05PN=document.getElementsByClassName("premiseStatus05PN")[0];premiseStatus05PN.innerHTML="<?php echo $premiseStatusText05PN; ?>",premiseStatus05PN.style.color="<?php echo $premiseStatusColor05PN; ?>";let premiseStatus06PN=document.getElementsByClassName("premiseStatus06PN")[0];premiseStatus06PN.innerHTML="<?php echo $premiseStatusText06PN; ?>",premiseStatus06PN.style.color="<?php echo $premiseStatusColor06PN; ?>";let premiseStatus07PN=document.getElementsByClassName("premiseStatus07PN")[0];premiseStatus07PN.innerHTML="<?php echo $premiseStatusText07PN; ?>",premiseStatus07PN.style.color="<?php echo $premiseStatusColor07PN; ?>";let premiseStatus08PN=document.getElementsByClassName("premiseStatus08PN")[0];premiseStatus08PN.innerHTML="<?php echo $premiseStatusText08PN; ?>",premiseStatus08PN.style.color="<?php echo $premiseStatusColor08PN; ?>";let premiseStatus09PN=document.getElementsByClassName("premiseStatus09PN")[0];premiseStatus09PN.innerHTML="<?php echo $premiseStatusText09PN; ?>",premiseStatus09PN.style.color="<?php echo $premiseStatusColor09PN; ?>";let premiseStatus10PN=document.getElementsByClassName("premiseStatus10PN")[0];premiseStatus10PN.innerHTML="<?php echo $premiseStatusText10PN; ?>",premiseStatus10PN.style.color="<?php echo $premiseStatusColor10PN; ?>";let premiseStatus11PN=document.getElementsByClassName("premiseStatus11PN")[0];premiseStatus11PN.innerHTML="<?php echo $premiseStatusText11PN; ?>",premiseStatus11PN.style.color="<?php echo $premiseStatusColor11PN; ?>";let premiseStatus12PN=document.getElementsByClassName("premiseStatus12PN")[0];premiseStatus12PN.innerHTML="<?php echo $premiseStatusText12PN; ?>",premiseStatus12PN.style.color="<?php echo $premiseStatusColor12PN; ?>";let premiseStatus13PN=document.getElementsByClassName("premiseStatus13PN")[0];premiseStatus13PN.innerHTML="<?php echo $premiseStatusText13PN; ?>",premiseStatus13PN.style.color="<?php echo $premiseStatusColor13PN; ?>";let premiseStatus14PN=document.getElementsByClassName("premiseStatus14PN")[0];premiseStatus14PN.innerHTML="<?php echo $premiseStatusText14PN; ?>",premiseStatus14PN.style.color="<?php echo $premiseStatusColor14PN; ?>";let premiseStatus15PN=document.getElementsByClassName("premiseStatus15PN")[0];premiseStatus15PN.innerHTML="<?php echo $premiseStatusText15PN; ?>",premiseStatus15PN.style.color="<?php echo $premiseStatusColor15PN; ?>";let premiseStatus16PN=document.getElementsByClassName("premiseStatus16PN")[0];premiseStatus16PN.innerHTML="<?php echo $premiseStatusText16PN; ?>",premiseStatus16PN.style.color="<?php echo $premiseStatusColor16PN; ?>";let premiseStatus17PN=document.getElementsByClassName("premiseStatus17PN")[0];premiseStatus17PN.innerHTML="<?php echo $premiseStatusText17PN; ?>",premiseStatus17PN.style.color="<?php echo $premiseStatusColor17PN; ?>";let premiseStatus18PN=document.getElementsByClassName("premiseStatus18PN")[0];premiseStatus18PN.innerHTML="<?php echo $premiseStatusText18PN; ?>",premiseStatus18PN.style.color="<?php echo $premiseStatusColor18PN; ?>";let premiseStatus19PN=document.getElementsByClassName("premiseStatus19PN")[0];premiseStatus19PN.innerHTML="<?php echo $premiseStatusText19PN; ?>",premiseStatus19PN.style.color="<?php echo $premiseStatusColor19PN; ?>";let premiseStatus20PN=document.getElementsByClassName("premiseStatus20PN")[0];premiseStatus20PN.innerHTML="<?php echo $premiseStatusText20PN; ?>",premiseStatus20PN.style.color="<?php echo $premiseStatusColor20PN; ?>";let premiseStatus21PN=document.getElementsByClassName("premiseStatus21PN")[0];premiseStatus21PN.innerHTML="<?php echo $premiseStatusText21PN; ?>",premiseStatus21PN.style.color="<?php echo $premiseStatusColor21PN; ?>";let premiseStatus22PN=document.getElementsByClassName("premiseStatus22PN")[0];premiseStatus22PN.innerHTML="<?php echo $premiseStatusText22PN; ?>",premiseStatus22PN.style.color="<?php echo $premiseStatusColor22PN; ?>";let premiseStatus23PN=document.getElementsByClassName("premiseStatus23PN")[0];premiseStatus23PN.innerHTML="<?php echo $premiseStatusText23PN; ?>",premiseStatus23PN.style.color="<?php echo $premiseStatusColor23PN; ?>";let premiseStatus24PN=document.getElementsByClassName("premiseStatus24PN")[0];premiseStatus24PN.innerHTML="<?php echo $premiseStatusText24PN; ?>",premiseStatus24PN.style.color="<?php echo $premiseStatusColor24PN; ?>";let premiseStatus25PN=document.getElementsByClassName("premiseStatus25PN")[0];premiseStatus25PN.innerHTML="<?php echo $premiseStatusText25PN; ?>",premiseStatus25PN.style.color="<?php echo $premiseStatusColor25PN; ?>";let premiseStatus26PN=document.getElementsByClassName("premiseStatus26PN")[0];premiseStatus26PN.innerHTML="<?php echo $premiseStatusText26PN; ?>",premiseStatus26PN.style.color="<?php echo $premiseStatusColor26PN; ?>";let premiseStatus27PN=document.getElementsByClassName("premiseStatus27PN")[0];premiseStatus27PN.innerHTML="<?php echo $premiseStatusText27PN; ?>",premiseStatus27PN.style.color="<?php echo $premiseStatusColor27PN; ?>";let premiseStatus28PN=document.getElementsByClassName("premiseStatus28PN")[0];premiseStatus28PN.innerHTML="<?php echo $premiseStatusText28PN; ?>",premiseStatus28PN.style.color="<?php echo $premiseStatusColor28PN; ?>";let premiseStatus29PN=document.getElementsByClassName("premiseStatus29PN")[0];premiseStatus29PN.innerHTML="<?php echo $premiseStatusText29PN; ?>",premiseStatus29PN.style.color="<?php echo $premiseStatusColor29PN; ?>";let premiseStatus30PN=document.getElementsByClassName("premiseStatus30PN")[0];premiseStatus30PN.innerHTML="<?php echo $premiseStatusText30PN; ?>",premiseStatus30PN.style.color="<?php echo $premiseStatusColor30PN; ?>";let premiseStatus31PN=document.getElementsByClassName("premiseStatus31PN")[0];premiseStatus31PN.innerHTML="<?php echo $premiseStatusText31PN; ?>",premiseStatus31PN.style.color="<?php echo $premiseStatusColor31PN; ?>";let premiseStatus32PN=document.getElementsByClassName("premiseStatus32PN")[0];premiseStatus32PN.innerHTML="<?php echo $premiseStatusText32PN; ?>",premiseStatus32PN.style.color="<?php echo $premiseStatusColor32PN; ?>";let premiseStatus33PN=document.getElementsByClassName("premiseStatus33PN")[0];premiseStatus33PN.innerHTML="<?php echo $premiseStatusText33PN; ?>",premiseStatus33PN.style.color="<?php echo $premiseStatusColor33PN; ?>";let premiseStatus34PN=document.getElementsByClassName("premiseStatus34PN")[0];premiseStatus34PN.innerHTML="<?php echo $premiseStatusText34PN; ?>",premiseStatus34PN.style.color="<?php echo $premiseStatusColor34PN; ?>";let premiseStatus36PN=document.getElementsByClassName("premiseStatus36PN")[0];premiseStatus36PN.innerHTML="<?php echo $premiseStatusText36PN; ?>",premiseStatus36PN.style.color="<?php echo $premiseStatusColor36PN; ?>";let premiseStatus37PN=document.getElementsByClassName("premiseStatus37PN")[0];premiseStatus37PN.innerHTML="<?php echo $premiseStatusText37PN; ?>",premiseStatus37PN.style.color="<?php echo $premiseStatusColor37PN; ?>";let premiseStatus38PN=document.getElementsByClassName("premiseStatus38PN")[0];premiseStatus38PN.innerHTML="<?php echo $premiseStatusText38PN; ?>",premiseStatus38PN.style.color="<?php echo $premiseStatusColor38PN; ?>";let premiseStatus39PN=document.getElementsByClassName("premiseStatus39PN")[0];premiseStatus39PN.innerHTML="<?php echo $premiseStatusText39PN; ?>",premiseStatus39PN.style.color="<?php echo $premiseStatusColor39PN; ?>";let premiseStatus42PN=document.getElementsByClassName("premiseStatus42PN")[0];premiseStatus42PN.innerHTML="<?php echo $premiseStatusText42PN; ?>",premiseStatus42PN.style.color="<?php echo $premiseStatusColor42PN; ?>";let premiseStatus45PN=document.getElementsByClassName("premiseStatus45PN")[0];premiseStatus45PN.innerHTML="<?php echo $premiseStatusText45PN; ?>",premiseStatus45PN.style.color="<?php echo $premiseStatusColor45PN; ?>";let premiseStatus46PN=document.getElementsByClassName("premiseStatus46PN")[0];premiseStatus46PN.innerHTML="<?php echo $premiseStatusText46PN; ?>",premiseStatus46PN.style.color="<?php echo $premiseStatusColor46PN; ?>";let premiseStatus47PN=document.getElementsByClassName("premiseStatus47PN")[0];premiseStatus47PN.innerHTML="<?php echo $premiseStatusText47PN; ?>",premiseStatus47PN.style.color="<?php echo $premiseStatusColor47PN; ?>";let premiseStatus48PN=document.getElementsByClassName("premiseStatus48PN")[0];premiseStatus48PN.innerHTML="<?php echo $premiseStatusText48PN; ?>",premiseStatus48PN.style.color="<?php echo $premiseStatusColor48PN; ?>";let premiseStatus61PN=document.getElementsByClassName("premiseStatus61PN")[0];premiseStatus61PN.innerHTML="<?php echo $premiseStatusText61PN; ?>",premiseStatus61PN.style.color="<?php echo $premiseStatusColor61PN; ?>";let popupContentImageMap=document.getElementsByClassName("popupContentImageMap")[0],map=document.getElementsByClassName("map")[0];map.addEventListener("click",()=>{popupImageMap.style.display="block",popupContentImageMap.src="image/above-ground-parking-lot-map.webp"}),closePopupImageMap.addEventListener("click",()=>{}),window.addEventListener("click",e=>{e.target===popupImageMap&&(popupImageMap.style.display="none")});
  </script>

</body>
</html>

