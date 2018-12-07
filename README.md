# PHP-2

Урок 1. Задание 1.

0. В качестве основы своего проекта возьмите то, что сделано нами на уроке. Прочтите внимательно код, еще раз повторите, как он работает.

1. Улучшите класс Db.
Во-первых сократите код в методе query(), отвечающий за преобразование данных в объекты нужного класса до одной строчки
 (читайте руководство по PDO, чтобы понять, как это сделать!)

2. Во-вторых добавьте в этот метод возможность передать подстановки в запрос.

3. И в-третьих, сейчас мы написали только метод query(), предназначенный для выполнения запросов, возвращающих данные.
Напишите еще один метод execute($query, $params=[]), который будет выполнять запросы,
не возвращающие данные (например INSERT, UPDATE) и возвращать лишь true/false в зависимости от того,
удачно ли выполнился запрос.

4. Протестируйте работу нового метода, для чего заведите в проекте папку tests и в ней размещайте скрипты,
 которые наглядно докажут работоспособность вашего кода.
В абстрактной модели добавьте метод public static function findById($id).
 Он должен вернуть ОДНУ запись из таблицы данной модели, с указанным первичным ключом.
 Или false, если таковой записи не нашлось.

5. Сделайте таблицу новостей. Добавьте в нее 3-4 новости.
На главной странице сайта (index.php) сделайте вывод 3 последних новостей.
Используйте модель Article для получения данных (возможно, вам придется добавить какой-то еще метод в эту модель).
Для передачи данных в шаблон - просто include файла с шаблоном.
Каждая новость на главной странице должна быть снабжена ссылкой на страницу /article.php?id=NNN, где NNN - номер этой новости.
Разработайте полностью страницу article.php