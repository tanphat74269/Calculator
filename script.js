option = 1;

function resetData() {
    if($('#a').val() == '') {
        submitForm();
    } else {
        option = 1;
        $('#a').val('');
        $('#b').val('');
        $('#cal').val('');
    }
    buildCal();
}

function setValue(num) {
    if(option == 1) {
        $('#a').val($('#a').val() + num);
    } else {
        $('#b').val($('#b').val() + num);
    }
    buildCal();
}

function setPhepTinh(phepTinh) {
    $('#cal').val(phepTinh);
    option = 2;
    buildCal();
}

function submitForm() {
    $('[name=myForm]').submit();
}

function buildCal() {
    $('.pheptinh').html($('#a').val() + $('#cal').val() + $('#b').val());
}
  