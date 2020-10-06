<html>
<head><title>Listar pastas</title></head>
<?php
class Lista{
    private $dir;
    public function listar_pasta($dir){
        $this->dir=scandir($dir);
        foreach($this->dir as $line){
            //caso for uma pasta criada pelo usuário
            if(is_dir($line)&&$line!='.'&&$line!='..'){
                // a variável $i representa o display do botão que remove a pasta, caso a pasta esteja vazia, será mostrado um botão de remover ao usuário
                if((count(glob("$line/*")) === 0) ? true : false){
                    $i='block';
                }else{
                    $i='none';
                }
                echo "<a href='listarArquivos.php?var=$line'>$line</a><a href='removerPasta.php?pasta=$line'><button style='display:$i'>Remover pasta</button></a><br/>";
            }
        }
    }
}
$listar=new Lista();
$listar->listar_pasta('/xampp/htdocs/trabalhoParcial');
?>
<body>
    <br/>
    <a href="main.php">Voltar para o início.</a>
</body>
</html>