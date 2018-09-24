<?php include_once("../config/config.php"); ?>
<?
class Despesa
{
    public function save() {
        #
    }

    public function update() {
        #
    }

    public function remove() {
        #
    }

    public function listAll() {
        #
    }
}


if(isset($_POST['cadastrar_pessoa']))
{
    try
    {
        $nome = ucwords($_POST['nome']);
        $email = ($_POST['email']);
        $celular = ($_POST['celular']);
        $telefone = ($_POST['telefone']);
        $facebook = ($_POST['facebook']);
        $bairro = ucwords($_POST['bairro']);
        $escola = ($_POST['escola']);
        $como_soube = ($_POST['como_soube']);
        $indicacao = ucwords($_POST['indicacao']);
        $data_nascimento = ($_POST['data_nascimento']);
        $data_nascimento = implode("-",array_reverse(explode("/",$data_nascimento)));

        $programa = ucwords($_POST['programa']);

        $stmt = $pdo->prepare("INSERT INTO `inscritos` (`nome`, `email`, `celular`, `telefone`, `facebook`, `bairro`, `escola`, `como_soube`, `indicacao`, `data_nascimento`, `programa`) VALUES (:nome, :email, :celular, :telefone, :facebook, :bairro, :escola, :como_soube, :indicacao, :data_nascimento, :programa)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':celular', $celular);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':facebook', $facebook);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':escola', $escola);
        $stmt->bindParam(':como_soube', $como_soube);
        $stmt->bindParam(':indicacao', $indicacao);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':programa', $programa);

        $stmt->execute();
        $pdo->lastInsertId();
    }
    catch (Exception $e)
    {
        echo "Erro! Por favor, nos avise enviando um e-mail para: gestao@youthexperience.com.br";
    }
}