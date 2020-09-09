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
                            <a href="#"><h1>Logo</h1></a>
                        </div><!-- logo end -->
                        <div class="clg-description">
                            <h2>College Name</h2>
                            <h4>Admission Form</h4>
                            <p>Session : 2020-2021</p>
                        </div><!-- clg description end -->
                    </div><!-- box header end -->
                </div><!-- col end -->
            </div><!-- row end -->
            <div class="box-body">

                <?php

                if(!empty($_GET['message'])) {
                    $message = $_GET['message'];
                    echo '<div class="alert alert-success" role="alert"> '.$message.'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            ';
                }
                elseif(!empty($_GET['image_error'])) {
                    $image_error = $_GET['image_error'];
                    echo '<div class="alert alert-danger" role="alert"> '.$image_error.'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            ';
                }elseif(!empty($_GET['submit_error'])) {
                    $submit_error = $_GET['submit_error'];
                    echo '<div class="alert alert-danger" role="alert"> '.$submit_error.'
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
                            <p>All (<span class="text-danger">*</span>) fields are required.</p>
                            <div class="form-group">
                                <label>Applicant Name <span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control" name="applicant_name" required>
                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Applicant Name (Bangla) :</label>
                                <input type="text" class="form-control" name="applicant_name_ban">
                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Fathers Name <span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control" name="father_name" required>
                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Mothers Name <span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control" name="mother_name" required>
                            </div><!-- form group end -->
                            <div class="form-group">
                                <label>Mobile Number <span class="text-danger">*</span> :</label>
                                <input type="number" min="0" class="form-control" name="mobile" required>
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
                                    <label>Guardian Name <span class="text-danger">*</span> :</label>
                                    <input type="text" name="guardian_name" class="form-control">
                                </div><!-- form group end -->
                                <div class="form-group col-6">
                                    <label>Relation With Guardian <span class="text-danger">*</span> :</label>
                                    <input type="text" name="relation_guardian" class="form-control" required>
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
                                <label>Desire Subjects for H.S.C <span class="text-danger">*</span> :</label>
                                <textarea name="subjects" class="form-control" required></textarea>
                            </div><!-- form group end -->
        
<!--                            <div class="form-group">-->
<!--                                <label>Upload Your Image</label>-->
<!--                                <input type="file" name="image" class="form-control">-->
<!--                            </div><!-- custom file end -->
                        </div><!-- col end -->
                    </div><!-- row end -->
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="apply_now" value="Apply Now" class="btn btn-primary">
                            <br>
                            <br>
                            <input type="button"  value="Print Form" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                        </div>
                    </div><!-- row end -->
                </form><!-- form end -->
            </div><!-- box body end -->
        </div><!-- container end -->
    </div><!-- box end -->



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="print.php" method="get">
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="number" name="mobile_no" class="form-control">
                        </div><!-- form group end -->

                        <button type="submit" class="btn btn-primary">Save changes</button>
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