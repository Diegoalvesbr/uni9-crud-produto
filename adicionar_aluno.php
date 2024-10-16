<?php include do.php

if ($SERVER['REQUEST METHOD'POST') {

73

Snome 5 POSTE name 1:

Semail $ POST['email'];

Sstet $pdo-prepare("INSERT INTO alunos (nome, email) VALUES (come, email)");

$stmt->execute(['nome Snome, email Semail]);

header("Location: listar alunos.php");

<12>Adicionar Novo Aluno/62

<form method="POST" action

<label>Nome:</label>

input type="text" namenome" required

<br>

<label>Email:</label>

input types"email" name="email" required

<br> <input type="submit" value="Salvar">

</form>
