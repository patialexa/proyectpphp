<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php

print "<center><h1>TABLA DE MULTIPLICAR</h1></center><br>";
for ($f = 2; $f <= 12; $f++) {
    print "<center><h3>TABLA DEL " . $f.'</center></h3><br>';
    for ($c = 1; $c <= 10; $c++) {
        $p = $f * $c;
     

        $caja1 = "<input style='text-align:center;' type='text' value='$f' size='2'>";
        $caja2 = "<input style='text-align:center; color:blue;' type='text' value=' * ' size='2'>";
        $caja3 = "<input style='text-align:center;' type='text' value='$c' size='2'>";
        $caja4 = "<input style='text-align:center; color:blue;' type='text' value=' = ' size='2'>";
        $caja5 = "<input style='text-align:center; color:red;' type='text' value='$p' size='2'>";
        print '<center>' . $caja1 . $caja2 . $caja3 . $caja4 . $caja5 . '</center><br>';
    }
}
?>
