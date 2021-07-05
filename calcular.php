<?php
$lado1=$_POST['lado1'];
$lado2=$_POST['lado2'];
$base=$_POST['base'];
$altura=$_POST['altura'];

$area=$base*$altura/2;
$perimetro=$lado1+$lado2+$base;

?>
<script>
    alert('El Area del triangulo es: <?php echo $area ?> y su Perimetro es: <?php echo $perimetro ?>');
</script>

