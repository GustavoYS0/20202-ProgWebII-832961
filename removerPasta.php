<html>
<head><title>Remover pasta</title></head>
<?php
class Remocao{
    private $pasta;
    public function remover_pasta($pasta){
        $this->pasta=$_GET[$pasta];
        rmdir($this->pasta);
        echo 'Pasta removida com sucesso!';
    }
}
$remover=new Remocao;
$remover->remover_pasta('pasta');
?>
<body>
    <br/>
    <a href="main.php">Voltar para o início.</a>
</body>
</html>