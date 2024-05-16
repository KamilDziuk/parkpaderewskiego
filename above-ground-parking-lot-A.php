

<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="icon" type="image/jpg" href="image/icone.jpg">
<link rel="stylesheet" type="text/css" href="css/undergroundA.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="js/script.js" defer></script>
  <title>Parkingi naziemne A</title>
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
  <span class="close" id="closePopup"></span>
  
  </div>
  </div>
<!-- navbar end -->

<header class="contact">
    <!-- top and middle of the page start -->
    <div class="centerLifestyle">
      <p class="titleTextGallery">Parkingi naziemne <br><br> Budynek A</p>
  
    </header>
  <img class = "map" src             = "image/basement-underground-garages-A.webp">
  <div id    = "popupImageMap" class = "popupImageMap">

    <img  class = "popupContentImageMap"></img>
    <span id    = "closePopupImageMap"></span>
  </div>
  <br>
  <br>
  <br>
  <div id = "columns">
    <figure>
    <figcaption class="storageRooms">Miejsce postojowe naziemne: 47</figcaption>
      <figcaption>
        <figcaption>35: </figcaption>
        <figcaption class = "premiseStatus35PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>40: </figcaption>
        <figcaption class = "premiseStatus40PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>41: </figcaption>
        <figcaption class = "premiseStatus41PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>43: </figcaption>
        <figcaption class = "premiseStatus43PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>44: </figcaption>
        <figcaption class = "premiseStatus44PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>49: </figcaption>
        <figcaption class = "premiseStatus49PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>50: </figcaption>
        <figcaption class = "premiseStatus50PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>51: </figcaption>
        <figcaption class = "premiseStatus51PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>52: </figcaption>
        <figcaption class = "premiseStatus52PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>53: </figcaption>
        <figcaption class = "premiseStatus53PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>54: </figcaption>
        <figcaption class = "premiseStatus54PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>55: </figcaption>
        <figcaption class = "premiseStatus55PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>56: </figcaption>
        <figcaption class = "premiseStatus56PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>57: </figcaption>
        <figcaption class = "premiseStatus57PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>58: </figcaption>
        <figcaption class = "premiseStatus58PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>59: </figcaption>
        <figcaption class = "premiseStatus59PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>60: </figcaption>
        <figcaption class = "premiseStatus60PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>62: </figcaption>
        <figcaption class = "premiseStatus62PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>63: </figcaption>
        <figcaption class = "premiseStatus63PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>64: </figcaption>
        <figcaption class = "premiseStatus64PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>65: </figcaption>
        <figcaption class = "premiseStatus65PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>66: </figcaption>
        <figcaption class = "premiseStatus66PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>67: </figcaption>
        <figcaption class = "premiseStatus67PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>68: </figcaption>
        <figcaption class = "premiseStatus68PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>69: </figcaption>
        <figcaption class = "premiseStatus69PNA"></figcaption>
      </figcaption>
    </figure>
    <div id = "columns1">
    <figure>

    <figcaption>
        <figcaption>70: </figcaption>
        <figcaption class = "premiseStatus70PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>71: </figcaption>
        <figcaption class = "premiseStatus71PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>72: </figcaption>
        <figcaption class = "premiseStatus72PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>73: </figcaption>
        <figcaption class = "premiseStatus73PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>74: </figcaption>
        <figcaption class = "premiseStatus74PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>75: </figcaption>
        <figcaption class = "premiseStatus75PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>76: </figcaption>
        <figcaption class = "premiseStatus76PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>77: </figcaption>
        <figcaption class = "premiseStatus77PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>78: </figcaption>
        <figcaption class = "premiseStatus78PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>79: </figcaption>
        <figcaption class = "premiseStatus79PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>80: </figcaption>
        <figcaption class = "premiseStatus80PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>81: </figcaption>
        <figcaption class = "premiseStatus81PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>82: </figcaption>
        <figcaption class = "premiseStatus82PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>83: </figcaption>
        <figcaption class = "premiseStatus83PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>84: </figcaption>
        <figcaption class = "premiseStatus84PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>85: </figcaption>
        <figcaption class = "premiseStatus85PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>86: </figcaption>
        <figcaption class = "premiseStatus86PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>87: </figcaption>
        <figcaption class = "premiseStatus87PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>88: </figcaption>
        <figcaption class = "premiseStatus88PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>89: </figcaption>
        <figcaption class = "premiseStatus89PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>90: </figcaption>
        <figcaption class = "premiseStatus90PNA"></figcaption>
      </figcaption>
      <figcaption>
        <figcaption>91: </figcaption>
        <figcaption class = "premiseStatus91PNA"></figcaption>
      </figcaption>
    </figure>
  </div>
  </div>
  <br> <br> <br> <br>
<!-- footer start -->

