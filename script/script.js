var res100 = new Array(5);
var idNumber = 1;
var result_minus_tr = new Array(5);

function open_submenu() {
    $("#submenu").toggle();
}

function open_versions() {
    $('#body').css({ 'display': 'none' });
    $('#saves').css({ 'display': 'none' });
    $('body').css({ 'background-color': '#F4F1F1' });
    $('#versions').css({ 'display': 'block' });
    $('#nav_crmeal').removeClass('active_nav');
    $('#nav_saves').removeClass('active_nav');
    $('.under2_menu').css({ 'display': 'none' })
    $("#submenu").css({ 'display': 'none' });
}

function open_crmeal() {
    $('#body').css({ 'display': 'block' });
    $('body').css({ 'background-color': '#FFFFFF' });
    $('#versions').css({ 'display': 'none' });
    $('#saves').css({ 'display': 'none' });
    $('#nav_versions').removeClass('active_nav');
    $('#nav_crmeal').addClass('active_nav');
    $('#nav_saves').removeClass('active_nav');
    $('.under2_menu').css({ 'display': 'none' })
    $("#submenu").css({ 'display': 'none' });
}

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

function clear_data1_res() {
    proteins_data1_res.innerText = '';
    fats_data1_res.innerText = '';
    carbs_data1_res.innerText = '';
    ccal_data1_res.innerText = '';

    $("#dish_data1").val(null);
    $("#id_proteins_data1").val(null);
    $("#id_fats_data1").val(null);
    $("#id_carbs_data1").val(null);
    $("#id_weight_data1").val(null);
}

function result_in100g() {
    var factor = $("#weight_total_data2_res").val() / 100;
    var res100 = [
        Math.round($("#prot_total_data2_res").val() / factor),
        Math.round($("#fats_total_data2_res").val() / factor),
        Math.round($("#carbs_total_data2_res").val() / factor),
        Math.round($("#weight_total_data2_res").val() / factor),
        Math.round($("#ccal_total_data2_res").val() / factor)
    ];
    $("#prot100_total_data2_res").val(res100[0]);
    $("#fats100_total_data2_res").val(res100[1]);
    $("#carbs100_total_data2_res").val(res100[2]);
    $("#weight100_total_data2_res").val(res100[3]);
    $("#ccal100_total_data2_res").val(res100[4]);
}

function addIngridient() {
    var dish = {
        name: $("#dish_data1").val(),
        proteins: $("#id_proteins_data1").val(),
        fats: $("#id_fats_data1").val(),
        carbs: $("#id_carbs_data1").val(),
        weight: $("#id_weight_data1").val() / 100,
        ccal: $("#ccal_data1_res").val()
    };
    var proteins = Math.round(dish.proteins * dish.weight);
    var fats = Math.round(dish.fats * dish.weight);
    var carbs = Math.round(dish.carbs * dish.weight);
    var ccal = Math.round((proteins * 4) + (fats * 9) + (carbs * 4));
    $("#proteins_data1_res").val(proteins);
    $("#fats_data1_res").val(fats);
    $("#carbs_data1_res").val(carbs);
    $("#ccal_data1_res").val(ccal);
    var proteins2 = parseInt($("#prot_total_data2_res").val());
    var fats2 = parseInt($("#fats_total_data2_res").val());
    var carbs2 = parseInt($("#carbs_total_data2_res").val());
    var ccal2 = parseInt($("#ccal_total_data2_res").val());
    var weight2 = parseInt($("#weight_total_data2_res").val());
    var data2_res = [
        $("#prot_total_data2_res").val(proteins + proteins2),
        $("#fats_total_data2_res").val(fats + fats2),
        $("#carbs_total_data2_res").val(carbs + carbs2),
        $("#ccal_total_data2_res").val(ccal + ccal2),
        $("#weight_total_data2_res").val((dish.weight * 100) + weight2)
    ];
    result_in100g();
    if (isNaN(
            $('.total100_data2:eq(0)').text() &&
            $('.total100_data2:eq(1)').text() &&
            $('.total100_data2:eq(2)').text() &&
            $('.total100_data2:eq(3)').text() &&
            $('.total100_data2:eq(4)').text()
        )) {
        $("#prot100_total_data2_res").val(0);
        $("#fats100_total_data2_res").val(0);
        $("#carbs100_total_data2_res").val(0);
        $("#weight100_total_data2_res").val(0);
        $("#ccal100_total_data2_res").val(0);
    }
}

