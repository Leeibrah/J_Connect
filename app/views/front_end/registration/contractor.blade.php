    <div class="container">

      <form class="form-signin" action="index.html">
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" placeholder="First Name" autofocus>
            <input type="text" class="form-control" placeholder="Last Name" autofocus>
            <!-- <input type="text" class="form-control" placeholder="Address" autofocus> -->
            <input type="text" class="form-control" placeholder="Email" autofocus>
            <!-- <input type="text" class="form-control" placeholder="City/Town" autofocus>
            <div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Male
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="sample-radio" id="radio-02" value="1" type="radio" /> Female
                </label>
            </div>

            <p> Enter your account details below</p>
             <input type="text" class="form-control" placeholder="User Name" autofocus> -->
            <input type="password" class="form-control" placeholder="Password">
            <input type="password" class="form-control" placeholder="Re-type Password">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="{{ URL::to('login') }}">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>

