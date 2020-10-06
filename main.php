<html>
<head><title>Início</title></head>
<?php
class Verificacao{
    private $valorDisplay;
    public function verificar_display($display){
        if(isset($_GET[$display]))
        $this->valorDisplay=$_GET[$display];
        else $this->valorDisplay='none';
    }
    public function getValorDisplay(){
        return $this->valorDisplay;
    }
}
$verificar=new Verificacao;
$verificar->verificar_display('a');
?>
<body>
<form action="trabalhoParcial.php" method="post">
<input type="number" name="valor"/><br>
<input type="text" name="nomeArquivo"/><br>
<p class="errormsg" id="nameerrormsg" style="display:<?php echo $verificar->getValorDisplay()?>;color:red">Por favor, insira o nome do arquivo!</p>
<textarea name="texto"
          rows="5" cols="33"></textarea><br>
    <input type="submit" value="Enviar"/>
</form>
<a href="listar.php"><button>Listar pastas</button></a>
</body>
</html>