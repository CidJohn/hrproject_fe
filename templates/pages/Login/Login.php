<section class="login-form" id="loginForm">
    <form action="" method="post">

        <div class="form-group">
            <div class="flex  px-5  my  -5 justify-between">
                <div class="text-2xl font-bold ">Login Account</div>

                <div class="flex gap-3">
                    <img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000" alt="" srcset="">
                    <img src="https://img.icons8.com/?size=100&id=13930&format=png&color=000000" alt="" srcset="">
                    <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="" srcset="">
                </div>
            </div>
            <div class="flex min-w-full items-center justify-center ">
                <div class="border-t border-gray-300 w-full">
                </div>
                <div class="w-20">
                    <h1 class="font-bold text-lg text-center  ">or</h1>
                </div>
                <div class="border-t border-gray-300 w-full"></div>

            </div>
            <div class="form-control">
                <label for="Username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enter Username" require />
            </div>
            <div class="form-control">
                <label for="Password">Password:</label>
                <input type="password" name="password" id="password" placeholder="******" require />
            </div>
            <div class="px-5 py-1 flex">
                <input type="checkbox" name="showPass" id="showPass" />
                <label for="showPass" class="text-sm ">Show Password</label>
            </div>
            <div class="form-control mt-5 ">
                <button type="submit" class="btnSubmit" name="submitLogin" id="submitLogin">Sign in</button>
            </div>
            <div class="flex justify-between px-5 py-2">
                <div class="flex">
                    <input type="checkbox" name="remember" id="remember" />
                    <label for="showPass" class="text-sm  text-blue-700">Remember me</label>
                </div>
                <div class="flex">
                    <a href="http://" class="text-sm text-blue-700 hover:border-b border-blue-700">Forgot Password?</a>
                </div>
            </div>
        </div>
    </form>
</section>