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

if (isset($_POST['submit4']))
                        {     $teach = $_POST['tl'];
                              $link3 = $_POST['link3'];
                                
                        
                       if (isset($_FILES['add6']['name']))
                       {
                         $file_name = $_FILES['add6']['name'];
                            $file_tmp = $_FILES['add6']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                       $insertquery = 
                            "INSERT INTO teach_learn_proce(tl,additional,link) VALUES('$teach','$file_name','$link3')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:2.4.php");
                           };          
                       }
                   }

if (isset($_POST['submit5']))
                        {      $pt = $_POST['pt'];
                               $sp=$_POST['sp'];
                               $sp1=$_POST['sp1'];
                               $sp2=$_POST['sp2'];
                               $sp3=$_POST['sp3'];
                               $sp4=$_POST['sp4'];
                               $s=$_POST['s'];
                               $nsp=$_POST['nsp'];
                               $nsp1=$_POST['nsp1'];
                               $nsp2=$_POST['nsp2'];
                               $nsp3=$_POST['nsp3'];
                               $nsp4=$_POST['nsp4'];
                                                        
                        if (isset($_FILES['add7']['name'])&&isset($_FILES['add8']['name'])&&isset($_FILES['instdata5']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add7']['name'];
                            $file_tmp = $_FILES['add7']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $fil_name = $_FILES['add8']['name'];
                            $fil_tmp = $_FILES['add8']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            $fi_name = $_FILES['instdata5']['name'];
                            $fi_tmp = $_FILES['instdata5']['tmp_name'];
                            
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            $insertquery = 
                            "INSERT INTO tpq(ftt,nsp_21_22,nsp_20_21,nsp_19_20,nsp_18_19,nsp_17_18,supp_doc,pfts,nfts_21_22,nfts_20_21,nfts_19_20,nfts_18_19,nfts_17_18,nfts_supp,inst_data) VALUES('$pt','$sp','$sp1','$sp2','$sp3','$sp4','$file_name','$s','$nsp','$nsp1','$nsp2','$nsp3','$nsp4','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:2.5.php");
                           };     
                          }
                         }

if (isset($_POST['submit6']))
                        {     $epr = $_POST['epr'];
                              $link4 = $_POST['link4'];
                                
                        
                       if (isset($_FILES['add9']['name']))
                       {
                         $file_name = $_FILES['add9']['name'];
                            $file_tmp = $_FILES['add9']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                       $insertquery = 
                            "INSERT INTO eval_proce(epr,additional,link) VALUES('$epr','$file_name','$link4')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:2.6.php");
                           };          
                       }
                   }

if (isset($_POST['submit7']))
                        {     $splo = $_POST['splo'];
                              $link5 = $_POST['link5'];
                              $ppsd = $_POST['ppsd'];
                              $pass = $_POST['pass'];
                              $pass1 = $_POST['pass1'];
                              $pass2 = $_POST['pass2'];
                              $pass3 = $_POST['pass3'];
                              $pass4 = $_POST['pass4'];
                              $appear = $_POST['appear'];
                              $appear1 = $_POST['appear1'];
                              $appear2 = $_POST['appear2'];
                              $appear3 = $_POST['appear3'];
                              $appear4 = $_POST['appear4'];
                                
                        
                       if (isset($_FILES['add10']['name'])&&isset($_FILES['add11']['name'])&&isset($_FILES['instdata6']['name']))
                       {
                         $file_name = $_FILES['add10']['name'];
                            $file_tmp = $_FILES['add10']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['add11']['name'];
                            $fil_tmp = $_FILES['add11']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);

                            $fi_name = $_FILES['instdata6']['name'];
                            $fi_tmp = $_FILES['instdata6']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);

                       $insertquery = 
                            "INSERT INTO stud_perf_lear_out(poco,additional,link,ppsd,pass_21_22,pass_20_21,pass_19_20,pass_18_19,pass_17_18,appear_21_22,appear_20_21,appear_19_20,appear_18_19,appear_17_18,supp_doc,inst_data) VALUES('$splo','$file_name','$link5','$ppsd','$pass','$pass1','$pass2','$pass3','$pass4','$appear','$appear1','$appear2','$appear3','$appear4','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:2.7.php");
                           };          
                       }
                   }

