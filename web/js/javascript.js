$(document).ready(function(){
    $("#demotest0").on("hide.bs.collapse", function(){
        $("#collapse-span").html('<span class="glyphicon glyphicon-menu-down"></span>');
    });
    $("#demotest0").on("show.bs.collapse", function(){
        $("#collapse-span").html('<span class="glyphicon glyphicon-menu-up"></span>');
    });
});