<div class="container d-flex justify-content-center sposition-absolute pt-5">
    <div class="col-12 col-md-8 col-lg-6">
        <div
            class="d-flex flex-column align-items-center justify-content-center mt-5 bg-dark bg-opacity-75 rounded-4 p-3 p-md-4 p-lg-5 animate__animated animate__jello shadow">
            <label for="name_customer" class="text-light fw-bold text-center text-uppercase">
                Vui lòng chọn đại lý của bạn
            </label>
            <div class="px-4">
                <?php foreach ($_SESSION['temp']['result'] as $list_agency): ?>
                    <button data-bs-toggle="modal" data-bs-target="#modal-agency" data-name-agency="<?= $list_agency[0] ?>"
                        class="fw-bold btn-light btn mt-3 px-3 w-100">
                        <?= $list_agency[0] ?>
                    </button>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-agency" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light bg-opacity-75">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận chọn đại lý</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="w-100 h6 mb-2">
                    Vui lòng xác nhận thông tin khách mời của bạn :
                </div>
                <span style="font-family: E Light">Tên Đại lý :</span> <span id="name-agency"></span>
                <br>
                <span style="font-family: E Light">Tên KH :</span> <span><?= $_SESSION['temp']['result'][0][1] ?></span>
            </div>
            <div class="modal-footer">
                <form action="/choose" method="post">
                    <input type="hidden" name="choose_agency" value="">
                    <button type="button" class="btn btn-sm px-3 btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn  btn-sm px-3 btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lấy thẻ modal theo ID
        var agencyModal = document.getElementById('modal-agency');

        // Lắng nghe sự kiện trước khi modal được hiển thị
        agencyModal.addEventListener('show.bs.modal', function (event) {
            // 'event.relatedTarget' chính là button mà người dùng vừa click vào
            var button = event.relatedTarget;

            // Lấy giá trị từ thuộc tính data-name-agency của button đó
            var agencyName = button.getAttribute('data-name-agency');

            // 1. Gán text vào thẻ span#name-agency
            var spanName = agencyModal.querySelector('#name-agency');
            spanName.textContent = agencyName;

            // 2. Gán giá trị vào input hidden có name="choose-agency"
            var inputHidden = agencyModal.querySelector('input[name="choose_agency"]');
            inputHidden.value = agencyName;
        });
    });
</script>