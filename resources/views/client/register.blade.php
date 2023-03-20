@extends('client.master')
@section('noi_dung')
<main id="MainContent" class="content-for-layout">
    <div class="login-page" style="margin-top: 30px">
        <div class="container">
            <form action="#" class="login-form common-form mx-auto">
                <div class="section-header mb-3">
                    <h2 class="section-heading text-center">Đăng Kí</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Họ</label>
                            <input type="text" />
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Tên</label>
                            <input type="text" />
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Email</label>
                            <input type="email" />
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Mật khẩu</label>
                            <input type="password" />
                        </fieldset>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn-primary d-block mt-3 btn-signin">Đăng Kí</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
