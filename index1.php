<?php $data["title"] = "index1"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-norepeat uk-background-cover" uk-height-viewport data-src="images/1x/bg1.png" uk-img>
    <div class="uk-section-small">
        <nav class="uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar="mode: click">
            <div class="uk-navbar-center">
                <a href="" class="uk-navbar-item home__nav-item uk-logo"><img src="images/1x/logo.png" alt=""></a>
                <div class="uk-navbar-item home__nav-item uk-visible@m">
                    <div class="uk-text-center">
                        <div class="home__txt1">PHIẾU ĐĂNG KÝ ĐẠI HỌC FPT 2022</div>
                        <div class="home__txt2">HỆ ĐẠI HỌC CHÍNH QUY</div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="uk-flex uk-flex-middle" uk-height-viewport="offset-bottom: true;offset-top: true;">
        <div class="home__section uk-width-1-1 uk-section-small">
            <div class="uk-container uk-container-small">
                <div class="home__card1 uk-card uk-card-default">
                    <div class="uk-background-muted uk-padding-remove">
                        <ul class="uk-child-width-expand home__tab" uk-tab>
                            <li class="uk-active"><a href="#"><span>THÔNG TIN THÍ SINH</span></a></li>
                            <li><a href="#"><span>THÔNG TIN TRƯỜNG THPT</span></a></li>
                            <li><a href="#"><span>THÔNG TIN LIÊN HỆ</span></a></li>
                            <li><a href="#"><span>THÔNG TIN ĐĂNG KÝ</span></a></li>
                        </ul>
                    </div>
                    <div class="home__card1__body uk-card-body">
                        <div class="uk-flex-center" uk-grid>
                            <div class="uk-width-4-5@m">
                                <div class="item__40 uk-form-stacked">
                                    <div class="uk-child-width-1-1 uk-grid-small" uk-grid>
                                        <div>
                                            <div class="uk-text-uppercase home__card__title uk-text-center">THÔNG TIN THÍ SINH</div>
                                        </div>
                                        <div>
                                            <div class="uk-child-width-1-3@m uk-grid-small" uk-grid>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Họ tên thí sinh</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Số điện thoại</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Email</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-child-width-1-3@m uk-grid-small" uk-grid>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Giới tính</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Ngày/ tháng / năm sinh</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-child-width-1-3@m uk-grid-small" uk-grid>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Số CMND / CCCD</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Cấp ngày</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="uk-form-label home__card__label" for="form-stacked-text">Nơi cấp</label>
                                                    <div class="uk-form-controls">
                                                        <input class="home__card__input uk-input uk-border-rounded" id="form-stacked-text" type="text" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__40">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <button class="home__btn-back uk-button uk-button-secondary uk-border-rounded"><span>QUAY LẠI</span></button>
                                        </div>
                                        <div class="uk-width-auto">
                                            <button class="home__btn-step uk-button uk-button-primary uk-border-rounded"><span>BƯỚC TIẾP THEO</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-small footer">
        <div class="uk-container uk-container-large">
            <div class="uk-child-width-1-5@m" uk-grid>
                <div>
                    <div class="footer__title">HÀ NỘI</div>
                    <ul class="uk-list footer__list">
                        <li>Khu Giáo dục và Đào tạo – Khu Công nghệ cao Hòa Lạc – Km29 Đại lộ Thăng Long, H. Thạch Thất, TP. Hà Nội</li>
                        <li>024 7300 1866</li>
                        <li>daihocfpt@fpt.edu.vn</li>
                    </ul>
                </div>
                <div>
                    <div class="footer__title">TP. HỒ CHÍ MINH</div>
                    <ul class="uk-list footer__list">
                        <li>Lô E2a-7, Đường D1 Khu Công nghệ cao, P. Long Thạnh Mỹ, TP. Thủ Đức, TP. Hồ Chí Minh</li>
                        <li>024 7300 1866</li>
                        <li>daihocfpt@fpt.edu.vn</li>
                    </ul>
                </div>
                <div>
                    <div class="footer__title">ĐÀ NẴNG</div>
                    <ul class="uk-list footer__list">
                        <li>Khu đô thị công nghệ FPT Đà Nẵng, P. Hoà Hải, Q. Ngũ Hành Sơn, TP. Đà Nẵng</li>
                        <li>024 7300 1866</li>
                        <li>daihocfpt@fpt.edu.vn</li>
                    </ul>
                </div>
                <div>
                    <div class="footer__title">CẦN THƠ</div>
                    <ul class="uk-list footer__list">
                        <li>Số 600 Đường Nguyễn Văn Cừ (nối dài), P. An Bình, Q. Ninh Kiều, TP. Cần Thơ</li>
                        <li>024 7300 1866</li>
                        <li>daihocfpt@fpt.edu.vn</li>
                    </ul>
                </div>
                <div>
                    <div class="footer__title">Bình Định</div>
                    <ul class="uk-list footer__list">
                        <li>Khu đô thị mới An Phú Thịnh, Phường Nhơn Bình & Phường Đống Đa, TP. Quy Nhơn, Bình Định</li>
                        <li>024 7300 1866</li>
                        <li>daihocfpt@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>