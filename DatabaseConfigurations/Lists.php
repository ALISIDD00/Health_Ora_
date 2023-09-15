<?php
    include_once "DbFucntions.php";

    function PrepareEmployeeList()
    {
        $query = "SELECT * FROM employee WHERE Deleted = 0";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["FirstName"]."</td>
                                <td>".$row["LastName"]."</td>
                                <td>".$row["Email"]."</td>
                                <td>".$row["CNIC"]."</td>
                                <td>".$row["PhoneNumber"]."</td>
                                <td>
                                    <a href='http://localhost/Health_Ora/hrm/Edit.php?id=".$row["Id"]."' class='btn btn-warning' type='button'>Edit</a>
                                    <button name='deleteEmployee' type='submit' value='".$row["Id"]."' class='btn btn-danger'>Delete</button>
                                </td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Employees are found!</td>
                    </tr>";
                }
            }
        }
    }


  
    function PrepareEmployeeeList($filter_col_val)
    {
        $query = "SELECT * FROM employee WHERE Deleted = 0";

        $length = count($filter_col_val);
        $loopCount = 1;

        foreach ($filter_col_val as $key => $value) {

            if (!empty($value)) {

                // $query = $query . " OR ";   // global search
                $query = $query . " AND ";   // sepcific search
                
                if (gettype($value) == "string") {
                    $query = $query . " " . $key . " like '%" . $value . "%' ";
                }
                else {
                    $query = $query . " " . $key . " = " . $value . " ";
                }
                
            }

            $loopCount++;

        }

        echo $query;

        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                
                                <td>".$row["FirstName"]."</td>
                                <td>".$row["LastName"]."</td>
                                <td>".$row["Email"]."</td>
                                <td>".$row["CNIC"]."</td>
                                <td>".$row["PhoneNumber"]."</td>
                                <td>
                                    <a href='http://localhost/Health_Ora/hrm/Edit.php?id=".$row["Id"]."' class='btn btn-warning' type='button'>Edit</a>
                                    <button name='deleteEmployee' type='submit' value='".$row["Id"]."' class='btn btn-danger'>Delete</button>
                                </td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Users are found!</td>
                    </tr>";
                }
            }
        }
    }





    function PreparecontactsList()
    {
        $query = "SELECT * FROM `contactus`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["subject"]."</td>
                                <td>".$row["message"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PreparefeedbacksList()
    {
        $query = "SELECT * FROM `poll`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["phone"]."</td>
                                <td>".$row["feedback"]."</td>
                                <td>".$row["suggestions"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }
  


    function PrepareappointmentsList()
    {
        $query = "SELECT * FROM `appointment_form`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["date"]."</td>
                                <td>".$row["services"]."</td>
                                <td>".$row["number"]."</td>
                                <td>".$row["message"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }

   

    function PrepareshopList()
    {
        $query = "SELECT * FROM `product` WHERE Deleted = 0";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["product_name"]."</td>
                                <td>".$row["product_price"]."</td>
                                <td>".$row["product_qty"]."</td>
                                <td>".$row["product_image"]."</td>
                                <td>".$row["product_code"]."</td>
                                <td>
                                <a href='http://localhost/Health_Ora/hrm/Editproducts.php?id=".$row["id"]."' class='btn btn-warning' type='button'>Edit</a>
                                <button name='deleteproduct' type='submit' value='".$row["id"]."' class='btn btn-danger'>Delete</button>
                            </td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Products are found!</td>
                    </tr>";
                }
            }
        }
    }

   
    function PrepareordersList()
    {
        $query = "SELECT * FROM `orders`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["name"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["phone"]."</td>
                                <td>".$row["address"]."</td>
                                <td>".$row["pmode"]."</td>
                                <td>".$row["products"]."</td>
                                <td>".$row["amount_paid"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }

    

    function PreparebreakfastreceipeList()
    {
        $query = "SELECT * FROM breakfast_recipes";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["title"]."</td>
                                <td>".$row["ingredients"]."</td>
                                <td>".$row["instructions"]."</td>
                                <td><img src=http://localhost/Health_Ora/".$row["picture"]." width='100px' height='100px' /></td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }
 
    function PreparelunchreceipeList()
    {
        $query = "SELECT * FROM lunch_recipes";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["title"]."</td>
                                <td>".$row["ingredients"]."</td>
                                <td>".$row["instructions"]."</td>
                                <td><img src=http://localhost/Health_Ora/".$row["picture"]." width='100px' height='100px' /></td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }
    
    function PreparedinnerreceipeList()
    {
        $query = "SELECT * FROM dinner_recipes";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["title"]."</td>
                                <td>".$row["ingredients"]."</td>
                                <td>".$row["instructions"]."</td>
                                <td><img src=http://localhost/Health_Ora/".$row["picture"]." width='100px' height='100px' /></td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }

       function PreparesnacksreceipeList()
    {
        $query = "SELECT * FROM snacks_recipes";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["title"]."</td>
                                <td>".$row["ingredients"]."</td>
                                <td>".$row["instructions"]."</td>
                                <td><img src=http://localhost/Health_Ora/".$row["picture"]." width='100px' height='100px' /></td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }


    function PrepareAyouthList()
    {
        $query = "SELECT * FROM `youth`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                            <td><img src=http://localhost/Health_Ora/".$row["image"]." width='100px' height='100px' /></td>
                                <td>".$row["name"]."</td>
                                <td>".$row["description"]."</td>
                                <td>".$row["a_bio"]."</td>
                                <td>".$row["b_bio"]."</td>
                                <td>".$row["c_bio"]."</td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareAadultList()
    {
        $query = "SELECT * FROM `adult`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                            <td><img src=http://localhost/Health_Ora/".$row["image"]." width='100px' height='100px' /></td>
                            <td>".$row["name"]."</td>
                            <td>".$row["description"]."</td>
                            <td>".$row["a_bio"]."</td>
                            <td>".$row["b_bio"]."</td>
                            <td>".$row["c_bio"]."</td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareAseniorList()
    {
        $query = "SELECT * FROM `senior`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td><img src=http://localhost/Health_Ora/".$row["image"]." width='100px' height='100px' /></td>
                                <td>".$row["name"]."</td>
                                <td>".$row["description"]."</td>
                                <td>".$row["a_bio"]."</td>
                                <td>".$row["b_bio"]."</td>
                                <td>".$row["c_bio"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }









  

    function PrepareyouthList()
    {
        $query = "SELECT * FROM youth where deleted = 0";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "
                                <img src=http://localhost/Health_Ora/".$row["image"]." width='100px' height='100px' />
                                <h2>".$row["name"]."</h2>
                                <p>".$row["description"]."</p>
                              <p>".$row["a_bio"]."</p>
                                <p>".$row["b_bio"]."</p>
                                <p>".$row["c_bio"]."</p>
                               ";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareadultList()
    {
        $query = "SELECT * FROM adult";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                        "
                            <img src=http://localhost/Health_Ora/".$row["image"]." width='100px' height='100px' />
                            <h2>".$row["name"]."</h2>
                            <p>".$row["description"]."</p>
                          <p>".$row["a_bio"]."</p>
                            <p>".$row["b_bio"]."</p>
                            <p>".$row["c_bio"]."</p>
                            ";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }


    function PrepareseniorList()
    {
        $query = "SELECT * FROM senior";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                        "
                        <img src=http://localhost/Health_Ora/".$row["image"]." width='100px' height='100px' />
                        <h2>".$row["name"]."</h2>
                        <p>".$row["description"]."</p>
                      <p>".$row["a_bio"]."</p>
                        <p>".$row["b_bio"]."</p>
                        <p>".$row["c_bio"]."</p>
                        ";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }





    function Preparebalanced_dietList()
    {
        $query = "SELECT * FROM balanced_diet";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                                <h2>".$row["heading"]."</h2>
                                <p>".$row["description"]."</p>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }
   


    function PreparestressmanagementList()
    {
        $query = "SELECT * FROM stress_management";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                                <h2>".$row["heading"]."</h2>
                                <p>".$row["description"]."</p>
                                <p>".$row["paragraph"]."</p>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareRegularexerciseList()
    {
        $query = "SELECT * FROM regular_exercise";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                                <h2>".$row["heading"]."</h2>
                                <p>".$row["description"]."</p>
                                <p>".$row["paragraph"]."</p>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function Prepareoptimal_wellList()
    {
        $query = "SELECT * FROM optimal_well_being";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                                <h2>".$row["heading"]."</h2>
                                <p>".$row["description"]."</p>
                                <p>".$row["paragraph"]."</p>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareMeditationbenefitsList()
    {
        $query = "SELECT * FROM mindfulness_and_meditation_benefits";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                                <h2>".$row["heading"]."</h2>
                                <p>".$row["description"]."</p>
                                <p>".$row["paragraph"]."</p>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareHealthyheartList()
    {
        $query = "SELECT * FROM healthy_heart";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                                <h2>".$row["heading"]."</h2>
                                <p>".$row["description"]."</p>
                                <p>".$row["paragraph"]."</p>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareUsersarticlesList()
    {
        $query = "SELECT * FROM blog";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                        
                                <p>".$row["paragraph"]."</p>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareCertificateList()
    {
        $query = "SELECT * FROM certificate";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<div class='container mt-5'>
                             
                        
                                <div>".$row["paragraph"]."</div>
                           
                                     </div>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No results are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PreparecertificateresultList()
    {
        $query = "SELECT * FROM `certificate`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["name"]."</td>
                                <td>".$row["paragraph"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareLatestnewsList()
    {
        $query = "SELECT * FROM `articles`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["title"]."</td>
                                <td>".$row["content"]."</td>
                                <td>".$row["image_url"]."</td>
                                <td>".$row["date_published"]."</td>
                                <td>".$row["author"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }



    function PrepareCommentsList()
    {
        $query = "SELECT * FROM `comments`";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["comment_text"]."</td>
                                <td>".$row["rating"]."</td>
                               
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Contacts are found!</td>
                    </tr>";
                }
            }
        }
    }



    
    function PrepareLatestaList()
    {
        $query = "SELECT * FROM articles WHERE id = 1";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                        "
                        <td><h3>".$row["title"]."</h3></td>
                       <br>
                       <td><img src=http://localhost/Health_Ora/".$row["image_url"]." width='200px' height='200px' /></td>
                        ";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }



    
    function PrepareLatestbList()
    {
        $query = "SELECT * FROM articles WHERE id = 2";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                        "
                        <td><h3>".$row["title"]."</h3></td>
                       
                        <td><img src=http://localhost/Health_Ora/".$row["image_url"]." width='200px' height='200px' /></td>
                        ";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }



    
    function PrepareLatestcList()
    {
        $query = "SELECT * FROM articles WHERE id = 3";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                        "
                        <td><h3>".$row["title"]."</h3></td>
                       
                        <td><img src=http://localhost/Health_Ora/".$row["image_url"]." width='200px' height='200px' /></td>
                      
                        ";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Recipes are found!</td>
                    </tr>";
                }
            }
        }
    }

























    function PrepareStudentList()
    {
        $query = "SELECT * FROM Student";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["FullName"]."</td>
                                <td>".$row["FatherName"]."</td>
                                <td>".$row["B_Form"]."</td>
                                <td>
                                    <a href='http://localhost:82/sms/student/EditStudent.php?id=".$row["Id"]."' class='btn btn-warning' type='button'>Edit</a>
                                    <button name='deleteStudent' type='submit' value='".$row["Id"]."' class='btn btn-danger'>Delete</button>
                                </td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Students are found!</td>
                    </tr>";
                }
            }
        }
    }

    function PrepareFeeTypeList()
    {
        $query = "SELECT * FROM FeeType";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        echo
                            "<tr>
                                <td>".$row["Name"]."</td>
                                <td>
                                    <a href='http://localhost:82/sms/FeeTypes/EditFeeType.php?id=".$row["Id"]."' class='btn btn-warning' type='button'>Edit</a>
                                    <button name='deleteFeeType' type='submit' value='".$row["Id"]."' class='btn btn-danger'>Delete</button>
                                </td>
                            </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No Fee Types are found!</td>
                    </tr>";
                }
            }
        }
    }
    
    function PrepareProductMenu()
    {
        $query = "SELECT * FROM employee WHERE Deleted = 0 ORDER BY Id DESC";
        $result = ExecutreMySqlQuery($query);
        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {

                    $createMainBox = true;

                    $innerProductCount = 0;

                    $activeApplied = "active";

                    $html = "";

                    while ($row = mysqli_fetch_assoc($result["Response"])) {

                        // opening a main box
                        if ($createMainBox) {
                            $html = $html . 
                            "
                                <div class='carousel-item ".$activeApplied."'>
                                    <div class='container'>
                                        <h1 class='fashion_taital'>Man & Woman Fashion</h1>
                                        <div class='fashion_section_2'>
                                            <div class='row'>
                            ";

                            $createMainBox = false;
                        }

                        $activeApplied = "";

                        // putting products 1 by 1 in main box
                        $html = $html .
                        "
                            <div class='col-lg-4 col-sm-4'>
                                <div class='box_main'>
                                <h4 class='shirt_text'>".$row["FirstName"]."</h4>
                                <p class='price_text'>Price  <span style='color: #262626;'>$ ".$row["Password"]."</span></p>
                                <div class='tshirt_img'><img src='http://localhost:82/sms/".$row["ImagePath"]."'></div>
                                    <div class='btn_main'>
                                        <div class='buy_bt'><a href='#'>Buy Now</a></div>
                                        <div class='seemore_bt'><a href='#'>See More</a></div>
                                    </div>
                                </div>
                            </div>
                        ";

                        $innerProductCount = $innerProductCount + 1;

                        // if we have added 3 products then close the main the box
                        if ($innerProductCount == 3) {
                            $html = $html .
                            "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";

                            $createMainBox = true;
                            $innerProductCount = 0;
                        }
                    }

                    echo $html;
                }
                else {
                    
                }
            }
        }
    }
?>