function russian() {
    $('#Home').text('На главную');
    $('#login').text('Войти');
    $('label:eq(0)').text('Логин');
    $('#exampleInputEmail1').attr('placeholder', 'Введите логин');
    $('label:eq(2)').text('Пароль');
    $('.password:eq(0)').attr('placeholder', 'Пароль');
    $('.password:eq(1)').attr('placeholder', 'Введите пароль еще раз');
    $('#regestration').text('Зарегистрироваться');
    $('.under2_menu').css({ 'display': 'none' });
    $("#submenu").css({ 'display': 'none' });

}

/**/

function english() {
    $('#Home').text('At Home');
    $('#login').text('Sign In');
    $('label:eq(0)').text('login');
    $('#exampleInputEmail1').attr('placeholder', 'Login');
    $('label:eq(2)').text('Password');
    $('.password:eq(0)').attr('placeholder', 'Password');
    $('.password:eq(1)').attr('placeholder', 'Enter password again');
    $('#regestration').text('Sign Up');
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

$('#languages_list').on('click', function(event) {
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

/**/
