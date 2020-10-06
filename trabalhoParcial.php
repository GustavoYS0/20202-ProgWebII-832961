<html>
<head><title>Criar estrutura</title></head>
<?php
class Formulario{
    private $pasta;
    private $nomeArquivo;
    private $texto;
    public function verificar_nome_arquivo($nomeArquivo){
        if($this->nomeArquivo=='')
        return true;
        else
        return false;
    }
    public function verificar_nao_existencia_pasta($valor){
        return (!file_exists('/xampp/htdocs/trabalhoParcial/'.$valor));
    }
    public function criar_estrutura_arquivo($valor,$nomeArquivo,$texto){
        $this->nomeArquivo=$_POST[$nomeArquivo];
        if($this->verificar_nome_arquivo($this->nomeArquivo))
        //a variável retornada "a" consta o valor do display da mensagem de erro que será exibida caso o usuário não digite um nome do arquivo
        header('Location: main.php?a=block');
        else{
        $this->pasta=$_POST[$valor];
        $this->texto=$_POST[$texto];
        if($this->verificar_nao_existencia_pasta($this->pasta))
        mkdir('/xampp/htdocs/trabalhoParcial/'.$this->pasta,0777);
        $abrir = fopen("/xampp/htdocs/trabalhoParcial/$this->pasta/$this->nomeArquivo.txt", "w");
        fwrite($abrir,$this->texto);
        fclose($abrir);
        echo 'Dados enviados com sucesso!';
        }
    }
}
$form=new Formulario;
$form->criar_estrutura_arquivo('valor','nomeArquivo','texto');
?>
<body>
    <br/>
    <a href="main.php">Voltar para o início.</a>
</body>
</html>