function Del_last() {
    var result = [
        $("#prot_total_data2_res").val(),
        $("#fats_total_data2_res").val(),
        $("#carbs_total_data2_res").val(),
        $("#weight_total_data2_res").val(),
        $("#ccal_total_data2_res").val()
    ];
    var tr_data2_last = [
        $('#data2_body tr:last-child .editable:eq(0)').text(),
        $('#data2_body tr:last-child .editable:eq(1)').text(),
        $('#data2_body tr:last-child .editable:eq(2)').text(),
        $('#data2_body tr:last-child .editable:eq(3)').text(),
        $('#data2_body tr:last-child .editable:eq(4)').text()
    ];
    for (var i = 0; i < 5; i++) {
        result_minus_tr[i] = result[i] - tr_data2_last[i];
    }
    result = [
        $("#prot_total_data2_res").val(result_minus_tr[0]),
        $("#fats_total_data2_res").val(result_minus_tr[1]),
        $("#carbs_total_data2_res").val(result_minus_tr[2]),
        $("#weight_total_data2_res").val(result_minus_tr[3]),
        $("#ccal_total_data2_res").val(result_minus_tr[4])
    ];
    result_in100g();
    if (isNaN(
            $('.total100_data2:eq(0)').text() &&
            $('.total100_data2:eq(1)').text() &&
            $('.total100_data2:eq(2)').text() &&
            $('.total100_data2:eq(3)').text() &&
            $('.total100_data2:eq(4)').text()
        )) {
        $("#prot100_total_data2_res").val(0);
        $("#fats100_total_data2_res").val(0);
        $("#carbs100_total_data2_res").val(0);
        $("#weight100_total_data2_res").val(0);
        $("#ccal100_total_data2_res").val(0);
    }
    $('#data2_body tr').last().remove();
}

function setStorage() {
    localStorage.setItem('A_prots', $('#total_data2 .td_total_data2:eq(0)').text());
    localStorage.setItem('B_fats', $('#total_data2  .td_total_data2:eq(1)').text());
    localStorage.setItem('C_carbs', $('#total_data2 .td_total_data2:eq(2)').text());
    localStorage.setItem('D_weight', $('#total_data2 .td_total_data2:eq(3)').text());
    localStorage.setItem('E_ccal', $('#total_data2  .td_total_data2:eq(4)').text());
}

function name() {
    $('#res_100').text($('#res_name_create').val());
    localStorage.setItem('name', $('#res_name_create').val());
}

function getStorage() {
    $('#total_data2  .td_total_data2:eq(0)').text(localStorage.getItem('A_prots'));
    $('#total_data2  .td_total_data2:eq(1)').text(localStorage.getItem('B_fats'));
    $('#total_data2  .td_total_data2:eq(2)').text(localStorage.getItem('C_carbs'));
    $('#total_data2  .td_total_data2:eq(3)').text(localStorage.getItem('D_weight'));
    $('#total_data2  .td_total_data2:eq(4)').text(localStorage.getItem('E_ccal'));
    Del_last();
    name();
}

