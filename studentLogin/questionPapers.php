<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="studenthome.php">Home</a> <i class="fas fa-circle"></i> <a href="questionpapers.php">Question Papers</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>Previous question Papers</h2>
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
                    <form action="/action_page.php" class="row inner-form">
                        <div class="form-group col-md-4">
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

                        <div class="form-group col-md-3">
                            <label for="email"> </label>
                            <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Search papers </button>
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
                            <th>Year</th>
                            <th>Exam Type</th>
                            <th>View</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Discrete Computational Structures</td>
                            <td>2011</td>
                            <td>Regular</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> View</a></td>
                            <td class="downloadlink tdaction"><a href="" download><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Discrete Computational Structures</td>
                            <td>2010</td>
                            <td>Supplementary</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> View</a></td>
                            <td class="downloadlink tdaction"><a href="" download><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Discrete Computational Structures</td>
                            <td>2012</td>
                            <td>Supplementary</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> View</a></td>
                            <td class="downloadlink tdaction"><a href="" download><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Discrete Computational Structures</td>
                            <td>2009</td>
                            <td>Supplementary</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> View</a></td>
                            <td class="downloadlink tdaction"><a href="" download><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Automata Languages and Computation Theory</td>
                            <td>2011</td>
                            <td>Supplementary</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> View</a></td>
                            <td class="downloadlink tdaction"><a href="" download><i class="fas fa-download"></i> Download</a></td>
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