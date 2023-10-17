<?php $conn = new mysqli('localhost', 'root', '', 'naac');
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

                         $curricularPlanning = $_POST['cur'];
                         $link = $_POST['link'];

                        // If submit button is clicked
                        if (isset($_POST['submit']))
                        {
                                          

                        if (isset($_FILES['pdf_file']['name'])) 
                        { 
                        // If the ‘pdf_file’ field has an attachment
                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                            
                            // Move the uploaded pdf file into the pdf folder
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            // Insert the submitted data from the form into the table
                            $insertquery = 
                            "INSERT INTO eval_data(curricular_planning,additional_info,link) VALUES('$curricularPlanning','$file_name','$link')";
                            
                            // Execute insert query
                           if(mysqli_query($conn, $insertquery)){
                                echo"Success";
                           };     
                          
                        }// end if
                    }
                    ?> 
                    
                         
            
            
