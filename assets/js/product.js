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

var choice; //Stores the menu-choice made by the user

function storeChoice(id){ //The function begin called when the user makes a menu-choice.
  choice = id;
};

function writeToDocument() {  //the function that writes everything to the site.
  var tableRows = [];
  var el = document.getElementById("data");
  el.innerHTML = "";

  getData(function(data) {

      data = data.results;

      data.forEach(function(item) {
          //el.innerHTML += "<p>" + item.name + "</p>";
          var dataRow = [];
          Object.keys(item).forEach(function(key){
              var rowData = item[key].toString();
              var truncatedData = rowData.substring(0, 15);

              dataRow.push(`<td>${truncatedData}</td>`);
          });
          tableRows.push(`<tr>${dataRow}</tr>`);
      });
      el.innerHTML = `<table>${tableRows}</table>$`.replace(/,/g, "");   // /,/ = sök efter komma. g = stanna inte efter första kommat, fortsätt sök igenom allt.
  });
}
