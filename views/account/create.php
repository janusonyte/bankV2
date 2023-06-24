<body style="background-color:grey;">
    <div class="container">
        <h1 class="col m-5">Open a new account</h1>
        <div class="col m-5">
            <fieldset>
                <form action="/account/store" method="post">
                    <div>
                        <label class="form-label" for="name">First Name</label>
                        <input class="form-label" type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label class="form-label" for="lastName">Last Name</label>
                        <input class="form-label" type="text" name="lastName" id="lastName" required>
                    </div>
                    <div>
                        <label class="form-label" for="personalId">Personal ID</label>
                        <input class="form-label" type="text" name="personalId" id="personalId" required>
                    </div>
                    <div class="col m-3">

                        <button class="btn btn-success" type="submit">Open a new account</button>
                    </div>
                </form>
            </fieldset>
        </div>
</body>