function renewTag(){
    $.ajax({
        url: '/news/tags/gettags',
        type: 'get',
        dataType: 'html',
        async: false,
        crossDomain: 'true',
        success: function(data, status) {
            $("#tags option").remove();
            $("#tags").append(data);
        },
        error: function(data, status){
            alert('Возникла ошибка');
        }
    });
    
}
function addTag(){
    if(string = prompt("Введите название тега:")){
        $.ajax({
            url: '/news/tags/createtag',
            data: {
                name: string
            },
            type: 'get',
            dataType: 'html',
            async: false,
            crossDomain: 'true',
            success: function(data, status) {
                renewTag();
                alert('Тег добавлен');
            },
            error: function(data, status){
                alert('Возникла ошибка');
            }
        });
    }
}