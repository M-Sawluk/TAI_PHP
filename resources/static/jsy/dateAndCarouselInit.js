$(function () {
    $('#datetimepicker1').datetimepicker();
});
$(function () {
    $('#datetimepicker2').datetimepicker();
});
$(document).ready(function () {
    $('.carousel').carousel();
});

setInterval(function () {
    $('.carousel').carousel('next');
}, 5000);