<footer>
<div class="locationsAll">
<div class="locationsLeft"> 
<img src="image/dhd.webp"
class="footer_logo">  <h5>DIAMOND HILL DEVELOPMENT jest ogólnopolskim<br>deweloperem segmentu premium. Tworzymy<br>nieruchomości cechujące się najwyższą jakością,<br> innowacyjnymi technologiami, funkcjonalnością i<br>ponadczasowym designem.</h5>
<img src="image/pzfd.webp" class="footer_logo" id = "footer_logoPzdf">
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
   
 // Above-ground parking space condition start
    if ($idValue === "2841"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText35PNA  = "Sprzedane";
      $premiseStatusColor35PNA = "red";
    } else if ($idValue === "2841"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText35PNA  = "Zarezerwowane";
      $premiseStatusColor35PNA = "#e6b800";
    } else if ($idValue === "2841"  && $statusNameValue === "Dostępne") {
      $premiseStatusText35PNA  = "Dostępne";
      $premiseStatusColor35PNA = "darkgreen";
    } 

   else if ($idValue === "2842"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText40PNA  = "Sprzedane";
      $premiseStatusColor40PNA = "red";
    } else if ($idValue === "2842"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText40PNA  = "Zarezerwowane";
      $premiseStatusColor40PNA = "#e6b800";
    } else if ($idValue === "2842"  && $statusNameValue === "Dostępne") {
      $premiseStatusText40PNA  = "Dostępne";
      $premiseStatusColor40PNA = "darkgreen";
    } 

    else if ($idValue === "2843"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText41PNA  = "Sprzedane";
      $premiseStatusColor41PNA = "red";
    } else if ($idValue === "2843"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText41PNA  = "Zarezerwowane";
      $premiseStatusColor41PNA = "#e6b800";
    } else if ($idValue === "2843"  && $statusNameValue === "Dostępne") {
      $premiseStatusText41PNA  = "Dostępne";
      $premiseStatusColor41PNA = "darkgreen";
    } 


    else if ($idValue === "2844"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText43PNA  = "Sprzedane";
      $premiseStatusColor43PNA = "red";
    } else if ($idValue === "2844"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText43PNA  = "Zarezerwowane";
      $premiseStatusColor43PNA = "#e6b800";
    } else if ($idValue === "2844"  && $statusNameValue === "Dostępne") {
      $premiseStatusText43PNA  = "Dostępne";
      $premiseStatusColor43PNA = "darkgreen";
    } 


    else if ($idValue === "2845"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText44PNA  = "Sprzedane";
      $premiseStatusColor44PNA = "red";
    } else if ($idValue === "2845"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText44PNA  = "Zarezerwowane";
      $premiseStatusColor44PNA = "#e6b800";
    } else if ($idValue === "2845"  && $statusNameValue === "Dostępne") {
      $premiseStatusText44PNA  = "Dostępne";
      $premiseStatusColor44PNA = "darkgreen";
    } 



    else if ($idValue === "2846"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText49PNA  = "Sprzedane";
      $premiseStatusColor49PNA = "red";
    } else if ($idValue === "2846"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText49PNA  = "Zarezerwowane";
      $premiseStatusColor49PNA = "#e6b800";
    } else if ($idValue === "2846"  && $statusNameValue === "Dostępne") {
      $premiseStatusText49PNA  = "Dostępne";
      $premiseStatusColor49PNA = "darkgreen";
    } 



    else if ($idValue === "2847"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText50PNA  = "Sprzedane";
      $premiseStatusColor50PNA = "red";
    } else if ($idValue === "2847"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText50PNA  = "Zarezerwowane";
      $premiseStatusColor50PNA = "#e6b800";
    } else if ($idValue === "2847"  && $statusNameValue === "Dostępne") {
      $premiseStatusText50PNA  = "Dostępne";
      $premiseStatusColor50PNA = "darkgreen";
    } 



    else if ($idValue === "2848"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText51PNA  = "Sprzedane";
      $premiseStatusColor51PNA = "red";
    } else if ($idValue === "2848"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText51PNA  = "Zarezerwowane";
      $premiseStatusColor51PNA = "#e6b800";
    } else if ($idValue === "2848"  && $statusNameValue === "Dostępne") {
      $premiseStatusText51PNA  = "Dostępne";
      $premiseStatusColor51PNA = "darkgreen";
    } 



    else if ($idValue === "2849"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText52PNA  = "Sprzedane";
      $premiseStatusColor52PNA = "red";
    } else if ($idValue === "2849"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText52PNA  = "Zarezerwowane";
      $premiseStatusColor52PNA = "#e6b800";
    } else if ($idValue === "2849"  && $statusNameValue === "Dostępne") {
      $premiseStatusText52PNA  = "Dostępne";
      $premiseStatusColor52PNA = "darkgreen";
    } 


    else if ($idValue === "2850"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText53PNA  = "Sprzedane";
      $premiseStatusColor53PNA = "red";
    } else if ($idValue === "2850"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText53PNA  = "Zarezerwowane";
      $premiseStatusColor53PNA = "#e6b800";
    } else if ($idValue === "2850"  && $statusNameValue === "Dostępne") {
      $premiseStatusText53PNA  = "Dostępne";
      $premiseStatusColor53PNA = "darkgreen";
    } 



    else if ($idValue === "2851"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText54PNA  = "Sprzedane";
      $premiseStatusColor54PNA = "red";
    } else if ($idValue === "2851"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText54PNA  = "Zarezerwowane";
      $premiseStatusColor54PNA = "#e6b800";
    } else if ($idValue === "2851"  && $statusNameValue === "Dostępne") {
      $premiseStatusText54PNA  = "Dostępne";
      $premiseStatusColor54PNA = "darkgreen";
    } 




    else if ($idValue === "2852"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText55PNA  = "Sprzedane";
      $premiseStatusColor55PNA = "red";
    } else if ($idValue === "2852"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText55PNA  = "Zarezerwowane";
      $premiseStatusColor55PNA = "#e6b800";
    } else if ($idValue === "2852"  && $statusNameValue === "Dostępne") {
      $premiseStatusText55PNA  = "Dostępne";
      $premiseStatusColor55PNA = "darkgreen";
    } 



    else if ($idValue === "2853"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText56PNA  = "Sprzedane";
      $premiseStatusColor56PNA = "red";
    } else if ($idValue === "2853"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText56PNA  = "Zarezerwowane";
      $premiseStatusColor56PNA = "#e6b800";
    } else if ($idValue === "2853"  && $statusNameValue === "Dostępne") {
      $premiseStatusText56PNA  = "Dostępne";
      $premiseStatusColor56PNA = "darkgreen";
    } 



    else if ($idValue === "2854"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText57PNA  = "Sprzedane";
      $premiseStatusColor57PNA = "red";
    } else if ($idValue === "2854"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText57PNA  = "Zarezerwowane";
      $premiseStatusColor57PNA = "#e6b800";
    } else if ($idValue === "2854"  && $statusNameValue === "Dostępne") {
      $premiseStatusText57PNA  = "Dostępne";
      $premiseStatusColor57PNA = "darkgreen";
    } 



    else if ($idValue === "2855"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText58PNA  = "Sprzedane";
      $premiseStatusColor58PNA = "red";
    } else if ($idValue === "2855"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText58PNA  = "Zarezerwowane";
      $premiseStatusColor58PNA = "#e6b800";
    } else if ($idValue === "2855"  && $statusNameValue === "Dostępne") {
      $premiseStatusText58PNA  = "Dostępne";
      $premiseStatusColor58PNA = "darkgreen";
    } 



    else if ($idValue === "2856"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText59PNA  = "Sprzedane";
      $premiseStatusColor59PNA = "red";
    } else if ($idValue === "2856"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText59PNA  = "Zarezerwowane";
      $premiseStatusColor59PNA = "#e6b800";
    } else if ($idValue === "2856"  && $statusNameValue === "Dostępne") {
      $premiseStatusText59PNA  = "Dostępne";
      $premiseStatusColor59PNA = "darkgreen";
    } 




    else if ($idValue === "2857"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText60PNA  = "Sprzedane";
      $premiseStatusColor60PNA = "red";
    } else if ($idValue === "2857"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText60PNA  = "Zarezerwowane";
      $premiseStatusColor60PNA = "#e6b800";
    } else if ($idValue === "2857"  && $statusNameValue === "Dostępne") {
      $premiseStatusText60PNA  = "Dostępne";
      $premiseStatusColor60PNA = "darkgreen";
    } 




    else if ($idValue === "2858"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText62PNA  = "Sprzedane";
      $premiseStatusColor62PNA = "red";
    } else if ($idValue === "2858"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText62PNA  = "Zarezerwowane";
      $premiseStatusColor62PNA = "#e6b800";
    } else if ($idValue === "2858"  && $statusNameValue === "Dostępne") {
      $premiseStatusText62PNA  = "Dostępne";
      $premiseStatusColor62PNA = "darkgreen";
    } 



    else if ($idValue === "2859"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText63PNA  = "Sprzedane";
      $premiseStatusColor63PNA = "red";
    } else if ($idValue === "2859"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText63PNA  = "Zarezerwowane";
      $premiseStatusColor63PNA = "#e6b800";
    } else if ($idValue === "2859"  && $statusNameValue === "Dostępne") {
      $premiseStatusText63PNA  = "Dostępne";
      $premiseStatusColor63PNA = "darkgreen";
    } 



    else if ($idValue === "2860"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText64PNA  = "Sprzedane";
      $premiseStatusColor64PNA = "red";
    } else if ($idValue === "2860"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText64PNA  = "Zarezerwowane";
      $premiseStatusColor64PNA = "#e6b800";
    } else if ($idValue === "2860"  && $statusNameValue === "Dostępne") {
      $premiseStatusText64PNA  = "Dostępne";
      $premiseStatusColor64PNA = "darkgreen";
    } 



    else if ($idValue === "2861"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText65PNA  = "Sprzedane";
      $premiseStatusColor65PNA = "red";
    } else if ($idValue === "2861"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText65PNA  = "Zarezerwowane";
      $premiseStatusColor65PNA = "#e6b800";
    } else if ($idValue === "2861"  && $statusNameValue === "Dostępne") {
      $premiseStatusText65PNA  = "Dostępne";
      $premiseStatusColor65PNA = "darkgreen";
    } 




    else if ($idValue === "2862"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText66PNA  = "Sprzedane";
      $premiseStatusColor66PNA = "red";
    } else if ($idValue === "2862"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText66PNA  = "Zarezerwowane";
      $premiseStatusColor66PNA = "#e6b800";
    } else if ($idValue === "2862"  && $statusNameValue === "Dostępne") {
      $premiseStatusText66PNA  = "Dostępne";
      $premiseStatusColor66PNA = "darkgreen";
    } 




    else if ($idValue === "2863"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText67PNA  = "Sprzedane";
      $premiseStatusColor67PNA = "red";
    } else if ($idValue === "2863"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText67PNA  = "Zarezerwowane";
      $premiseStatusColor67PNA = "#e6b800";
    } else if ($idValue === "2863"  && $statusNameValue === "Dostępne") {
      $premiseStatusText67PNA  = "Dostępne";
      $premiseStatusColor67PNA = "darkgreen";
    } 



    else if ($idValue === "2864"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText68PNA  = "Sprzedane";
      $premiseStatusColor68PNA = "red";
    } else if ($idValue === "2864"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText68PNA  = "Zarezerwowane";
      $premiseStatusColor68PNA = "#e6b800";
    } else if ($idValue === "2864"  && $statusNameValue === "Dostępne") {
      $premiseStatusText68PNA  = "Dostępne";
      $premiseStatusColor68PNA = "darkgreen";
    } 



    else if ($idValue === "2865"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText69PNA  = "Sprzedane";
      $premiseStatusColor69PNA = "red";
    } else if ($idValue === "2865"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText69PNA  = "Zarezerwowane";
      $premiseStatusColor69PNA = "#e6b800";
    } else if ($idValue === "2865"  && $statusNameValue === "Dostępne") {
      $premiseStatusText69PNA  = "Dostępne";
      $premiseStatusColor69PNA = "darkgreen";
    } 



    else if ($idValue === "2866"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText70PNA  = "Sprzedane";
      $premiseStatusColor70PNA = "red";
    } else if ($idValue === "2866"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText70PNA  = "Zarezerwowane";
      $premiseStatusColor70PNA = "#e6b800";
    } else if ($idValue === "2866"  && $statusNameValue === "Dostępne") {
      $premiseStatusText70PNA  = "Dostępne";
      $premiseStatusColor70PNA = "darkgreen";
    } 


    else if ($idValue === "2867"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText71PNA  = "Sprzedane";
      $premiseStatusColor71PNA = "red";
    } else if ($idValue === "2867"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText71PNA  = "Zarezerwowane";
      $premiseStatusColor71PNA = "#e6b800";
    } else if ($idValue === "2867"  && $statusNameValue === "Dostępne") {
      $premiseStatusText71PNA  = "Dostępne";
      $premiseStatusColor71PNA = "darkgreen";
    } 



    else if ($idValue === "2868"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText72PNA  = "Sprzedane";
      $premiseStatusColor72PNA = "red";
    } else if ($idValue === "2868"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText72PNA  = "Zarezerwowane";
      $premiseStatusColor72PNA = "#e6b800";
    } else if ($idValue === "2868"  && $statusNameValue === "Dostępne") {
      $premiseStatusText72PNA  = "Dostępne";
      $premiseStatusColor72PNA = "darkgreen";
    } 




    else if ($idValue === "2869"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText73PNA  = "Sprzedane";
      $premiseStatusColor73PNA = "red";
    } else if ($idValue === "2869"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText73PNA  = "Zarezerwowane";
      $premiseStatusColor73PNA = "#e6b800";
    } else if ($idValue === "2869"  && $statusNameValue === "Dostępne") {
      $premiseStatusText73PNA  = "Dostępne";
      $premiseStatusColor73PNA = "darkgreen";
    } 




    else if ($idValue === "2870"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText74PNA  = "Sprzedane";
      $premiseStatusColor74PNA = "red";
    } else if ($idValue === "2870"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText74PNA  = "Zarezerwowane";
      $premiseStatusColor74PNA = "#e6b800";
    } else if ($idValue === "2870"  && $statusNameValue === "Dostępne") {
      $premiseStatusText74PNA  = "Dostępne";
      $premiseStatusColor74PNA = "darkgreen";
    } 




    else if ($idValue === "2871"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText75PNA  = "Sprzedane";
      $premiseStatusColor75PNA = "red";
    } else if ($idValue === "2871"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText75PNA  = "Zarezerwowane";
      $premiseStatusColor75PNA = "#e6b800";
    } else if ($idValue === "2871"  && $statusNameValue === "Dostępne") {
      $premiseStatusText75PNA  = "Dostępne";
      $premiseStatusColor75PNA = "darkgreen";
    } 




    else if ($idValue === "2872"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText76PNA  = "Sprzedane";
      $premiseStatusColor76PNA = "red";
    } else if ($idValue === "2872"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText76PNA  = "Zarezerwowane";
      $premiseStatusColor76PNA = "#e6b800";
    } else if ($idValue === "2872"  && $statusNameValue === "Dostępne") {
      $premiseStatusText76PNA  = "Dostępne";
      $premiseStatusColor76PNA = "darkgreen";
    } 




    else if ($idValue === "2873"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText77PNA  = "Sprzedane";
      $premiseStatusColor77PNA = "red";
    } else if ($idValue === "2873"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText77PNA  = "Zarezerwowane";
      $premiseStatusColor77PNA = "#e6b800";
    } else if ($idValue === "2873"  && $statusNameValue === "Dostępne") {
      $premiseStatusText77PNA  = "Dostępne";
      $premiseStatusColor77PNA = "darkgreen";
    } 




    else if ($idValue === "2874"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText78PNA  = "Sprzedane";
      $premiseStatusColor78PNA = "red";
    } else if ($idValue === "2874"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText78PNA  = "Zarezerwowane";
      $premiseStatusColor78PNA = "#e6b800";
    } else if ($idValue === "2874"  && $statusNameValue === "Dostępne") {
      $premiseStatusText78PNA  = "Dostępne";
      $premiseStatusColor78PNA = "darkgreen";
    } 




    else if ($idValue === "2875"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText79PNA  = "Sprzedane";
      $premiseStatusColor79PNA = "red";
    } else if ($idValue === "2875"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText79PNA  = "Zarezerwowane";
      $premiseStatusColor79PNA = "#e6b800";
    } else if ($idValue === "2875"  && $statusNameValue === "Dostępne") {
      $premiseStatusText79PNA  = "Dostępne";
      $premiseStatusColor79PNA = "darkgreen";
    } 




    else if ($idValue === "2876"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText80PNA  = "Sprzedane";
      $premiseStatusColor80PNA = "red";
    } else if ($idValue === "2876"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText80PNA  = "Zarezerwowane";
      $premiseStatusColor80PNA = "#e6b800";
    } else if ($idValue === "2876"  && $statusNameValue === "Dostępne") {
      $premiseStatusText80PNA  = "Dostępne";
      $premiseStatusColor80PNA = "darkgreen";
    } 




    else if ($idValue === "2877"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText81PNA  = "Sprzedane";
      $premiseStatusColor81PNA = "red";
    } else if ($idValue === "2877"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText81PNA  = "Zarezerwowane";
      $premiseStatusColor81PNA = "#e6b800";
    } else if ($idValue === "2877"  && $statusNameValue === "Dostępne") {
      $premiseStatusText81PNA  = "Dostępne";
      $premiseStatusColor81PNA = "darkgreen";
    } 




    else if ($idValue === "2878"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText82PNA  = "Sprzedane";
      $premiseStatusColor82PNA = "red";
    } else if ($idValue === "2878"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText82PNA  = "Zarezerwowane";
      $premiseStatusColor82PNA = "#e6b800";
    } else if ($idValue === "2878"  && $statusNameValue === "Dostępne") {
      $premiseStatusText82PNA  = "Dostępne";
      $premiseStatusColor82PNA = "darkgreen";
    } 




    else if ($idValue === "2879"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText83PNA  = "Sprzedane";
      $premiseStatusColor83PNA = "red";
    } else if ($idValue === "2879"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText83PNA  = "Zarezerwowane";
      $premiseStatusColor83PNA = "#e6b800";
    } else if ($idValue === "2879"  && $statusNameValue === "Dostępne") {
      $premiseStatusText83PNA  = "Dostępne";
      $premiseStatusColor83PNA = "darkgreen";
    } 





    else if ($idValue === "2880"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText84PNA  = "Sprzedane";
      $premiseStatusColor84PNA = "red";
    } else if ($idValue === "2880"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText84PNA  = "Zarezerwowane";
      $premiseStatusColor84PNA = "#e6b800";
    } else if ($idValue === "2880"  && $statusNameValue === "Dostępne") {
      $premiseStatusText84PNA  = "Dostępne";
      $premiseStatusColor84PNA = "darkgreen";
    } 




    else if ($idValue === "2881"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText85PNA  = "Sprzedane";
      $premiseStatusColor85PNA = "red";
    } else if ($idValue === "2881"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText85PNA  = "Zarezerwowane";
      $premiseStatusColor85PNA = "#e6b800";
    } else if ($idValue === "2881"  && $statusNameValue === "Dostępne") {
      $premiseStatusText85PNA  = "Dostępne";
      $premiseStatusColor85PNA = "darkgreen";
    } 




    else if ($idValue === "2882"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText86PNA  = "Sprzedane";
      $premiseStatusColor86PNA = "red";
    } else if ($idValue === "2882"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText86PNA  = "Zarezerwowane";
      $premiseStatusColor86PNA = "#e6b800";
    } else if ($idValue === "2882"  && $statusNameValue === "Dostępne") {
      $premiseStatusText86PNA  = "Dostępne";
      $premiseStatusColor86PNA = "darkgreen";
    } 




    else if ($idValue === "2883"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText87PNA  = "Sprzedane";
      $premiseStatusColor87PNA = "red";
    } else if ($idValue === "2883"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText87PNA  = "Zarezerwowane";
      $premiseStatusColor87PNA = "#e6b800";
    } else if ($idValue === "2883"  && $statusNameValue === "Dostępne") {
      $premiseStatusText87PNA  = "Dostępne";
      $premiseStatusColor87PNA = "darkgreen";
    } 




    else if ($idValue === "2884"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText88PNA  = "Sprzedane";
      $premiseStatusColor88PNA = "red";
    } else if ($idValue === "2884"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText88PNA  = "Zarezerwowane";
      $premiseStatusColor88PNA = "#e6b800";
    } else if ($idValue === "2884"  && $statusNameValue === "Dostępne") {
      $premiseStatusText88PNA  = "Dostępne";
      $premiseStatusColor88PNA = "darkgreen";
    } 





    else if ($idValue === "2885"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText89PNA  = "Sprzedane";
      $premiseStatusColor89PNA = "red";
    } else if ($idValue === "2885"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText89PNA  = "Zarezerwowane";
      $premiseStatusColor89PNA = "#e6b800";
    } else if ($idValue === "2885"  && $statusNameValue === "Dostępne") {
      $premiseStatusText89PNA  = "Dostępne";
      $premiseStatusColor89PNA = "darkgreen";
    } 




    else if ($idValue === "2886"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText90PNA  = "Sprzedane";
      $premiseStatusColor90PNA = "red";
    } else if ($idValue === "2886"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText90PNA  = "Zarezerwowane";
      $premiseStatusColor90PNA = "#e6b800";
    } else if ($idValue === "2886"  && $statusNameValue === "Dostępne") {
      $premiseStatusText90PNA  = "Dostępne";
      $premiseStatusColor90PNA = "darkgreen";
    } 





    else if ($idValue === "2887"  && ($statusNameValue === "Sprzedany" || $statusNameValue === "Umowa deweloperska" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {

      $premiseStatusText91PNA  = "Sprzedane";
      $premiseStatusColor91PNA = "red";
    } else if ($idValue === "2887"  && ($statusNameValue === "Umowa rezerwacyjna" || $statusNameValue === "Rezerwacja ustna" ||  $statusNameValue === "Umowa przedwstępna" || $statusNameValue === "Akt notarialny" || $statusNameValue === "Odebrano")) {
      $premiseStatusText91PNA  = "Zarezerwowane";
      $premiseStatusColor91PNA = "#e6b800";
    } else if ($idValue === "2887"  && $statusNameValue === "Dostępne") {
      $premiseStatusText91PNA  = "Dostępne";
      $premiseStatusColor91PNA = "darkgreen";
    } 
  // Above-ground parking space condition end
}
  
  ?>
  <script>
  // Above-ground parking space script start
 let premiseStatus35PNA=document.getElementsByClassName("premiseStatus35PNA")[0];
 premiseStatus35PNA.innerHTML="<?php echo $premiseStatusText35PNA; ?>",premiseStatus35PNA.style.color="<?php echo $premiseStatusColor35PNA; ?>";

 let premiseStatus40PNA=document.getElementsByClassName("premiseStatus40PNA")[0];
 premiseStatus40PNA.innerHTML="<?php echo $premiseStatusText40PNA; ?>",premiseStatus40PNA.style.color="<?php echo $premiseStatusColor40PNA; ?>";

 let premiseStatus41PNA=document.getElementsByClassName("premiseStatus41PNA")[0];
 premiseStatus41PNA.innerHTML="<?php echo $premiseStatusText41PNA; ?>",premiseStatus41PNA.style.color="<?php echo $premiseStatusColor41PNA; ?>";


 let premiseStatus43PNA=document.getElementsByClassName("premiseStatus43PNA")[0];
 premiseStatus43PNA.innerHTML="<?php echo $premiseStatusText43PNA; ?>",premiseStatus43PNA.style.color="<?php echo $premiseStatusColor43PNA; ?>";

 let premiseStatus44PNA=document.getElementsByClassName("premiseStatus44PNA")[0];
 premiseStatus44PNA.innerHTML="<?php echo $premiseStatusText44PNA; ?>",premiseStatus44PNA.style.color="<?php echo $premiseStatusColor44PNA; ?>";


 let premiseStatus49PNA=document.getElementsByClassName("premiseStatus49PNA")[0];
 premiseStatus49PNA.innerHTML="<?php echo $premiseStatusText49PNA; ?>",premiseStatus49PNA.style.color="<?php echo $premiseStatusColor49PNA; ?>";


 let premiseStatus50PNA=document.getElementsByClassName("premiseStatus50PNA")[0];
 premiseStatus50PNA.innerHTML="<?php echo $premiseStatusText50PNA; ?>",premiseStatus50PNA.style.color="<?php echo $premiseStatusColor50PNA; ?>";


 let premiseStatus51PNA=document.getElementsByClassName("premiseStatus51PNA")[0];
 premiseStatus51PNA.innerHTML="<?php echo $premiseStatusText51PNA; ?>",premiseStatus51PNA.style.color="<?php echo $premiseStatusColor51PNA; ?>";


 let premiseStatus52PNA=document.getElementsByClassName("premiseStatus52PNA")[0];
 premiseStatus52PNA.innerHTML="<?php echo $premiseStatusText52PNA; ?>",premiseStatus52PNA.style.color="<?php echo $premiseStatusColor52PNA; ?>";


 let premiseStatus53PNA=document.getElementsByClassName("premiseStatus53PNA")[0];
 premiseStatus53PNA.innerHTML="<?php echo $premiseStatusText53PNA; ?>",premiseStatus53PNA.style.color="<?php echo $premiseStatusColor53PNA; ?>";

 let premiseStatus54PNA=document.getElementsByClassName("premiseStatus54PNA")[0];
 premiseStatus54PNA.innerHTML="<?php echo $premiseStatusText54PNA; ?>",premiseStatus54PNA.style.color="<?php echo $premiseStatusColor54PNA; ?>";

 let premiseStatus55PNA=document.getElementsByClassName("premiseStatus55PNA")[0];
 premiseStatus55PNA.innerHTML="<?php echo $premiseStatusText55PNA; ?>",premiseStatus55PNA.style.color="<?php echo $premiseStatusColor55PNA; ?>";
 


 let premiseStatus56PNA=document.getElementsByClassName("premiseStatus56PNA")[0];
 premiseStatus56PNA.innerHTML="<?php echo $premiseStatusText56PNA; ?>",premiseStatus56PNA.style.color="<?php echo $premiseStatusColor56PNA; ?>";


 let premiseStatus57PNA=document.getElementsByClassName("premiseStatus57PNA")[0];
 premiseStatus57PNA.innerHTML="<?php echo $premiseStatusText57PNA; ?>",premiseStatus57PNA.style.color="<?php echo $premiseStatusColor57PNA; ?>";


 let premiseStatus58PNA=document.getElementsByClassName("premiseStatus58PNA")[0];
 premiseStatus58PNA.innerHTML="<?php echo $premiseStatusText58PNA; ?>",premiseStatus58PNA.style.color="<?php echo $premiseStatusColor58PNA; ?>";
 



 let premiseStatus59PNA=document.getElementsByClassName("premiseStatus59PNA")[0];
 premiseStatus59PNA.innerHTML="<?php echo $premiseStatusText59PNA; ?>",premiseStatus59PNA.style.color="<?php echo $premiseStatusColor59PNA; ?>";


 let premiseStatus60PNA=document.getElementsByClassName("premiseStatus60PNA")[0];
 premiseStatus60PNA.innerHTML="<?php echo $premiseStatusText60PNA; ?>",premiseStatus60PNA.style.color="<?php echo $premiseStatusColor60PNA; ?>";



 let premiseStatus62PNA=document.getElementsByClassName("premiseStatus62PNA")[0];
 premiseStatus62PNA.innerHTML="<?php echo $premiseStatusText62PNA; ?>",premiseStatus62PNA.style.color="<?php echo $premiseStatusColor62PNA; ?>";



 let premiseStatus63PNA=document.getElementsByClassName("premiseStatus63PNA")[0];
 premiseStatus63PNA.innerHTML="<?php echo $premiseStatusText63PNA; ?>",premiseStatus63PNA.style.color="<?php echo $premiseStatusColor63PNA; ?>";



 let premiseStatus64PNA=document.getElementsByClassName("premiseStatus64PNA")[0];
 premiseStatus64PNA.innerHTML="<?php echo $premiseStatusText64PNA; ?>",premiseStatus64PNA.style.color="<?php echo $premiseStatusColor64PNA; ?>";






 let premiseStatus65PNA=document.getElementsByClassName("premiseStatus65PNA")[0];
 premiseStatus65PNA.innerHTML="<?php echo $premiseStatusText65PNA; ?>",premiseStatus65PNA.style.color="<?php echo $premiseStatusColor65PNA; ?>";



 let premiseStatus66PNA=document.getElementsByClassName("premiseStatus66PNA")[0];
 premiseStatus66PNA.innerHTML="<?php echo $premiseStatusText66PNA; ?>",premiseStatus66PNA.style.color="<?php echo $premiseStatusColor66PNA; ?>";




 let premiseStatus67PNA=document.getElementsByClassName("premiseStatus67PNA")[0];
 premiseStatus67PNA.innerHTML="<?php echo $premiseStatusText67PNA; ?>",premiseStatus67PNA.style.color="<?php echo $premiseStatusColor67PNA; ?>";



 let premiseStatus68PNA=document.getElementsByClassName("premiseStatus68PNA")[0];
 premiseStatus68PNA.innerHTML="<?php echo $premiseStatusText68PNA; ?>",premiseStatus68PNA.style.color="<?php echo $premiseStatusColor68PNA; ?>";



 let premiseStatus69PNA=document.getElementsByClassName("premiseStatus69PNA")[0];
 premiseStatus69PNA.innerHTML="<?php echo $premiseStatusText69PNA; ?>",premiseStatus69PNA.style.color="<?php echo $premiseStatusColor69PNA; ?>";



 let premiseStatus70PNA=document.getElementsByClassName("premiseStatus70PNA")[0];
 premiseStatus70PNA.innerHTML="<?php echo $premiseStatusText70PNA; ?>",premiseStatus70PNA.style.color="<?php echo $premiseStatusColor70PNA; ?>";



 let premiseStatus71PNA=document.getElementsByClassName("premiseStatus71PNA")[0];
 premiseStatus71PNA.innerHTML="<?php echo $premiseStatusText71PNA; ?>",premiseStatus71PNA.style.color="<?php echo $premiseStatusColor71PNA; ?>";



 let premiseStatus72PNA=document.getElementsByClassName("premiseStatus72PNA")[0];
 premiseStatus72PNA.innerHTML="<?php echo $premiseStatusText72PNA; ?>",premiseStatus72PNA.style.color="<?php echo $premiseStatusColor72PNA; ?>";
 
 



 let premiseStatus73PNA=document.getElementsByClassName("premiseStatus73PNA")[0];
 premiseStatus73PNA.innerHTML="<?php echo $premiseStatusText73PNA; ?>",premiseStatus73PNA.style.color="<?php echo $premiseStatusColor73PNA; ?>";


 let premiseStatus74PNA=document.getElementsByClassName("premiseStatus74PNA")[0];
 premiseStatus74PNA.innerHTML="<?php echo $premiseStatusText74PNA; ?>",premiseStatus74PNA.style.color="<?php echo $premiseStatusColor74PNA; ?>";

 let premiseStatus75PNA=document.getElementsByClassName("premiseStatus75PNA")[0];
 premiseStatus75PNA.innerHTML="<?php echo $premiseStatusText75PNA; ?>",premiseStatus75PNA.style.color="<?php echo $premiseStatusColor75PNA; ?>";



 


 let premiseStatus76PNA=document.getElementsByClassName("premiseStatus76PNA")[0];
 premiseStatus76PNA.innerHTML="<?php echo $premiseStatusText76PNA; ?>",premiseStatus76PNA.style.color="<?php echo $premiseStatusColor76PNA; ?>";



 let premiseStatus77PNA=document.getElementsByClassName("premiseStatus77PNA")[0];
 premiseStatus77PNA.innerHTML="<?php echo $premiseStatusText77PNA; ?>",premiseStatus77PNA.style.color="<?php echo $premiseStatusColor77PNA; ?>";



 let premiseStatus78PNA=document.getElementsByClassName("premiseStatus78PNA")[0];
 premiseStatus78PNA.innerHTML="<?php echo $premiseStatusText78PNA; ?>",premiseStatus78PNA.style.color="<?php echo $premiseStatusColor78PNA; ?>";


 let premiseStatus79PNA=document.getElementsByClassName("premiseStatus79PNA")[0];
 premiseStatus79PNA.innerHTML="<?php echo $premiseStatusText79PNA; ?>",premiseStatus79PNA.style.color="<?php echo $premiseStatusColor79PNA; ?>";

 let premiseStatus80PNA=document.getElementsByClassName("premiseStatus80PNA")[0];
 premiseStatus80PNA.innerHTML="<?php echo $premiseStatusText80PNA; ?>",premiseStatus80PNA.style.color="<?php echo $premiseStatusColor80PNA; ?>";


 let premiseStatus81PNA=document.getElementsByClassName("premiseStatus81PNA")[0];
 premiseStatus81PNA.innerHTML="<?php echo $premiseStatusText81PNA; ?>",premiseStatus81PNA.style.color="<?php echo $premiseStatusColor81PNA; ?>";


 let premiseStatus82PNA=document.getElementsByClassName("premiseStatus82PNA")[0];
 premiseStatus82PNA.innerHTML="<?php echo $premiseStatusText82PNA; ?>",premiseStatus82PNA.style.color="<?php echo $premiseStatusColor82PNA; ?>";
 let premiseStatus83PNA=document.getElementsByClassName("premiseStatus83PNA")[0];
 premiseStatus83PNA.innerHTML="<?php echo $premiseStatusText83PNA; ?>",premiseStatus83PNA.style.color="<?php echo $premiseStatusColor83PNA; ?>";
 let premiseStatus84PNA=document.getElementsByClassName("premiseStatus84PNA")[0];
 premiseStatus84PNA.innerHTML="<?php echo $premiseStatusText84PNA; ?>",premiseStatus84PNA.style.color="<?php echo $premiseStatusColor84PNA; ?>";
 let premiseStatus85PNA=document.getElementsByClassName("premiseStatus85PNA")[0];
 premiseStatus85PNA.innerHTML="<?php echo $premiseStatusText85PNA; ?>",premiseStatus85PNA.style.color="<?php echo $premiseStatusColor85PNA; ?>";
 let premiseStatus86PNA=document.getElementsByClassName("premiseStatus86PNA")[0];
 premiseStatus86PNA.innerHTML="<?php echo $premiseStatusText86PNA; ?>",premiseStatus86PNA.style.color="<?php echo $premiseStatusColor86PNA; ?>";
 let premiseStatus87PNA=document.getElementsByClassName("premiseStatus87PNA")[0];
 premiseStatus87PNA.innerHTML="<?php echo $premiseStatusText87PNA; ?>",premiseStatus87PNA.style.color="<?php echo $premiseStatusColor87PNA; ?>";
 let premiseStatus88PNA=document.getElementsByClassName("premiseStatus88PNA")[0];
 premiseStatus88PNA.innerHTML="<?php echo $premiseStatusText88PNA; ?>",premiseStatus88PNA.style.color="<?php echo $premiseStatusColor88PNA; ?>";
 let premiseStatus89PNA=document.getElementsByClassName("premiseStatus89PNA")[0];
 premiseStatus89PNA.innerHTML="<?php echo $premiseStatusText89PNA; ?>",premiseStatus89PNA.style.color="<?php echo $premiseStatusColor89PNA; ?>";
 let premiseStatus90PNA=document.getElementsByClassName("premiseStatus90PNA")[0];
 premiseStatus90PNA.innerHTML="<?php echo $premiseStatusText90PNA; ?>",premiseStatus90PNA.style.color="<?php echo $premiseStatusColor90PNA; ?>";

 
 let premiseStatus91PNA=document.getElementsByClassName("premiseStatus91PNA")[0];
 premiseStatus91PNA.innerHTML="<?php echo $premiseStatusText91PNA; ?>",premiseStatus91PNA.style.color="<?php echo $premiseStatusColor91PNA; ?>";
   // Above-ground parking space script end



 
 let popupContentImageMap=document.getElementsByClassName("popupContentImageMap")[0],map=document.getElementsByClassName("map")[0];
 map.addEventListener("click",()=>{popupImageMap.style.display="block",popupContentImageMap.src="image/basement-underground-garages-A.webp"}),
 closePopupImageMap.addEventListener("click",()=>{}),window.addEventListener("click",e=>{e.target===popupImageMap&&(popupImageMap.style.display="none")});
  </script>



<script>
  


// email  start 

let send = document.querySelector('.send');
let text = document.querySelector('.text');
let text1 = document.querySelector('.text1');
let textValue = document.querySelector('.textValue');
let email = document.querySelector('.email');
let firstName = document.querySelector('.firstName');
let message = document.querySelector('.message');
let phone = document.querySelector('.phone');
let checkbox0 = document.querySelector('.checkbox0');
let checkbox1 = document.querySelector('.checkbox1');
let checkbox2 = document.querySelector('.checkbox2');

// conditions for marking checkboxes start
checkbox0.addEventListener('click', () => {

    text1.innerHTML ="Accepted";


if(text1.textContent =="Accepted")
{
    checkbox0.value = "ZGODA_MARKETING Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.";
}
else 
{
    checkbox0.value= "Not accepted";
}
});



checkbox1.addEventListener('click', () => {

    text1.innerHTML ="Accepted";


if(text1.textContent =="Accepted")
{
    checkbox1.value= "ZGODA_MAIL Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.";
}
else 
{
    checkbox1.value= "Not accepted";
}
});

checkbox2.addEventListener('click', () => {

    text1.innerHTML ="Accepted";


if(text1.textContent =="Accepted")
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
// conditions for marking checkboxes end


send.addEventListener('click', () => {

  // form submission method start
sendEamil = () => {


// conditions for completing the form fields and sending a request to submit the contact form start
if(firstName.value == '' || firstName.value == null || email.value == '' || email.value == null ||phone.value == '' || phone.value == null || email.value == '' || email.value == null ||message.value == '' || message.value == null)
{
    firstName.placeholder = " pole Imie";
}

else
{


    
Email.send({
  SecureToken : '',
To : '',
From : '',

Subject : `strona www - ${firstName.value}`,
Body :` INWESTYCJA: inwestycji Park Paderewskiego <br><br> IMIE: ${firstName.value} <br><br>  
EMAIL: ${email.value}<br><br>
TELEFON: ${phone.value}<br><br> 
OPIS: ${message.value} <br><br>
ZGODY: <br>${checkbox0.value} <br><br>
${checkbox1.value} <br><br>
${checkbox2.value}`
}).then(
  // form submission method end
message =>  
{
text.innerHTML = message
if(text.textContent === "OK")
{

  setTimeout(() =>
    {
      formPopup.style.display = "block";
        textValue.style.display = "none";
    }, 3000)
        formPopup.style.display = "none";
        textValue.style.color = "#ffff";
    textValue.innerHTML = "<br><br>Twoja wiadomość została wysłana <br><br>";
    }
    else 
    {
      formPopup.style.display = "none";
      textValue.style.color = "red"
    textValue.innerHTML =  `<br><br>Nieudało się wysłać wiadomość.<br> Może to być spowodowane zbyt liczną wysyłką wiadomość na raz.<br> Proszę wysłąć wiadomość po przez zakładkę <a href="https://parkpaderewskiego.pl/mieszkania/"> mieszkania</a><br><br>`;
      setTimeout(() => {
        formPopup.style.display = "block";
        textValue.style.display = "none";
       
    }, 5000);
     
    }
    
    
    }); 
    
    };
    };
    sendEamil();

});
// conditions for completing the form fields and sending a request to submit the contact form start
// email  end 
</script>
</body>
</html>
