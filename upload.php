<html>
<head>
<title>Enviar arquivo</title>
</head>
<body>
<?php
$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];
copy($nome_temporario,"imagens/$nome_real");
?>
</body>
</html>
