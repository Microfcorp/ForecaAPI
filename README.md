# ForecaAPI
# Foreca API

Неофициальное API для прогноза погоды Foreca.

Знает текущую погоду и короткий прогноз на 10 дней вперед

```php
require_once("foreca.php"); //Подключение библиотеки
$foreca = new Foreca('Russia', 'Ostrogozhsk'); //Обыявление класса. Страна и город

echo $foreca->CurrentTemperature(); //Вывод текущей температуры
echo $foreca->Feeling(); //Вывод текущей температуры по ощущениям
echo $foreca->Pressure(); //Вывод текущего давления
echo $foreca->DewPoint(); //Вывод текущей точки росы
echo $foreca->Humidity(); //Вывод текущей влажности
echo $foreca->Visibility(); //Вывод текущей выдимисти
echo $foreca->Rising(); //Вывод времени восхода
echo $foreca->Sunset(); //Вывод времени заката
echo $foreca->Longitude(); //Вывод долготы дня
echo $foreca->WindSpeed(); //Вывод скорости ветра
echo $foreca->WindDeg(); //Вывод направления ветра
$foreca->Wind(); //Класс ветра

$foreca->GetAllPrognoz(); //Массив всех прогнозов
$foreca->GetNumPrognoz($id); //Прогноз с id (от 0 до 9)

$foreca->GetTodayPrognoz(); //Класс прогноза (class Prognoz) на сегодня
$foreca->GetTomorrowPrognoz(); //Класс прогноза (class Prognoz) на завтра
$foreca->GetAfterTomorrowPrognoz(); //Класс прогноза (class Prognoz) на послезавтра
$foreca->GetAfterThreePrognoz(); //Класс прогноза (class Prognoz) через 3 дня
$foreca->GetAfterFourPrognoz(); //Класс прогноза (class Prognoz) через 4 дня
$foreca->GetAfterFivePrognoz(); //Класс прогноза (class Prognoz) через 5 дней
$foreca->GetAfterSixPrognoz(); //Класс прогноза (class Prognoz) через 6 дней
$foreca->GetAfterSevenPrognoz(); //Класс прогноза (class Prognoz) через 7 дней
$foreca->GetAfterEightPrognoz(); //Класс прогноза (class Prognoz) через 8 дней
$foreca->GetAfterNinePrognoz(); //Класс прогноза (class Prognoz) через 9 дней

    (class Prognoz); // Класс прогноза
    (class Prognoz)->TDay; //Вывод температуры днем
    (class Prognoz)->TNight; //Вывод температуры ночью
    (class Prognoz)->Text; //Текст дня
    (class Prognoz)->Wind; //Класс ветра
    (class Prognoz)->Date; //Дата
    (class Prognoz)->TextDate; //Сыылка на подробный прогноз
    ///
    (class Wind); //Класс ветра
    (class Wind)->Degree; //Направление ветра
    (class Wind)->Speed; //Скорость ветра
```
