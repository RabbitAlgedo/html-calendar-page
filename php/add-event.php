<?php 

$title = $_POST['title'];
$date  = $_POST['date'];


$file = file_get_contents('../json/events.json');  // Открыть файл data.json
          
$taskList = json_decode($file,TRUE);        // Декодировать в массив 
                        
unset($file);                               // Очистить переменную $file
           
$taskList[] = array('title'=>$title, 'start'=>$date);        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
          
file_put_contents('../json/events.json',json_encode($taskList));  // Перекодировать в формат и записать в файл.
          
unset($taskList);  
$msg_box = "";
$msg_box = "<span style='color: green;'>Ивент добавлен!</span>";
echo json_encode(array(
        'result' => $msg_box
    ));
?>