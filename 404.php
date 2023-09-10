<?php
require_once '.\layouts\header.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
  
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
  
        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #333;
        }
  
        .error-message {
            margin-top: 20px;
            font-size: 24px;
            color: #777;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="error">
            <div class="error-code">404</div>
            <div class="error-message">Page Not Found</div>
        </div>
    </div>
    <?php
    require_once './layouts/footer.php';
    ?>
  </body>