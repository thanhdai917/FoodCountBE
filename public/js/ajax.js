$(document).ready(function() {
    $("#show").change(function() {
        var shows = $(this).val();
        $.post("ajax/show", { show: shows }, function(data) {
            $("#output").html(data);
        });
    });
    $("#sort").change(function() {
        var chang = $(this).val();
        $.post("ajax/sortBy", { sort: chang }, function(data) {
            $("#output").html(data);
        });
    });
    $("#search").keyup(function() {
        var query = $(this).val();
        $.post("ajax/checkpro", { un: query }, function(data) {
            $("#output").html(data);
        });
    });
});