if (Modernizr.mq('(max-width: 516px)')) {
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
    function openNav() {
        document.getElementById("sidenav").style.width = "100%";
        document.getElementById("wrapper").style.width = "0";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
        document.getElementById("sidenav").style.width = "0";
        document.getElementById("wrapper").style.width = "auto";
    }
} 
else {
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
    function openNav() {
        document.getElementById("sidenav").style.width = "250px";
        document.getElementById("wrapper").style.marginLeft = "250px";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
        document.getElementById("sidenav").style.width = "0";
        document.getElementById("wrapper").style.marginLeft = "auto";
    }
}

/* toggle submenu */
$(document).ready(function() {
    $("#submenu1").click(function(event){
        $("#submenu1 ul").slideToggle('slow');
    })
})
