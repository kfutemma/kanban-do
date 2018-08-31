$(document).ready(function() {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });
    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        var elem = document.getElementById("sidebar-wrapper");
        left = window.getComputedStyle(elem,null).getPropertyValue("left");
        if(left == "-200px"){
            document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
        }
        else if(left == "200px"){
            document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
        }
    });

    $("#add1").click(function() {
        var title = $("#title1").val();
        var content = $("#content1").val();

        var card = "<li>" + "<a href='#' data-toggle='modal' data-target='#myModal'> <h2>"+ title + "</h2> <p>"+ content + "</p> </li>";

        //$('#lista1').html(card);
        document.getElementById("lista1").innerHTML += card;
        $("#title1").val(" ");
        $("#content1").val(" ");
        $("#modalAddCard1").modal("hide");
    });
});