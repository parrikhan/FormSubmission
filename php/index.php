<?php
    include 'view/header.php';
?>
    <div class="container mt-4">
        <form action="add-subscribers.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userName">Enter UserName :</label>
                    <input type="text" class="form-control" id="userName" name="user-name">
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Enter Age :</label>
                    <input type="number" class="form-control" id="age" name="user-age">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="text" class="form-control" id="email" name="user-email" placeholder="scgf66@domain.com">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Enter Password</label>
                    <input type="text" class="form-control" id="password" name="user-password" placeholder="*******">
                </div>
                <div class="form-group col-md-6">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="text" class="form-control" id="confirm-password" name="user-confirm-password" placeholder="*******">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="user-city">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputProvince">Province</label>
                    <select id="inputProvince" class="form-control" name="select">
                    <option selected>Choose...</option>
                    <option value="punjab">Punjab</option>
                    <option value="sindh">Sindh</option>
                    <option value="Khyber-Paktounkhwa">Khyber-Paktounkhwa</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
<?php
    include 'view/footer.php'; ?>

    
   