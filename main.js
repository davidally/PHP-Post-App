$(document).ready(function () {

    //    Menu Toggle Function
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    })

    //    Show Blog Posts
    $('.posted').on('click', () => {
        $.getJSON('data.json', (data) => {
            $.each(data, function(key,value){
//                console.log(data);
                console.log(value.article);
//                console.log(key);
//                console.log(value);
//                console.log(value['article']);
                
//                console.log(data[key].article);
//                
            $('.post-container p').text(value.article);
        });
//            $.each(data, (element, value) => {
//                console.log(data);
//                console.log(element);
//                v = value;
//                console.log(value[2]['article']);
//               // console.log(value['article']);
//                
//               // $('.post-container p').text(value['article']);
//            });
        });

    })
});
