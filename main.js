$(document).ready(function () {

    //    Menu Toggle Function
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    })
    
//    Show Blog Posts
    $('.posted').on('click', () => {
        $.getJSON('data.json', (result) => {
            $.each(result, (i, field) => {
                $('.post-container p').text(field + " ");
            } )
        });
        
    })
});
