<?php 
include db.php";

$10 $ GETE id :

$stat Spdo-prepare("SELECT FROM alunes WIERE id id;

$stmt-executellid Sidl);

Salune $stmt-fetch(PDO FETCH ASSOC);

if ($SERVER['REQUEST METHOD"]POST') { Snone $ POSTE nome

Semail 1 POST['email'

$stat $pdo-prepare("UPDATE alunos SET nome nome, enail enail WHERE 1414) $stmt->execute(['none Soone, email Senail, id Sid]);

header(Location: Listar alunos.php')

<h2 Editar Aluno fore method="POST" action

<label>Nome:Label

input type="text" name="none" value="<?php echo Salanol nome; ?>" required

dir LabelEmail:Label

input types"email" name="email" value="php echo Salunol email]; required

<input types"submit" value="Salvar"> ferm
