function russian() {
    $('#Home').text('На главную');
    $('#login').text('Войти');
    $('label:eq(0)').text('Логин');
    $('#exampleInputEmail1').attr('placeholder', 'Введите логин');
    $('label:eq(1)').text('Пароль');
    $('.password:eq(0)').attr('placeholder', 'Пароль');
    $('#enter').text('Войти');
    $("#submenu").css({ 'display': 'none' });

}

/**/

function english() {
    $('#Home').text('At Home');
    $('#sign_up').text('Sign Up');
    $('label:eq(0)').text('Login');
    $('#exampleInputEmail1').attr('placeholder', 'Login');
    $('label:eq(1)').text('Password');
    $('#exampleInputPassword1').attr('placeholder', 'Password');
    $('#enter').text('Sign In');
    $('.under2_menu').css({ 'display': 'none' });
    $("#submenu").css({ 'display': 'none' });
}

/**/

function open_submenu() {
    $("#submenu").toggle();
}

/**/

function open_languages() {
    $('.under2_menu').toggle()
}

/**/

$('#submenu_toggle').on('click', function() {
    open_submenu();
    $('.under2_menu').hide();
})

/**/

$('#submenu ul li:eq(1)').on('click', function(event) {
    event.preventDefault();
    open_languages();
})

/**/

$('#languages_list').on('click', function(event){
    event.preventDefault();
    open_languages();
})

/**/

$('#Russian').on('click', function(event) {
    event.preventDefault();
    russian();
    open_languages();
})

/**/

$('#English').on('click', function(event) {
    event.preventDefault();
    english();
    open_languages();
})
