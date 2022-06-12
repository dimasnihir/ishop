<html>
<head>
    <title>Prod</title>

    <link rel="stylesheet" href="prod.css">
    </style>
</head>
<body>
    <div class="container">
    <h1>Произошла ошибка</h1>
    <p><b>Код ошибки: </b> <?=$errno?></p> 
    <p><b>Текст ошибки: </b><?=$errstr?></p> 
    <p><b>Файл, в котором произошла ошибка: </b><?=$errfile?></p> 
    <p><b>Строка в которой произошла ошибка: </b><?=$errline?></p> 
    </div>
</body>
</html>