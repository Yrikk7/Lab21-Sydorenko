
<?php
// Проверяем, было ли передано значение через GET-запрос
if (isset($_GET["a"])) {
    // Получаем значение переменной "hip" из GET-запроса и преобразуем его в целое число
    $hip = intval($_GET["a"]);

    // Вычисляем квадрат числа
    $square = $hip * $hip;

    // Отправляем результат обратно
    echo $square;
} else {
    // Если значение "hip" не было передано, выводим сообщение об ошибке
    echo "Ошибка: Нет данных для обработки.";
}
?>