function searchBar() {
    $("#iconified").hide();
    $("#icons").html(`<input type="text" name="search" class="form-control searching" placeholder="Sök.."></input>`);
};

function backToNormal() {
    $("#icons").html("");
    $("#icons").html(`<i class="fa fa-search" id="iconified" onmouseenter="searchBar()" onmouseleave="backToNormal()"></i>`);
    $("#iconified").show();
};