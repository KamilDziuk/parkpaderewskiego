
if (typeof jQuery === 'undefined') {
    throw new Error('jQuery is not loaded. Please include jQuery before this script.');
}


let tracking1, rightTracking1;
let $slider = $(".slideshow .slider");
let maxItemsOne = $(".item", $slider).length;
let draggingOne = false;

let $sliderRight = $(".slideshow").clone().addClass("slideshow-right").appendTo($(".split-slideshow"));
let rightItems = $(".item", $sliderRight).toArray().reverse();
$(".slider", $sliderRight).html("");

rightItems.forEach(item => $(item).appendTo($(".slider", $sliderRight)));

function changeSlideOne() {
    $(".slideshow-left").slick("slickNext");
}

$slider.addClass("slideshow-left");
$(".slideshow-left").slick({
    vertical: true,
    verticalSwiping: true,
    arrows: false,
    infinite: true,
    dots: true,
    speed: 1000,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)"
}).on("beforeChange", function (s, e, l, t) {
    if (l > t && t === 0 && l === maxItemsOne - 1) {
        $(".slideshow-right .slider").slick("slickGoTo", -1);
        $(".slideshow-text").slick("slickGoTo", maxItemsOne);
    } else if (l < t && l === 0 && t === maxItemsOne - 1) {
        $(".slideshow-right .slider").slick("slickGoTo", maxItemsOne);
        $(".slideshow-text").slick("slickGoTo", -1);
    } else {
        $(".slideshow-right .slider").slick("slickGoTo", maxItemsOne - 1 - t);
        $(".slideshow-text").slick("slickGoTo", t);
    }
}).on("click", function (s) {
    s.preventDefault();
    if (s.deltaX > 0 || s.deltaY < 0) {
        $(this).slick("slickNext");
    } else {
        $(this).slick("slickPrev");
    }
}).on("mousedown", function () {
    draggingOne = true;
    tracking1 = parseInt($(".slick-track", $slider).css("transform").split(",")[5]);
    rightTracking1 = parseInt($(".slideshow-right .slick-track").css("transform").split(",")[5]);
}).on("mousemove", function () {
    if (draggingOne) {
        let newTracking = parseInt($(".slideshow-left .slick-track").css("transform").split(",")[5]);
        let diffTracking = newTracking - tracking1;
        $(".slideshow-right .slick-track").css({transform: `matrix(1, 0, 0, 1, 0, ${rightTracking1 - diffTracking})`});
    }
}).on("mouseup", function () {
    draggingOne = false;
});

$(".slideshow-right .slider").slick({
    swipe: false,
    vertical: true,
    arrows: false,
    infinite: true,
    speed: 950,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
    initialSlide: maxItemsOne - 1
});

$(".slideshow-text").slick({
    swipe: false,
    vertical: true,
    arrows: false,
    infinite: true,
    speed: 900,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)"
});

setInterval(changeSlideOne, 2500);


let tracking, rightTracking;
let $sliderTwo = $(".slideshowTwo .sliderTwo");
let maxItems = $(".itemTwo", $sliderTwo).length;
let dragging = false;

let $sliderTwoRight = $(".slideshowTwo").clone().addClass("slideshowTwo-right").appendTo($(".split-slideshowTwo"));
let rightItemsTwo = $(".itemTwo", $sliderTwoRight).toArray().reverse();
$(".sliderTwo", $sliderTwoRight).html("");

rightItemsTwo.forEach(item => $(item).appendTo($(".sliderTwo", $sliderTwoRight)));

function changeSlide() {
    $(".slideshowTwo-left").slick("slickNext");
}

$sliderTwo.addClass("slideshowTwo-left");
$(".slideshowTwo-left").slick({
    vertical: true,
    verticalSwiping: true,
    arrows: false,
    infinite: true,
    dots: true,
    speed: 1000,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)"
}).on("beforeChange", function (s, e, l, t) {
    if (l > t && t === 0 && l === maxItems - 1) {
        $(".slideshowTwo-right .sliderTwo").slick("slickGoTo", -1);
        $(".slideshowTwo-text").slick("slickGoTo", maxItems);
    } else if (l < t && l === 0 && t === maxItems - 1) {
        $(".slideshowTwo-right .sliderTwo").slick("slickGoTo", maxItems);
        $(".slideshowTwo-text").slick("slickGoTo", -1);
    } else {
        $(".slideshowTwo-right .sliderTwo").slick("slickGoTo", maxItems - 1 - t);
        $(".slideshowTwo-text").slick("slickGoTo", t);
    }
}).on("click", function (s) {
    s.preventDefault();
    if (s.deltaX > 0 || s.deltaY < 0) {
        $(this).slick("slickNext");
    } else {
        $(this).slick("slickPrev");
    }
}).on("mouseup", function () {
    dragging = false;
});

$(".slideshowTwo-right .sliderTwo").slick({
    swipe: false,
    vertical: true,
    arrows: false,
    infinite: true,
    speed: 950,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
    initialSlide: maxItems - 1
});

$(".slideshowTwo-text").slick({
    swipe: false,
    vertical: true,
    arrows: false,
    infinite: true,
    speed: 900,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)"
});

setInterval(changeSlide, 2500);


