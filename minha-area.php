<?php
require('conexao.php');

if(empty($_SESSION['email'])){
?>
<script type="text/javascript">window.location.href="index.php"</script>
<?php
}
?>

<h1>minha area</h1>