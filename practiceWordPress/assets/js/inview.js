
//ニュースバルーンアニメーション
$('#news').one('inview', function(event, isInView) {
if (isInView) {
    $(this).addClass('balloon-active');// element is now visible in the viewport
} 
});

//選ばれる理由　左右スライド
$('.slide-right').one('inview', function(event, isInView) {
if (isInView) {
    $(this).addClass('slide-right-active');// element is now visible in the viewport
} 
});

$('.slide-left').one('inview', function(event, isInView) {
if (isInView) {
    $(this).addClass('slide-left-active');// element is now visible in the viewport
} 
});


//生徒の声バルーンアニメーション
$('.comment').one('inview', function(event, isInView) {
if (isInView) {
    $(this).addClass('balloon-active');// element is now visible in the viewport
} 

});