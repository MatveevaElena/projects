function renewAuthors(){
    $.ajax({
        url: '/news/authors/getauthors',
        type: 'get',
        dataType: 'html',
        async: false,
        crossDomain: 'true',
        success: function(data, status) {
            $("#news-author option").remove();
            $("#news-author").append(data);
        },
        error: function(data, status){
            alert('Возникла ошибка');
        }
    });
    
}
function addAuthor(){
    if(string = prompt("Введите имя автора:")){
        $.ajax({
            url: '/news/authors/createauthor',
            data: {
                name: string
            },
            type: 'get',
            dataType: 'html',
            async: false,
            crossDomain: 'true',
            success: function(data, status) {
                renewAuthors();
                alert('Автор добавлен');
            },
            error: function(data, status){
                alert('Возникла ошибка');
            }
        });
    }
}
