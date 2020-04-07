require("./bootstrap");
$("#btnSubmit").click(function(e) {
    e.preventDefault();
    $("#form").submit();
    $(this).attr("disabled", "disabled");
});
