function ajaxProducts(keyword, sort, categories,colors, sizes, page,  showAllProducts) {
    $.ajax({
        url: "/shop",
        method: "get",
        data: {
            keyword: keyword,
            sort: sort,
            categories:categories,
            colors:colors,
            sizes:sizes,
            page: page,
        },
        success: function (response) {
            console.log(response)
            console.log(response.products);
            // console.log(response.rooms);
            console.log(response.products.links);
            if ((response.products.data).length != 0) {
                showAllProducts(response.products.data, response.products.links);
            } else {
                $("#products").html("<h3 class='text-danger notification'>Sorry, the product with your search doesn't exists. </h3>");
            }
        },
        error: function (xhr) {
            let code = xhr.status;
            console.log(xhr);
            console.log(code);
        },
        dataType: "json"
    });
}

$(document).ready(function() {
    var keyword = "";
    var sort = 0;
    var colors = [];
    var categories = [];
    var sizes = [];
    var page = 1;

    //region console.log
    console.log("Key:" + keyword);
    console.log("Sort:" + sort);
    console.log("Colors:" + colors);
    console.log("Sizes:" + sizes);
    console.log("Categories:" + categories);
    console.log("Page:" + page);
    //endregion

    ajaxProducts(keyword, sort, categories,colors, sizes, page,  showAllProducts)

    //region console.log
    console.log("Key:" + keyword);
    console.log("Sort:" + sort);
    console.log("Colors:" + colors);
    console.log("Sizes:" + sizes);
    console.log("Categories:" + categories);
    console.log("Page:" + page);
    //endregion


//paginacija
    $(document).on("click", ".page-link", function (e) {
        e.preventDefault();
        page = parseInt($(this).data('page'));

        //region console.logs

        console.log("Key:" + keyword);
        console.log("Sort:" + sort);
        console.log("Colors:" + colors);
        console.log("Sizes:" + sizes);
        console.log("Categories:" + categories);
        console.log("Page:" + page);

        //endregion

        ajaxProducts(keyword, sort, categories,colors, sizes, page,  showAllProducts);
    })

    function showAllProducts(products, pages){
        let ispis = ``;
        products.forEach(product =>{
            ispis+=`<div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="asset('assets/img/'. product.image" alt="{{$product->name}}">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li><a class="btn btn-info text-white mt-2" href="${url + /products/ +product.id}"><i class="far fa-eye"></i></a></li>
                    <li><a class="btn btn-info text-white mt-2" href="#"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a href="" class="h3 text-decoration-none">${product.name}</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
            </ul>
            <p class="text-center mb-0">${product.price.price}</p>
        </div>
    </div>
</div>
`;
        });
        for(page of pages){
            // console.log(pages);
            if(pages.length <= 3){
                output += "";
            }else{
                output += `
                 <div class="">
                    <div class="room-pagination ">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item ${page.active ? 'active' : ''}" >
                                    <a class="page-link" data-page="${page.label}" href="#">${page.label}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                 </div>
            `;

            }
        }

        $('#products').html(ispis);
    }
})
