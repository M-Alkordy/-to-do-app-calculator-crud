<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>OOP calculator</title>
</head>
<body>
    <h2>OOP calculator</h2>
    <br>
    <div class="container">
    <form action="calc.php" method="POST">
        <div class="form-group my-5">
        <label for="num1Inserted">first number</label>
        <input type="number" name="num1Inserted" class="form-control" style="width: 20%; display:inline;">
        </div>
        <div class="form-group my-5">
        <label for="num2Inserted">second number</label>
        <input type="number" name="num2Inserted" class="form-control" style="width: 20%; display:inline;">
        </div>
        <div class="form-group my-5">
        <label for="calInserted">operation</label>
        <select name="calInserted" class="form-control" style="width: 20%; display:inline;">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
    </div>
    
</body>
</html>