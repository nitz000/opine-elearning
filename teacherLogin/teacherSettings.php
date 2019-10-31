<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="studenthome.php">Home</a> <i class="fas fa-circle"></i> <a href="studentsettings.php">Account Settings</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>View or edit account settings</h2>
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
            <div class="col-md-12">
                <form action="materialresult.php" class="inner-form validate-form">
                    <div class="row">
                        <div class="col-md-12 subheading">
                            <h5><i class="fas fa-user"></i> User information</h5>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" value="Aditya Subrahmaniyam" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Teacher Number</label>
                            <input type="text" class="form-control" value="AD147JS" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Department</label>
                            <select class="form-control chosen-select" id="" name="" disabled>
                                <option>B.Tech Computer Science</option>
                                <option>Bio Chemical Engg</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Email address</label>
                            <input type="text" class="form-control" value="aditya@gmail.com" disabled>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-12 mt2">
                <form action="materialresult.php" class="inner-form validate-form">
                    <div class="row">
                        <div class="col-md-12 subheading">
                            <h5><i class="fas fa-shield-alt"></i> Security Settings</h5>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Enter current password</label>
                            <input type="password" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Enter new password</label>
                            <input type="password" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Re-enter new password</label>
                            <input type="password" class="form-control" value="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn button-theme">Chnage password</button>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>