<?php

class Banco
{
    private static $dbNome = 'db_help';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $cont = null;

    public function __construct()
    {
        die('A função Init não é permitida!');
    }

    public static function conectar()
    {
        if (null === self::$cont) {
            try {
                // Corrigido o erro na string de conexão: faltava o ponto e vírgula (;) entre "host" e "dbname"
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbNome, self::$dbUsuario);
                self::$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                die('Erro de conexão: ' . $exception->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}

// Exemplo de uso
try {
    $conexao = Banco::conectar();
    // Aqui você pode realizar suas operações no banco de dados
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
} finally {
    Banco::desconectar();
}
?>
