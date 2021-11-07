
<!DOCTYPE html>

<html>

   <head>
      <style>
         table, th, td {
         border: 1px solid black;
         border-collapse: collapse;
         }
      </style>
   </head>

   <body>
     <main>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
         <div>
            Page title: <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>">   
         </div> 
         <div>
            <label for="color">Page color:</label>
            <select name="color" id="color">
               <option value="">--- Choose a color ---</option>
               <option value="red" <?php echo (isset($_POST['color']) && $_POST['color'] === 'red') ? 'selected' : ''; ?> >Red</option>
               <option value="green" <?php echo (isset($_POST['color']) && $_POST['color'] === 'green') ? 'selected' : ''; ?>>Green</option>
               <option value="blue" <?php echo (isset($_POST['color']) && $_POST['color'] === 'blue') ? 'selected' : ''; ?>>Blue</option>
            </select>
         </div>

         <div>
            table lenght: <input type="text" name="lenght" value="<?php echo $_POST['lenght'] ?? ''; ?>">   
         </div> 

         <div>
            table width: <input type="text" name="width" value="<?php echo $_POST['width'] ?? ''; ?>">   
         </div> 

         <div>
            <button type="submit">submit</button>
         </div>
      </form>

      <?php
         $color = filter_input(INPUT_POST, 'color');
         $name = filter_input(INPUT_POST, 'name');
         $lenght = filter_input(INPUT_POST, 'lenght');
         $width = filter_input(INPUT_POST, 'width');
         echo "<body style='background-color:$color'>"; 
      ?>

      <title>
         <?php 
            echo $name ; 
         ?>
      </title>

      <table>
         <?php 
            for($y = 0; $y <= $lenght; $y++){
               echo "<tr>";
                  for($x = 0 ; $x <= $width; $x++){
                     $z = $y + $x ;
                     echo "<th> $z </th>";
                  }
               echo "</tr>";
            }
         ?>
      </table>

     </main>
   </body>

</html>