$(function () {
    $('.btn-trigger').on('click', function () {
        $('body, .headerlogo, .btn-trigger, #gnav').toggleClass('active');
        if ($('.headerlogo').hasClass('active')) {
        $('.headerlogo a img').attr('src', 'assets/img/logo-w.svg'); 
    } else {
        $('.headerlogo a img').attr('src', 'assets/img/logo-r.svg'); 
    }
    $('#gnav').fadeToggle(300);
});
});
// $(function (){
//     if($('.headerlogo').hasClass('active', function (){
//         $('.headerlogo a img').attr('src','assets/img/logo-w.svg');
//     }));
// });
// $(function() {
// $('.hamburger').on('click',function(){
//     $('#gnav').toggleClass('open');
    
// });
// });