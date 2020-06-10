function searchBar() {
    $("#iconified").hide();
    $("#icons").html(`<input type="text" name="search" class="form-control searching" placeholder="Sök.."></input>`);
};

function backToNormal() {
    $("#icons").html("");
    $("#icons").html(`<i class="fa fa-search" id="iconified" onmouseenter="searchBar()" onmouseleave="backToNormal()"></i>`);
    $("#iconified").show();
};

function showProducts() {
    $("#productPresent").html("");
    //var kategori = filtrera ut api-response så att det matchar var choice.
    //foreach ([i] in var kategori){ printa ut nedan html-kod}

    // Rad 37 ska bilden ersättas.
    // Rad 39 och 40 så ska namn och benämning in.
    $("#productPresent").html(`
    <div class="container-fluid callout-container">
        <div class="row">
            <div class="col-12">
                <section class="callout jumbotron">
                    <h2 class="text-center">Inredning</h2>
                    <p class="text-center">Populära artiklar:</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="card card-product">
                                    <button type="button" id="style-modal" data-toggle="modal" data-target="#productModal" onclick="storeChoice()">
                                        <div class="img-wrap"><img src="../images/products/dyckertpistolhållare.jpg"></div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">dyckertpistolhållare</h4>
                                            <p class="desc">Some small description goes here</p>
                                        </figcaption>
                                        <div class="rating-wrap">
                                            <div class="label-rating">154 views </div>
                                        </div>
                                    </button>
                                    <div class="bottom-wrap">
                                        <a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
                                        <div class="">
                                            <form action="">
                                                <input max="99" min="1" name="antal" type="number" value="1"/>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        
        <div class="modal" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModallabel" aria-hidden="true" onload="productLoad()">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <iframe src="product.html" class="product-info" title="product-information"></iframe>
                </div>
            </div>
        </div>
    </div>`
    //Rad 36 har en onclick som anropar storeChoice(). Rad 61 har en onload som anropar productLoad() som i sin tur förser product.html med info.
    );
};