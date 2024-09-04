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
    // window.addEventListener('click', (event) => {
    // if (event.target === popup) {
    // popup.style.display = 'none';
    // }
    // });
    
    // popup end
    

    

    
    // let imgContainerLifestyle = document.querySelectorAll('.imgContainerLifestyle');
    // let imgContainerLifestyle1 = document.querySelectorAll('.imgContainerLifestyle1');
    // let imgContainerLifestyle2 = document.querySelectorAll('.imgContainerLifestyle2');
    // let imgContainerLifestyle3 = document.querySelectorAll('.imgContainerLifestyle3');
    // let imgContainerLifestyle4 = document.querySelectorAll('.imgContainerLifestyle4');
    // let imgContainerLifestyle5 = document.querySelectorAll('.imgContainerLifestyle5');
    // let imgContainerLifestyle6 = document.querySelectorAll('.imgContainerLifestyle6');
    // let imgContainerLifestyle7 = document.querySelectorAll('.imgContainerLifestyle7');
    // let numbers = 0;
    // let numbers1 = 0;
    // let numbers2 = 0;
    // let numbers3 = 0;
    // let numbers4 = 0;
    // let numbers5 = 0;
    // let numbers6 = 0;
    // let numbers7 = 0;
    // function  gallery(index)
    // {
    //   imgContainerLifestyle.forEach((item, v) => {
    //     item.style.transform = `translateY(${(v - index)* 100}%)`;
        
    //     });
    //     imgContainerLifestyle1.forEach((item1, i1) => {
    //       item1.style.transform = `translateY(${(i1 - index) * 100}%)`;
         
    //   });
    
    //   imgContainerLifestyle2.forEach((item2, i2) => {
    //     item2.style.transform = `translateY(${(i2 - index)* 100}%)`;
    
    // });
    
    // imgContainerLifestyle3.forEach((item3, i3) => {
    //   item3.style.transform = `translateY(${(i3 - index)* 100}%)`;
    
    // });
    
    
    
    // imgContainerLifestyle4.forEach((item4, i4) => {
    //   item4.style.transform = `translateY(${(i4 - index)* 100}%)`;
      
    //   });
    
    
    // imgContainerLifestyle5.forEach((item5, i5) => {
    //   item5.style.transform = `translateY(${(i5 - index)* 100}%)`;
    
    // });
    
    
    
    // imgContainerLifestyle6.forEach((item6, i6) => {
    //   item6.style.transform = `translateY(${(i6 - index) * 100}%)`;
     
    // });
    
    // imgContainerLifestyle7.forEach((item7, i7) => {
    // item7.style.transform = `translateY(${(i7 - index)* 100}%)`;
    
    // });
    
        
    // };
    
    
    
    
    
    
    // setInterval( () =>
    // {
    //   numbers = (numbers < imgContainerLifestyle.length -1)? numbers +1: 0;
    
    //     gallery(numbers);
        
    
    //     numbers1 = (numbers1 < imgContainerLifestyle1.length -1) ?  numbers1 +1:0;
    //     gallery(numbers1);
    
    
    
    //     numbers2 = (numbers2 < imgContainerLifestyle2.length -1) ?  numbers2 +1:0;
    //     gallery(numbers2);
    
    
    //     numbers3 = (numbers3 < imgContainerLifestyle3.length -1) ?  numbers3 +1:0;
    //     gallery(numbers3);
    
    //     numbers4 = (numbers4 < imgContainerLifestyle4.length -1)? numbers4 +1: 0;
    
    //     gallery(numbers4);
        
    
    //     numbers5 = (numbers5 < imgContainerLifestyle5.length -1) ?  numbers5 +1:0;
    //     gallery(numbers5);
    
    
    
    //     numbers6 = (numbers6 < imgContainerLifestyle6.length -1) ?  numbers6 +1:0;
    //     gallery(numbers6);
    
    
    //     numbers7 = (numbers7 < imgContainerLifestyle7.length -1) ?  numbers7 +1:0;
    //     gallery(numbers7);
        
    
    
    // },5000)
    









    // code optimization





const sliderTable = [
  document.querySelectorAll('.imgContainerLifestyle0'),
  document.querySelectorAll('.imgContainerLifestyle1'),
  document.querySelectorAll('.imgContainerLifestyle2'),
  document.querySelectorAll('.imgContainerLifestyle3'),
  document.querySelectorAll('.imgContainerLifestyle4'),
  document.querySelectorAll('.imgContainerLifestyle5'),
  document.querySelectorAll('.imgContainerLifestyle6'),
  document.querySelectorAll('.imgContainerLifestyle7')
];

const  sliderImages = new Array(sliderTable.length)


sldier = () =>
{
sliderTable.forEach((images, idx) =>{

  images.forEach((item, i) =>{

    item.style.transform = `translateY(${( i - sliderImages[idx]) * 100}%)`;

  });

});

}

setInterval( () => {
sliderTable.forEach((_, idx) => {
  sliderImages[idx] = ( sliderImages[idx] < sliderTable[idx].length - 1) ?   sliderImages[idx]  +1 :0;

});

sldier();

},3000);