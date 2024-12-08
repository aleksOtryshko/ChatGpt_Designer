# Изменение стиля комнаты

Данное приложение позволяет пользователям загружать изображение комнаты и изменять его стиль, используя API ChatGPT для обработки изображений. Проект состоит из двух файлов: `index.html` и `style-change.php`.

## Файлы проекта

- `index.html`: Это основной файл, который отображает форму для загрузки изображения и выбора стиля. Пользователи могут выбрать изображение и один из трех стилей: "Светлее", "Минималистичнее" или "Яркие цвета".

- `style-change.php`: Этот файл обрабатывает отправку формы, взаимодействует с API OpenAI для изменения стиля изображения и возвращает результат пользователю. Он принимает загруженное изображение, преобразует его в формат base64 и отправляет запрос на API для получения измененного изображения.

## Установка

1. Скачайте репозиторий на локальную машину.
2. Убедитесь, что у вас установлен PHP и доступ к веб-серверу (например, XAMPP, MAMP или встроенный PHP сервер).
3. Получите ваш API ключ OpenAI и вставьте его в файл `style-change.php` в строку, где указано `Ваш Апи Ключ`.
4. Откройте файл `index.html` в веб-браузере для доступа к приложению.

## Использование

1. На главной странице (index.html) выберите изображение комнаты, которое вы хотите изменить.
2. Выберите желаемый стиль из выпадающего меню.
3. Нажмите кнопку "Отправить", чтобы отправить форму.
4. Результат будет показан на новой странице, где вы сможете увидеть измененное изображение.

## Примечания

- Убедитесь, что изображение, которое вы загружаете, имеет подходящий размер и формат.
- Обратите внимание на возможные ограничения и условия использования API OpenAI.

## Лицензия

Этот проект является открытым и доступен для использования и модификации. Пожалуйста, ознакомьтесь с условиями использования API OpenAI перед коммерческим использованием.


--------------------------------------------------------------



Room Style Modification

This application allows users to upload a room image and change its style using the ChatGPT API for image processing. The project consists of two files: index.html and style-change.php.

Project Files

index.html: This is the main file displaying the form for uploading an image and selecting a style. Users can upload an image and choose one of three styles: "Brighter", "More Minimalist", or "Bright Colors".

style-change.php: This file handles form submissions, interacts with the OpenAI API to modify the image style, and returns the result to the user. It accepts the uploaded image, converts it to base64 format, and sends a request to the API to retrieve the modified image.



---

Installation

1. Download the repository to your local machine.


2. Ensure that PHP and a web server (e.g., XAMPP, MAMP, or the built-in PHP server) are installed.


3. Obtain your OpenAI API key and insert it into the style-change.php file where indicated.


4. Open the index.html file in a web browser to access the application.




---

Usage

1. On the main page (index.html), select the room image you want to modify.


2. Choose the desired style from the dropdown menu.


3. Click the "Submit" button to send the form.


4. The result will be displayed on a new page, showing the modified image.




---

Notes

Ensure the uploaded image is of an appropriate size and format.

Be mindful of any limitations or terms of use associated with the OpenAI API.



---

License

This project is open-source and available for use and modification. Please review the OpenAI API terms of use before any commercial application.

