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

$('.filter__form--part label, .filter__form--part_main__text').on('click', function () {
    let th = $(this);
    let form_part = th.closest('.filter__form--part');
    form_part.toggleClass('active');
})