if (isset($_POST['submit8']))
                        {     $oss = $_POST['oss'];                      
                        
                       if (isset($_FILES['add12']['name']))
                       {
                         $file_name = $_FILES['add12']['name'];
                            $file_tmp = $_FILES['add12']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                       $insertquery = 
                            "INSERT INTO stud_sati_sur(osss,db) VALUES('$oss','$file_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:3.1.php");
                           };          
                       }
                   }

if (isset($_POST['submit9']))
                        {     $gr= $_POST['gr'];  
                              $gr1= $_POST['gr1'];  
                              $gr2= $_POST['gr2'];  
                              $gr3= $_POST['gr3'];  
                              $gr4= $_POST['gr4'];  
                              $gr5= $_POST['gr5'];
                                  

                        
                       if (isset($_FILES['add13']['name'])&&isset($_FILES['instdata7']['name']))
                       {
                         $file_name = $_FILES['add13']['name'];
                            $file_tmp = $_FILES['add13']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $fil_name = $_FILES['instdata7']['name'];
                            $fil_tmp = $_FILES['instdata7']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);

                       $insertquery = 
                            "INSERT INTO research(gr,gr21_22,gr20_21,gr19_20,gr18_19,gr17_18,supp_doc,inst_data) VALUES('$gr','$gr1','$gr2','$gr3','$gr4','$gr5',$file_name','$fil_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:3.2.php");
                           };          
                       }
                   }                   

if (isset($_POST['submit10']))
                        {      $ie = $_POST['ie'];
                               $link6=$_POST['link6'];
                               $now=$_POST['now'];
                               $now21_22=$_POST['now21_22'];
                               $now20_21=$_POST['now20_21'];
                               $now19_20=$_POST['now19_20'];
                               $now18_19=$_POST['now18_19'];
                               $now17_18=$_POST['now17_18'];
                                                        
                        if (isset($_FILES['add14']['name'])&&isset($_FILES['add15']['name'])&&isset($_FILES['instdata8']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add14']['name'];
                            $file_tmp = $_FILES['add14']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $fil_name = $_FILES['add15']['name'];
                            $fil_tmp = $_FILES['add15']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            $fi_name = $_FILES['instdata8']['name'];
                            $fi_tmp = $_FILES['instdata8']['tmp_name'];
                            
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            $insertquery = 
                            "INSERT INTO innovation(eco,additional,link,now,now21_22,now20_21,now19_20,now18_19,now17_18,supp_doc,inst_data) VALUES('$ie','$file_name','$link6','$now','$now21_22','$now20_21','$now19_20','$now18_19','$now17_18','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:3.3.php");
                           };     
                          }
                         }

if (isset($_POST['submit11']))
                        {      $rp = $_POST['rp'];
                               $rp21_22=$_POST['rp21_22'];
                               $rp20_21=$_POST['rp20_21'];
                               $rp19_20=$_POST['rp19_20'];
                               $rp18_19=$_POST['rp18_19'];
                               $rp17_18=$_POST['rp17_18'];
                               $link7=$_POST['link7'];
                               $nbc=$_POST['nbc'];
                               $nbc1=$_POST['nbc1'];
                               $nbc2=$_POST['nbc2'];
                               $nbc3=$_POST['nbc3'];
                               $nbc4=$_POST['nbc4'];
                               $nbc5=$_POST['nbc5'];
                               
                                                        
                        if (isset($_FILES['add16']['name'])&&isset($_FILES['add17']['name'])&&isset($_FILES['instdata9']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add16']['name'];
                            $file_tmp = $_FILES['add16']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $fil_name = $_FILES['add17']['name'];
                            $fil_tmp = $_FILES['add17']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            $fi_name = $_FILES['instdata9']['name'];
                            $fi_tmp = $_FILES['instdata9']['tmp_name'];
                            
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            $insertquery = 
                            "INSERT INTO res_publi(rp,rp21_22,rp20_21,rp19_20,rp18_19,rp17_18,additional,link,nbc,nbc21_22,nbc20_21,nbc19_20,nbc18_19,nbc17_18,addi,inst_data) VALUES('$rp','$rp21_22','$rp20_21','$rp19_20','$rp18_19','$rp17_18','$file_name','$link7','$nbc','$nbc1','$nbc2','$nbc3','$nbc4','$nbc5','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:3.4.php");
                           };     
                          }
                         }

