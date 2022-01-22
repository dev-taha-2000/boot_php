<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="main.css"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>      
 </head>                                     
  <body>                                        
                     
                     <?php
                    
                          $students=array(
                            array( 
                            'title'=>'Name', 
                            'items'=>'username',  
                            'items'=>'username',  
                            'items'=>'username',   
                            'items'=>'username',   
                          ),
                          array (  
                            'title'=>'Email',
                            'items_b'=>'user@gmail.com',  
                            'items_b'=>'user@gmail.com',  
                            'items_b'=>'user@gmail.com',   
                            'items_b'=>'user@gmail.com',  
                          ), 
                          array (  
                            'title'=>'Phone',
                            'items_c'=>7305477760,  
                            'items_c'=>7305477760,  
                            'items_c'=>7305477760,   
                            'items_c'=>7305477760, 
                          ),                           
                          array (  
                            'title'=>'Enroll Number ', 
                            'items_d'=>73054777612345,  
                            'items_d'=>73054777612345,  
                            'items_d'=>73054777612345,   
                            'items_d'=>73054777612345,  
                          ), 

                          array (  
                            'title'=>'Date of admission', 
                            'items_f'=>'05-jan,2022',  
                            'items_f'=>'05-jan,2022',  
                            'items_f'=>'05-jan,2022',  
                            'items_f'=>'05-jan,2022',   
                  
                          ), 
                         

                        );  
                        
                           
            
                    ?> 
                <div class="table-responsive">

                    
                   <table class="table">
                          <thead>
                            <tr>   
                              <td></td>
                              <td scope="col"> <?php echo $students[0]['title']  ?></td> 
                              <td scope="col"> <?php echo $students[1]['title']  ?> </td>
                              <td scope="col"> <?php echo $students[2]['title']  ?></td>
                              <td scope="col"><?php echo $students[3]['title']  ?></td>
                              <td scope="col"><?php echo $students[4]['title']  ?></td> 
                             
                            </tr> 
                          </thead>
                          <tbody> 
                            <tr> 
                            <td> <img src="svg/imgdach.svg" alt=""></td>
                              <td ><?php echo $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_f']  ?></td>
                              <td>
                              <div class="ml-5 mt-2"> 
                                        <img   src="svg/modifier.svg" alt="image" class="ml-2"> 
                                        <img  src="svg/suprimer.svg" alt="image" class="ml-2">  
                                      </div> 
                              </td>
                            </tr>
                            <tr>
                            <td> <img src="svg/imgdach.svg" alt=""></td>

                            <td ><?php echo $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_f']  ?></td>
                              <td>
                              <div class="ml-5 mt-2"> 
                                        <img   src="svg/modifier.svg" alt="image" class="ml-2"> 
                                        <img  src="svg/suprimer.svg" alt="image" class="ml-2">  
                                      </div> 
                              </td>
                            </tr>
                            <tr>
                            <td> <img src="svg/imgdach.svg" alt=""></td>

                            <td ><?php echo $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_f']  ?></td>
                              <td>
                              <div class="ml-5 mt-2"> 
                                        <img   src="svg/modifier.svg" alt="image" class="ml-2"> 
                                        <img  src="svg/suprimer.svg" alt="image" class="ml-2">  
                                      </div> 
                              </td>
                            </tr>
                            <tr>
                            <td> <img src="svg/imgdach.svg" alt=""></td>
                            <td ><?php echo $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_f']  ?></td>
                              <td>
                              <div class="ml-5 mt-2"> 
                                        <img   src="svg/modifier.svg" alt="image" class="ml-2"> 
                                        <img  src="svg/suprimer.svg" alt="image" class="ml-2">  
                                      </div> 
                              </td> 
                            </tr>
                            <tr>
                           
                          </tbody>
            </div>       </table>
                    
       </body>               
 </html> 