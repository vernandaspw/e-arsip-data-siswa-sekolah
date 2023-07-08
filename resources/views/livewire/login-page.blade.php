<div>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">

                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h3 class="text-center font-weight-light my-4">E-ARSIP DATA SISWA PADA SMA BINA
                                            WARGA 1 PALEMBANG</h3>
                                        <center><img src="{{ asset('logo.jpeg') }}" width="200" alt="">
                                        </center>
                                    </div>
                                    <form wire:submit.prevent="login">
                                        <div class="form-floating mb-3">

                                            <input wire:model='username' class="form-control" id="inputEmail"
                                                type="text" placeholder="username.." />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input wire:model='password' class="form-control" id="inputPassword"
                                                type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" checked id="inputRememberPassword"
                                                type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember
                                                Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            {{-- <a class="small" href="password.html">Forgot Password?</a> --}}
                                            <button type="submit" class="btn btn-primary form-control"
                                                href="index.html">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        {{-- <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div> --}}
    </div>
</div>


<style>
    body{
        background-color: rgb(71, 184, 255);
    }
</style>
