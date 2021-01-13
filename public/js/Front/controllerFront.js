$(document).ready(function () {
    let zooftVisitNum = checkCookie('zooftVisitNum');

    if (!zooftVisitNum) {
        alert('Esta aplicación web utiliza cookies propias para mejorar la experiencia del usuario.\n\n\n This web application uses its own cookies to improve the user experience.');
        setCookie('zooftVisitNum', getCodVisit(), 1);
        setCookie('zooftDark', 'false', 1);
        setCookie('zooftLang', 'esp', 1);
    }
    checkModo();
    checkLenguaje();
});

/* Controla el modo oscuro */
$('#switch').click(function () {
    $('body').toggleClass('dark');
    $('#switch').toggleClass('active');

    if ($('body').hasClass('dark')) {
        setCookie('zooftDark', 'true', 1);
    } else {
        setCookie('zooftDark', 'false', 1);
    }
});

/* Controla el menu desplegable para la elección del idioma */
$('#btn-language').click(function () {
        $('#language').toggleClass('active-language');
});

/* Controla el cambio de idioma */
/* Se hizo así para que la función fuera usara por dos <a> con parámetros distintos */
function onCambiarIdioma(idioma) {
    if (idioma === 'esp') {
        setCookie('zooftLang', 'esp', 1);
        changeLenguaje('esp');
    } else {
        setCookie('zooftLang', 'eng', 1);
        changeLenguaje('eng');
    }
}
/* ////////////////////////////////////////////////////////////////////////////////////////// */
/* ////////////////////////////////////////////////////////////////////////////////////////// */
/* ////////////////////////////////////////////////////////////////////////////////////////// */
/* CONTROL DE INCIDENCIAS */

/* Controla el formulario de incidencias Principales Español*/
$('body').on("change", "#mainIncidenciaEsp",function () {
    let mainIncidencia = $('#mainIncidenciaEsp').val();
    $('.subIncidenciaEsp').val('');
    $('.subIncidenciaEng').val('');
    $('.btn-incidencia').addClass('hidden');
    console.log("mainIncidenciaEsp: "+ mainIncidencia);
    checkIncidencia (mainIncidencia);
});

/* Controla el formulario de incidencias Principales Ingles*/
$('body').on("change", "#mainIncidenciaEng",function () {
    let mainIncidencia = $('#mainIncidenciaEng').val();
    $('.subIncidenciaEsp').val('');
    $('.subIncidenciaEng').val('');
    $('.btn-incidencia').addClass('hidden');
    console.log("mainIncidenciaEng: "+ mainIncidencia);
    checkIncidencia (mainIncidencia);
});

/* Controla el formulario de subIncidencias Español */
$('body').on("change", ".subIncidenciaEsp",function () {
    let subIncidencia = $(this).val();
    console.log("subIncidenciaEsp: " + subIncidencia);
    checkSubIncidencia(subIncidencia);
});

/* Controla el formulario de subIncidencias Ingles */
$('body').on("change", ".subIncidenciaEng",function () {
    let subIncidencia = $(this).val();
    console.log("subIncidenciaEng: " + subIncidencia);
    checkSubIncidencia(subIncidencia);
});

/* Controla la aparición en pantalla de las sunIncidencias, de pendiendo de la incidencia principal */
function checkIncidencia (mainIncidencia) {
    if (mainIncidencia === '1') {
        $('#mainIncidenciaEsp').val('1');
        $('#mainIncidenciaEng').val('1');
        $('.incSubIncidencia1').removeClass('hidden');
        $('.incSubIncidencia2').addClass('hidden');
        $('.incSubIncidencia3').addClass('hidden');
        $('.incSubIncidencia4').addClass('hidden');
    } else if (mainIncidencia === '2') {
        $('#mainIncidenciaEsp').val('2');
        $('#mainIncidenciaEng').val('2');
        $('.incSubIncidencia1').addClass('hidden');
        $('.incSubIncidencia2').removeClass('hidden');
        $('.incSubIncidencia3').addClass('hidden');
        $('.incSubIncidencia4').addClass('hidden');
    } else if (mainIncidencia === '3') {
        $('#mainIncidenciaEsp').val('3');
        $('#mainIncidenciaEng').val('3');
        $('.incSubIncidencia1').addClass('hidden');
        $('.incSubIncidencia2').addClass('hidden');
        $('.incSubIncidencia3').removeClass('hidden');
        $('.incSubIncidencia4').addClass('hidden');
    } else if (mainIncidencia === '4') {
        $('#mainIncidenciaEsp').val('4');
        $('#mainIncidenciaEng').val('4');
        $('.incSubIncidencia1').addClass('hidden');
        $('.incSubIncidencia2').addClass('hidden');
        $('.incSubIncidencia3').addClass('hidden');
        $('.incSubIncidencia4').removeClass('hidden');
    } else {
        $('#mainIncidenciaEsp').val('');
        $('#mainIncidenciaEng').val('');
        $('.incSubIncidencia1').addClass('hidden');
        $('.incSubIncidencia2').addClass('hidden');
        $('.incSubIncidencia3').addClass('hidden');
        $('.incSubIncidencia4').addClass('hidden');
    }
}

/* Controla la aparición del btn enviar en la pantalla */
function checkSubIncidencia(subIncidencia) {
    if (subIncidencia === '1') {
        $('.subIncidenciaEsp').val('1');
        $('.subIncidenciaEng').val('1');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '2') {
        $('.subIncidenciaEsp').val('2');
        $('.subIncidenciaEng').val('2');
        $('.btn-incidencia').removeClass('hidden');
    }else if (subIncidencia === '3') {
        $('.subIncidenciaEsp').val('3');
        $('.subIncidenciaEng').val('3');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '4') {
        $('.subIncidenciaEsp').val('4');
        $('.subIncidenciaEng').val('4');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '5') {
        $('.subIncidenciaEsp').val('5');
        $('.subIncidenciaEng').val('5');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '6') {
        $('.subIncidenciaEsp').val('6');
        $('.subIncidenciaEng').val('6');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '7') {
        $('.subIncidenciaEsp').val('7');
        $('.subIncidenciaEng').val('7');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '8') {
        $('.subIncidenciaEsp').val('8');
        $('.subIncidenciaEng').val('8');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '9') {
        $('.subIncidenciaEsp').val('9');
        $('.subIncidenciaEng').val('9');
        $('.btn-incidencia').removeClass('hidden');
    } else if (subIncidencia === '10') {
        $('.subIncidenciaEsp').val('10');
        $('.subIncidenciaEng').val('10');
        $('.btn-incidencia').removeClass('hidden');
    }  else if (subIncidencia === '11') {
        $('.subIncidenciaEsp').val('11');
        $('.subIncidenciaEng').val('11');
        $('.btn-incidencia').removeClass('hidden');
    }else {
        $('.subIncidenciaEsp').val('');
        $('.subIncidenciaEng').val('');
        $('.btn-incidencia').addClass('hidden');
    }
 }

 /* Función que muestra un mensaje al ser enviada la incidencia */
 $('body').on('click', '.btn-incidencia', function () {
    let idioma = getCookie('zooftLang');
    if (idioma === 'esp') {
        alert('Incidencia enviada, gracias por tu colaboración.');
    } else {
        alert('Incident sent, thank you for your collaboration.');
    }
 });
