function getCodVisit() {
    let date = new Date();
    let anyo = date.getFullYear().toString();
    let hora = date.getHours().toString();
    let min = date.getMinutes().toString();
    let seg = date.getSeconds().toString();
    let mlSeg = date.getMilliseconds().toString();
    let diaSemana = date.getDay().toString();
    let mes = '';
    let dia = '';
    let codVisit = '';

    if ((date.getMonth() + 1) < 10) {
        mes = '0' + (date.getMonth() + 1);
    } else {
        mes = date.getMonth() + 1;
    }

    if (date.getDate() < 10) {
        dia = '0' + date.getDate().toString();
    } else {
        dia = date.getDate().toString();
    }

    codVisit = anyo + mes + dia + getDia(diaSemana) + hora + min + seg + mlSeg;

    return codVisit;
}

function getDia(dia) {
    let diaSemana = '';

    switch (dia) {
        case '0':
            diaSemana = 'D';
            break;
        case '1':
            diaSemana = 'L';
            break;
        case '2':
            diaSemana = 'M';
            break;
        case '3':
            diaSemana = 'X';
            break;
        case '4':
            diaSemana = 'J';
            break;
        case '5':
            diaSemana = 'V';
            break;
        case '6':
            diaSemana = 'S';
            break;
    }

    return diaSemana;
}