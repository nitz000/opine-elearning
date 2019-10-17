<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eLearning Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/maintheme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/theme.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 login-left">
                <span class="college-name">
                    Nehru College of Pharmacy
                </span>
                <br>
                <span class="product-name">
                    elearning Portal
                </span>

                <form action="" class="login-form validate-form">
                    <div class="row">
                        <div class="form-group col-md-12 ">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="" required validate>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 ">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1" name="sel1" required>
                                <option>Computer Science</option>
                                <option>Bio Chemical Engg</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 ">
                            <label for="year">Year</label>
                            <input type="number" class="form-control" id="year" name="year" required validate>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sem">Semester</label>
                            <input type="number" class="form-control" id="sem" name="sem" required validate>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default forgot-submit">Submit</button>
                </form>
                <div class="forgot-message">
                    Please check your email to confirm your account
                </div>
                <div class="form-extra">
                    <a href="">Login</a> | <a href="">Sign up</a> | <a href="">Teacher login</a>
                </div>
            </div>
            <div class="col-md-7 login-right">
                <div class="product-logo">
                    <span class="product-name">eLearning</span><br>
                    <span class="product-name-dimmer">portal</span>
                    <span class="powered-by">Powered by Opine</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>