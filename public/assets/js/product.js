$(document).ready(function() {
    console.log('product.js');

    $('#add-cart-btn').click(function () {
        console.log('add to cart btn clicked');

        const product_id = $(this).attr('data-product-id');
        console.log(product_id);

        $.ajax({
            url: "http://127.0.0.1:8000/cart/add",
            method: "post",
            dataType: "json",
            data: {
                id: product_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                console.log(data);
                $('.successcart').html('Added to Cart');

                let cart_count = $('#cart-count').text();
                cart_count = Number(cart_count) + 1;
                $('#cart-count').text(cart_count);

            },
            error: function (data) {
                console.log(data);
            }
        });
    });
})
