<html>
<head><title>Mostrar arquivo</title></head>

<script>
function alertMyName(pasta,arquivo) {
    if(window.confirm("Tem certeza que deseja excluir?"))
    window.location.href ="removerArquivo.php?pasta="+pasta+"&arquivo="+arquivo;
}
</script>
<body>
<form action="alterarArquivo.php?pasta=<?php echo $_GET['pasta'];?>&arquivo=<?php echo $_GET['arquivo'];?>" method="post">
<textarea name="texto" rows="10" cols="66">
<?php
class Impressao{
    private $pasta;
    private $arquivo;
    public function imprimir($pasta,$arquivo){
        if (isset($_GET[$pasta])&&isset($_GET[$pasta])){
            $this->pasta=$_GET[$pasta];
            $this->arquivo=$_GET[$arquivo];
            echo file_get_contents('/xampp/htdocs/trabalhoParcial/'.$this->pasta.'/'.$this->arquivo);
        }
    }
    public function getPasta(){
        return $this->pasta;
    }
    public function getArquivo(){
        return $this->arquivo;
    }
}
$impressao=new Impressao;
$impressao->imprimir('pasta','arquivo');
?>
</textarea><br>
<input type="submit" value="Alterar arquivo">
</form>
<button onclick="alertMyName(<?php echo $impressao->getPasta(); ?>,'<?php echo $impressao->getArquivo(); ?>')">Remover arquivo</button>
<a href="/trabalhoParcial/<?php echo $impressao->getPasta().'/'.$impressao->getArquivo(); ?>" download><button>Fazer download deste arquivo</button></a>
    <br/>
    <a href="main.php">Voltar para o início.</a>
</body>
</html>