<body>
    <div class="card">
        <h5 class="card-header">Open a new account</h5>
        <div class="card-body">

            <form class="row g-3" form action="/account/store" method="post">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your first name">
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last name:</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter your last name">
                </div>
                <div class="col-md-6">
                    <label for="personalId" class="form-label">Personal ID number:</label>
                    <input type="text" class="form-control" name="personalId" placeholder="Enter your personal ID number">
                </div>


                <div class="col-12">
                    <button type="submit" class="purple-gradient">Save</button>
                </div>
            </form>

        </div>
    </div>
</body>