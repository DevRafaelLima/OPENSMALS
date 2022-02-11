<?php
require("conexao.php");
require("dao/EstrategiaDaoMysql.php");
$conexao = new Conexao();
$estrategiaDao = new EstrategiaDaoMysql($conexao);
$estrategias = $estrategiaDao->findAllCod($_SESSION['cod']);


?>
<h1>Minhas Estratégias</h1>
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
              <?php if($estrategia->getStatus() == 1):?>
                esperando avaliação
              <?php elseif($estrategia->getStatus() == 2):?>  
                Aprovado
              <?php else:?>  
                Não Aprovado
              <?php endif ?>
          </td>
          <td>
                  
                  <?php if(isset($_SESSION['tipoUsuario']) && !empty($_SESSION['tipoUsuario']) && $_SESSION['tipoUsuario'] == 1):?>
                    <a href=""><i class="fas fa-book-reader"></i>AVALIAR - </a>
                    <a href="editar.php?cod=<?=$estrategia->getCod()?>"><i class="fas fa-edit"></i>EDITAR - </a>                        
                    <a href="excluir.php?cod=<?=$estrategia->getCod()?>"><i class="far fa-trash-alt"></i>EXCLUIR</a>
                  <?php else:?>
                    <a href="editar.php?cod=<?=$estrategia->getCod()?>"><i class="fas fa-edit"></i>EDITAR - </a>                        
                    <a href="excluir.php?cod=<?=$estrategia->getCod()?>"><i class="far fa-trash-alt"></i>EXCLUIR</a>    
                  <?php endif?>
          </td>
        </tr>
    <?php endforeach;?>
    
  </tbody>
</table>