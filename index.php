<html>
   <head>
      <title>Online PHP Script Execution</title>      
   </head>
   
   <body>
      
      <?php
         // echo "<h1>Hello, PHP!</h1>";

         // $numbers = array( 1, 2, 3, 4, 5);
         // echo $numbers[0];

      	// (1, 2, 3, 4, 5, 6)

      	// (6, 5, 4, 3, 2, 1)   // dibalik urutannya
      	// (6, 5, 4, 3, 2)		// dihapus belakangnya
      	// (8, 5, 4, 3, 2)		// diganti depannya dengan 8
      	// (8, 5, 4, 3, 0)		// diganti belakangnya dengan 0

      	// (8, 5, 4, 3, 0)

      		// 1 2 3 4 5 6
      		// 1 2 3 4 5
      		// 1 2 3 4 5 8
      		// 8 5 4 3 2 1
      		// 8 5 4 3
      		// 8 5 4 3 0



      	$stack = array( 1, 2, 3, 4, 5, 6);
      	$a = array_slice($stack, 2);
      	array_unshift($a, 0);
      	array_pop($a);
      	array_push($a, 8);
      	$reverse = array_reverse($a);



		print_r($reverse);
		// print_r($a);

      ?>
   
   </body>
</html>