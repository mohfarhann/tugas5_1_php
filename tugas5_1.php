<html>
  <body>
    <?php

      $x = true;
      $y = false;

      $and1 = $y && $y;

     ?>
     <h1>tabel logika 1111</h1>
     <table border="1">
        <tr>
            <td>Input True</td>
            <td>Input 2</td>
            <td>AND</td>
            <td>OR</td>
        </tr>
        <tr>
            <td><?php var_export($y, false); ?></td>
            <td><?php var_export($y, false); ?></td>
            <td><?php printf("%b" ,$y && $y); ?></td>
            <td><?php printf("%b", $y || $y); ?></td>
        </tr>
        <tr>
            <td><?php var_export($y, false); ?></td>
            <td><?php var_export($x, false); ?></td>
            <td><?php printf("%b" ,$y && $x); ?></td>
            <td><?php printf("%b", $y || $x); ?></td>
        </tr>
        <tr>
            <td><?php var_export($x, false); ?></td>
            <td><?php var_export($y, false); ?></td>
            <td><?php printf("%b" ,$x && $y); ?></td>
            <td><?php printf("%b", $x || $y); ?></td>
        </tr>
        <tr>
            <td><?php var_export($x, false); ?></td>
            <td><?php var_export($x, false); ?></td>
            <td><?php printf("%b" ,$x && $x); ?></td>
            <td><?php printf("%b", $x || $x); ?></td>
        </tr>
     </table>
  </body>
</html>
