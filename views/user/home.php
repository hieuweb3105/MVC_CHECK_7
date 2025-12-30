<div class="container d-flex justify-content-center sposition-absolute pt-5">
    <div class="col-12 col-md-8 col-lg-6">
        <form method="post" action="/check" class="d-flex flex-column align-items-center justify-content-center mt-5 bg-dark bg-opacity-75 rounded-4 p-3 p-md-4 p-lg-5 animate__animated animate__jello shadow">
            <label for="name" class="text-light fw-bold text-center text-uppercase">
                Vui lòng nhập 2 chữ cuối của </br> Công ty, NPP, Điện Máy của bạn
            </label>
            <div class="col-12 col-md-8">
                <div class="input-group">
                    <input id="name" name="input_key" type="text" class="form-control text-center" placeholder="nhập 2 chữ cuối của tên đại lý" aria-label="Username" aria-describedby="group-input-name">
                </div>
            </div>
            <small style="font-size: 13px" class="small text-light mt-1">
                Ví dụ : Nhà phân phối Thái Bình Dương &rarr; nhập "Bình Dương"
            </small>
            <label for="name" class="text-light fw-bold text-center mt-3 text-uppercase">
                Vui lòng nhập tên Khách hàng
            </label>
            <div class="col-12 col-md-8">
                <div class="input-group">
                    <input id="name" name="input_key" type="text" class="form-control text-center" placeholder="nhập tên KH của bạn" aria-label="Username" aria-describedby="group-input-name">
                </div>
            </div>
            <button type="submit" class="fw-bold btn-light btn mt-3 px-3">
                Xác nhận
            </button>
        </form>
    </div>
</div>