$(document).ready(() => {

    let correctTitle = false;

    let regExp = /^([А-Я]{1}[а-яё]{1,99}|[A-Z]{1}[a-z]{1,99})$/;
    // 

    $('#title').blur(() => {
        let titleValue = $('#title').val();
        console.log(`categoryTitle: ${titleValue}`);
        if (regExp.test(titleValue)) {
            // Проверка занятости категории:
            //------------------------------
            $.ajax({
                type: "POST",
                url: "/php/beauty-saloon/categories/ajax_check_name",
                data: "name=" + titleValue,
                success: function (result) {
                    //
                    console.log(result);
                    if (result === "занято") {
                        $('#title-error').html(`${titleValue} - уже есть в списке категорий услуг!`);
                        console.log('title-failed');
                        correctTitle = false;
                    } else {
                        $('#title-error').html('');
                        console.log('title-valid');
                        correctTitle = true;
                    }
                }
            });
        } else {
            console.log('title-failed');
            correctTitle = false;
            $('#title-error').html('Название категории должно начинаться с заглавной буквы,<br>только латинскими символами или только кирилицей!');
        }
    });

    $('#submit').click(() => {
        if (correctTitle === true) {
            $('#categoryform').attr('onsubmit', 'return true');
        } else {
            let blockMessage = 'Форма содержит некорректные данные!\n';
            blockMessage += 'Отправка данных не произошла!';
            alert(blockMessage);
        }
    })
});