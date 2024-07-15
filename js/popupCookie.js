
let cookieBox = document.querySelector(".containerCookie");
let acceptBtn = document.querySelector("#acceptBtn");
let declineBtn = document.querySelector("#declineBtn");
  declineBtn
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