function calculate_data1_res() {
    var dish = {
        name: $("#dish_data1").val(),
        proteins: $("#id_proteins_data1").val(),
        fats: $("#id_fats_data1").val(),
        carbs: $("#id_carbs_data1").val(),
        weight: $("#id_weight_data1").val() / 100,
        ccal: $("#ccal_data1_res").val()
    };
    var proteins = Math.round(dish.proteins * dish.weight);
    var fats = Math.round(dish.fats * dish.weight);
    var carbs = Math.round(dish.carbs * dish.weight);
    var ccal = Math.round((proteins * 4) + (fats * 9) + (carbs * 4));
    $("#proteins_data1_res").val(proteins);
    $("#fats_data1_res").val(fats);
    $("#carbs_data1_res").val(carbs);
    $("#ccal_data1_res").val(ccal);
}

function Umbrien() {
    var dish_Total = [
        idNumber,
        document.getElementById('dish_data1').value,
        document.getElementById('proteins_data1_res').value,
        document.getElementById('fats_data1_res').value,
        document.getElementById('carbs_data1_res').value,
        document.getElementById('id_weight_data1').value,
        document.getElementById('ccal_data1_res').value
    ];
    var table = $('#data2');
    var tr = document.createElement("tr");
    var td;
    for (var i = 0; i < 7; i++) {
        td = document.createElement("td");
        if (i >= 2) {
            $(td).addClass('editable');
        }
        $(td).text(dish_Total[i]);
        tr.appendChild(td);
    }
    table.append(tr);
    idNumber++;
}

function Clear_all() {
    $('#res_name_create').val('');
    $('#total_data2  .td_total_data2:eq(0)').text(0);
    $('#total_data2  .td_total_data2:eq(1)').text(0);
    $('#total_data2  .td_total_data2:eq(2)').text(0);
    $('#total_data2  .td_total_data2:eq(3)').text(0);
    $('#total_data2  .td_total_data2:eq(4)').text(0);
    $('#data2_body tr').remove();
    idNumber = 1
    name();
    result_in100g();
    Del_last();
    setStorage();
}

$(document).ready(function() {
    getStorage();
})

$('#id_clear_data1_res').on("click", function() {
    clear_data1_res();
})

$(".non_button").keyup(function() {
    calculate_data1_res();
})

$("#id_add_ingridient").on("click", function() {
    Umbrien();
    addIngridient();
})

$('#res_name_create').keyup(function() {
    name();
})

$('#del_last_data2_res').on("click", function() {
    Del_last();
})

$("#id_add_ingridient, #del_last_data2_res, #clear_all_data2 ").on("click", function() {
    setStorage();
})

$('#clear_all_data2').on("click", function() {
    Clear_all();
})

$('#nav_versions').on('click', function(event) {
    event.preventDefault();
    open_versions();
})

$('#nav_crmeal').on('click', function(event) {
    event.preventDefault();
    open_crmeal();
})

$('#nav_saves').bind('click', function(event) {
    event.preventDefault();
    open_saves();

ajax_save_list();
})

$('#submenu_toggle').on('click', function() {
    open_submenu();
})

function ajax_save_list(){
            $.ajax({
            type: 'POST',
            url: "../list_saves.php",
            data: {'search':$('#search').val()},
            response: 'text',
            success: function(data){
                $("#response").html(data).fadeIn();
           }
       })
}

$('#nav_versions').on('click', function() {
    $("#submenu").hide();
})

$('#search').bind("change keyup input click", function() {

     ajax_save_list();

})

$('body').on('click', '#id_save_data1', function(){

    var dish_data1 = $('#dish_data1').val();
    var prots_data1 = $('#id_proteins_data1').val();
    var fats_data1 = $('#id_fats_data1').val(); 
    var carbs_data1 = $('#id_carbs_data1').val();
    var weight_data1 = $('#id_weight_data1').val();

    $.ajax({
            type: 'POST',
            url: "../includes/save_data1.php",
            data: {
                'dish_data1': dish_data1,
                'weight_data1': weight_data1,
                'prots_data1': prots_data1,
                'fats_data1': fats_data1,
                'carbs_data1': carbs_data1
            },
            response: 'text',
            success: function(msg){
                $("#save_response").html(msg);
           }
       })
})

