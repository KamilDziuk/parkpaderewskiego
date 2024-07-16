
let cookieBox = document.querySelector(".containerCookie");
let acceptBtn = document.querySelector("#acceptBtn");
let declineBtn = document.querySelector("#declineBtn");

googleTagManager = () =>
  {
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','');
  } 
  googleTag = () =>
  {
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', '');
  }



// Cookies textCookie function 
setCookie = (cName, cValue, exDay) =>
  {
  let date = new Date();
  date.setTime(date.getTime() + (exDay * 24 * 60 * 60 * 1000));
  
  // expiration date
  let expiers = "expiers=" + date.toUTCString();
  
  //Cookie file
  document.cookie = cName + "=" + cValue + "; " + expiers + "; path=/"
  }
  
  //Access from cookies
  //Checking if the cookie exists
  getCookies = (cName) =>
  {
      let name = cName + "=";
  // Decoded cookies
  let cDecoded = decodeURIComponent(document.cookie);
  //Create table
  let cArr = cDecoded.split("; ");
  let value;
  cArr.forEach(val => {
      if(val.indexOf(name) === 0) value = val.substring(name.length);
  })
  
   return value;
  }

  
 cookieMess = () => {
  //if cookie contains codinglab it will be returned and below of this code will not run
  if(!getCookies("PrivacyPolicy"))
 
    cookieBox.classList.add("show");
    // Consent to cookies
    acceptBtn.addEventListener("click", () =>
    {

      googleTagManager();
      googleTag();
      cookieBox.style.display = "none";
      setCookie("PrivacyPolicy", true, 30);
    
    })
    // no consent to cookies
    declineBtn.addEventListener("click", () =>
      {
        cookieBox.style.display = "none";
        setCookie("PrivacyPolicy", false, 30);
      
      })
   
 

};
// function of accepting or rejecting cookies end 
  

  


  //Turn on the function each time on the project
  window.addEventListener("load", cookieMess);



