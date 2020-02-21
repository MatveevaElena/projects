function showImage(string){
    $.ajax({
        url: '/news/news/showimg',
        data: {
            path: string
        },
        type: 'get',
        dataType: 'html',
        async: false,
        crossDomain: 'true',
        success: function(data, status) {
            $("#news_img").attr('src', 'data:image/png;base64,' + data);
        },
        error: function(data, status){
            alert('Возникла ошибка');
        }
    });
}