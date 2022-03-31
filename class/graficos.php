<?php
class Grafico{
    private $nomeTurma;
    private $universidade;
    private $curso;
    private $componente;
    private $pontosPositivos;
    private $pontosNegativos;
    private $nEstudante;

    private $q1concordoFortemente;
    private $q1concordo;
    private $q1neutro;
    private $q1discordo;
    private $q1discordoFortemente;

    private $q2concordoFortemente;
    private $q2concordo;
    private $q2neutro;
    private $q2discordo;
    private $q2discordoFortemente;

    private $q3concordoFortemente;
    private $q3concordo;
    private $q3neutro;
    private $q3discordo;
    private $q3discordoFortemente;

    private $q4concordoFortemente;
    private $q4concordo;
    private $q4neutro;
    private $q4discordo;
    private $q4discordoFortemente;

    private $q5concordoFortemente;
    private $q5concordo;
    private $q5neutro;
    private $q5discordo;
    private $q5discordoFortemente;

    private $q6concordoFortemente;
    private $q6concordo;
    private $q6neutro;
    private $q6discordo;
    private $q6discordoFortemente;

    private $q7concordoFortemente;
    private $q7concordo;
    private $q7neutro;
    private $q7discordo;
    private $q7discordoFortemente;

    private $q8concordoFortemente;
    private $q8concordo;
    private $q8neutro;
    private $q8discordo;
    private $q8discordoFortemente;

    private $q9concordoFortemente;
    private $q9concordo;
    private $q9neutro;
    private $q9discordo;
    private $q9discordoFortemente;

    private $q10concordoFortemente;
    private $q10concordo;
    private $q10neutro;
    private $q10discordo;
    private $q10discordoFortemente;


    public function setNomeTurma($x){$this->nomeTurma = $x;}
    public function setUniversidade($x){$this->universidade = $x;}
    public function setCurso($x){$this->curso = $x;}
    public function setComponente($x){$this->componente = $x;}
    public function setPontosPositivos($x){$this->pontosPositivos = $x;}
    public function setPontosNegativos($x){$this->pontosNegativos = $x;}
    public function setNEstudante($x){$this->nEstudante = $x;}

    public function setQ1ConcordoFortemente($x){$this->q1concordoFortemente = $x;}
    public function setQ1Concordo($x){$this->q1concordo = $x;}
    public function setQ1Neutro($x){$this->q1neutro = $x;}
    public function setQ1Discordo($x){$this->q1discordo = $x;}
    public function setQ1DiscordoFortemente($x){$this->q1discordoFortemente  = $x;}
    
    public function setQ2ConcordoFortemente($x){$this->q2concordoFortemente = $x;}
    public function setQ2Concordo($x){$this->q2concordo = $x;}
    public function setQ2Neutro($x){$this->q2neutro = $x;}
    public function setQ2Discordo($x){$this->q2discordo = $x;}
    public function setQ2DiscordoFortemente($x){$this->q2discordoFortemente  = $x;}

    public function setQ3ConcordoFortemente($x){$this->q3concordoFortemente = $x;}
    public function setQ3Concordo($x){$this->q3concordo = $x;}
    public function setQ3Neutro($x){$this->q3neutro = $x;}
    public function setQ3Discordo($x){$this->q3discordo = $x;}
    public function setQ3DiscordoFortemente($x){$this->q3discordoFortemente  = $x;}
    

    public function setQ4ConcordoFortemente($x){$this->q4concordoFortemente = $x;}
    public function setQ4Concordo($x){$this->q4concordo = $x;}
    public function setQ4Neutro($x){$this->q4neutro = $x;}
    public function setQ4Discordo($x){$this->q4discordo = $x;}
    public function setQ4DiscordoFortemente($x){$this->q4discordoFortemente  = $x;}

    public function setQ5ConcordoFortemente($x){$this->q5concordoFortemente = $x;}
    public function setQ5Concordo($x){$this->q5concordo = $x;}
    public function setQ5Neutro($x){$this->q5neutro = $x;}
    public function setQ5Discordo($x){$this->q5discordo = $x;}
    public function setQ5DiscordoFortemente($x){$this->q5discordoFortemente  = $x;}

    public function setQ6ConcordoFortemente($x){$this->q6concordoFortemente = $x;}
    public function setQ6Concordo($x){$this->q6concordo = $x;}
    public function setQ6Neutro($x){$this->q6neutro = $x;}
    public function setQ6Discordo($x){$this->q6discordo = $x;}
    public function setQ6DiscordoFortemente($x){$this->q6discordoFortemente  = $x;}

    public function setQ7ConcordoFortemente($x){$this->q7concordoFortemente = $x;}
    public function setQ7Concordo($x){$this->q7concordo = $x;}
    public function setQ7Neutro($x){$this->q7neutro = $x;}
    public function setQ7Discordo($x){$this->q7discordo = $x;}
    public function setQ7DiscordoFortemente($x){$this->q7discordoFortemente  = $x;}
    

    public function setQ8ConcordoFortemente($x){$this->q8concordoFortemente = $x;}
    public function setQ8Concordo($x){$this->q8concordo = $x;}
    public function setQ8Neutro($x){$this->q8neutro = $x;}
    public function setQ8Discordo($x){$this->q8discordo = $x;}
    public function setQ8DiscordoFortemente($x){$this->q8discordoFortemente  = $x;}

