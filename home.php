<?php
include("partials/header.php");
include("partials/nav.php");
?>

<div class="homeSection">
    <div class="containerBg">
        <div class="homeContent">
            <h1>Welcome On Board</h1>
            <p><span>I want to be notifed.</span></p>
            <div class="form-control-wrapper form-control-wrapper--icon-left">
                <div class="flex-row">
                    <input class="form-control col-8" type="mail" name="icon-input-left-id" id="icon-input-left-id" placeholder="name@example.com">
                    <button class="col-4 btn btn-home-style">Send</button>
                </div>

            <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><path d="M1,23 c0-5.523,4.477-10,10-10h2c5.523,0,10,4.477,10,10"></path><circle cx="12" cy="7" r="6"></circle></g></svg>
           </div>
           <p><span class="signUp">Or sign up</span></p><br>
           <button class="btn btn--slide-fx btn--slide-fx-replace-label js-btn--slide-fx btn-home-style">Create an account</button>
        </div>
    </div>
</div>
<?php
include("partials/footer.php");