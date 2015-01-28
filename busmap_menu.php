  

  

<!DOCTYPE html>
<html>
  <head>
    <!-- Your stuff -->
  
    <!-- Include Sidr bundled CSS theme -->
  <link rel="stylesheet" href="http://douglasmedina.com/busmap/sidr/jquery.sidr.dark.css">
    
  </head>
  <body>
    <!-- Your stuff -->

        <a id="simple-menu" href="#sidr">Toggle menu</a>
         
        <div id="sidr">
          <!-- Your content -->
          <ul>
            <li><a href="#">List 1</a></li>
            <li class="active"><a href="#">List 2</a></li>
            <li><a href="#">List 3</a></li>
          </ul>
        </div>
         
        <script>
        $(document).ready(function() {
          $('#simple-menu').sidr();
        });
        </script>
    
 
    <!-- Include jQuery -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <!-- Include the Sidr JS -->
    <script src="http://douglasmedina.com/busmap/sidr/jquery.sidr.min.js"></script>
      </body>
</html>