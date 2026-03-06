<?php include('../includes/header.php'); ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card border-0 shadow-lg rounded-4 p-4" style="width: 100%; max-width: 420px;">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Gym Membership System</h3>
            <p class="text-muted mb-0">Sign in to continue</p>
        </div>

        <form action="process_login.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control rounded-3" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control rounded-3" required>
            </div>

            <button type="submit" class="btn btn-dark w-100 rounded-3">Login</button>
        </form>
    </div>
</div>

<?php include('../includes/footer.php'); ?>