$( document ).ready(function() {


    $('body').on('click', '.features-option', function(){
        var link = $(this).siblings('a');
        var url = link.attr('href');
        console.log(url);
        $.pjax({url: url, container: '#list-container',timeout:5000,scrollTo:false })


    });

});
