<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="teacherhome.php">Home</a> <i class="fas fa-circle"></i> <a href="addMaterials.php">Course List</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>Courses</h2>
                        <a href="" class="addnewaction" data-toggle="modal" data-target="#addmaterialmodal">+ Add new</a>
                    </div>
                    <div class="col-md-4 text-right header-time">
                        <a href=""> Application Admin</a>
                        <a href="#/" class="logout-btn"><i class="fas fa-lock"></i> Logout</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Number of semesters</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B.Tech Computer Science</td>
                            <td>8</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> Edit</a></td>
                            <td class="downloadlink tdaction"><a href="" class="deletecourse"><i class="fas fa-download"></i> Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="addmaterialmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a new course</h4>
                </div>
                <div class="modal-body">
                    <h5><i class="fas fa-book-reader"></i> Select course details</h5>
                    <div class="row">
                        <form action="/action_page.php" class=" inner-form modal-form validate-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="mat_title">Course name</label>
                                        <input type="text" class="form-control" name="mat_title" id="mat_title" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="course_sem">Number of semesters</label>
                                        <input type="text" class="form-control" name="course_sem" id="course_sem" required>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Add course</button>
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