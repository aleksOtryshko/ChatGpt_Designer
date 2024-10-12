<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image']) && isset($_POST['style'])) {
    // Константы для API
    $apiKey = ' Ваш Апи Ключ';
    $apiUrl = 'https://api.openai.com/v1/images/edits';

    // Извлечение данных из формы
    $style = htmlspecialchars($_POST['style']);
    $prompt = "Поменять интерьер и стиль комнаты и сделать его $style.";

    // Чтение файла изображения
    $imagePath = $_FILES['image']['tmp_name'];
    $imageData = file_get_contents($imagePath);
    $imageBase64 = base64_encode($imageData);

    // Подготовка данных в формате JSON
    $postData = [
        'image' => $imageBase64,
        'prompt' => $prompt,
        'n' => 1, // Количество изображений
        'size' => '1024x1024', // Размер изображения
    ];

    // Настройка cURL
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

    // Выполнение запроса и получение ответа
    $result = curl_exec($ch);
    curl_close($ch);

    // Обработка ответа API
    $response = json_decode($result, true);

    // Вывод данных в формате JSON на страницу
    echo '<h2>Полученные данные в формате JSON:</h2>';
    echo '<pre>' . json_encode($postData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . '</pre>';

    if (isset($response['data'][0]['url'])) {
        $outputImageUrl = $response['data'][0]['url'];
        echo '<h2>Результат:</h2>';
        echo '<img src="' . $outputImageUrl . '" alt="Измененное изображение">';
    } else {
        echo '<h2>Результат:</h2>';
        echo '<p>Извините, произошла ошибка. Попробуйте снова.</p>';
    }
}
?>    }
        }
    }
}
?>  }
        }
    }
}
?>