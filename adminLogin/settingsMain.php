<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="studenthome.php">Home</a> <i class="fas fa-circle"></i> <a href="studentsettings.php">Application Settings</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>View or edit application settings</h2>
                    </div>
                    <div class="col-md-4 text-right header-time">
                        <a href=""> Application admin</a>
                        <a href="#/" class="logout-btn"><i class="fas fa-lock"></i> Logout</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row inner-content">
            <div class="col-md-12">
                <form action="materialresult.php" class="inner-form validate-form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <a href="addCourse.php">Add / Edit a course</a>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="addSubject.php">Add / Edit the subjects in a course</a>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="addType.php">Set the different exam types (For question papers)</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>