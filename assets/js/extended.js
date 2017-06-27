/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("sidenav").style.display = "block";
    document.getElementById("wrapper").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("sidenav").style.display = "none";
    document.getElementById("wrapper").style.marginLeft = "auto";
}

/* toggle submenu */
$(document).ready(function() {
    $("#submenu1").click(function(event){
        $("#submenu1 ul").slideToggle('slow');
    })
})