if (isset($_POST['submit12']))
                        {      $ea = $_POST['ea'];
                               $nrp = $_POST['nrp'];
                               $link8 = $_POST['link8'];
                               $nep = $_POST['nep'];
                               $nep1 = $_POST['nep1'];
                               $nep2 = $_POST['nep2'];
                               $nep3 = $_POST['nep3'];
                               $nep4 = $_POST['nep4'];
                               $nep5 = $_POST['nep5'];
                               
                        
                               
                                                        
                        if (isset($_FILES['add18']['name'])&&isset($_FILES['add19']['name'])&&isset($_FILES['instdata10']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add18']['name'];
                            $file_tmp = $_FILES['add18']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            $fil_name = $_FILES['add19']['name'];
                            $fil_tmp = $_FILES['add19']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            $fi_name = $_FILES['instdata10']['name'];
                            $fi_tmp = $_FILES['instdata10']['tmp_name'];
                            
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            $insertquery = 
                            "INSERT INTO extension(ea,nrp,addi,link,nep,nep21_22,nep20_21,nep19_20,nep18_19,nep17_18,supp_doc,inst_data) VALUES('$ea','$nrp','$file_name','$link8','$nep','$nep1','$nep2','$nep3','$nep4','$nep5','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:3.5.php");
                           }; 
                          }
                         }

if (isset($_POST['submit13']))
                        {      $colab = $_POST['colab'];
                               $link9 = $_POST['link9'];                           
                                        
                        if (isset($_FILES['add20']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add20']['name'];
                            $file_tmp = $_FILES['add20']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            
                            $insertquery = 
                            "INSERT INTO collab(colab,addi,link) VALUES('$colab','$file_name','$link9')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:4.1.php");
                           }; 
                          }
                         }

if (isset($_POST['submit14']))
                        {      $ilr = $_POST['ilr'];
                               $poe = $_POST['poe'];
                               $eia = $_POST['eia'];
                               $eia1 = $_POST['eia1'];
                               $eia2 = $_POST['eia2'];
                               $eia3 = $_POST['eia3'];
                               $eia4 = $_POST['eia4'];
                               $eia5 = $_POST['eia5'];                         
                                        
                        if (isset($_FILES['add21']['name'])&&isset($_FILES['add22']['name'])&&isset($_FILES['instdata11']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add21']['name'];
                            $file_tmp = $_FILES['add21']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['add22']['name'];
                            $fil_tmp = $_FILES['add22']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);

                            $fi_name = $_FILES['instdata11']['name'];
                            $fi_tmp = $_FILES['instdata11']['tmp_name'];
                            
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);
                            
                            $insertquery = 
                            "INSERT INTO infra_learn(ilr,addi,poe,eia,eia21_22,eia20_21,eia19_20,eia18_19,eia17_18,supp_doc,inst_data) VALUES('$ilr','$file_name','$poe','$eia','$eia1','$eia2','$eia3','$eia4','$eia5','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:4.2.php");
                           }; 
                          }
                         }

