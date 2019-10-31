<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="adminHome.php">Home</a> <i class="fas fa-circle"></i> <a href="addSubject.php">Exam Types</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>View/Add exam types</h2>
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
                        <div class="form-group col-md-9">
                            <label for="etype">Exam type</label>
                            <input type="text" class="form-control" name="etype" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email"> </label>
                            <button type="submit" class="btn btn-primary addstudentlink"> <i class="fas fa-plus"></i> Add exam type </button>
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
                            <th>Exam type</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Regular</td>
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
                <h4 class="modal-title">Edit exam type</h4>
            </div>
            <div class="modal-body">
                <h5><i class="fas fa-book-reader"></i> Enter new details</h5>
                <div class="row">
                    <form action="/action_page.php" class=" inner-form modal-form validate-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="sub">Exam type</label>
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