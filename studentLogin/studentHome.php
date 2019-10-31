<?php include("header.php"); ?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 app-header">
                <div class="row">
                    <div class="col-md-12 breadcrumbs">Home</div>
                </div>
                <div class="row">
                    <div class="col-md-8 page-heading">
                        <h2>Search for materials</h2>
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
                        <div class="form-group col-md-4">
                            <label for="">Choose course / Department</label>
                            <select class="form-control" id="" name="">
                                <option>Computer Science</option>
                                <option>Bio Chemical Engg</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Select semester</label>
                            <select class="form-control" id="" name="">
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Select subject</label>
                            <select class="form-control" id="" name="" required>
                                <option>Computer Science</option>
                                <option>Bio Chemical Engg</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn button-theme">Search materials</button>
                        </div>

                    </div>
                </form>
                <hr class="mt2">
            </div>
            <div class="col-md-12 recent-list-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Recently viewed materials</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 recent-item">
                                <a href="">
                                    <div class="recent-item-inner">
                                        <h3>Artificial Neural Networks</h3>
                                        <h4>Neural Networks introduction</h4>
                                        <div class="added-by-inner">
                                            Added by <div class="add-thumb"><img src="../assets/images/tutors/1.jpg" alt="" srcset=""></div> Arjun Narayanan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 recent-item">
                                <a href="">
                                    <div class="recent-item-inner">
                                        <h3>Artificial Neural Networks</h3>
                                        <h4>Neural Networks introduction</h4>
                                        <div class="added-by-inner">
                                            Added by <div class="add-thumb"><img src="../assets/images/tutors/1.jpg" alt="" srcset=""></div> Arjun Narayanan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 recent-item">
                                <a href="">
                                    <div class="recent-item-inner">
                                        <h3>Artificial Neural Networks</h3>
                                        <h4>Neural Networks introduction</h4>
                                        <div class="added-by-inner">
                                            Added by <div class="add-thumb"><img src="../assets/images/tutors/1.jpg" alt="" srcset=""></div> Arjun Narayanan
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt2">
                            <div class="col-md-4 recent-item">
                                <div class="material-type-wrapper">
                                    PDF
                                </div>
                                <a href="">
                                    <div class="recent-item-inner">
                                        <h3>Artificial Neural Networks</h3>
                                        <h4>Neural Networks introduction</h4>
                                        <div class="added-by-inner">
                                            Added by <div class="add-thumb"><img src="../assets/images/tutors/1.jpg" alt="" srcset=""></div> Arjun Narayanan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 recent-item">
                                <a href="">
                                    <div class="recent-item-inner">
                                        <h3>Artificial Neural Networks</h3>
                                        <h4>Neural Networks introduction</h4>
                                        <div class="added-by-inner">
                                            Added by <div class="add-thumb"><img src="../assets/images/tutors/1.jpg" alt="" srcset=""></div> Arjun Narayanan
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>