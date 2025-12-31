<div class="container d-flex justify-content-center mt-5">
    <div class="col-12 col-md-8 col-lg-6 d-flex flex-column gap-3 gap-lg-1 bg-dark bg-opacity-75 p-3 rounded-4 mb-lg-0 shadow text-light animate__animated animate__bounceInLeft">
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Tên đại lý
            </div>
            <div class="fw-info fs-4 text-lg-end text-center text-capitalize">
                <?= $_SESSION['temp']['result'][0][0] ?>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Tên KH
            </div>
            <div class="fw-info fs-4 text-lg-end text-center text-capitalize">
                <?= $_SESSION['temp']['result'][0][1] ?>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Vị trí bàn
            </div>
            <div class="fw-info fs-4 text-lg-end text-center text-capitalize">
                <?= $_SESSION['temp']['result'][0][2] ?>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <div class="fw-bold">
                Số bàn
            </div>
            <div class="fw-info fs-4 text-lg-end text-center text-capitalize">
                <?= $_SESSION['temp']['result'][0][3] ?>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-8 col-lg-4 mt-4" data-aos="fade-up">
    <img class="w-100" src="<?= URL_STORAGE ?>system/map.png" alt="map.jpg">
</div>

<div class="col-12 col-md-8 col-lg-4 mt-4" data-aos="fade-up">
    <img class="w-100" src="<?= URL_STORAGE ?>system/timeline.png" alt="map.jpg">
</div>

<div class="text-center" data-aos="fade-up">
    <a id="feedback" href="/feedback" class="btn btn-dark fs-6 px-4 fw-bold btn my-5">
        Đánh giá dịch vụ của chúng tôi
    </a>
</div>