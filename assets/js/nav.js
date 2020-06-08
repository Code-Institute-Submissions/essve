function searchBar() {
    $("#iconified").hide();
    $("#icons").html(`<input type="text" name="search" class="form-control searching" placeholder="Sök.."></input>`);
};

function backToNormal() {
    $("#icons").html("");
    $("#icons").html(`<i class="fa fa-search" id="iconified" onmouseenter="searchBar()" onmouseleave="backToNormal()"></i>`);
    $("#iconified").show();
};

/*
    $("product-presentation").html(`
        <div class="container padding-top">
        <div class="card">
            <div class="row">
                <aside class="col-sm-5 padding-top">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            test
                            <div> <a href="#"><img src="../images/products/ESS-Con.jpg"></a></div>
                        </div> <!-- slider-product.// -->
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h3 class="title mb-3">ESS-CON Broschyr</h3>
                        <dl class="item-property">
                            <dt>Beskrivning</dt>
                            <dd>
                                <p>Here goes description consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco </p>
                            </dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Artikelnummer</dt>
                            <dd>12345611</dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>antal/frp</dt>
                            <dd>25</dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Enhetstyp</dt>
                            <dd>PC</dd>
                        </dl> <!-- item-property-hor .// -->
                        <hr>
                        <div>
                            <a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
                            <div class="">
                                <form action="">
                                    <input max="99" min="1" name="antal" type="number" value="1" />
                                </form>
                            </div>
                        </div>
                    </article>
                </aside>
            </div>
        </div>
    </div>`*/