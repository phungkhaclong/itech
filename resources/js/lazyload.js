var page = 1;
$(window).scroll(function() {
    if (
        $(window).scrollTop() + $(window).height() >=
        $(document).height() - 20
    ) {
        page++;
        loadMoreData(page);
    }
});

function loadMoreData(page) {
    $.ajax({
        url: "?page=" + page,
        type: "get",
        beforeSend: function() {
            $(".ajax-load").show();
        }
    })
        .done(function(data) {
            if (data.html == "") {
                $(".ajax-load").html("");
                return;
            }
            $(".ajax-load").hide();
            $("#news-data").append(data.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError) {
            alert("server not responding...");
        });
}
