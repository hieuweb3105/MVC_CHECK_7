<div class="container d-flex justify-content-center sposition-absolute pt-5">
    <div class="col-12 col-md-8 col-lg-6">
        <form method="post" action="/check" class="d-flex flex-column align-items-center justify-content-center mt-5 bg-dark bg-opacity-75 rounded-4 p-3 p-md-4 p-lg-5 animate__animated animate__jello shadow">
            <label for="name_agency" class="text-light fw-bold text-center text-uppercase">
                Vui lòng nhập tên Đại lý/Điện máy/Công ty/NPP của bạn
            </label>
            <div class="col-12 col-md-8">
                <div class="input-group">
                    <input id="name_agency" name="name_agency" type="text" class="form-control text-center" placeholder="nhập tên đại lý/điện máy/công ty/npp tại đây" aria-label="Username" aria-describedby="group-input-name">
                </div>
            </div>
            <small style="font-size: 13px" class="small text-md-center text-light mt-1">
                Lưu ý : Chỉ cần nhập tên hậu tố.<br>
                Ví dụ : Nhà phân phối Thái Bình Dương &rarr; nhập "Thái Bình Dương"
            </small>
            <label for="name_customer" class="text-light fw-bold text-center mt-3 text-uppercase">
                Vui lòng nhập tên Khách hàng
            </label>
            <div class="col-12 col-md-8">
                <div class="input-group">
                    <input id="name_customer" name="name_customer" type="text" class="form-control text-center" placeholder="nhập tên KH của bạn" aria-label="Username" aria-describedby="group-input-name">
                </div>
            </div>
            <button disabled id="submit_btn" type="submit" class="fw-bold btn-light btn mt-3 px-3">
                Xác nhận
            </button>
        </form>
    </div>
</div>

<script>
        // Chọn các phần tử cần thiết
    const nameAgency = document.getElementById('name_agency');
    const nameCustomer = document.getElementById('name_customer');
    const submitBtn = document.getElementById('submit_btn');

    // Hàm kiểm tra trạng thái của các input
    function toggleButton() {
        const agencyValue = nameAgency.value.trim();
        const customerValue = nameCustomer.value.trim();

        // Nếu cả 2 đều có giá trị (không rỗng) thì bỏ disabled
        if (agencyValue !== "" && customerValue !== "") {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    }

    // Lắng nghe sự kiện "input" trên cả 2 ô nhập liệu
    nameAgency.addEventListener('input', toggleButton);
    nameCustomer.addEventListener('input', toggleButton);
</script>