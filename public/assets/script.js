// Fetch roles for the dropdown
fetch("/api/roles")
    .then((response) => response.json())
    .then((roles) => {
        const roleSelect = document.querySelector("#role_id");
        roles.forEach((role) => {
            const option = `<option value="${role.id}">${role.name}</option>`;
            roleSelect.innerHTML += option;
        });
    });

// Handle form submission
$(document).ready(function () {
    $("#userForm").on("submit", function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "/api/users",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                const user = response.data;

                let newRow = `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.phone}</td>
                        <td>${user.description || "N/A"}</td>
                        <td>${user.role ? user.role.role_name : "N/A"}</td>
                        <td>
                            ${
                                user.profile_image
                                    ? `<img src="/storage/${user.profile_image}" alt="Profile" class="img-thumbnail" style="width: 50px;">`
                                    : "N/A"
                            }
                        </td>
                    </tr>
                `;

                $("#userTable tbody").append(newRow);

                // Reset the form
                $("#userForm")[0].reset();
                $(".text-danger").text(""); // Clear error messages
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;

                // Clear previous error messages
                $(".text-danger").text("");

                // Display errors
                if (errors) {
                    for (let field in errors) {
                        $("#error-" + field).text(errors[field][0]);
                    }
                }
            },
        });
    });
});

function addUserToTable(user) {
    const tableBody = document.querySelector("table tbody");
    const row = `<tr>
        <td>${user.name}</td>
        <td>${user.email}</td>
        <td>${user.phone}</td>
        <td>${user.role.role_name}</td>
        <td><img src="/storage/profile_images/${user.profile_image}" alt="Profile" width="50"></td>
    </tr>`;
    tableBody.innerHTML += row;
}
