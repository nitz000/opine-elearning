<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="teacherhome.php">Home</a> <i class="fas fa-circle"></i> <a href="addMaterials.php">Question Papers</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>Previous question papers</h2>
                        <a href="" class="addnewaction" data-toggle="modal" data-target="#addquestionmodal">+ Add new</a>
                    </div>
                    <div class="col-md-4 text-right header-time">
                        <a href=""> Adtya Subrahmaniyam</a>
                        <a href="#/" class="logout-btn"><i class="fas fa-lock"></i> Logout</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row inner-content">
            <div class="col-md-12 inner-search-bar">
                <div class="bb">
                    <form action="" class="row inner-form">
                        <div class="form-group col-md-3">
                            <label for="email">Course</label>
                            <select data-placeholder="Choose a course" class="form-control chosen-select" id="sel1">
                                <option>B.Tech Computer Science</option>
                                <option>B.Tech Electronics</option>
                                <option>B.Tech Biomedical</option>
                                <option>B.Tech Mechanical</option>
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="email">Semester</label>
                            <select class="form-control chosen-select" id="sel1">
                                <option>I</option>
                                <option>II</option>
                                <option>III</option>
                                <option>IV</option>
                                <option>V</option>
                                <option>VI</option>
                                <option>VII</option>
                                <option>VIII</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Subject</label>
                            <select class="form-control chosen-select" id="sel1">
                                <option value=""></option>
                                <option>Web Technology</option>
                                <option>Data Structures</option>
                                <option>Programming Languages</option>
                                <option>Algorithms</option>
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="email">Type</label>
                            <select class="form-control chosen-select" id="sel1">
                                <option value=""></option>
                                <option>Video</option>
                                <option>Pdf</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="email"> </label>
                            <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Search materials </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Exam Type</th>
                            <th>Year</th>
                            <th>View</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Discrete Computational Structures</td>
                            <td>Regular</td>
                            <td>2014</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> View</a></td>
                            <td class="downloadlink tdaction"><a href="" download><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="addquestionmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a new question paper</h4>
                </div>
                <div class="modal-body">
                    <h5><i class="fas fa-book-reader"></i> Select course details</h5>
                    <div class="row">
                        <form action="/action_page.php" class=" inner-form modal-form validate-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="course">Course</label>
                                        <select class="form-control chosen-select" id="course" name="course" required>
                                            <option value=""></option>
                                            <option>Web Technology</option>
                                            <option>Data Structures</option>
                                            <option>Programming Languages</option>
                                            <option>Algorithms</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="semester">Semester</label>
                                        <select class="form-control chosen-select" id="semester" name="semester" required>
                                            <option value=""></option>
                                            <option>I</option>
                                            <option>II</option>
                                            <option>III</option>
                                            <option>IV</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="sub">Subject</label>
                                        <select class="form-control chosen-select" id="sub" name="sub" required>
                                            <option value=""></option>
                                            <option>Web Technology</option>
                                            <option>Data Structures</option>
                                            <option>Programming Languages</option>
                                            <option>Algorithms</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="type">Exam type</label>
                                        <select class="form-control chosen-select" id="type" name="type" required>
                                            <option value=""></option>
                                            <option>Regular exam</option>
                                            <option>Supplementary exam</option>
                                            <option>Spl. Supplementary exam</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sub">Year</label>
                                        <input type="text" class="form-control" name="" id="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h5><i class="fas fa-upload"></i> Upload File</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="mat_desc">Select file (PDF)</label>
                                        <input type="file" class="form-control" name="" id="" required>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Add material</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>