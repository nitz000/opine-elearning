<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="teacherhome.php">Home</a> <i class="fas fa-circle"></i> <a href="addMaterials.php">Students List</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>View/Add students</h2>
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
                    <form action="" class="row inner-form validate-form">
                        <div class="form-group col-md-2">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="name">Student name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-md-3">
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
                        <div class="form-group col-md-3">
                            <label for="class">Class</label>
                            <input type="text" class="form-control" name="class" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email"> </label>
                            <button type="submit" class="btn btn-primary addstudentlink"> <i class="fas fa-user-plus"></i> Add student </button>
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Semester</th>
                            <th>Class</th>
                            <th>Login time</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCID415</td>
                            <td>Nithin Krishna</td>
                            <td>B.Tech CSE</td>
                            <td>III</td>
                            <td>CSB</td>
                            <td>14:55:17 Hrs</td>
                            <td>nithinkrishna.mec@gmail.com</td>
                            <td class="downloadlink tdaction"><a href="" class="deleteuser"><i class="fas fa-user-slash"></i> Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>