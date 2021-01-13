function checkLenguaje() {
    if (getCookie('zooftLang') === 'esp') {
        $('.esp').removeClass('hidden');
        $('.eng').addClass('hidden');
        $('#btn-eng').removeClass('hidden');
        $('#btn-esp').addClass('hidden');
        $('#language').removeClass('active-language');
    } else {
        $('.esp').addClass('hidden');
        $('.eng').removeClass('hidden');
        $('#btn-eng').addClass('hidden');
        $('#btn-esp').removeClass('hidden');
        $('#language').removeClass('active-language');
    }
}

function changeLenguaje(idioma) {
    if ((idioma) === 'esp') {
        $('.esp').removeClass('hidden');
        $('.eng').addClass('hidden');
        $('#btn-eng').removeClass('hidden');
        $('#btn-esp').addClass('hidden');
        $('#language').removeClass('active-language');
    } else {
        $('.esp').addClass('hidden');
        $('.eng').removeClass('hidden');
        $('#btn-eng').addClass('hidden');
        $('#btn-esp').removeClass('hidden');
        $('#language').removeClass('active-language');
    }
}