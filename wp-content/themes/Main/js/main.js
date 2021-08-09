var menu = $('#menu');
var menu_btn = $('#menu-btn');
var select_location = $('#select_location');
var select_location_text = $('#loc_text');
menu_btn.on('click', function(){
    menu.toggleClass('active');
})
select_location.on('click', function () {
    $(this).toggleClass('active');
})
$(document).on('click', '.loc_item:not(.active)', function () {
    $('.loc_item.active').removeClass('active');
    let th = $(this);
    th.addClass('active');
    select_location_text.text(th.text());
})