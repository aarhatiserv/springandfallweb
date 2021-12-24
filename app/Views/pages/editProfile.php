<head>
    <style>
    body {
        margin: 0;
        color: #2e323c;
        background: #f5f6fa;
        position: relative;
        height: 100%;
    }

    </style>
</head>
<div class="container">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                            </div>
                            <h5 class="user-name"><?= $userDetails[0]['name'] ?></h5>
                            <h6 class="user-email"><?= $userDetails[0]['email'] ?></h6>
                        </div>
                        <!-- <div class="about">
				<h5>About</h5>
				<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
			</div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters" id="personalProfileDetails" style="display:block">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <input type="hidden" name="userId" id="userId" value="<?= $userDetails[0]['id'] ?>">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="profileFullName" placeholder="Enter full name"
                                    value="<?= $userDetails[0]['name'] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email" class="form-control" id="profileEmail" placeholder="Enter email ID"
                                    value="<?= $userDetails[0]['email'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="profilePhone" placeholder="Enter phone number"
                                    value="<?= $userDetails[0]['phone'] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="HQ">Highest Qualification</label>
                                <input type="text" class="form-control" id="profileHQ" placeholder="Enter Highest Qualification"
                                    value="<?= $userDetails[0]['highest_qualification'] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="HQY">Highest Qualification Year</label>
                                <input type="text" class="form-control" id="profileHQY" placeholder="Enter Highest Qualification Year"
                                    value="<?= $userDetails[0]['highest_qualification_passing_year'] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="HS">Higher Secondary</label>
                                <input type="text" class="form-control" id="profileHS" placeholder="Enter Higher Secondary"
                                    value="<?= $userDetails[0]['higher_secondary'] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="HSY">Higher Secondary Year</label>
                                <input type="text" class="form-control" id="profileHSY" placeholder="Enter Higher Secondary Year"
                                    value="<?= $userDetails[0]['higher_secondary_passing_year'] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="S">Secondary</label>
                                <input type="text" class="form-control" id="profileS" placeholder="Enter Secondary"
                                    value="<?= $userDetails[0]['secondary'] ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="SY">Secondary Year</label>
                                <input type="text" class="form-control" id="profileSY" placeholder="Enter Secondary Year"
                                    value="<?= $userDetails[0]['secondary_passing_year'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row gutters" id="changePassword" style="display:none">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="text" class="form-control" id="profilePassword" placeholder="New Password">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword"
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Address</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Street</label>
					<input type="name" class="form-control" id="Street" placeholder="Enter Street">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">City</label>
					<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="sTate">State</label>
					<input type="text" class="form-control" id="sTate" placeholder="Enter State">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="zIp">Zip Code</label>
					<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
				</div>
			</div>
		</div> -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-left">
                                <a href="javascript:history.back();"><button type="button" id="back" name="back"
                                        class="btn btn-secondary">Back</button></a>

                                        <button type="button" id="backChangePassword" name="backChangePassword"
                                        class="btn btn-danger" style="display:none">Back</button>

                               <button type="button" id="changePasswordBtn" name="changePasswordBtn"
                                        class="btn btn-success">Change Password</button>
                                <button type="button" id="update" name="update" class="btn btn-primary update">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
