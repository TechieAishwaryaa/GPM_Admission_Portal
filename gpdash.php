<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body {
    margin: 0;
    padding: 0;
}

/* Styling for the navbar container */
.navbar-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
}

/* Styling for the navbar links */
.navbar-link {
    color: #000000;
    font-weight: bold;
    text-decoration: none;
    padding: 10px 20px;
    transition: background-color 0.2s ease-in-out;
    border-radius: 5px;
}

/* Styling for the hover effect on the navbar links */
.navbar-link:hover {
    background-color: #FF5733;
}


table {
    margin: 50px auto;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

th, td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #333;
    color: #FF5733;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
    </style>
<script src="jquery.js"></script>
        <script>

                $(document).ready(function() {
                    $("#computerty").hide();
                    $("#computersy").hide();
                    $("#computerdsy").hide();                    
                    $("#polymerty").hide();
                    $("#polymersy").hide();
                    $("#polymerdsy").hide();
                    $("#mechty").hide();
                    $("#mechsy").hide();
                    $("#mechdsy").hide();
                    $("#civty").hide();
                    $("#civsy").hide();
                    $("#civdsy").hide();
                    $("#meddsy").hide();
                    $("#medty").hide();
                    $("#medsy").hide();

                    $('#com').change(function() {
                        $('#pol').val('nopol');
                        $('#mech').val('nomech');
                        $('#civ').val('nociv');
                        $('#med').val('nomed');
                            if ($(this).val() === 'nocom') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();                    
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'tc1') {
                                $("#computerty").show();
                                $("#computersy").hide();
                                $("#computerdsy").hide();                    
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'sc1') {
                                $("#computerty").hide();
                                $("#computersy").show();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'dsyc1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").show();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                        });


                        $('#pol').change(function() {
                            $('#com').val('nocom');
                            $('#mech').val('nomech');
                            $('#civ').val('nociv');
                            $('#med').val('nomed');
                            if ($(this).val() === 'nopol') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'tp1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").show();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'sp1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").show();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'dsyp1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").show();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                        });


                        $('#mech').change(function() {
                            $('#com').val('nocom');
                            $('#pol').val('nopol');
                            $('#civ').val('nociv');
                            $('#med').val('nomed');
                            if ($(this).val() === 'nomech') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'tm1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").show();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'sm1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").show();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'dsym1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").show();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                        });




                        $('#civ').change(function() {
                            $('#com').val('nocom');
                            $('#pol').val('nopol');
                            $('#mech').val('nomech');
                            $('#med').val('nomed');
                            if ($(this).val() === 'nociv') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'tci1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").show();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'sci1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").show();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'dsyci1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").show();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                        });



                        $('#med').change(function() {
                            $('#com').val('nocom');
                            $('#pol').val('nopol');
                            $('#mech').val('nomech');
                            $('#civ').val('nociv');
                            if ($(this).val() === 'nomed') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'tcme1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").show();
                                $("#medsy").hide();
                            }
                            if ($(this).val() === 'scme1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").hide();
                                $("#medty").hide();
                                $("#medsy").show();
                            }
                            if ($(this).val() === 'dsyme1') {
                                $("#computerty").hide();
                                $("#computersy").hide();
                                $("#computerdsy").hide();
                                $("#polymerty").hide();
                                $("#polymersy").hide();
                                $("#polymerdsy").hide();
                                $("#mechty").hide();
                                $("#mechsy").hide();
                                $("#mechdsy").hide();
                                $("#civty").hide();
                                $("#civsy").hide();
                                $("#civdsy").hide();
                                $("#meddsy").show();
                                $("#medty").hide();
                                $("#medsy").hide();
                            }
                        });
                    });

        </script>
</head>
<body>
    <div class="navbar-container">
        <h1 style="color:#FF5733">Institute Dashboard</h1>
        <div>
            <select class="navbar-link active" id="com">
            <option value="nocom">Computer Engg</option>
            <option value="tc1">Third year</option>
            <option value="sc1">Second year</option>
            <option value="dsyc1">DSY</option>
            </select>
            <select class="navbar-link active" id="pol">
            <option value="nopol">Polymer Engg</option>
            <option value="tp1">Third year</option>
            <option value="sp1">Second year</option>
            <option value="dsyp1">DSY</option>
            </select>
            </select>
            <select class="navbar-link active" id="mech">
            <option value="nomech">Mechanical Engg</option>
            <option value="tm1">Third year</option>
            <option value="sm1">Second year</option>
            <option value="dsym1">DSY</option>
            </select>
            <select class="navbar-link active" id="civ">
            <option value="nociv">Civil Engg</option>
            <option value="tci1">Third year</option>
            <option value="sci1">Second year</option>
            <option value="dsyci1">DSY</option>
            </select>
            <select class="navbar-link active" id="med">
            <option value="nomed">Medical Electronics Engg</option>
            <option value="tcme1">Third year</option>
            <option value="scme1">Second year</option>
            <option value="dsyme1">DSY</option>
            </select>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gpm";
    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    
<div id="computerty">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM thirdyear WHERE branch = 'computer engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Computer third year</h1>
</center>

</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="thirdyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="thirdyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem4']; ?>">View</a></td>
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="thirdyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>




<div id="computersy">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM secondyear WHERE branch = 'computer engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Computer second year</h1>
</center>
</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="secondyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><a href="secondyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem2']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['refid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="secondyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>


<div id="computerdsy">
<!DOCTYPE html>

<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM dsy WHERE branch = 'computer engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
<center>
    <h1>Computer DSY</h1>
