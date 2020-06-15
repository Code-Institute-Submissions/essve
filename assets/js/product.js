var choice; //Stores the menu-choice made by the user
var filteredList;  //Stores the filtered list.

function writeToDocument(id){ //The function begin called when the user makes a menu-choice.
  $("#productPresent").html("");
  choice = id;  //stores the id of the menu-choice made by user.
  var apiResponse = getData();  //Stores the api-response.
  filteredList = [];    //empties the array.

  apiResponse.forEach(function(item) {  //for each item in the object apiResponse, do this function:
      if (item.kategori === choice) {   //Check if the key kategori of object equals to the value of the variable choice and then do:
        var rowData = this;  //Store the item in this variable.
        filteredList.push(rowData);  //Push the above variable to the filteredList.
      }
  });
  showData(filteredList);   //When above function has run, call the showData-function.
};

function getData(cb) {  //Creates the function getData
    let req = new XMLHttpRequest();  //this gives us the method to open connections, to send connections, and close them.
    //XML stands for Extensible Markup Language, which is similar to HTML in the way it structures its data, and it's a precursor to JSON.
  
    req.onreadystatechange = function() {  //whenever the state changes of our xhr object, we want to run a check.
      if (req.readyState == XMLHttpRequest.DONE) {  //If the ready state is equal to 4 and the status is 200, then do the following:
        cb(JSON.parse(req.responseText));  //cb calls the function getData to print the JSON-object to the console.
      }
    };
  
  req.open("GET", "https://api.jsonbin.io/b/5ee66c0619b60f7aa959f3c1", true);
  req.setRequestHeader("secret-key", "$2b$10$Z9Ndh/N6Bl69HrvPtVtZkefAv525x8CvixBbgTCg04AgcnenwY.oa");
  req.send();
};

function showData(filteredList) {
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
                                        <div class="img-wrap"><img src="${filteredList.bild-url}"></div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">${filteredList.benamning}</h4>
                                            <p class="desc">${filteredList.beskrivning}</p>
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
    );
};