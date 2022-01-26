<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$estrategias = $estrategiaDao->findAllAvall();

?>
<h1>Todas as Estratégias</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">COD</th>
      <th scope="col">Nome</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($estrategias as $estrategia):?>
        
        <tr>
          <th scope="row"><?= $estrategia->getCod();?></th>
          <td><?=$estrategia->getNome()?></td>
          <td>
              <?php if($estrategia->getStatus() == 0):?>
                Não Avaliado
              <?php elseif($estrategia->getStatus() == 2):?>  
                Não aprovado
              <?php elseif($estrategia->getStatus() == 3):?>  
                Necessito de mais informações
              <?php endif ?>
          </td>
          <td>
                  
                  <?php if(isset($_SESSION['tipoUsuario']) && !empty($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1):?>
                    <a href="avaliar.php?cod=<?=$estrategia->getCod()?>"><i class="fas fa-book-reader"></i>AVALIAR</a>
                  <?php else:?>
                     EDITAR / EXCLUIR
    
                  <?php endif?>
          </td>
        </tr>
    <?php endforeach;?>
    
  </tbody>
</table>