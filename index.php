<?php $data["title"] = "index"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-cover" uk-height-viewport data-src="images/1x/bg1.png" uk-img>
    <div class="uk-section-small">
        <nav class="uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar="mode: click">
            <div class="uk-navbar-center">
                <a href="" class="uk-navbar-item uk-logo"><img src="images/1x/logo.png" alt=""></a>
            </div>
        </nav>
    </div>
    <div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true">
        <div class="home__section uk-width-1-1 uk-section-small">
            <div class="uk-container uk-container-small">
                <div class="item__60">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-center" uk-grid>
                        <div>
                            <a href=""><img src="images/trang-Dang-Ky---FPTU-but1.png" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="images/trang-Dang-Ky---FPTU-but2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="item__60">
                    <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                        <div>
                            <div class="home__card uk-card uk-card-body uk-card-default uk-border-rounded">
                                <form class="uk-form-stacked">
                                    <fieldset class="uk-fieldset">

                                        <legend class="uk-legend uk-text-uppercase home__card__title">đăng ký tư vấn</legend>

                                        <div class="uk-margin">
                                            <label class="uk-form-label home__card__label" for="form-stacked-text">Họ và tên</label>
                                            <div class="uk-form-controls">
                                                <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label home__card__label" for="form-stacked-text">Số điện thoại</label>
                                            <div class="uk-form-controls">
                                                <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="tel" placeholder="">
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label home__card__label" for="form-stacked-text">Email</label>
                                            <div class="uk-form-controls">
                                                <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="uk-margin-top">
                                            <label class="uk-form-label home__card__label" for="form-stacked-text">Tỉnh/ thành phố</label>
                                            <div class="uk-form-controls">
                                                <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div>
                            <img src="images/1x/img1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>