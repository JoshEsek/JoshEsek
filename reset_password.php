<?php include("includes/header.php"); session_start();?>
    <!-- <div class="container-fluid"> -->

<div class="row">
    <div class="col-md-8" style="background-color: #5dbfb1; height: 750px;">
        <div class="row">
            <div class="col-md-12">
                <p class="logo-title">
                    <span>Q</span>Manager
                </p>
            </div>
        </div>
        <div style="margin-left: auto; margin-right: auto; width: 60%">
            <h1>Reset Password</h1>
            <div style="padding-top: 40px; text-align: left;">
                <?php 
                    if (isset($_SESSION["flash"])) {
                        $message = $_SESSION['flash'];
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["flash"]; ?>
                    </div>
                <?php
                        unset($_SESSION['flash']);
                    }
                ?>
                <form method="post" action="scripts/auth-action.php">
                    <div class="col" style="margin: 3px">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="col" style="margin: 3px">
                        <input class="btn btn-light" type="submit" name="reset" value="Reset Password">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 2rem">
            <div class="col-lg-8 text-center">
                <p class="mb-0">Already have an account? <a href="index.php">Login</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col">
                <img style="width: 100%; border-radius: 10px;" src="images/banner.jpeg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 style="color: #5dbfb1; margin: 0 auto 5px; text-transform: uppercase; padding: 15px; border-left: 4px solid grey;">Address</h3>
                <p style="padding: 0 15px; text-align: justify;">
                    GARTHDEE HOUSE, GARTHDEE ROAD, ABERDEEN. AB10 7AQ
                </p>
            </div>
            <div class="col-md-12">
                <h3 style="color: #5dbfb1; margin: 0 auto 5px; text-transform: uppercase; padding: 15px; border-left: 4px solid grey;">Phone</h3>
                <p style="padding: 0 15px; text-align: justify;">
                    +44 (0) 7457862487 | +44 (0) 7712345676
                </p>
            </div>
            <div class="col-md-12">
                <h3 style="color: #5dbfb1; margin: 0 auto 5px; text-transform: uppercase; padding: 15px; border-left: 4px solid grey;">Email</h3>
                <p style="padding: 0 15px; text-align: justify;">
                    hello@qmanager.com | support@qmanager.com
                </p>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
