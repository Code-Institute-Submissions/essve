function storeChoice(id){ //Function beign called when user clicks on a category in the navbar.
  sessionStorage.clear(); //Empties the sessionStorage
  sessionStorage.setItem("menuChoice", id);  //stores the id of the menu-choice made by user, in a sessionStorage.
}

function writeToDocument(cb){ //Function onload of HTML-body of category-page.

  var header = sessionStorage.getItem("menuChoice");  //Gets the menu-choice made by user and stores it in the variable header.
  $(".category-header").html(header); //Using JQuery to set the Category header.

  getData(function(cb) {  //Calls the getData-function and passes in this function.
    data = cb.artiklar; //Stores the response in data.
    var tableRows = []; //Stores the filtered response.

    for(var i = 0, len = data.length; i < len; i++) { //A for-loop which loops through data.
      var choice = sessionStorage.getItem("menuChoice");

      if (data[i].kategori === choice) {  //If-statement that checks the value of the key "kategori" in data and compares it to the menu-choice made by user.
        var truncatedData = data[i];  //Adds matched object to truncadedData.
        tableRows.push(truncatedData);  //Pushes truncatedData to the array tableRows.
      }
    }
    showData(tableRows);  //Calls the showData-function and passes in tableRows
  });
}

function getData(cb) {  //Creates the function getData
  let req = new XMLHttpRequest();  //this gives us the method to open connections, to send connections, and close them.
  //XML stands for Extensible Markup Language, which is similar to HTML in the way it structures its data, and it's a precursor to JSON.

  req.onreadystatechange = function() {  //whenever the state changes of our xhr object, we want to run a check.
    if (req.readyState == XMLHttpRequest.DONE) {  //If the ready state is equal to 4 and the status is 200, then do the following:
      cb(JSON.parse(req.responseText));  //cb calls the function that we pass in when calling the getData-function. Before that it takes the API-response and parse it to JSON.
    }
  };

req.open("GET", "https://api.jsonbin.io/b/5ee9f65619b60f7aa95bf20e", true); //Opens the connection.
req.setRequestHeader("secret-key", "$2b$10$Z9Ndh/N6Bl69HrvPtVtZkefAv525x8CvixBbgTCg04AgcnenwY.oa"); //The key to access the api.
req.send();
}

function showData(tableRows) {  //Declaration of the function ShowData. Which pushes the HTML below to the screen.
  for(var i = 0, len = tableRows.length; i < len; i++){ //Runs for as many times as we have objects in our filtered array.
    //Using JQuery below to get the element with the class of productPresent and appends the following HTML to that element.  
    $(".productPresent").append(`
                  <div class="col-md-3">
                      <figure class="card card-product">
                          <button type="button" id="style-modal" data-toggle="modal" data-target="#productModal" onclick="storeProductChoice()">
                              <div class="img-wrap"><img src="${tableRows[i].bildUrl}"></div>
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
                  </div>`);
  }
}