<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'routes/web.php';


$url = $_GET['url'] ?? '';

if ($url == '') {
    $url = $_SERVER['REQUEST_URI'] ?? '/';
}

// remove "/" do início e fim
$url = trim($url, '/');


$url = explode('?', $url)[0];

// quebra a URL em partes
$url = explode('/', $url);

// pega só a rota principal
$rota = strtolower(implode('/', $url));

// ===============================
// VERIFICAR ROTA
// ===============================
if (array_key_exists($rota, $routes)) {

    require __DIR__ . '/' . $routes[$rota];
    exit; // MUITO IMPORTANTE
}

// ===============================
// 404
// ===============================
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Página não encontrada | AgendWork</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- CSS externo -->
    <link rel="stylesheet" href="/public/assets/CSS/routes.css">
</head>

<body>
    <div class="container">
        <div class="error-card">
            <!-- Código do erro com animação -->
            <div class="error-code">
                <span class="digit">4</span>
                <span class="digit">0</span>
                <span class="digit">4</span>
            </div>
            
            <!-- Ícone decorativo (puro CSS) -->
            <div class="icon-decoration">
                <div class="circle-icon"></div>
                <div class="search-icon"></div>
            </div>
            
            <!-- Título -->
            <h1 class="title">Página não encontrada</h1>
            
            <!-- Mensagem explicativa -->
            <p class="message">
                Oops! A página que você está procurando pode ter sido removida,<br>
                teve o nome alterado ou está temporariamente indisponível.
            </p>
            
            <!-- Botões de ação -->
            <div class="actions">
                <a href="/home" class="btn btn-primary">
                    🏠 Voltar para o início
                </a>
                <a href="javascript:history.back()" class="btn btn-secondary">
                    ◀ Página anterior
                </a>
            </div>
            
            <!-- Links úteis -->
            <div class="help-links">
                <a href="/home" class="help-link">home</a>
                <span class="separator">•</span>
                <a href="/login-colaborador" class="help-link">Login</a>
                <span class="separator">•</span>
               
            </div>
        </div>
    </div>
</body>

</html>