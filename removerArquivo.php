<html>
<head><title>Remover arquivo</title></head>
<?php
class RemocaoArquivo{
    private $pasta;
    private $arquivo;
    public function remover_arquivo($pasta,$arquivo){
        $this->pasta=$_GET[$pasta];
        $this->arquivo=$_GET[$arquivo];
        unlink("C:/xampp/htdocs/trabalhoParcial/$this->pasta/$this->arquivo");
        echo 'Arquivo removido com sucesso!';
    }
}
$remocao=new RemocaoArquivo;
$remocao->remover_arquivo('pasta','arquivo');
?>
<body>
    <br/>
    <a href="main.php">Voltar para o início.</a>
</body>
</html>