<?php
    session_start();
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
    
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box-header">
                        <div class="logo">
                            <a href="#"><img src="images/Logo.png" alt="Logo"></a>
                        </div><!-- logo end -->
                        <div class="clg-description">
                            <br>
                            <br>
                            <h1>Admission Form</h1>
                            <p>Session : 2020-2021</p>
                        </div><!-- clg description end -->
                    </div><!-- box header end -->
                </div><!-- col end -->
            </div><!-- row end -->
            <br>
            <br>
            <div class="box-body">

                <?php


                if(isset($_SESSION['success'])) {
                    echo '<div class="alert alert-success" role="alert"> '.$_SESSION['success'].'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            ';
                }
                elseif(isset($_SESSION['submit_error'])) {
                    echo '<div class="alert alert-danger" role="alert"> '.$_SESSION['submit_error'].'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    ';
                }elseif(isset($_SESSION['no_exist'])) {
                    echo '<div class="alert alert-danger" role="alert"> '.$_SESSION['no_exist'].'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    ';
                }elseif(isset($_SESSION['image_upload_error'])) {
                    echo '<div class="alert alert-danger" role="alert"> '.$_SESSION['image_upload_error'].'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    ';
                }

                ?>

                <form action="process.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-12">
                            <small class="text-info">All (<span class="text-danger">*</span>) fields are required.</small>
                            <br>
                            <br>
                            <br>
                            <div class="form-group">
                                <label>Applicant Name <span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control" name="applicant_name" required>
                            </div><!-- form group end -->
<!--                            <div class="form-group">-->
<!--                                <label>Applicant Name (Bangla) :</label>-->
<!--                                <input type="text" class="form-control" name="applicant_name_ban">-->
<!--                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Father's Name <span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control" name="father_name" required>
                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Father's Phone Number <span class="text-danger">*</span> :</label>
                                <input type="number" min="0" onKeyPress="if(this.value.length==11) return false;" class="form-control" name="father_phone" required>
                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Mother's Name <span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control" name="mother_name" required>
                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Mobile Number <span class="text-danger">*</span> :</label>
                                <input type="number" min="0" onKeyPress="if(this.value.length==11) return false;" class="form-control" name="mobile" required>
                            </div><!-- form group end -->
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Present Address <span class="text-danger">*</span> :</label>
                                    <textarea name="present_address" class="form-control" required></textarea>
                                </div><!-- form group end -->
                                <div class="form-group col-6">
                                    <label>Permanent Address <span class="text-danger">*</span> :</label>
                                    <textarea name="permanent_address" class="form-control" required></textarea>
                                </div><!-- form group end -->
                            </div><!-- form row end -->
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Guardian Name :</label>
                                    <input type="text" name="guardian_name" class="form-control">
                                </div><!-- form group end -->
                                <div class="form-group col-6">
                                    <label>Relation With Guardian :</label>
                                    <input type="text" name="relation_guardian" class="form-control">
                                </div><!-- form group end -->
                            </div><!-- form row end -->
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Date of Birth <span class="text-danger">*</span> :</label>
                                    <input type="date" name="dob" class="form-control" autocomplete="off" required>
                                </div><!-- form group end -->
                                <div class="form-group col-6">
                                    <label>Nationality <span class="text-danger">*</span> :</label>
                                    <input type="text" name="nationality" class="form-control" required>
                                </div><!-- form group end -->
                            </div><!-- form row end -->
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Marital Status :</label>
                                    <input type="text" name="marital_status" class="form-control">
                                </div><!-- form group end -->
                                <div class="form-group col-6">
                                    <label>Child of Freedom Fighter <span class="text-danger">*</span> :</label>
                                    <select name="cff" class="form-control" required>
                                        <option value="no" selected>No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div><!-- form group end -->
                            </div><!-- form row end -->
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Blood Group <span class="text-danger">*</span> :</label>
                                    <select name="blood_grp" class="form-control" required >
                                        <option value="A(positive)" selected>A+</option>
                                        <option value="A(negative)">A-</option>
                                        <option value="B(positive)">B+</option>
                                        <option value="B(negative)">B-</option>
                                        <option value="O(positive)">O+</option>
                                        <option value="O(negative)">O-</option>
                                        <option value="AB(positive)">AB+</option>
                                        <option value="AB(negative)">AB-</option>
                                    </select>
                                </div><!-- form group end -->
                                <div class="form-group col-6">
                                    <label>Gander <span class="text-danger">*</span> :</label>
                                    <select name="gander" class="form-control" required>
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div><!-- form group end -->
                            </div><!-- form row end -->
                            <h5>Exam Details</h5>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Exam Name <span class="text-danger">*</span> :</label>
                                    <input type="text" name="exam_name" class="form-control" required>
                                </div><!-- form group end -->
                                <div class="form-group col-6">
                                    <label>Exam Group <span class="text-danger">*</span> :</label>
                                    <input type="text" name="exam_group" class="form-control" required>
                                </div><!-- form group end -->
                            </div><!-- form row end -->
                            <div class="form-group">
                                <label>Write your Subjects <span class="text-danger">*</span> :</label>
                                <small>Exp : Bangla, English, ICT</small>
                                <textarea name="subjects" class="form-control" required></textarea>
                            </div><!-- form group end -->
        
                            <div class="form-group">
                                <label>Upload Your Image <span class="text-danger">*</span> :</label>
                                <input type="file" name="image" class="form-control" required>
                                <br>
                                <small>Please upload only jpg or png format. Image max size 5MB.</small>
                            </div><!-- custom file end -->
                        </div><!-- col end -->
                    </div><!-- row end -->
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="apply_now" value="Apply Now" class="btn btn-primary">
                            <br>
                            <br>
                            <input type="button"  value="Print Form" class="btn btn-secondary" data-toggle="modal" data-target=".print">
                        </div>
                    </div><!-- row end -->
                </form><!-- form end -->
            </div><!-- box body end -->
        </div><!-- container end -->
    </div><!-- box end -->



    <!-- Modal -->
    <div class="modal fade print" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print Your Application Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="print.php" method="get">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile_no" class="form-control">
                        </div><!-- form group end -->

                        <button type="submit" class="btn btn-primary">Print</button>
                    </form>


                </div>

            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>

    <script>
        $('.date').datepicker();
    </script>
</body>
</html>
<?php session_destroy(); ?>