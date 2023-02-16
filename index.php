nclude_once("connection.php");
    if(isset($_POST['submit'])){
        $college = $_POST['college'];
        $department = $_POST['department'];
        $department_code = $_POST['department_code'];
        $programme = $_POST['programme'];
        $year_of_takeoff = $_POST['year_of_takeoff'];
        $accreditation_year = $_POST['accreditation_year'];
        $accreditation_status = $_POST['accreditation_status'];
 
        
        $sql="INSERT INTO accreditation(college, department, department_code, 
        programme, year_of_takeoff, accreditation_year, accreditation_status) 
        VALUES('$college', '$department', '$department_code', '$programme', '$year_of_takeoff', '$accreditation_year', '$accreditation_status')";
        $statement = $con->prepare($sql);
        $success = $statement->execute();


        if ($success) {
            echo "New record created successfully";
        } else {
            echo "Error occured!";
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACCREDITATION PAGE</title>
    <style>
        body {
            font-family: Calibri, Helvetica, sans-serif;
            min-height: 400px;
            background-size: cover;
            position: relative;
            background-repeat: no-repeat;
            background-position: center;
            background-color: lightseagreen;

        }

        .container {
            padding: 100px;
            background-color: rgb(3, 10, 102);
            margin-top: 100px;
            margin-bottom: 100px;
            margin-left: 200px;
            margin-right: 200px;

        }

        input[type=text],
        input[type=password],
        textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }



        div {
            padding: 10px 0;
            color: aqua;
            font-size: large;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: larger;
        }

        .registerbtn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post" novalidate>
        <div class="container">
            <center>
                <h2> ENTER NEW ACCREDITATION</h2>
            </center>
            <hr>
            <label> <b>COLLEGE: </b></label>
            <select name="college" id="college" required><br></br>
            <option value="Business Management"> Business Management</option>
    </select>
            <label><b>DEPARTMENT:</b></label>
            <input type="text" name="department" placeholder="Department" size="15" required />
            <label><b>DEPARTMENT CODE:</b></label>
            <input type="text" name="department_code" placeholder="Department Code" size="15" required />
            <label> <b>PROGRAMME:</b> </label>
            <input type="text" name="programme" placeholder="Programme" size="15" required />
            <label><b>YEAR OF TAKEOFF:</b> </label>
            <input type="text" name="year_of_takeoff" placeholder="Yearof Takeoff" size="15" required />
            <label> <b>ACCREDITATION YEAR:</b> </label>
            <input type="text" name="accreditation_year" placeholder="Accreditation Year" size="15" required />
            <label><b>ACCREDITATION STATUS:</b></label>
            <input type="text" name="accreditation_status" placeholder="Accreditation Status" size="15" required />
            <button type="submit" name="submit" value="submit" class="registerbtn">Submit</button>
        </div>
    </form>
</body>

</html>
