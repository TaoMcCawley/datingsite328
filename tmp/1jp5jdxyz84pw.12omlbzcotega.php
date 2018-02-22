<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <div class="row" style="padding: 15px">
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item">Name:    <?= ($fName) ?> <?= ($lName) ?></li>
                        <li class="list-group-item">Gender:    <?= ($gender) ?></li>
                        <li class="list-group-item">Age:    <?= ($age) ?></li>
                        <li class="list-group-item">Phone:    <?= ($phoneNumber) ?></li>
                        <li class="list-group-item">Email:    <?= ($emailAddress) ?></li>
                        <li class="list-group-item">State:    <?= ($locationState) ?></li>
                        <li class="list-group-item">Seeking:    <?= ($seekingGender) ?></li>
                        <li class="list-group-item">Interests:    <?php foreach (($interests?:[]) as $value): ?><?= (trim($value)) ?>, <?php endforeach; ?></li>
                    </ul>
                </div>
                <div class = "col-sm-6">
                    <img src = "<?= ($BASE) ?>/images/profilepic.jpg"alt = "your picture!" style="width:500px;">
                    <div class = "h4">Biography</div>
                    <p><?= ($biography)."
" ?>
                    </p>
                </div>
            </div>
            <div class = "text-center" style="padding-bottom: 20px;">
                <button type="button" class="btn btn-primary">Create a profile!</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>