if (isset($_POST['submit15']))
                        {      $lia = $_POST['lia'];                         
                                        
                        if (isset($_FILES['add23']['name'])&&isset($_FILES['instdata12']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add23']['name'];
                            $file_tmp = $_FILES['add23']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['instdata12']['name'];
                            $fil_tmp = $_FILES['instdata12']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            
                            $insertquery = 
                            "INSERT INTO libraray(lia,addi,inst) VALUES('$lia','$file_name','$fil_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:4.3.php");
                           }; 
                          }
                         }

if (isset($_POST['submit16']))
                        {      $update = $_POST['updates'];
                               $cr = $_POST['cr']; 
                               $ca = $_POST['ca'];                         
                                        
                        if (isset($_FILES['add24']['name'])&&isset($_FILES['add25']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add24']['name'];
                            $file_tmp = $_FILES['add24']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['add25']['name'];
                            $fil_tmp = $_FILES['add25']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            
                            $insertquery = 
                            "INSERT INTO it_infra(updates,addi,stud_comp_ratio,comp_avail,supp_doc) VALUES('$update','$file_name','$cr','$ca','$fil_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:4.4.php");
                           }; 
                          }
                         }

if (isset($_POST['submit17']))
                        {      $mci = $_POST['mci'];
                               $ei1 = $_POST['ei1'];
                               $ei2 = $_POST['ei2'];
                               $ei3 = $_POST['ei3'];
                               $ei4 = $_POST['ei4'];
                               $ei5 = $_POST['ei5']; 
                                                       
                                        
                        if (isset($_FILES['add26']['name'])&&isset($_FILES['instdata13']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add26']['name'];
                            $file_tmp = $_FILES['add26']['tmp_name'];
                            
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['instdata13']['name'];
                            $fil_tmp = $_FILES['instdata13']['tmp_name'];
                            
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            
                            $insertquery = 
                            "INSERT INTO maintain_it(mci,ei21_22,ei20_21,ei19_20,ei18_19,ei17_18,supp_doc,inst_data) VALUES('$mci','$ei1','$ei2','$ei3','$ei4','$ei5','$file_name','$fil_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:5.1.php");
                           }; 
                          }
                         }

if (isset($_POST['submit18']))
                        {      $sbsf = $_POST['sbsf'];
                               $sbsf1 = $_POST['sbsf1'];
                               $sbsf2 = $_POST['sbsf2'];
                               $sbsf3 = $_POST['sbsf3'];
                               $sbsf4 = $_POST['sbsf4'];
                               $sbsf5 = $_POST['sbsf5']; 
                               $cbse = $_POST['cbse'];
                               $sbgc = $_POST['sbgc'];
                               $sbgc1 = $_POST['sbgc1'];
                               $sbgc2 = $_POST['sbgc2'];
                               $sbgc3 = $_POST['sbgc3'];
                               $sbgc4 = $_POST['sbgc4'];
                               $sbgc5 = $_POST['sbgc5'];
                               $tm = $_POST['tm']; 
                                                       
                                        
                        if (isset($_FILES['add27']['name'])&&isset($_FILES['instdata14']['name'])&&isset($_FILES['add28']['name'])&&isset($_FILES['instdata15']['name'])&&isset($_FILES['add29']['name'])&&isset($_FILES['instdata16']['name'])&&isset($_FILES['add30']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add27']['name'];
                            $file_tmp = $_FILES['add27']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['instdata14']['name'];
                            $fil_tmp = $_FILES['instdata14']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            
                            $fi_name = $_FILES['add28']['name'];
                            $fi_tmp = $_FILES['add28']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);

                            $f_name = $_FILES['instdata15']['name'];
                            $f_tmp = $_FILES['instdata15']['tmp_name'];
                            move_uploaded_file($f_tmp,"./pdf/".$f_name);

                            $p_name = $_FILES['add29']['name'];
                            $p_tmp = $_FILES['add29']['tmp_name'];
                            move_uploaded_file($p_tmp,"./pdf/".$p_name);

                            $pd_name = $_FILES['instdata16']['name'];
                            $pd_tmp = $_FILES['instdata16']['tmp_name'];
                            move_uploaded_file($pd_tmp,"./pdf/".$pd_name);

                             $pdf_name = $_FILES['add30']['name'];
                            $pdf_tmp = $_FILES['add30']['tmp_name'];
                            move_uploaded_file($pdf_tmp,"./pdf/".$pdf_name);


                            $insertquery = 
                            "INSERT INTO maintain_it(sbsf,sbsf21_22,sbsf20_21,sbsf19_20,sbsf18_19,sbsf17_18,supp_doc,inst_data,cbse,cbse_supp_doc,cbse_inst_data,sbgc,sbgc21_22,sbgc20_21,sbgc19_20,sbgc18_19,sbgc17_18,sbgc_supp_doc,sbgc_inst_data,tm,tm_supp_doc) VALUES('$sbsf','$sbsf1','$sbsf2','$sbsf3','$sbsf4','$sbsf5','$file_name','$fil_name','$cbse','$fi_name','$f_name','$sbgc','$sbgc1','$sbgc2','$sbgc3','$sbgc4','$sbgc5','$p_name','$pd_name','$tm','$pdf_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:5.2.php");
                           }; 
                          }
                         }

