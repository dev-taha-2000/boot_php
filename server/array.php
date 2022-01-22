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
                            'items'=>'DHS 500,000',  
                            'items'=>'DHS 500,000',  
                            'items'=>'DHS 500,000',   
                            'items'=>'DHS 500,000',  
                          ),
                          array (  
                            'title'=>'Payment Schedule',
                            'items_b'=>'first',  
                            'items_b'=>'first',  
                            'items_b'=>'first',   
                            'items_b'=>'first',  
                          ), 
                          array (  
                            'title'=>'Bill Number',
                            'items_c'=>00012223,  
                            'items_c'=>00012223,  
                            'items_c'=>00012223,   
                            'items_c'=>00012223, 
                          ),                           
                          array (  
                            'title'=>'Amount Paid ', 
                            'items_d'=>'DHS 100,000',  
                            'items_d'=>'DHS 100,000',  
                            'items_d'=>'DHS 100,000',   
                            'items_d'=>'DHS 100,000',  
                          ), 
                          array (  
                            'title'=>'balance amount', 
                            'items_e'=>'DHS 500,000',  
                            'items_e'=>'DHS 500,000',  
                            'items_e'=>'DHS 500,000',   
                            'items_e'=>'DHS 500,000',   
                          ), 
                          array (  
                            'title'=>'Date', 
                            'items_f'=>'05-jan,2022',  
                            'items_f'=>'05-jan,2022',  
                            'items_f'=>'05-jan,2022',  
                            'items_f'=>'05-jan,2022',   
                  
                          ), 
                        );  
                        
                           
            
                    ?> 
                   <table class="table">
                          <thead>
                            <tr>
                              <th scope="col"> <?php echo $students[0]['title']  ?></th> 
                              <th scope="col"> <?php echo $students[1]['title']  ?> </th>
                              <th scope="col"> <?php echo $students[2]['title']  ?></th>
                              <th scope="col"><?php echo $students[3]['title']  ?></th>
                              <th scope="col"><?php echo $students[4]['title']  ?></th>
                              <th scope="col"><?php echo $students[5]['title']  ?></th>
                            </tr> 
                          </thead>
                          <tbody> 
                            <tr>
                              <td ><?php echo $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_e']  ?></td>
                              <td><?php echo $students[5]['items_f']  ?></td>
                            </tr>
                            <tr>
                            <td ><?php echo  $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_e']  ?></td>
                              <td><?php echo $students[5]['items_f']  ?></td>
                            </tr>
                            <tr>
                            <td ><?php echo  $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_e']  ?></td>
                              <td><?php echo $students[5]['items_f']  ?></td>
                            </tr>
                            <tr>
                            <td ><?php echo  $students[0]['items']  ?></td>
                              <td><?php echo $students[1]['items_b']  ?></td>
                              <td><?php echo $students[2]['items_c']  ?></td>
                              <td><?php echo $students[3]['items_d']  ?></td>
                              <td><?php echo $students[4]['items_e']  ?></td>
                              <td><?php echo $students[5]['items_f']  ?></td>
                            </tr>
                          </tbody>
                        </table>
                    
       </body>               
 </html> 