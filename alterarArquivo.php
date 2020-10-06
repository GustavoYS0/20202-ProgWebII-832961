<html>
<head><title>Alterar arquivo</title></head>
<?php
class Alteracao{
    private $pasta;
    private $arquivo;
    private $texto;
    public function alterar_arquivo($pasta,$arquivo,$texto){
        $this->pasta=$_GET[$pasta];
        $this->arquivo=$_GET[$arquivo];
        $this->texto=$_POST[$texto];
        $abrir = fopen("C:/xampp/htdocs/trabalhoParcial/$this->pasta/$this->arquivo", "w");
        fwrite($abrir,$this->texto);
        fclose($abrir);
        echo 'Arquivo alterado com sucesso!';
    }
}
$alterar=new Alteracao();
$alterar->alterar_arquivo('pasta','arquivo','texto');
?>
<body>
    <br/>
    <a href="main.php">Voltar para o início.</a>
</body>
</html>