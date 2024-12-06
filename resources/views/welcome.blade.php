<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4">
        <form id="userForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
                <small class="text-danger" id="error-name"></small>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
                <small class="text-danger" id="error-email"></small>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control">
                <small class="text-danger" id="error-phone"></small>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
                <small class="text-danger" id="error-description"></small>
            </div>

            <div class="form-group">
                <label for="role_id">Role</label>
                <select id="role_id" name="role_id" class="form-control">
                    <option value="">Select Role</option>
                    <!-- Roles will be populated dynamically -->
                </select>
                <small class="text-danger" id="error-role_id"></small>
            </div>

            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" id="profile_image" name="profile_image" class="form-control">
                <small class="text-danger" id="error-profile_image"></small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div id="errorMessages" class="text-danger mt-3"></div>

        <table class="table table-bordered mt-4" id="userTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Description</th>
                    <th>Role</th>
                    <th>Profile Image</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic rows will be added here -->
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
