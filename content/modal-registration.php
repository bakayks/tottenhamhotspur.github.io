<div class="modal fade" id="SignInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"  id="exampleModalLabel" style="color: #111836">Вход</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form class="px-4 py-3">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1" style="color: #111836">Почта</label>
                            <input type="email" class="form-control" id="DropdownFormEmail1" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1" style="color: #111836">Пароль</label>
                            <input type="password" class="form-control" id="DropdownFormPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-dark">Войти</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a data-toggle="modal" data-target="#SignUpModal" class="dropdown-item"  style="color: #111836">Регистрация</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"  id="exampleModalLabel" >Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form class="px-4 py-3">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Sign up</a>
                    <a class="dropdown-item" href="#">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>
</div>