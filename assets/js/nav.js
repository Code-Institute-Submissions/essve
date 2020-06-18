function searchBar() {  //JQuery function to hide the search-icon in the navbar and to replace it with a searchbar.
    $("#iconified").hide();
    $("#icons").html(`<input type="text" name="search" class="form-control searching" placeholder="Sök.."></input>`);
};

function backToNormal() {   //JQuery function to set it(above) back again on mouseleave.
    $("#icons").html("");
    $("#icons").html(`<i class="fa fa-search" id="iconified" onmouseenter="searchBar()" onmouseleave="backToNormal()"></i>`);
    $("#iconified").show();
};