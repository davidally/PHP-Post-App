$(document).ready(function () {

    //    Menu Toggle Function
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    })

    //    Show Recent Blog Posts
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
//    Show Recent Blog Posts
    
//    Show ALL Blog Posts
    $('#full-posts').hide();
    $('#show-posts').on('click', () => {
        $('#full-posts').fadeIn(1500);
        $('html,body').animate({
        scrollTop: $("#full-posts").offset().top},
        'slow');
    })
//    Show ALL Blog Posts
    
});
