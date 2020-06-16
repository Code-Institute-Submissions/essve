function storeChoice(id){
    sessionStorage.setItem("menuChoice", id);  //stores the id of the menu-choice made by user.
};

function writeToDocument(cb){ //The function begin called when the user makes a menu-choice.
  var element = document.getElementById("productPresent");
  //element.innerHTML = "";
  var tableRows = [];

  getData(function(cb) {
    data = cb.Artiklar;

    for(var i = 0, len = data.length; i < len; i++) {
      var dataRow = [];
      var choice = sessionStorage.getItem("menuChoice");

      if (data[i].kategori === choice) {
        var truncatedData = data[i];
        dataRow.push(truncatedData);
      }
      tableRows.push(dataRow);
    }
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
  for(var i = 0, len = tableRows.length; i < len; i++){
    document.getElementById("productPresent").innerHTML = `
    <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <figure class="card card-product">
                            <button type="button" id="style-modal" data-toggle="modal" data-target="#productModal" onclick="storeProductChoice()">
                                <div class="img-wrap"><img src="${tableRows[i].bildurl}"></div>
                                <figcaption class="info-wrap">
                                    <h4 class="title">${tableRows[i].benamning}</h4>
                                    <p class="desc">${tableRows[i].beskrivning}</p>
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
            </div>`;
  }
};