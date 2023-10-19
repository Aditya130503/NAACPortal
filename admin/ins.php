<?php 
include('conn.php');
                         
                        if (isset($_POST['submit']))
                        {      $curricularPlanning = $_POST['cur'];
                         $link = $_POST['link'];                                 
                        if (isset($_FILES['pdf_file']['name'])) 
                        { 
                        // If the ‘pdf_file’ field has an attachment
                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $insertquery = 
                            "INSERT INTO eval_data(curricular_planning,additional_info,link) VALUES('$curricularPlanning','$file_name','$link')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:1.2.php");
                           };     
                          }
                         }

                      

if (isset($_POST['sub']))
                        {                    $vac = $_POST['vac'];
                        $pvac = $_POST['pvac'];
                        $twotwo = $_POST['22-23'];
                        $twoone = $_POST['21-22'];
                        $zeroone = $_POST['20-21'];
                        $onenine = $_POST['19-20'];
                        $oneeight = $_POST['18-19'];
                                           
                        if (isset($_FILES['supp']['name'])&& isset($_FILES['instdata']['name'])&& isset($_FILES['supp1']['name'])&& isset($_FILES['instdata1']['name'])) 
                        { 
                        // If the ‘pdf_file’ field has an attachment
                            $file_name = $_FILES['supp']['name'];
                            $file_tmp = $_FILES['supp']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $fil_name = $_FILES['instdata']['name'];
                            $fil_tmp = $_FILES['instdata']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            $fi_name = $_FILES['supp1']['name'];
                            $fi_tmp = $_FILES['supp1']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            $f_name = $_FILES['instdata1']['name'];
                            $f_tmp = $_FILES['instdata1']['tmp_name'];
                            move_uploaded_file($f_tmp,"./pdf/".$f_name);
                           
                            $insertquery = 
                            "INSERT INTO acad_flex(Add_on_certi,supp_doc,inst_data,percentage_student,No_stud_2022_23,2021_22,2020_21,2019_20,2018_19,no_supp_doc,no_inst_data) VALUES('$vac','$file_name','$fil_name','$pvac','$twotwo','$twoone','$zeroone','$onenine','$oneeight','$fi_name','$f_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:1.3.php");
                           };     
                          }
                         }

if (isset($_POST['submit1']))
                        {     $pec = $_POST['pec'];
                        
                        $link2 = $_POST['link2'];
                        $intern = $_POST['intern'];
                        $intern1 = $_POST['intern1'];
                        
                                           
                        if (isset($_FILES['add2']['name'])&& isset($_FILES['add3']['name'])&& isset($_FILES['instdata2']['name'])) 
                        { 
                        // If the ‘pdf_file’ field has an attachment
                            $file_name = $_FILES['add2']['name'];
                            $file_tmp = $_FILES['add2']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            
                            $fi_name = $_FILES['add3']['name'];
                            $fi_tmp = $_FILES['add3']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            $f_name = $_FILES['instdata2']['name'];
                            $f_tmp = $_FILES['instdata2']['tmp_name'];
                            move_uploaded_file($f_tmp,"./pdf/".$f_name);
                           
                            $insertquery = 
                            "INSERT INTO Ethics(pec,additionalInfo,link,percentage_student,No_stud,supp_doc,inst_data) VALUES('$pec','$file_name','$link2','$intern','$intern1','$fi_name','$f_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:1.4.php");
                           };     
                          }
                         }                         
                     
if (isset($_POST['submit2']))
                        {     $fb = $_POST['y'];
                                
                        
                       if (isset($_FILES['add3']['name']))
                       {
                         $file_name = $_FILES['add3']['name'];
                            $file_tmp = $_FILES['add3']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                       $insertquery = 
                            "INSERT INTO feedback(fb,supp_doc) VALUES('$fb','$file_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:2.1,2.2.php");
                           };          
                       }
                   }

if (isset($_POST['submit3']))
                        {     $ep = $_POST['ep'];
                              $sa = $_POST['21_22'];
                              $sa1 = $_POST['20_21'];
                              $sa2 = $_POST['19_20'];
                              $sa3 = $_POST['18_19'];
                              $sa4 = $_POST['17_18'];
                              $ss = $_POST['2021_22'];
                              $ss1 = $_POST['2020_21'];
                              $ss2 = $_POST['2019_20'];
                              $ss3 = $_POST['2018_19'];
                              $ss4 = $_POST['2017_18'];
                              $sf = $_POST['sf']; 
                              $rc = $_POST['2021-22'];
                              $rc1 = $_POST['2020-21'];
                              $rc2 = $_POST['2019-20'];
                              $rc3 = $_POST['2018-19'];
                              $rc4 = $_POST['2017-18'];
                              $nos = $_POST['nos'];
                              $nos1 = $_POST['nos1'];
                              $nos2 = $_POST['nos2'];
                              $nos3 = $_POST['nos3'];
                              $nos4 = $_POST['nos4']; 
                              $str=$_POST['str'];
                                
                        
                       if (isset($_FILES['add4']['name'])&&isset($_FILES['instdata3']['name'])&&isset($_FILES['add5']['name'])&&isset($_FILES['instdata4']['name']))
                       {
                         $file_name = $_FILES['add4']['name'];
                            $file_tmp = $_FILES['add4']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $fil_name = $_FILES['instdata3']['name'];
                            $fil_tmp = $_FILES['instdata3']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            $fi_name = $_FILES['add5']['name'];
                            $fi_tmp = $_FILES['add5']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            $f_name = $_FILES['instdata4']['name'];
                            $f_tmp = $_FILES['instdata4']['tmp_name'];
                            move_uploaded_file($f_tmp,"./pdf/".$f_name);
                            

                       $insertquery = 
                            "INSERT INTO teaching_learning_eval(ep,21_22,20_21,19_20,18_19,17_18,ss_2021_22,2020_21,2019_20,2018_19,2017_18,additional,inst_data,perc_seats_filled,rc_2021_2022,2020_2021,2019_2020,2018_2019,2017_2018,nos_21_22,nos_20_21,nos_19_20,nos_18_19,nos_17_18,supp_doc,nos_inst_data,s_t_ratio) VALUES('$ep',$sa','$sa1','$sa2','$sa3','$sa4','$ss','$ss1','$ss2','$ss3','$ss4','$file_name','fil_name','$sf','$rc','$rc1','$rc2','$rc3','$rc4','$nos','$nos1','$nos2','$nos3','$nos4','$fi_name','$f_name','$str')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:2.3.php");
                           };          
                       }
                   }                   

?> 
                    
                         
            
            
