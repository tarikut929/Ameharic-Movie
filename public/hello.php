<html>
<head>
      <title>Hello World</title>
   </head>
   <body>
      <?php echo "Hello, World!";
      define("MIN",49);
      echo MIN;
      $name = "tariku";
      echo $name;
      print("________tariku $name <br>______");
      
      if (FALSE){
         print("this");
      }else{
         print("not this");
      }

      for ($n = 0; $n < 10; $n++ ){
         echo $n;
      }

      print("<br>");
      $mama = array(1,2,4);
      $mama [3] = 5;
      foreach($mama as $m){
         print("$m <br>");
      }


      ?>
   </body>
</html>