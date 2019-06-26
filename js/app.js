//constants
const server = "localhost:9000";

//startup functions
$(document).ready(function () {
    M.AutoInit();
    $('.modal').modal();
    $('input#input_text, textarea#textarea2').characterCounter();
});

//general functions
