<?php include('../includes/header.php'); ?>
<?php include('../includes/sidebar.php'); ?>

<div class="main-content">
    <?php include('../includes/topbar.php'); ?>

    <div class="container-fluid px-0">
        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Total Members</div>
                    <div class="stat-value">120</div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Active Members</div>
                    <div class="stat-value">95</div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Expired Members</div>
                    <div class="stat-value">18</div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="stat-title">Monthly Revenue</div>
                    <div class="stat-value">₱45,000</div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4 mt-4">
            <div class="card-body">
                <h5 class="mb-3">Recent Transactions</h5>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Member</th>
                                <th>Plan</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TRX-1001</td>
                                <td>John Doe</td>
                                <td>Premium</td>
                                <td>₱1,500</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                            <tr>
                                <td>TRX-1002</td>
                                <td>Maria Santos</td>
                                <td>VIP</td>
                                <td>₱2,500</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>