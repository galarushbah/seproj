document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const errorMessage = document.getElementById("error-message");

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // For simplicity, use dummy values for username and password validation.
        if (username === "admin" && password === "password") {
            // Redirect to the dashboard on successful login.
            window.location.href = "dashboard.html";
        } else {
            errorMessage.textContent = "Invalid credentials entered.";
        }
    });
});
