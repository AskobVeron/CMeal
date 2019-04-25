function open_saves() {
    $('#body').css({ 'display': 'none' });
    $('#versions').css({ 'display': 'none' });
    $('#saves').css({ 'display': 'block' });
    $('body').css({ 'background-color': '#FFFFFF' });
    $('#nav_versions').removeClass('active_nav');
    $('#nav_crmeal').removeClass('active_nav');
    $('#nav_saves').addClass('active_nav');
    $('.under2_menu').css({ 'display': 'none' })
    $("#submenu").css({ 'display': 'none' });

}


/**/

function open_crmeal() {
    $('#body').css({ 'display': 'block' });
    $('body').css({ 'background-color': '#FFFFFF' });
    $('#versions').css({ 'display': 'none' });
    $('#nav_versions').removeClass('active_nav');
    $('#nav_crmeal').addClass('active_nav');
    $('#nav_saves').removeClass('active_nav');
    $('.under2_menu').css({ 'display': 'none' })
    $("#submenu").css({ 'display': 'none' });
}


/**/

$('#nav_crmeal').on('click', function() {
    open_crmeal();
})

/**/

$('#nav_saves').on('click', function(e) {
        e.preventDefault(e)
    $.ajax({
        url: '../../../'
    });
    open_saves();
})

/**/
