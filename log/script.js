function open_submenu() {
    $("#submenu").toggle();
}

/**/


$('#submenu_toggle').on('click', function() {
    open_submenu();
    $('.under2_menu').hide();
})

/**/
