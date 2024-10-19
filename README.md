# Тестовое задание
### к вакансии "Бэкенд-разработчик"
https://internship.vk.company/vacancy/842

Синопсис задания:
Разработать архитектуру для интернет-магазина.

1.
Основной базой данных предполагаю сделать SQL-базу данных.
Т.к. бОльшая часть данных представляет собой хорошо структурируемую информацию.
Структура БД изображена в файле DB_structure_image.png

Но кроме SQL, потребуется задействовать и БД других типов.

Т.к. среди требований есть полнотекстовый поиск, то для этого нужно будет использовать специализированную БД. Например ElasticSearch.

Также, в каталоге товара будут данные с неизвестной заранее и неоднородной структурой - дополнительные поля характиристик товаров.
Реализовать хранение такой информации можно и в SQL-базе данных - например, с помощью JSON-полей.
Но удобнее работать с плохо структурироемой информацией будет в NoSQL БД. Для этого случая подойдет документоориентированная БД. Например, MongoDB.

Также считаю возможным, задействовать Redis - для хранения кэшей.

---

Т.к. есть требования ко времени отклика запросов к каталогу, то необходимо добавить индекс к полям таблицы каталога. Думаю, нужен индекс к полям с наименованием и описанием товара.

---

Медиаконтент необходимо хранить на файловом сервере. В БД нужно сохранять ссылки на контент. Хранить изображения в БД не стоит - т.к. это вызовет катастрофический рост объема базы данных.

2. Схема компонентов системы изображена в файле "APP scheme.png"
3. Прототип модуля оформления заказа находится в каталоге App.
