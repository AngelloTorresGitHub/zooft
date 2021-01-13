function checkModo() {
    if (getCookie('zooftDark') === 'true') {
        $('body').addClass('dark');
        $('#switch').addClass('active');
    } else {
        $('body').removeClass('dark');
        $('#switch').removeClass('active');
    }
}