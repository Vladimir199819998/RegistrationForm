<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" in="anonymous"
            crossorig=""></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="./scripts/registration.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<form class="registration-form" action="actions/registration.php" method="POST">
    <a href="admin.php" class="admin">
        Are you an admin?
    </a>
    <div class="form-message alert alert-danger display-error" style="display: none;"></div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
               value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="secondName">Surname</label>
        <input type="text" name="surname" class="form-control" id="surname" placeholder="surname"
               value="<?php if (isset($_POST['surname'])) echo $_POST['surname']; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
               placeholder="Enter email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="topic">Select topic</label>
        <select class="form-control" name='topic' id="topic"
                value="<?php if (isset($_POST['topic'])) echo $_POST['topic']; ?>">
            <option>Business</option>
            <option>Tech</option>
            <option>Marketing and Advertising</option>
        </select>
    </div>

    <div class="form-group">
        <label for="wallet">Select wallet</label>
        <select class="form-control" name="wallet" id="wallet"
                value="<?php if (isset($_POST['wallet'])) echo $_POST['wallet']; ?>">
            <option>WebMoney</option>
            <option>Яндекс Деньги</option>
            <option>PayPal</option>
            <option>Credit Card</option>
        </select>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="subscription" value="" id="subscription">
        <label class="form-check-label notification" for="subscription">
            Subscribe for notifications
        </label>
    </div>

    <button type="submit" class="btn btn-primary submit-button">Submit</button>
</form>


</body>
</html>
