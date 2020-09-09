<?php
error_reporting(E_ALL^E_NOTICE);
$mobile_no = $_GET['mobile_no'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <style>
        td{
            border-bottom: 1px solid #cccccc;
        }

        @media print {
            .printbtn {
                display :  none;
            }
        }
    </style>

    <div class="container">
        <div class="box-body">
            <div class="print">


                <?php
                    $connection = new mysqli('localhost', 'root', '', 'clg_admission_form');

                    if($connection->connect_error){
                        die('Unable to connect : '.$connection->connect_error);
                    }
                    else{



                        $sql = "SELECT * FROM students WHERE mobile = $mobile_no";
                        $result = mysqli_query($connection, $sql);

                        while ($row = mysqli_fetch_assoc($result)){

                                ?>


                                <div style="width: 100%; margin: 2rem 0;">

                                    <table style="width: 100%; border: 0px solid #cccccc;">
                                        <thead>
                                        <tr>
                                            <th colspan="3" style="text-align: center;">
                                                <img src="images/Logo.png" alt="Govt. H. S. S. College" style="width: 50%;">
                                            </th>

                                        </tr>
                                        <tr>
                                            <th colspan="3" style="border: 0; padding: 20px"></th>
                                        </tr>
                                        <tr>
                                            <th style="padding-left: 10px; text-align: left; width: 23%;">
                                                <table style="border: 0px solid #cccccc; margin-top: 2rem; width: 100%;">
                                                    <tr>
                                                        <td style="border: 0; padding: 5px 5px 0 0;">Form ID</td>
                                                        <td style="border: 0; padding: 5px 0; text-align: center;">:
                                                        </td>
                                                        <td style="border: 0; padding: 5px 0;"><?php echo $row['id']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 0; padding: 5px 5px 0 0;">Group</td>
                                                        <td style="border: 0; padding: 0 5px; text-align: center">:</td>
                                                        <td style="border: 0; padding: 5px 0;"><?php echo $row['exam_group']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 0; padding: 5px 5px 0 0;">App. Date</td>
                                                        <td style="border: 0; padding: 0 5px; text-align: center">:</td>
                                                        <td style="border: 0; padding: 5px 0;"><?php echo $row['application_date']; ?></td>
                                                    </tr>
                                                </table>
                                            </th>
                                            <th style="padding: 10px; text-align: center; width: 72%;">
                                                <h1>Admission Form</h1>
                                                <p>Session : 2020-2021</p>
                                            </th>
                                            <th style="width: 5%; text-align: center;">
                                                <div style="border: 1px solid #000; width: 150px; height: 150px; text-align: center; margin: 0 0 auto;">
                                                    <img src="images/students/<?php echo $row['image']; ?>"  style="width: 150px; height: 150px;">
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="3" style="border: 0; padding: 20px"></th>
                                        </tr>
                                        <tr>
                                            <th colspan="3" style="border: 0; padding: 20px"></th>
                                        </tr>
                                        </thead><!-- thead end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; border: 1px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Applicant Name</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"><?php echo $row['applicant_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Applicant Name
                                                (Bangla)
                                            </td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Father's Name</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"><?php echo $row['father_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Father's Name
                                                (Bangla)
                                            </td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Father's Mobile Number</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"><?php echo $row['father_phone']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Mother's Name</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"><?php echo $row['mother_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Mother's Name
                                                (Bangla)
                                            </td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 20px; padding: 10px;">Mobile Number</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 20px; padding: 10px;"><?php echo $row['mobile']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 100px; padding: 10px; vertical-align: top;">
                                                Present Address
                                            </td>
                                            <td style="width: 5%; height: 100px; text-align: center; padding: 10px 0; vertical-align: top;">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 50px; padding: 10px; vertical-align: top;"><?php echo $row['present_address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%; height: 100px; padding: 10px; vertical-align: top;">
                                                Permanent Address
                                            </td>
                                            <td style="width: 5%; height: 50px; text-align: center; padding: 10px 0; vertical-align: top;">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 100px; padding: 10px; vertical-align: top;"><?php echo $row['permanent_address']; ?></td>
                                        </tr>
                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; border: 1px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 20%; height: 20px; padding: 10px;">Guardian Name</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px; border-right: 1px solid #cccccc;"><?php echo $row['guardian_name']; ?></td>

                                            <td style="width: 20%; height: 20px; padding: 10px;">Relation With
                                                Guardian
                                            </td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px;"><?php echo $row['relation_guardian']; ?></td>
                                        </tr>
                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; border: 1px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 20%; height: 20px; padding: 10px;">Date of Birth</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px; border-right: 1px solid #cccccc"><?php echo $row['dob']; ?></td>

                                            <td style="width: 20%; height: 20px; padding: 10px;">Nationality</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px;"><?php echo $row['nationality']; ?></td>
                                        </tr>
                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; border: 1px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 20%; height: 20px; padding: 10px;">Marital Status</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px; border-right: 1px solid #cccccc"><?php echo $row['marital_status']; ?></td>

                                            <td style="width: 20%; height: 20px; padding: 10px;">Child of Freedom
                                                Fighter
                                            </td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px;"><?php echo $row['cff']; ?></td>
                                        </tr>
                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; border: 1px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 20%; height: 20px; padding: 10px;">Blood Group</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px; border-right: 1px solid #cccccc"><?php echo $row['blood_grp']; ?></td>

                                            <td style="width: 20%; height: 20px; padding: 10px;">Gander</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px;"><?php echo $row['gander']; ?></td>
                                        </tr>
                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; border: 1px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 20%; height: 20px; padding: 10px;">Exam Name</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px; border-right: 1px solid #cccccc"><?php echo $row['exam_name']; ?></td>

                                            <td style="width: 20%; height: 20px; padding: 10px;">Group</td>
                                            <td style="width: 5%; height: 20px; text-align: center; padding: 10px 0; ">
                                                :
                                            </td>
                                            <td style="width: 25%; height: 20px; padding: 10px;"><?php echo $row['exam_group']; ?></td>
                                        </tr>
                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; border: 1px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 30%; height: 100px; padding: 10px; vertical-align: top;">
                                                Your Selected Subjects
                                            </td>
                                            <td style="width: 5%; height: 100px; padding: 10px; vertical-align: top;">
                                                :
                                            </td>
                                            <td style="width: 65%; height: 100px; padding: 10px; vertical-align: top;"><?php echo $row['subjects']; ?></td>
                                        </tr>

                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->
                                    <table style="width: 100%; height: 150px; border: 0px solid #cccccc;">
                                        <tbody>
                                        <tr>
                                            <th colspan="3" style="border: 0; padding: 20px"></th>
                                        </tr>
                                        <tr>
                                            <th colspan="3" style="border: 0; padding: 20px"></th>
                                        </tr>
                                        <tr>
                                            <td style="width: 33.3%; border: 0; padding: 10px; vertical-align: bottom; text-align: center">
                                                <div style="border-top: 1px dotted #cccccc; width: 60%; margin: 0 auto 10px;"></div>
                                                Principal
                                            </td>
                                            <td style="width: 33.3%; border: 0; padding: 10px; vertical-align: bottom; text-align: center">
                                                <div style="border-top: 1px dotted #cccccc; width: 60%; margin: 0 auto 10px;"></div>
                                                Office
                                            </td>
                                            <td style="width: 33.3%; border: 0; padding: 10px; vertical-align: bottom; text-align: center;">
                                                <div style="border-top: 1px dotted #cccccc; width: 60%; margin: 0 auto 10px;"></div>
                                                Student Signature
                                            </td>
                                        </tr>
                                        </tbody><!-- tbody end -->
                                    </table><!-- table end -->


                                </div><!-- main table end -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <button  type="button" onclick="PrintPayment()" class="btn btn-primary printbtn">Print <i class="icon-printer position-right"></i></button>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <a href="index.php" class="btn btn-secondary printbtn">Back Admission Form</a>
                                <?php


                        }

                    }
                    $connection->close();
                ?>
<br>
<br>
<br>
            </div><!-- print -->
        </div><!-- box body end -->
    </div><!-- container end -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>


    <script>
        function PrintPayment() {
            window.print();
        }
    </script>
</body>
</html>