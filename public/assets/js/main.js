$(document).ready(function(){
    console.log('main.js');

    $(".btn_delete").click(function (){
        const id = $(this).attr('data-id');

        console.log('Kliknut Deleet');
        $.ajax({
            url: "http://127.0.0.1:8000/admin/products/delete",
            method: "delete",
            dataType: "json",
            data: {
                'id': id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log(data);
                window.location.reload(true);
            },
            error: function (data) {
                console.log(data);
            }
        });


    });

});

function ajaxProducts(){

}