</center>
</head>
<body>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="dsy/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="dsy/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="dsy/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
            </div>

<div id="polymerty">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM thirdyear WHERE branch = 'polymer engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Polymer third year</h1>
</center>

</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="thirdyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="thirdyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="thirdyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>




<div id="polymersy">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM secondyear WHERE branch = 'polymer engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Polymer second year</h1>
</center>
</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="secondyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><a href="secondyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem2']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['refid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="secondyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>


<div id="polymerdsy">
<!DOCTYPE html>

<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM dsy WHERE branch = 'polymer engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
<center>
    <h1>Polymer DSY</h1>
</center>
</head>
<body>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="dsy/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="dsy/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="dsy/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
            </div>


            
  
            <div id="mechty">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM thirdyear WHERE branch = 'mechanical engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Mechanical third year</h1>
</center>

</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="thirdyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="thirdyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="thirdyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>




<div id="mechsy">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM secondyear WHERE branch = 'mechanical engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Mechanical second year</h1>
</center>
</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="secondyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><a href="secondyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem2']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['refid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="secondyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>


<div id="mechdsy">
<!DOCTYPE html>

<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM dsy WHERE branch = 'mechanical engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
<center>
    <h1>Mechanical DSY</h1>
</center>
</head>
<body>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="dsy/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="dsy/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="dsy/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
            </div>


            <div id="civty">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM thirdyear WHERE branch = 'civil engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Civil third year</h1>
</center>

</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="thirdyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="thirdyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="thirdyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>




<div id="civsy">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM secondyear WHERE branch = 'civil engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Civil second year</h1>
</center>
</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="secondyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><a href="secondyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem2']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['refid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="secondyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>


<div id="civdsy">
<!DOCTYPE html>

<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM dsy WHERE branch = 'civil engineering'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
<center>
    <h1>Civil DSY</h1>
</center>
</head>
<body>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="dsy/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="dsy/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="dsy/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
            </div>








            <div id="medty">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM thirdyear WHERE branch = 'medical Electronics'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Medical Electronics third year</h1>
</center>

</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="thirdyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="thirdyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem2']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="thirdyear/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="thirdyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>




<div id="medsy">
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM secondyear WHERE branch = 'medical Electronics'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<center>
    <h1>Medical Electronics second year</h1>
</center>
</head>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 1</th>
            <th>Marks Obtained 2</th>
            <th>Marks Out of 1</th>
            <th>Marks Out of 2</th>
            <th>Percentage 1</th>
            <th>Percentage 2</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="secondyear/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained1']; ?></td>
            <td><?php echo $row['marks_obtained2']; ?></td>
            <td><?php echo $row['marks_out_of1']; ?></td>
            <td><?php echo $row['marks_out_of2']; ?></td>
            <td><?php echo $row['percentage1']; ?></td>
            <td><?php echo $row['percentage2']; ?></td>
            <td><a href="secondyear/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem1']; ?>">View</a></td>
            <td><a href="secondyear/<?php echo $row['sem2']; ?>">View</a></td>
            <!-- <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['refid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="secondyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>


<div id="meddsy">
<!DOCTYPE html>

<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Assuming you have established a database connection

$stmt = $conn->prepare("SELECT * FROM dsy WHERE branch = 'medical Electronics'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
<center>
    <h1>Medical Electronics DSY</h1>
</center>
</head>
<body>
    <table border="1">
        <tr>
            <th>Photo</th>
            <th>Roll</th>
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Class</th>
            <th>Student Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Line 1</th>
            <th>Line 2</th>
            <th>Taluka</th>
            <th>District</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Parent Name</th>
            <th>Parent Mobile</th>
            <th>Year Select</th>
            <th>Marks Obtained 3</th>
            <th>Marks Obtained 4</th>
            <th>Marks Out of 3</th>
            <th>Marks Out of 4</th>
            <th>Percentage 3</th>
            <th>Percentage 4</th>
            <th>Caste Certificate (Upload caste certificate other than open)</th>
            <th>Non-Creamy Layer Certificate (For OBC/VJNT/SBC/SEBC)</th>
            <th>Income Certificate</th>
            <th>Scholarship Form</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>UTR / Reference ID</th>
            <th>Account Holder Full Name</th>
            <th>Payment Screen Shot</th>
            <th>Category</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            
            <td><img src="dsy/<?php echo $row['photo']; ?>" width="100px"></td>
            <td><?php echo $row['roll']; ?></td>
            <td><?php echo $row['enrollment']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['line1']; ?></td>
            <td><?php echo $row['line2']; ?></td>
            <td><?php echo $row['taluka']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['parentname']; ?></td>
            <td><?php echo $row['parentmobile']; ?></td>
            <td><?php echo $row['yearselect']; ?></td>
            <td><?php echo $row['marks_obtained3']; ?></td>
            <td><?php echo $row['marks_obtained4']; ?></td>
            <td><?php echo $row['marks_out_of3']; ?></td>
            <td><?php echo $row['marks_out_of4']; ?></td>
            <td><?php echo $row['percentage3']; ?></td>
            <td><?php echo $row['percentage4']; ?></td>
            <td><a href="dsy/<?php echo $row['doc1']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc2']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['doc4']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem3']; ?>">View</a></td>
            <td><a href="dsy/<?php echo $row['sem4']; ?>">View</a></td>
            <!-- <td><?php echo $row['upiid']; ?></td> -->
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="dsy/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
            </div>



</body>
</html>
