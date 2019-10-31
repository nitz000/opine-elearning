<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs"><a href="studenthome.php">Home</a> <i class="fas fa-circle"></i> <a href="questionpapers.php">Search Results</a></div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>Results for your query</h2>
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
                <table class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Material Title</th>
                            <th>Type</th>
                            <th>Author</th>
                            <th>View</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Discrete Computational Structures</td>
                            <td>Introduction to arrays</td>
                            <td><span class="pdf"><i class="fas fa-file-pdf"></i> PDF</span></td>
                            <td>Santhi R</td>
                            <td class="viewlink tdaction"><a href=""><i class="fas fa-eye"></i> View</a></td>
                            <td class="downloadlink tdaction"><a href="" download><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Discrete Computational Structures</td>
                            <td>BFS Searching Algorithm</td>
                            <td><span class="video"><i class="fas fa-file-video"></i>VIDEO</span></td>
                            <td>Smrithy Raghavendra</td>
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