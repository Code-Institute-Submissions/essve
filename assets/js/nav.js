var choice = "";

function searchBar() {
    $("#iconified").hide();
    $("#icons").html(`<input type="text" name="search" class="form-control searching" placeholder="Sök.."></input>`);
};

function backToNormal() {
    $("#icons").html("");
    $("#icons").html(`<i class="fa fa-search" id="iconified" onmouseenter="searchBar()" onmouseleave="backToNormal()"></i>`);
    $("#iconified").show();
};

function storeChoice(id){
    choice = id;
};

function myFunction() {
    $("#productPresent").html("");
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
                                <button type="button" id="style-modal" data-toggle="modal" data-target="#dyckertModal">
                                    <div class="img-wrap"><img src="assets/images/products/dyckertpistolhållare.jpg"></div>
                                    <figcaption class="info-wrap">
                                        <h4 class="title">dyckertpistolhållare</h4>
                                        <p class="desc">Some small description goes here</p>
                                    </figcaption>
                                    <div class="rating-wrap">
                                        <div class="label-rating">154 views </div>
                                    </div> <!-- rating-wrap.// -->
                                </button>
                                <div class="bottom-wrap">
                                    <a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
                                    <div class="">
                                        <form action="">
                                            <input max="99" min="1" name="antal" type="number" value="1"/>
                                        </form>
                                    </div>
                                </div> <!-- bottom-wrap.// -->
                            </figure>
                        </div> <!-- col // -->
    
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <button type="button" id="style-modal" data-toggle="modal" data-target="#kvinfastModal">
                                    <div class="img-wrap"><img src="assets/images/kvalificierad_infastning.jpg"> </div>
                                    <figcaption class="info-wrap">
                                        <h4 class="title">Kvalificierad infästning Broschyr</h4>
                                        <p class="desc">Some small description goes here</p>
                                    </figcaption>
                                    <div class="rating-wrap">
                                        <div class="label-rating">154 views </div>
                                    </div> <!-- rating-wrap.// -->
                                </button>
                                <div class="bottom-wrap">
                                    <a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
                                    <div class="">
                                        <form action="">
                                            <input max="99" min="1" name="antal" type="number" value="1"/>
                                        </form>
                                    </div>
                                </div> <!-- bottom-wrap.// -->
                            </figure>
                        </div> <!-- col // -->

                        <div class="col-md-3">
                            <figure class="card card-product">
                                <button type="button" id="style-modal" data-toggle="modal" data-target="#tungInfastModal">
                                    <div class="img-wrap"><img src="assets/images/tung_infastning.jpg"></div>
                                    <figcaption class="info-wrap">
                                        <h4 class="title">Tung Infästning Broschyr</h4>
                                        <p class="desc">Some small description goes here</p>
                                    </figcaption>
                                    <div class="rating-wrap">
                                        <div class="label-rating">154 views </div>
                                    </div> <!-- rating-wrap.// -->
                                </button>
                                <div class="bottom-wrap">
                                    <a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
                                    <div class="">
                                        <form action="">
                                            <input max="99" min="1" name="antal" type="number" value="1"/>
                                        </form>
                                    </div>
                                </div> <!-- bottom-wrap.// -->
                            </figure>
                        </div> <!-- col // -->

                        <div class="col-md-3">
                            <figure class="card card-product">
                                <button type="button" id="style-modal" data-toggle="modal" data-target="#sortEttModal">
                                    <div class="img-wrap"><img src="assets/images/nytt-sortiment-del1.jpg"></div>
                                    <figcaption class="info-wrap">
                                        <h4 class="title">Lim & Fog Guide del 1</h4>
                                        <p class="desc">Some small description goes here</p>
                                    </figcaption>
                                    <div class="rating-wrap">
                                        <div class="label-rating">154 views </div>
                                    </div> <!-- rating-wrap.// -->
                                </button>
                                <div class="bottom-wrap">
                                    <a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
                                    <div class="">
                                        <form action="">
                                            <input max="99" min="1" name="antal" type="number" value="1"/>
                                        </form>
                                    </div>
                                </div> <!-- bottom-wrap.// -->
                            </figure>
                        </div> <!-- col // -->
                    </div> <!-- row.// -->
                </div>
            </section>
        </div>
    </div>

    <div class="modal" id="dyckertModal" tabindex="-1" role="dialog" aria-labelledby="dyckertModallabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
              <iframe src="product-five.html" class="product-info" title="product-information"></iframe>
              </div>
        </div>
      </div>
      
    <div class="modal" id="kvinfastModal" tabindex="-1" role="dialog" aria-labelledby="kvinfastModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
              <iframe src="product-two.html" class="product-info" title="product-information"></iframe>
              </div>
        </div>
      </div>
      
    <div class="modal" id="tungInfastModal" tabindex="-1" role="dialog" aria-labelledby="tungInfastModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
              <iframe src="product-three.html" class="product-info" title="product-information"></iframe>
              </div>
        </div>
    </div>
    
    <div class="modal" id="sortEttModal" tabindex="-1" role="dialog" aria-labelledby="sortEttModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
              <iframe src="product-four.html" class="product-info" title="product-information"></iframe>
              </div>
        </div>
      </div>
</div>`
    );
};