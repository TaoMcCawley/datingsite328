<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Information</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ($BASE) ?>/styles/styles.css">

</head>
<body>
<div class = "navbar header">
    <h3>My Dating Website</h3>
</div>

<div class = "container">
    <div class = "border border-dark" style="margin: 20px">
        <div class = "container">
            <p class = "h2" style="margin: 20px">Personal Information</p>
            <hr>
            <?php if (sizeof($errors) > 0): ?>
                <div class = "alert alert-danger"> You have errors, please check again</div>
            <?php endif; ?>

            <form method="post" action = "<?= ($BASE) ?>/info">
            <div class="row" style="padding: 15px">
                <div class="col-sm-8">
                        <div class="form-group">
                            <label for="inputFirstName"><strong>First Name</strong></label>
                            <input type="text" class="form-control" id="inputFirstName" name = 'inputFirstName' placeholder="Sarah" value = "<?= ($firstName) ?>">

                        </div>
                        <div class="form-group">
                            <label for="inputLastName"><strong>Last Name</strong></label>
                            <input type="text" class="form-control" id="inputLastName" name = 'inputLastName' placeholder="Smith" value="<?= ($lastName) ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAge"><strong>Age</strong></label>
                            <input type="text" class="form-control" id="inputAge" name = 'age' placeholder="30" value = "<?= ($age) ?>">
                        </div>
                        <label for="inlineRadio1"><strong>Gender</strong></label>
                        <div class = "form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber"><strong>Phone Number</strong></label>
                            <input type="text" class="form-control" id="phonenumber" name = "phoneNumber" placeholder="222-333-4444" value = "<?= ($phoneNumber) ?>">
                        </div>

                    <label></label>
                </div>
                <div class = "col-sm-4">
                    <div class="card bg-light mb-3" style="width: 20rem;">
                        <div class="card-body">
                            <p class="card-text"><strong>Note: </strong> All information entered is protected by out privacy policy. Profile information can only be viewed by others with your permission.</p>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-top:210px; margin-left: 15em;" name = 'submit'>Next></button>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>