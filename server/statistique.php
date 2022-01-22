<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css"> 
    <title>statistique</title>   
</head>
<body>
    <div class="container-fluide" style="width: 100%;">
                   <?php 
                     include ('header.html');     
                    
                    ?> 
        
        <div class="row" style="height: 100vh;">   
                  
                 <?php                            
                 include ('aside.html');
                 ?>  
               <div class="col-12 col-lg-10"> 

                        <!-- /////////////////////////////////////////nevbar///////////////////////// -->
                        
                        <nav class="navbar ">   
                            <div class="container-fluid"> 
                            <img src="svg/flish.svg" alt="image"> 
                            <form class="d-flex"> 
                                <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">  
                                <img src="svg/recherche.svg" style="position: relative;right:30px">
                            <img src="svg/run.svg" alt="image"> 
                            </form>
                            </div> 
                        </nav> 
                        <!-- ///////////////////////////////////////////////////////////////////////// -->
                          
                        <main> 
                             <?php
                             
                              include('array.php');
                             ?>
                        </main> 

               </div> 
                 

                     


               <!-- /////////////////////////////////////////////////////////////////////// -->
        </div> 
                 
              
    </div>

  

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html> 