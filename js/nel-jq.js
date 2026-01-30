let images = [];
let currentIndex = 0;

$(document).on('click', '.popup-img', function () {

    images = $('.popup-img img').toArray();
    currentIndex = images.indexOf($(this).find('img')[0]);

    openModal();
});

function openModal() {
    const img = images[currentIndex];
    const smallSrc = img.src;
    const largeSrc = smallSrc.replace('/small', '');
    const altName = img.alt || '';

    $('#imgPreviewModal').remove();

const modalHtml = `
<div class="modal fade" id="imgPreviewModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">

            <div class="modal-body position-relative text-center p-0">

                <!-- Close button -->
                <button type="button"
                        class="btn-close position-absolute top-0 end-0 m-3 z-3"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>

                <!-- Navigation -->
                <button class="nav-btn prev-btn bg-warning text-dark">&lsaquo;</button>

                <img src="${largeSrc}" class="img-fluid" alt="${altName}">

                <button class="nav-btn next-btn bg-warning text-dark">&rsaquo;</button>

            </div>

        </div>
    </div>
</div>`;

    $('body').append(modalHtml);
    new bootstrap.Modal('#imgPreviewModal').show();
}

/* Navigation */
$(document).on('click', '.next-btn', function () {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
});

$(document).on('click', '.prev-btn', function () {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
});

function updateImage() {
    const img = images[currentIndex];
    const largeSrc = img.src.replace('/small', '');
    const altName = img.alt || '';

    $('#imgPreviewModal img').attr('src', largeSrc);
    $('#imgPreviewModal .modal-header i').text(altName);
}
