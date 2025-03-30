
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

const  sliderImages = new Array(sliderTable.length);

sldier = () =>
{
sliderTable.forEach((images, idx) =>{
images.forEach((item, i) =>{
item.style.transform = `translateY(${( i - sliderImages[idx]) * 100}%)`;
});
});
};

setInterval( () => {
sliderTable.forEach((_, idx) => {
sliderImages[idx] = ( sliderImages[idx] < sliderTable[idx].length - 1) ?   sliderImages[idx]  +1 :0;

});

sldier();

},3000);