if (isset($_POST['submit19']))
                        {      $place_hig = $_POST['place_hig'];
                               $place_hig1 = $_POST['place_hig1'];
                               $place_hig2 = $_POST['place_hig2'];
                               $place_hig3 = $_POST['place_hig3'];
                               $place_hig4 = $_POST['place_hig4'];
                               $place_hig5 = $_POST['place_hig5']; 
                               $out = $_POST['out'];
                               $out1 = $_POST['out1'];
                               $out2 = $_POST['out2'];
                               $out3 = $_POST['out3'];
                               $out4 = $_POST['out4'];
                               $exam = $_POST['exam'];
                               $exam1 = $_POST['exam1'];
                               $exam2 = $_POST['exam2'];
                               $exam3 = $_POST['exam3'];
                               $exam4 = $_POST['exam4'];
                               $exam5 = $_POST['exam5'];
                               $exa = $_POST['exa'];
                               $exa1 = $_POST['exa1'];
                               $exa2 = $_POST['exa2'];
                               $exa3 = $_POST['exa3'];
                               $exa4 = $_POST['exa4'];
                                                                       
                        if (isset($_FILES['add31']['name'])&&isset($_FILES['instdata17']['name'])&&isset($_FILES['add32']['name'])&&isset($_FILES['instdata18']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add31']['name'];
                            $file_tmp = $_FILES['add31']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['instdata17']['name'];
                            $fil_tmp = $_FILES['instdata17']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            
                            $fi_name = $_FILES['add32']['name'];
                            $fi_tmp = $_FILES['add32']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);

                            $f_name = $_FILES['instdata18']['name'];
                            $f_tmp = $_FILES['instdata18']['tmp_name'];
                            move_uploaded_file($f_tmp,"./pdf/".$f_name);


                            $insertquery = 
                            "INSERT INTO stud_progre(place_hig,place_hig21_22,place_hig20_21,place_hig19_20,place_hig18_19,place_hig17_18,out21_22,out20_21,out19_20,out18_19,out17_18,out_supp_doc,out_inst_data,exam,exam21_22,exam20_21,exam19_20,exam18_19,exam17_18,exa21_22,exa20_21,exa19_20,exa18_19,exa17_18,exasupp_doc,exainst_data) VALUES('$place_hig','$place_hig1','$place_hig2','$place_hig3','$place_hig4','$place_hig5','$out','$out1','$out2','$out3','$out4','$file_name','$fil_name','$exam','$exam1','$exam2','$exam3','$exam4','$exam5','$exa','$exa1','$exa2','$exa3','$exa4','$fi_name','$f_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:5.3.php");
                           }; 
                          }
                         }

