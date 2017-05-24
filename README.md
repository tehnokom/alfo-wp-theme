# Вёрстка для проекта alfo

## Текущее состояние
* Вёрстка сделана под чистый WordPress + BuddyPress + bbPress;
* Главная в шаблоне front-page.php;
* Профиль в шаблоне page.php.



# UI-элементы и примеры кода


## Индикатор процесса

### Как использовать индикатор процесса для страницы:
1. Поместите внутрь body код:
```html
    <div class="bal_loader" data-bal-role="page">
        <div class="bal_loader__indicator"></div>
    </div>
```
2. Подключите balalayka.loader.js;
3. Лоадер появится при открытии страницы и скроется после полной её загрузки.

### Как использовать индикатор процесса для элемента:
1. Поместите внутрь элемента код:
```html
    <div class="bal_loader" data-bal-role="element">
        <div class="bal_loader__indicator"></div>
    </div>
```
2. Проследите, чтобы у самого этого элемента был position: relative | absolute | fixed;
3. Запускайте индикатор процесса, добавив к нему класс loading;
4. Останавливайте, убрав класс loading.


## Модальное окно и алерт

### Как использовать простое модальное окно:
1. Добавьте на элемент, при нажатии на который должно открыть модальное окно, атрибут data-bal-popup="xxx", где xxx - атрибут id модального окна;
2. Добавьте в тег body код:
```html
    <div class="bal_popups_bg"></div> - добавляется один раз
    <div class="bal_popup" id="xxx"> - добавляется столько раз, сколько у вас мод. окон (каждый со уникальным атрибутом id)
        <button class="bal_popup__cross" data-bal-action="close" title="Закрыть"></button>
        ...
    </div>
```
3. Мод. окно закрывается при клике на фон, при нажатии клавиши Esc, а также при нажатии на все элементы внутри модального окна, у которых есть атрибут data-bal-action="close".


### Вызов алерта.
Функционал модального окна также предполагает вызов своего алерта на базе модального окна. Для этого:
1. Добавьте в тег body код:
```html
    <div class="bal_popups_bg"></div>
    <div class="bal_popup" id="alert">
        <button class="bal_popup__cross" data-bal-action="close" title="Закрыть"></button>
        <div class="bal_title h2"></div>
        <p class="bal_text"></p>
    </div>
```
2. Вызывайте алерт следующим кодом:
```javascript
    balAlert('Это заголовок сообщения', 'Это текст сообщения');
```


## Стилизованный комбобокс Chosen

### Выбор одной опции:
```html
<select class="chosen">
    <option>Опция 1</option>
    <option>Опция 2</option>
</select>
```

### Выбор нескольких опций:
```html
<select class="chosen" multiple>
    <option>Опция 1</option>
    <option>Опция 2</option>
</select>
```


## Горизонтальный разделитель (линия)
Для использования надо вставить следующий код:
```html
<div class="bal_line"></div>
```


## Однострочное текстовое поле
Пример кода:
```html
<input type="text" placeholder="Поиск" class="bal_input"/>
```
Возможные добавочные классы:
* big
* dark


## Кнопки
Код:
```html
<button class="bal_button">Кнопка</button>
```
Возможные добавочные классы:
* big
* white
* two_strings


## Оформление текста
Код:
```html
<p class="bal_text">Какой-то текст.</p>
```
Возможные добавочные классы:
* small
* big
* white


## Заголовки
Код:
```html
<h1 class="bal_title">Заголовок</h1>
```
Возможные добавочные классы:
* h1
* h2
* h3
* h4
* h5
* h6
* white


## Блок с медиа-контентом (фото, видео, запись на стене и т. п.)
Код:
```html
<div class="tkom_media">
    <div class="tkom_media__title">
        <a href="#">Фотоальбомы</a>
        <i>26</i>
    </div>
    <div class="tkom_media__item first">
        Первый блок контента (надо всегда ставить доп. класс first)
    </div>
    <div class="tkom_media__item">
        Кторой блок контета
    </div>
</div>
```