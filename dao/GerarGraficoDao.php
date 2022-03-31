<?php
require ("class/graficos.php");
class GerarGraficoDao implements GerarGrafico{
    private $conn;

    public function __construct(Conexao $conn){
        $this->conn = $conn->conectar();
    }
    public function graficoUnico1($turma, $estrategia, $tipoQuestao){
       
        $grafico = new Grafico();
        $sql = $this->conn->prepare("SELECT turmas.nome, turmas.universidade, turmas.curso, turmas.componente, turmas.pontosPositivos, turmas.pontosNegativos FROM `turmas` WHERE cod = :codTurma");
        $sql->bindValue(":codTurma", $turma);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $grafico->setNomeTurma($dado['nome']);
            $grafico->setUniversidade($dado['universidade']);
            $grafico->setCurso($dado['curso']);
            $grafico->setComponente($dado['componente']);
            $grafico->setPontosPositivos($dado['pontosPositivos']);
            $grafico->setPontosNegativos($dado['pontosNegativos']);
        }

        $sql = $this->conn->prepare("SELECT COUNT(aluno) AS nEstudantes FROM tb_aluno_questoes WHERE codTurma = :codTurma");
        $sql->bindValue(":codTurma", $turma);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $grafico->setNEstudante($dado['nEstudantes']);
        }
        
            //----------------Concordo Fortemente q1--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq1 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1ConcordoFortemente($concordoFortementeq1);
            }
            //------------------Concordo q1-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq1 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Concordo($concordoq1); 
            }
            //neutro q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq1 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Neutro($neutroq1);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq1 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Discordo($discordoq1);
            }
            //discordo Fortemente q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq1 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1DiscordoFortemente($discordoFortementeq1);
            }

            //-------------------- ITEM 2 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq2 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2ConcordoFortemente($concordoFortementeq2);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq2 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Concordo($concordoq2); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq2 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Neutro($neutroq2);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq2 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Discordo($discordoq2);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq2 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2DiscordoFortemente($discordoFortementeq2);
            }
        
            //-------------------- ITEM 3 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq3 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3ConcordoFortemente($concordoFortementeq3);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq3 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Concordo($concordoq3); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq3 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Neutro($neutroq3);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq3 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Discordo($discordoq3);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq3 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3DiscordoFortemente($discordoFortementeq3);
            }

            //-------------------- ITEM 4 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq4 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4ConcordoFortemente($concordoFortementeq4);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq4 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Concordo($concordoq4); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq4 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Neutro($neutroq4);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq4 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Discordo($discordoq4);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq4 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4DiscordoFortemente($discordoFortementeq4);
            }


            //-------------------- ITEM 5 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq5 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5ConcordoFortemente($concordoFortementeq5);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq5 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Concordo($concordoq5); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq5 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Neutro($neutroq5);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq5 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Discordo($discordoq5);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq5 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5DiscordoFortemente($discordoFortementeq5);
            }

            //-------------------- ITEM 6 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq6 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6ConcordoFortemente($concordoFortementeq6);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq6 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Concordo($concordoq6); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq6 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Neutro($neutroq6);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq6 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Discordo($discordoq6);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq6 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6DiscordoFortemente($discordoFortementeq6);
            }

            //-------------------- ITEM 7 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq7 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7ConcordoFortemente($concordoFortementeq7);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq7 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Concordo($concordoq7); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq7 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Neutro($neutroq7);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq7 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Discordo($discordoq7);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq7 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7DiscordoFortemente($discordoFortementeq7);
            }

            //-------------------- ITEM 8 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq8 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8ConcordoFortemente($concordoFortementeq8);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq8 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Concordo($concordoq8); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq8 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Neutro($neutroq8);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq8 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Discordo($discordoq8);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq8 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8DiscordoFortemente($discordoFortementeq8);
            }
        return $grafico;
       
    }


    public function graficoUnico2($turma, $estrategia, $tipoQuestao){
       
        $grafico = new Grafico();
        $sql = $this->conn->prepare("SELECT turmas.nome, turmas.universidade, turmas.curso, turmas.componente, turmas.pontosPositivos, turmas.pontosNegativos FROM `turmas` WHERE cod = :codTurma");
        $sql->bindValue(":codTurma", $turma);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $grafico->setNomeTurma($dado['nome']);
            $grafico->setUniversidade($dado['universidade']);
            $grafico->setCurso($dado['curso']);
            $grafico->setComponente($dado['componente']);
            $grafico->setPontosPositivos($dado['pontosPositivos']);
            $grafico->setPontosNegativos($dado['pontosNegativos']);
        }

        $sql = $this->conn->prepare("SELECT COUNT(aluno) AS nEstudantes FROM tb_aluno_questoes WHERE codTurma = :codTurma AND codTipoQuestao = 2");
        $sql->bindValue(":codTurma", $turma);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $grafico->setNEstudante($dado['nEstudantes']);
        }
        
            //----------------Concordo Fortemente q1--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq1 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1ConcordoFortemente($concordoFortementeq1);
            }
            //------------------Concordo q1-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq1 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Concordo($concordoq1); 
            }
            //neutro q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq1 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Neutro($neutroq1);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq1 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Discordo($discordoq1);
            }
            //discordo Fortemente q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q1 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq1 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1DiscordoFortemente($discordoFortementeq1);
            }

            //-------------------- ITEM 2 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq2 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2ConcordoFortemente($concordoFortementeq2);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq2 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Concordo($concordoq2); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq2 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Neutro($neutroq2);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq2 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Discordo($discordoq2);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q2 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq2 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2DiscordoFortemente($discordoFortementeq2);
            }
        
            //-------------------- ITEM 3 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq3 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3ConcordoFortemente($concordoFortementeq3);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq3 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Concordo($concordoq3); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq3 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Neutro($neutroq3);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq3 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Discordo($discordoq3);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q3 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq3 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3DiscordoFortemente($discordoFortementeq3);
            }

            //-------------------- ITEM 4 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq4 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4ConcordoFortemente($concordoFortementeq4);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq4 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Concordo($concordoq4); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq4 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Neutro($neutroq4);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq4 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Discordo($discordoq4);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q4 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq4 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4DiscordoFortemente($discordoFortementeq4);
            }


            //-------------------- ITEM 5 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq5 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5ConcordoFortemente($concordoFortementeq5);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq5 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Concordo($concordoq5); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq5 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Neutro($neutroq5);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq5 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Discordo($discordoq5);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q5 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq5 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5DiscordoFortemente($discordoFortementeq5);
            }

            //-------------------- ITEM 6 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq6 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6ConcordoFortemente($concordoFortementeq6);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq6 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Concordo($concordoq6); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq6 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Neutro($neutroq6);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq6 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Discordo($discordoq6);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q6 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq6 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6DiscordoFortemente($discordoFortementeq6);
            }

            //-------------------- ITEM 7 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq7 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7ConcordoFortemente($concordoFortementeq7);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq7 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Concordo($concordoq7); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq7 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Neutro($neutroq7);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq7 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Discordo($discordoq7);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q7 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq7 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7DiscordoFortemente($discordoFortementeq7);
            }

            //-------------------- ITEM 8 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq8 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8ConcordoFortemente($concordoFortementeq8);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq8 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Concordo($concordoq8); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq8 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Neutro($neutroq8);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq8 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Discordo($discordoq8);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q8 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq8 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8DiscordoFortemente($discordoFortementeq8);
            }

             //-------------------- ITEM 9 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q9 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq9 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9ConcordoFortemente($concordoFortementeq9);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q9 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq9 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9Concordo($concordoq9); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q9 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq9 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9Neutro($neutroq9);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q9 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq9 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9Discordo($discordoq9);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q9 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq9 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9DiscordoFortemente($discordoFortementeq9);
            }

             //-------------------- ITEM 10 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q10 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq10 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10ConcordoFortemente($concordoFortementeq10);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q10 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq10 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10Concordo($concordoq10); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q10 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq10 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10Neutro($neutroq10);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE codTurma = :codTurma AND q10 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq10 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10Discordo($discordoq10);
            }
            //discordo Fortemente
                $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
                WHERE codTurma = :codTurma AND q10 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            $sql->bindValue(":codTurma", $turma);
            $sql->bindValue(":tipoQuestao", $tipoQuestao);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq10 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10DiscordoFortemente($discordoFortementeq10);
            }
        return $grafico;
       
    }

    public function graficoGeral1($cod){
        $grafico = new Grafico();
        $sql = $this->conn->prepare("SELECT COUNT(aluno) AS nAlunos from tb_aluno_questoes where codEstrategia = :cod  and codTipoQuestao = 1");
        $sql->bindValue(":cod", $cod);
        $sql->execute();
        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            $grafico->setNEstudante ($dados['nAlunos']);
            
        }
        $estrategia = $cod;
            //----------------Concordo Fortemente q1--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q1 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq1 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1ConcordoFortemente($concordoFortementeq1);
            }
            //------------------Concordo q1-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q1 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq1 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Concordo($concordoq1); 
            }
            //neutro q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q1 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq1 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Neutro($neutroq1);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q1 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq1 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Discordo($discordoq1);
            }
            //discordo Fortemente q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q1 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq1 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1DiscordoFortemente($discordoFortementeq1);
            }

            //-------------------- ITEM 2 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q2 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq2 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2ConcordoFortemente($concordoFortementeq2);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q2 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq2 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Concordo($concordoq2); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q2 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq2 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Neutro($neutroq2);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q2 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq2 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Discordo($discordoq2);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q2 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq2 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2DiscordoFortemente($discordoFortementeq2);
            }
        
            //-------------------- ITEM 3 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q3 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq3 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3ConcordoFortemente($concordoFortementeq3);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q3 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq3 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Concordo($concordoq3); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q3 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq3 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Neutro($neutroq3);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q3 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq3 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Discordo($discordoq3);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q3 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
          
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq3 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3DiscordoFortemente($discordoFortementeq3);
            }

            //-------------------- ITEM 4 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q4 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq4 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4ConcordoFortemente($concordoFortementeq4);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q4 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq4 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Concordo($concordoq4); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q4 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq4 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Neutro($neutroq4);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q4 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq4 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Discordo($discordoq4);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q4 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq4 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4DiscordoFortemente($discordoFortementeq4);
            }


            //-------------------- ITEM 5 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q5 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq5 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5ConcordoFortemente($concordoFortementeq5);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q5 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq5 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Concordo($concordoq5); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q5 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq5 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Neutro($neutroq5);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q5 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq5 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Discordo($discordoq5);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q5 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq5 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5DiscordoFortemente($discordoFortementeq5);
            }

            //-------------------- ITEM 6 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q6 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq6 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6ConcordoFortemente($concordoFortementeq6);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q6 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq6 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Concordo($concordoq6); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q6 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq6 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Neutro($neutroq6);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q6 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq6 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Discordo($discordoq6);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q6 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq6 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6DiscordoFortemente($discordoFortementeq6);
            }

            //-------------------- ITEM 7 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q7 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq7 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7ConcordoFortemente($concordoFortementeq7);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q7 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq7 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Concordo($concordoq7); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q7 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq7 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Neutro($neutroq7);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q7 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq7 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Discordo($discordoq7);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q7 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq7 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7DiscordoFortemente($discordoFortementeq7);
            }

            //-------------------- ITEM 8 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q8 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq8 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8ConcordoFortemente($concordoFortementeq8);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q8 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq8 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Concordo($concordoq8); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q8 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq8 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Neutro($neutroq8);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q8 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq8 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Discordo($discordoq8);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q8 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 1);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq8 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8DiscordoFortemente($discordoFortementeq8);
            }
        return $grafico;
    }
    public function graficoGeral2($cod){
        $grafico = new Grafico();
        $sql = $this->conn->prepare("SELECT COUNT(aluno) AS nAlunos from tb_aluno_questoes where codEstrategia = :cod  and codTipoQuestao = 1");
        $sql->bindValue(":cod", $cod);
        $sql->execute();
        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            $grafico->setNEstudante ($dados['nAlunos']);
            
        }
        $estrategia = $cod;
            //----------------Concordo Fortemente q1--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q1 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq1 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1ConcordoFortemente($concordoFortementeq1);
            }
            //------------------Concordo q1-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q1 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq1 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Concordo($concordoq1); 
            }
            //neutro q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q1 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq1 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Neutro($neutroq1);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q1 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq1 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1Discordo($discordoq1);
            }
            //discordo Fortemente q1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q1 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq1 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ1DiscordoFortemente($discordoFortementeq1);
            }

            //-------------------- ITEM 2 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q2 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq2 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2ConcordoFortemente($concordoFortementeq2);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q2 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq2 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Concordo($concordoq2); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q2 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq2 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Neutro($neutroq2);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q2 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq2 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2Discordo($discordoq2);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q2 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq2 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ2DiscordoFortemente($discordoFortementeq2);
            }
        
            //-------------------- ITEM 3 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q3 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq3 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3ConcordoFortemente($concordoFortementeq3);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q3 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq3 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Concordo($concordoq3); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q3 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq3 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Neutro($neutroq3);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q3 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao",2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq3 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3Discordo($discordoq3);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q3 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
          
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq3 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ3DiscordoFortemente($discordoFortementeq3);
            }

            //-------------------- ITEM 4 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q4 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq4 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4ConcordoFortemente($concordoFortementeq4);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q4 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq4 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Concordo($concordoq4); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q4 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq4 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Neutro($neutroq4);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q4 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq4 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4Discordo($discordoq4);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q4 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq4 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ4DiscordoFortemente($discordoFortementeq4);
            }


            //-------------------- ITEM 5 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q5 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq5 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5ConcordoFortemente($concordoFortementeq5);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q5 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq5 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Concordo($concordoq5); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q5 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq5 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Neutro($neutroq5);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q5 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq5 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5Discordo($discordoq5);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q5 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq5 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ5DiscordoFortemente($discordoFortementeq5);
            }

            //-------------------- ITEM 6 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q6 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq6 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6ConcordoFortemente($concordoFortementeq6);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q6 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq6 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Concordo($concordoq6); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q6 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq6 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Neutro($neutroq6);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q6 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq6 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6Discordo($discordoq6);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q6 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq6 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ6DiscordoFortemente($discordoFortementeq6);
            }

            //-------------------- ITEM 7 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q7 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq7 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7ConcordoFortemente($concordoFortementeq7);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q7 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq7 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Concordo($concordoq7); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q7 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq7 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Neutro($neutroq7);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q7 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq7 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7Discordo($discordoq7);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q7 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq7 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ7DiscordoFortemente($discordoFortementeq7);
            }

            //-------------------- ITEM 8 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q8 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq8 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8ConcordoFortemente($concordoFortementeq8);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q8 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq8 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Concordo($concordoq8); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q8 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao",2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq8 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Neutro($neutroq8);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q8 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq8 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8Discordo($discordoq8);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q8 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq8 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ8DiscordoFortemente($discordoFortementeq8);
            }
            //-------------------- ITEM 9 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q9 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq9 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9ConcordoFortemente($concordoFortementeq9);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q9 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq9 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9Concordo($concordoq9); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q9 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq9 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9Neutro($neutroq9);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q9 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq9 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9Discordo($discordoq9);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q9 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq9 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ9DiscordoFortemente($discordoFortementeq9);
            }
            //-------------------- ITEM 10 --------------------------------
            //----------------Concordo Fortemente--------------------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordoFortemente FROM tb_aluno_questoes 
            WHERE q10 = 5 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoFortementeq10 = ($d['concordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10ConcordoFortemente($concordoFortementeq10);
            }
            //------------------ConcordO-----------------------
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS concordo FROM tb_aluno_questoes 
            WHERE q10 = 4 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $concordoq10 = ($d['concordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10Concordo($concordoq10); 
            }
            //neutro 
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS neutro FROM tb_aluno_questoes 
            WHERE q10 = 3 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $neutroq10 = ($d['neutro']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10Neutro($neutroq10);
            }
            //discordoq1
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordo FROM tb_aluno_questoes 
            WHERE q10 = 2 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoq10 = ($d['discordo']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10Discordo($discordoq10);
            }
            //discordo Fortemente
            $sql = $this->conn->prepare("SELECT COUNT(aluno) AS discordoFortemente FROM tb_aluno_questoes 
            WHERE q10 = 1 AND codTipoQuestao = :tipoQuestao AND codEstrategia = :codEstrategia");
            
            $sql->bindValue(":tipoQuestao", 2);
            $sql->bindValue(":codEstrategia", $estrategia);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $d = $sql->fetch();
                $discordoFortementeq10 = ($d['discordoFortemente']/$grafico->getNEstudante()) * 100;
                $grafico->setQ10DiscordoFortemente($discordoFortementeq10);
            }
        return $grafico;
    }
}

?>