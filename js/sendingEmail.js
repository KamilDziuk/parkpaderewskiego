


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
    let agreement01 = document.querySelector('.agreement01');
    let agreement02 = document.querySelector('.agreement02');
    let agreement03 = document.querySelector('.agreement03');
    agreement01.innerHTML = 'Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia. <div style ="color:red"> Wymagana zgoda</div>';
    agreement02.innerHTML = 'Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną. <div style ="color:red"> Wymagana zgoda</div>';
    agreement03.innerHTML = 'Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne. <div style ="color:red"> Wymagana zgoda</div>';

    checkbox0.addEventListener( "click", ()=> {
      {
        agreement01.innerHTML = 'Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia.';
       
      }
    });
    
    checkbox1.addEventListener( "click", ()=> {
        {

          agreement02.innerHTML = 'Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.';
        
        }
      });
        
        checkbox2.addEventListener( "click", ()=> {
        {
         
          agreement03.innerHTML = ' Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne. ';
        }
      });

      
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
    
    
    // conditions for filling out the form fields and sending a request to submit the contact form start
    if(email.value == '' || email.value == null)
    {
      email.placeholder = "Wypełnij to pole ";
      email.classList.add("error-placeholder");
    }


    else if(checkbox0.checked  == false )
    {
      agreement01.innerHTML = 'Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu i zakresie koniecznym do realizacji zgłoszenia. <div style ="color:red"> Wymagana zgoda</div>';
     
    }
    else if(checkbox1.checked  == false    )
      {
       
        agreement02.innerHTML = 'Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu przesyłania mi ofert handlowych na produkty własne spółki drogą elektroniczną.  <div style ="color:red"> Wymagana zgoda</div>';
       
      }


      else if( checkbox2.checked  == false  )
        {
        
          agreement03.innerHTML = ' Wyrażam zgodę na przetwarzanie przez Diamond Hill Development Sp. z o.o, moich danych osobowych zawartych w niniejszym formularzu kontaktowym w celu kontaktu telefonicznego ze strony przedstawicieli spółki w sprawach związanych z ofertą handlową na produkty własne.  <div style ="color:red"> Wymagana zgoda</div>';
        }
    else
    {
    
    
        
    Email.send({
      SecureToken : '',
To : 'sprzedaz@parkpaderewskiego.pl ',
From : 'sprzedaz@parkpaderewskiego.pl ',
    
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
    // conditions for filling out the form fields and sending a request to submit the contact form start
    // email  end 