if (isset($_POST['submit20']))
                        {      $spa = $_POST['spa'];
                               $spa1 = $_POST['spa1'];
                               $spa2 = $_POST['spa2'];
                               $spa3 = $_POST['spa3'];
                               $spa4 = $_POST['spa4'];
                               $spa5 = $_POST['spa5']; 
                               $soscp = $_POST['soscp'];
                               $soscp1 = $_POST['soscp1'];
                               $soscp2 = $_POST['soscp2'];
                               $soscp3 = $_POST['soscp3'];
                               $soscp4 = $_POST['soscp4'];
                               $soscp5 = $_POST['soscp5'];
                              
                                                                       
                        if (isset($_FILES['add33']['name'])&&isset($_FILES['instdata19']['name'])&&isset($_FILES['add34']['name'])&&isset($_FILES['instdata20']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add33']['name'];
                            $file_tmp = $_FILES['add33']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['instdata19']['name'];
                            $fil_tmp = $_FILES['instdata19']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);
                            
                            $fi_name = $_FILES['add34']['name'];
                            $fi_tmp = $_FILES['add34']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);

                            $f_name = $_FILES['instdata20']['name'];
                            $f_tmp = $_FILES['instdata20']['tmp_name'];
                            move_uploaded_file($f_tmp,"./pdf/".$f_name);


                            $insertquery = 
                            "INSERT INTO stud_part(spa,spa21_22,spa20_21,spa19_20,spa18_19,spa17_18,supp_doc,inst_data,soscp,soscp21_22,soscp20_21,soscp19_20,soscp18_19,soscp17_18,s_supp_doc,s_inst_data) VALUES('$spa','$spa1','$spa2','$spa3','$spa4','$spa5','$file_name','$fil_name','$soscp','$soscp1','$soscp2','$soscp3','$soscp4','$soscp5','$fi_name','$f_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:5.4.php");
                           }; 
                          }
                         }

if (isset($_POST['submit21']))
                        {      $aa = $_POST['aa'];
                                                                   
                        if (isset($_FILES['add35']['name'])&&isset($_FILES['instdata21']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add35']['name'];
                            $file_tmp = $_FILES['add35']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['instdata21']['name'];
                            $fil_tmp = $_FILES['instdata21']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);


                            $insertquery = 
                            "INSERT INTO alumnimng(Alumni_asso,addi,inst_data) VALUES('$aa','$file_name','$fil_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:6.1.php");
                           }; 
                          }
                         }

if (isset($_POST['submit22']))
                        {      $vm = $_POST['vm'];
                               $link10=$_POST['link10']; 
                                                                   
                        if (isset($_FILES['add36']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add36']['name'];
                            $file_tmp = $_FILES['add36']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $insertquery = 
                            "INSERT INTO vision_mission(vision,addi,link) VALUES('$vm','$file_name','$link10')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:6.2.php");
                           }; 
                          }
                         }

if (isset($_POST['submit23']))
                        {      $ib = $_POST['ib'];
                               $link11=$_POST['link11']; 
                               $ieg = $_POST['ieg'];
                                                                   
                        if (isset($_FILES['add37']['name'])&&isset($_FILES['add38']['name'])&&isset($_FILES['instdata22']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add37']['name'];
                            $file_tmp = $_FILES['add37']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['add38']['name'];
                            $fil_tmp = $_FILES['add38']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);

                            $fi_name = $_FILES['instdata22']['name'];
                            $fi_tmp = $_FILES['instdata22']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);

                            $insertquery = 
                            "INSERT INTO strat_dev_dep(ib,addi,link,ieg,supp_doc,inst_data) VALUES('$ib','$file_name','$link11','$ieg','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:6.3.php");
                           }; 
                          }
                         }

