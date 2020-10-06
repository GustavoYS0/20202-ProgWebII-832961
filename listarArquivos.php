<html>
<head><title>Listar arquivos</title></head>
<?php
class ListaArquivos{
    private $var;
    private $dir;
    public function listar_arquivos($var){
        $this->var=$_GET[$var];
        $this->dir=scandir("/xampp/htdocs/trabalhoParcial/$this->var");
        foreach($this->dir as $line){
            if(!is_dir($line))
            print "<a href='mostrarArquivo.php?pasta=$this->var&arquivo=$line'>$line<br/></a>";
        }
    }
}
$listarArquivos=new ListaArquivos;
$listarArquivos->listar_arquivos('var');
?>
<body>
    <br/>
    <a href="main.php">Voltar para o início.</a>
</body>
</html>