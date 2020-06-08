function fetchGitHubInformation(title){
    $("#benamning").html("");    //Setting their HTML content to an empty string has the effect of emptying these divs.
    $("#beskrivning").html("");
    $("#artikelnummer").html("");
    $("#ant-förp").html("");
    $("#enhetstyp").html("");
    $("#artikelstatus").html("");
    $("#lagersaldo").html("");
    $("#brytes").html("");
};

let req = new XMLHttpRequest();

req.onreadystatechange = () => {
  if (req.readyState == XMLHttpRequest.DONE) {
    console.log(req.responseText);
  }
};

req.open("GET", "https://api.jsonbin.io/b/5ed941761f9e4e578817616a", true);
req.setRequestHeader("secret-key", "$2b$10$Z9Ndh/N6Bl69HrvPtVtZkefAv525x8CvixBbgTCg04AgcnenwY.oa");
req.send();