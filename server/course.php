<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css"> 
    <title>cource</title>  
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
               <div class="col-lg-10 ">

                        
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
                          
                             <main style="height:125vh; background-color: #eef0f0;margin: 0px;margin-left: -14px; margin-right: -14px;padding: 20px;">   
                            <div class=" h-80 " style="width: 97%; "> 
                                <img src="svg/student_list.svg" alt="image">  
                                <div class=" d-inline-block float-right rounded-3 " style="background-color: #00C1FE;width: 200px;">
                                    <p class="text-light text-center" style="height: 16px;">ADD NEW STUDENT</p> 

                                </div>
                                 
                           </div>

                            <?php
                                  include ('arrayb.php'); 
                            
                            ?>

                     


          </div>   
                 
              
    </div>

  

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>