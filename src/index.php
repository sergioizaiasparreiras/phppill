<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💊 phppill - Meus Estudos de PHP</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 20px auto; padding: 0 15px; background-color: #f4f4f9; }
        h1, h2 { color: #2c3e50; border-bottom: 2px solid #777BB4; padding-bottom: 10px; }
        ul { list-style-type: none; padding: 0; }
        li { background-color: #fff; margin-bottom: 10px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        a { text-decoration: none; color: #3498db; display: block; padding: 15px; font-weight: bold; }
        a:hover { background-color: #ecf0f1; }
        code { background-color: #ecf0f1; padding: 2px 5px; border-radius: 3px; font-family: "Courier New", Courier, monospace; }
    </style>
</head>
<body>
    <h1>💊 phppill - Roadmap de Exercícios</h1>
    <p>Este é o menu principal do meu repositório de aprendizado. Cada link abaixo leva a um exercício prático baseado no PDF e no roadmap.</p>

    <?php
    // Função recursiva para escanear diretórios e gerar a lista
    function listarExercicios($diretorio = '.') {
        // Escaneia o diretório atual
        $arquivos = scandir($diretorio);
        
        echo '<ul>';
        foreach ($arquivos as $arquivo) {
            // Ignora os diretórios '.' e '..' e o próprio index.php
            if ($arquivo === '.' || $arquivo === '..' || $arquivo === 'index.php') {
                continue;
            }
            
            $caminhoCompleto = $diretorio . '/' . $arquivo;

            // Se for um diretório, exibe o nome e chama a função para dentro dele
            if (is_dir($caminhoCompleto)) {
                echo "<h2>" . htmlspecialchars(ucfirst(str_replace('_', ' ', $arquivo))) . "</h2>";
                listarExercicios($caminhoCompleto);
            } 
            // Se for um arquivo PHP, cria um link para ele
            elseif (str_ends_with($arquivo, '.php') || str_ends_with($arquivo, '.html')) {
                echo '<li><a href="' . htmlspecialchars($caminhoCompleto) . '" target="_blank">' . htmlspecialchars($arquivo) . '</a></li>';
            }
        }
        echo '</ul>';
    }

    // Inicia o processo a partir do diretório raiz onde o script está
    listarExercicios('.');
    ?>
</body>
</html>