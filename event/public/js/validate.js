$(document).ready(function () {

    $('#validate').validate({ 
        rules: {
            ten_nguoi_mua:{
                required: true,
                maxlength: 32,
            }, 
            email: {
                required: true,
                maxlength: 32,
                equalTo: "#email",
            },
            phone: {
                required: true,
                maxlength: 11,
            },
        },
        messages: {
            ten_nguoi_mua:{
                required: "Vui lòng nhập họ tên",  
                maxlength: "Họ và tên không quá 32 kí tự"
            },
            email: {
                maxlength: "Email không quá 32 kí tự",
                required:  "Vui lòng nhập email",
                equalTo: 'Email không trùng',
            },
            phone: {
                required: "Vui lòng nhập số điện thoại",
                maxlength: "Số điện thoại không quá 11 kí tự",
            }
        },
    });

});