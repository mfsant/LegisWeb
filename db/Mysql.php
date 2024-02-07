<?php
class Mysql{

    public $conn;

public function __construct()
{
    $this->conn = new PDO("mysql:dbname=legis_web;host=localhost", "root", "");
}
public function classe()
{
    $stmt = $this->conn->prepare("SELECT * FROM classe");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

public function alunos()
{
    $stmt = $this->conn->prepare("SELECT * FROM aluno");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

public function classeAlunos($idClasse)
{
    $stmt = $this->conn->prepare("select id_aluno, a.nome from aluno_classe ac 
    join aluno a on a.id = ac.id_aluno 
    where ac.id_classe = ?");
     $stmt->execute([$idClasse]);
     $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     return $resultado;
}
public function classeId($id)
{
    $stmt = $this->conn->prepare("SELECT * FROM classe WHERE id = ?");
    $stmt->execute([$id]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return [];
   
}
public function materiaAlunos($idMateria)
{
   $stmt = $this->conn->prepare("SELECT d.descricao from disciplina_classe dc JOIN disciplina d ON d.id = dc.id_disciplina
   where dc.id_classe = ?");
   $stmt->execute([$idMateria]);
   $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
   return $resultado;
}
public function disciplinas()
{
    $stmt = $this->conn->prepare("SELECT d.descricao, id_classe, c.classe from disciplina_classe dc JOIN disciplina d ON d.id = dc.id_disciplina JOIN classe c ON dc.id_classe = c.id
    ORDER BY id_classe;");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

public function alunos_não_estão_classe($id)
{
    $stmt = $this->conn->prepare("SELECT a.id, a.nome
    FROM aluno a
    LEFT JOIN aluno_classe ac ON a.id = ac.id_aluno AND ac.id_classe = ?
    WHERE ac.id_classe IS NULL;");
    $stmt->execute([$id]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
public function vincularAluno($idAluno, $idClasse)
{
    $stmt = $this->conn->prepare("INSERT INTO aluno_classe (id_aluno, id_classe) VALUES (?, ?)");
    $stmt->execute([$idAluno, $idClasse]);
}
public function AlunoUpdate($nome,$id)
{
    $stmt = $this->conn->prepare('UPDATE aluno SET nome = ?  WHERE id = ?');
    $stmt->execute([$nome,$id]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function removerAluno($id)
{
    $stmt = $this->conn->prepare("DELETE FROM aluno where id = ?");
    $stmt->execute([$id]);
}
}
?>