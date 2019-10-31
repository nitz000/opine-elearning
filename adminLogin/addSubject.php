<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="adminHome.php">Home</a> <i class="fas fa-circle"></i> <a href="addSubject.php">Subjects List</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>View/Add subjects</h2>
                    </div>
                    <div class="col-md-4 text-right header-time">
                        <a href=""> Application Admin</a>
                        <a href="#/" class="logout-btn"><i class="fas fa-lock"></i> Logout</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row inner-content">
            <div class="col-md-12 inner-search-bar">
                <div class="bb">
                    <form action="" class="row inner-form validate-form">
                        <div class="form-group col-md-4">
                            <label for="course">Course</label>
                            <select data-placeholder="Choose a course" name="course" class="form-control chosen-select" id="course">
                                <option>B.Tech Computer Science</option>
                                <option>B.Tech Electronics</option>
                                <option>B.Tech Biomedical</option>
                                <option>B.Tech Mechanical</option>
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="sem">Semester</label>
                            <select class="form-control chosen-select" id="sel1" name="sem">
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
                            <label for="class">Subject Name</label>
                            <input type="text" class="form-control" name="class" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email"> </label>
                            <button type="submit" class="btn btn-primary addstudentlink"> <i class="fas fa-plus"></i> Add subject </button>
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
                            <th>Course</th>
                            <th>Semester</th>
                            <th>Subject Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B.Tech CSE</td>
                            <td>III</td>
                            <td>Discrete computational structures</td>
                            <td class="downloadlink tdaction"><a href="" data-toggle="modal" data-target="#editsubjectmodal" class="editsubject"><i class="fas fa-user-slash"></i> Edit</a></td>
                            <td class="downloadlink tdaction"><a href="" class="deletesubject"><i class="fas fa-user-slash"></i> Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="editsubjectmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit subject</h4>
            </div>
            <div class="modal-body">
                <h5><i class="fas fa-book-reader"></i> Select subject details</h5>
                <div class="row">
                    <form action="/action_page.php" class=" inner-form modal-form validate-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="course">Course</label>
                                    <select class="form-control chosen-select" id="course" name="course" required>
                                        <option value=""></option>
                                        <option>Web Technology</option>
                                        <option>Data Structures</option>
                                        <option>Programming Languages</option>
                                        <option>Algorithms</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="semester">Semester</label>
                                    <select class="form-control chosen-select" id="semester" name="semester" required>
                                        <option value=""></option>
                                        <option>I</option>
                                        <option>II</option>
                                        <option>III</option>
                                        <option>IV</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="sub">Subject Name</label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Edit subject</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

</body>

</html>