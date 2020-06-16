function storeChoice(id){
    choice = id;  //stores the id of the menu-choice made by user.
};

function writeToDocument(cb){ //The function begin called when the user makes a menu-choice.
  var element = document.getElementById("productPresent");
  element.innerHTML = " ";
  var tableRows = [];

  getData(function(cb) {
    data = cb.Artiklar;

    data.forEach(function(item) {
      //el.innerHTML += "<p>" + item.name + "</p>";
      var dataRow = [];
      Object.keys(item).forEach(function(key, choice){
        if (item.kategori === choice){
          var truncatedData = item;
        }
        dataRow.push(truncatedData);
      });
      tableRows.push(dataRow);
    });
    showData(tableRows);
  });
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

function showData(tableRows) {
    tableRows.forEach(function(item, index){
        document.getElementById("productPresent").innerHTML = `<div class="container-fluid callout-container">
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
                                        <div class="img-wrap"><img src="${item.bild-url}"></div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title">${item.benamning}</h4>
                                            <p class="desc">${item.beskrivning}</p>
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
    </div>`;
    });
};