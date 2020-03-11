$(document).ready(function(){
            $('#btn_submit').click(function(){
                // собираем данные с формы
                var title    = $('#title').val();
                var date   = $('#date').val();
                // отправляем данные
                $.ajax({
                    url: "../php/add-event.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "title":    title,
                        "date":   date
                    },
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
            });
        });