    public function setQ9ConcordoFortemente($x){$this->q9concordoFortemente = $x;}
    public function setQ9Concordo($x){$this->q9concordo = $x;}
    public function setQ9Neutro($x){$this->q9neutro = $x;}
    public function setQ9Discordo($x){$this->q9discordo = $x;}
    public function setQ9DiscordoFortemente($x){$this->q9discordoFortemente  = $x;}

    public function setQ10ConcordoFortemente($x){$this->q10concordoFortemente = $x;}
    public function setQ10Concordo($x){$this->q10concordo = $x;}
    public function setQ10Neutro($x){$this->q10neutro = $x;}
    public function setQ10Discordo($x){$this->q10discordo = $x;}
    public function setQ10DiscordoFortemente($x){$this->q10discordoFortemente  = $x;}

    public function getNomeTurma(){return $this->nomeTurma;}
    public function getUniversidade(){return $this->universidade;}
    public function getCurso(){return $this->curso;}
    public function getComponente(){return $this->componente;}
    public function getPontosPositivos(){return $this->pontosPositivos;}
    public function getPontosNegativos(){return $this->pontosNegativos;}
    public function getNEstudante(){return $this->nEstudante;}

    public function getQ1ConcordoFortemente(){return number_format($this->q1concordoFortemente, 2);}
    public function getQ1Concordo(){return number_format($this->q1concordo,2);}
    public function getQ1Neutro(){return number_format($this->q1neutro,2);}
    public function getQ1Discordo(){return number_format($this->q1discordo,2);}
    public function getQ1DiscordoFortemente(){return number_format($this->q1discordoFortemente,2);}

    public function getQ2ConcordoFortemente(){return number_format($this->q2concordoFortemente,2);}
    public function getQ2Concordo(){return number_format($this->q2concordo,2);}
    public function getQ2Neutro(){return number_format($this->q2neutro,2);}
    public function getQ2Discordo(){return number_format($this->q2discordo,2);}
    public function getQ2DiscordoFortemente(){return number_format($this->q2discordoFortemente,2);}

    public function getQ3ConcordoFortemente(){return number_format($this->q3concordoFortemente,2);}
    public function getQ3Concordo(){return number_format($this->q3concordo,2);}
    public function getQ3Neutro(){return number_format($this->q3neutro,2);}
    public function getQ3Discordo(){return number_format($this->q3discordo,2);}
    public function getQ3DiscordoFortemente(){return number_format($this->q3discordoFortemente,2);}
    
    public function getQ4ConcordoFortemente(){return number_format($this->q4concordoFortemente,2);}
    public function getQ4Concordo(){return number_format($this->q4concordo,2);}
    public function getQ4Neutro(){return number_format($this->q4neutro,2);}
    public function getQ4Discordo(){return number_format($this->q4discordo,2);}
    public function getQ4DiscordoFortemente(){return number_format($this->q4discordoFortemente,2);}

    public function getQ5ConcordoFortemente(){return number_format($this->q5concordoFortemente,2);}
    public function getQ5Concordo(){return number_format($this->q5concordo,2);}
    public function getQ5Neutro(){return number_format($this->q5neutro,2);}
    public function getQ5Discordo(){return number_format($this->q5discordo,2);}
    public function getQ5DiscordoFortemente(){return number_format($this->q5discordoFortemente,2);}

    public function getQ6ConcordoFortemente(){return number_format($this->q6concordoFortemente,2);}
    public function getQ6Concordo(){return number_format($this->q6concordo,2);}
    public function getQ6Neutro(){return number_format($this->q6neutro,2);}
    public function getQ6Discordo(){return number_format($this->q6discordo,2);}
    public function getQ6DiscordoFortemente(){return number_format($this->q6discordoFortemente,2);}

    public function getQ7ConcordoFortemente(){return number_format($this->q7concordoFortemente,2);}
    public function getQ7Concordo(){return number_format($this->q7concordo,2);}
    public function getQ7Neutro(){return number_format($this->q7neutro,2);}
    public function getQ7Discordo(){return number_format($this->q7discordo,2);}
    public function getQ7DiscordoFortemente(){return number_format($this->q7discordoFortemente,2);}

    public function getQ8ConcordoFortemente(){return number_format($this->q8concordoFortemente,2);}
    public function getQ8Concordo(){return number_format($this->q8concordo,2);}
    public function getQ8Neutro(){return number_format($this->q8neutro,2);}
    public function getQ8Discordo(){return number_format($this->q8discordo,2);}
    public function getQ8DiscordoFortemente(){return number_format($this->q8discordoFortemente,2);}

    public function getQ9ConcordoFortemente(){return number_format($this->q9concordoFortemente,2);}
    public function getQ9Concordo(){return number_format($this->q9concordo,2);}
    public function getQ9Neutro(){return number_format($this->q9neutro,2);}
    public function getQ9Discordo(){return number_format($this->q9discordo,2);}
    public function getQ9DiscordoFortemente(){return number_format($this->q9discordoFortemente,2);}

    public function getQ10ConcordoFortemente(){return number_format($this->q10concordoFortemente,2);}
    public function getQ10Concordo(){return number_format($this->q10concordo,2);}
    public function getQ10Neutro(){return number_format($this->q10neutro,2);}
    public function getQ10Discordo(){return number_format($this->q10discordo,2);}
    public function getQ10DiscordoFortemente(){return number_format($this->q10discordoFortemente,2);}

}
interface GerarGrafico{
    public function graficoUnico1($turma, $estrategia, $tipoQuestao);
    public function graficoGeral1($cod);
    public function graficoGeral2($cod);
}
?>