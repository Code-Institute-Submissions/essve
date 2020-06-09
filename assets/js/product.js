function getData(url, cb) {  //Creates the function getData
  let req = new XMLHttpRequest();  //this gives us the method to open connections, to send connections, and close them.
  //XML stands for Extensible Markup Language, which is similar to HTML in the way it structures its data, and it's a precursor to JSON.

  req.onreadystatechange = function() {  //whenever the state changes of our xhr object, we want to run a check.
    if (req.readyState == XMLHttpRequest.DONE) {  //If the ready state is equal to 4 and the status is 200, then do the following:
      cb(JSON.parse(req.responseText));  //cb calls the function getData to print the JSON-object to the console.
    }
  };

req.open("GET", "https://api.jsonbin.io/b/5ed941761f9e4e578817616a", true);
req.setRequestHeader("secret-key", "$2b$10$Z9Ndh/N6Bl69HrvPtVtZkefAv525x8CvixBbgTCg04AgcnenwY.oa");
req.send();
};

