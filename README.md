# ForecaAPI

Неофициальное API для прогноза погоды Foreca.

Знает текущую погоду и короьткий прогноз на 2 дня вперед

```php
require_once("foreca.php");
$foreca = new Foreca('Russia', 'Ostrogozhsk');

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
$foreca->GetTodayPrognoz(); //Класс прогноза (class Prognoz) на сегодня
$foreca->GetTomorrowPrognoz(); //Класс прогноза (class Prognoz) на завтра
$foreca->GetAfterTomorrowPrognoz(); //Класс прогноза (class Prognoz) на послезавтра
    (class Prognoz)->TDay; //Вывод температуры днем
    (class Prognoz)->TNight; //Вывод температуры ночью
```
