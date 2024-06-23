
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpm";

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
    <h1>Third Year Students Information</h1>
</center>
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
            <th>Ration Card</th>
            <th>Semester 1</th>
            <th>Semester 2</th>
            <th>Semester 3</th>
            <th>Semester 4</th>
            <th>Bank Name</th>
            <th>Bank Account No</th>
            <th>UPI ID</th>
            <th>Referance ID</th>
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
            <td><?php echo $row['bankname']; ?></td>
            <td><?php echo $row['bankacc']; ?></td>
            <td><?php echo $row['upiid']; ?></td>
            <td><?php echo $row['redid']; ?></td>
            <td><?php echo $row['accname']; ?></td>
            <td><a href="thirdyear/<?php echo $row['payssname']; ?>">View</a></td>
            <td><?php echo $row['category']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