$('body').on('click', '.delete_btn', function(){

var delete_name = $(this).siblings().text();
var delete_weight = 
$(this).closest('table').find('span').eq('1').text();

    $('#black').css({'display':'block'});
    $('html body').css({'overflow-y':'hidden'});
    $('#confirm').css({ 'display': 'inline-block' });

    $('#no, #yes').on('click', function(){
        $('#black').css({'display':'none'});
        $('#confirm').css({ 'display': 'none' });
        $('html body').css({'overflow-y':'visible'});
    });

    $('#yes').on('click', function(){
         $.ajax({
            type: 'POST',
            url: "../list_saves.php",
            data: {
                'delete_name': delete_name,
                'delete_weight': delete_weight,
            },
            response: 'text',
            success: function(data){
                $("#response").html(data).fadeIn();
           }

    });

setTimeout(ajax_save_list, 100);

    })

})

$(document).mouseup(function (e){ 
        var div = $("#confirm");
        var black = $('#black'); 
        if (!div.is(e.target) &&
            div.has(e.target).length === 0) { 
            div.hide();
            black.hide();
            $('html body').css({'overflow-y':'visible'});
        }
    });

$('#id_clear_data1_res').on('click', function(){

var clear = $('#id_clear_data1_res').text();

    $.ajax({
            type: 'POST',
            url: "../includes/save_data1.php",
            data: {
                'clear': clear,
            },
            response: 'text',
            success: function(data){
                $("#save_response").html(data).fadeIn();
           }
    })
})

$('#dish_data1').bind("change keyup input click", function() {

    var input = $('#dish_data1').val();

    if (input == '') { 
        var ul = $("#search_result");
        ul.hide('fast');

    } else {

    $.ajax({
            type: 'POST',
            url: "../includes/srch_matches.php",
            data: {
                'input': input,
            },
            response: 'text',
            success: function(data){

                $('#search_result').html(data).fadeIn();

           }
       })

    var tip_width = $('#dish_data1').width()

     $('#search_result').css(
     {'display':'block',
      'width': tip_width});

    }

})

$('body').on('click', '.popupItem', function(){

        var selected = $(this).children('.name_D').text();
        var selected_W = $(this).children('.name_W').text();
        $('#search_result').hide('fast');

        $.ajax({
            url: "../includes/autofill.php",
            type: 'POST',
            data: {
                selected: selected,
                selected_W: selected_W
            },
            dataType: "JSON",
            success: function(data){
               
                $("#dish_data1").val(data.Dish);
                $("#id_proteins_data1").val(data.Prots);
                $("#id_fats_data1").val(data.Fats);
                $("#id_carbs_data1").val(data.Carbs);
                $("#id_weight_data1").val(data.Weight);
                calculate_data1_res();
                var ul = $("#search_result");
                ul.hide('fast');
           }
       })
})

$('body').on('blur focusout', '#dish_data', function(){
    var ul = $("#search_result");
    ul.hide('fast');
})

$(document).mouseup(function (e){ 
        var ul = $("#search_result");
        var search = $("#dish_data1");
        if (!ul.is(e.target) &&
            ul.has(e.target).length === 0 &&
            !search.is(e.target) &&
            search.has(e.target).length === 0) { 
            ul.hide('fast');
        }
    });

$('#id_save_data2').on('click', function() {
    
    var dish_data1 = $('#res_name_create').val();
    var prots_data1 = $('#prot100_total_data2_res').text();
    var fats_data1 = $('#fats100_total_data2_res').text(); 
    var carbs_data1 = $('#carbs100_total_data2_res').text();
    var weight_data1 = $('#weight_total_data2_res').text();

    $.ajax({
            type: 'POST',
            url: "../includes/save_data1.php",
            data: {
                'dish_data1': dish_data1,
                'weight_data1': weight_data1,
                'prots_data1': prots_data1,
                'fats_data1': fats_data1,
                'carbs_data1': carbs_data1
            },
            response: 'text',
            success: function(msg){
                $("#save_response").html(msg);
           }
       })
})
