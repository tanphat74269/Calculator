option = 1;
function resetData() { // Nút xóa tất cả
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
function setValue(num) { // Nút bấm số
    if(option == 1) {
        $('#a').val($('#a').val() + num);
    } else {
        $('#b').val($('#b').val() + num);
    }
    buildCal();
}
function setPhepTinh(phepTinh) { // Nút bấm phép tính
    $('#cal').val(phepTinh);
    option = 2;
    buildCal();
}
function submitForm() {
    $('[name=myForm]').submit();
}
function buildCal() { // Dùng để hiển thị ra màn hình
    $('.pheptinh').html($('#a').val() + $('#cal').val() + $('#b').val());
}
  