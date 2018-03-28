$(document).ready(function () {

    //    Menu Toggle Function
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    })

    //    Show Blog Posts
    $('.posted').on('click', function (event) {
        const txt = $(this).text();

        $.getJSON('data.json', (data) => {
            $.each(data, function (key, value) {
                if (txt == value['topic']) {
                    $('.post-container p').text(value.article);
                    $('.post-title').text(value.topic);
                }

            });
        });

    })
//    Show Blog Posts
    
});
