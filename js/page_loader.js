$(document).ready(function () {
    $("#form_enter").bind("submit", function () {
        var form_data = $(this).serialize();
       $.ajax({
           url: "../todolist/controllers/enter_proc.php",
           type: "POST",
           data: form_data,
           dataType: 'html',
           beforeSend: beforeSendFunc('loading_field'),
           success: ifSuccess
       }); 
    });
    $("#form_reg").bind("submit", function () {
        var form_data = $(this).serialize();
        $.ajax({
           url: "../todolist/controllers/reg_proc.php",
           type: "POST",
           data: form_data,
           dataType: 'html',
           beforeSend: beforeSendFunc('loading_field'),
           success: ifSuccess 
        });
    });
});

function beforeSendFunc(element){
    $("#"+element).show();
    $("#"+element).text("Загрузка данных...");
};

function ifSuccess(data) {
    $("#loading_field").text(data);
}


