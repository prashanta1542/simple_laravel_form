<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body class="bg-dark text-light">
    <div class="container ">
        <h1 class="text-center">New employee register form</h1>
        <form class="bg-warning p-4 text-success" method="POST" action="{{ url('/getformdata') }}">
            @csrf
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" placeholder="Username" name="name">
                <label>Enter Name</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control" placeholder="Email" name="email"/>
                <label>E-mail</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <textarea class="form-control" name="address" placeholder="Write your address"></textarea>
                <label>Address</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="date" class="form-control" placeholder="Joining date" name="jdate" />
                <label>Joining Date</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="number" class="form-control" placeholder="Salary" name="salary"/>
                <label>Salary</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <select class="form-select" name="departments">
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                </select>
                <labelclass="form-label">Departments (select one):</label>
            </div>
            <div class="mb-3 mt-3">
                Select Gender
            </div>
            <div class="d-flex mb-3 mt-3">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">male
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                    <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" value="others">Others
                    <label class="form-check-label"></label>
                </div>
            </div>

            <div class="form-check mb-3 mt-3">
                <input class="form-check-input text-center" type="checkbox" id="check1" name="active" value=true>
                <label class="form-check-label pr-3 ">Active</label>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-info ">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>