if (isset($_POST['submit24']))
                        {      $wm = $_POST['wm'];
                               $tfs=$_POST['tfs']; 
                               $tfs1=$_POST['tfs1']; 
                               $tfs2=$_POST['tfs2']; 
                               $tfs3=$_POST['tfs3']; 
                               $tfs4=$_POST['tfs4']; 
                               $tfs5=$_POST['tfs5']; 
                               $pd=$_POST['pd'];
                               $pd1=$_POST['pd1'];
                               $pd2=$_POST['pd2'];
                               $pd3=$_POST['pd3'];
                               $pd4=$_POST['pd4'];
                               $pd5=$_POST['pd5']; 
                               $nts1=$_POST['nts1'];
                               $nts2=$_POST['nts2'];
                               $nts3=$_POST['nts3'];
                               $nts4=$_POST['nts4'];
                               $nts5=$_POST['nts5'];
                               
                                                                   
                        if (isset($_FILES['add37']['name'])&&isset($_FILES['add38']['name'])&&isset($_FILES['instdata22']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add39']['name'];
                            $file_tmp = $_FILES['add39']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['add40']['name'];
                            $fil_tmp = $_FILES['add40']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);

                            $fi_name = $_FILES['instdata23']['name'];
                            $fi_tmp = $_FILES['instdata23']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);

                            $f_name = $_FILES['add41']['name'];
                            $f_tmp = $_FILES['add41']['tmp_name'];
                            move_uploaded_file($f_tmp,"./pdf/".$f_name);

                            $p_name = $_FILES['instdata24']['name'];
                            $p_tmp = $_FILES['instdata24']['tmp_name'];
                            move_uploaded_file($p_tmp,"./pdf/".$p_name);

                            $insertquery = 
                            "INSERT INTO facu_empow(wm,addi,tfs,tfs21_22,tfs20_21,tfs19_20,tfs18_19,tfs17_18,additional,inst_data,pd,pd1,pd2,pd3,pd4,pd5,nts1,nts2,nts3,nts4,nts5,additional_info,insti_data) VALUES('$wm','$file_name','$tfs','$tfs1','$tfs2','$tfs3','$tfs4','$tfs5','$fil_name','$fi_name','$pd','$pd1','$pd2','$pd3','$pd4','$pd5','$nts1','$nts2','$nts3','$nts4','$nts5','$f_name','$p_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:6.4.php");
                           }; 
                          }
                         }

if (isset($_POST['submit25']))
                        {      $fmrm = $_POST['fmrm'];
                               $link12=$_POST['link12'];                       
                        if (isset($_FILES['add42']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add42']['name'];
                            $file_tmp = $_FILES['add42']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $insertquery = 
                            "INSERT INTO fina_mng(fmrm,addi,link) VALUES('$fmrm','$file_name','$link12')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:6.5.php");
                           }; 
                          }
                         }

if (isset($_POST['submit27']))
                        {      $iqac = $_POST['iqac'];
                               $link13=$_POST['link13'];
                               $qa = $_POST['qa'];                       
                        if (isset($_FILES['add43']['name'])&&isset($_FILES['add44']['name'])&&isset($_FILES['instdata25']['name'])) 
                        { 
                       
                            $file_name = $_FILES['add43']['name'];
                            $file_tmp = $_FILES['add43']['tmp_name'];
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);

                            $fil_name = $_FILES['add44']['name'];
                            $fil_tmp = $_FILES['add44']['tmp_name'];
                            move_uploaded_file($fil_tmp,"./pdf/".$fil_name);

                            $fi_name = $_FILES['instdata25']['name'];
                            $fi_tmp = $_FILES['instdata25']['tmp_name'];
                            move_uploaded_file($fi_tmp,"./pdf/".$fi_name);

                            $insertquery = 
                            "INSERT INTO iqas(iqac,addi,link,qa,supp_doc,inst_data) VALUES('$iqac','$file_name','$link13','$qa','$fil_name','$fi_name')";
                           if(mysqli_query($conn, $insertquery)){
                                header("location:7.1.php");
                           }; 
                          }
                         }


?> 
                    
                         
            
            
