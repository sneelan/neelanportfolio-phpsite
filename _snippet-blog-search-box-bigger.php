    <div class="col-sm-6 ps-2 col-sm-6 d-flex align-items-center" class="w-100">
        <div class="me-2" style="font-size:15px;">Search :</div>
        <div style="position:relative; display:inline-block;" class="flex-grow-1">
        <input type="text" id="doc-search" class="form-control w-100" placeholder="Enter your keywords..." autocomplete="off">        
        </div>
    </div>


</div>
<div>
<div id="doc-results" class="d-flex flex-wrap gap-3 align-items-center justify-content-center">


</div>
</div>
<div>



<script>
$(function () {
    const $input   = $('#doc-search');
    const $results = $('#doc-results');

    $input.on('keyup', function () {
        const q = this.value.trim();

        if (q.length < 2) {
            $results.addClass('d-none').empty();
            return;
        }

        $.getJSON('_snippet-blog-search-ajax', { q }, function (data) {

            if (!data.length) {
                $results.removeClass('d-none')
                        .html('<div class="w-100 text-center mb-3 p-2 rounded fs-6 bg-danger text-white ">No results</div>');
                return;
            }

            let html = '';
data.slice(0, 10).forEach(item => {
    html += `
    <div class="mb-4" style="width:400px;">
        <article class="card p-1 px-lg-3 py-lg-2 shadow-sm">
            <h5 class="m-0 mb-2">
                <a target="_blank" class="mytitle text-dark" href="${item.link}">
                    ${item.title}
                </a>
            </h5>

            <p class="opacity-75 m-0 mb-2">
                ${item.date}
                <span class="opacity-50"> | </span>
                Created by S. Neelakandan
            </p>

            <a target="_blank" href="${item.link}">
                <img
                    class="img-fluid rounded"
                    height="400"
                    width="660"
                    loading="lazy"
                    src="${item.image}"
                    alt="${item.title}">
            </a>

            <a target="_blank"
               href="${item.link}"
               class="btn btn-light text-secondary mt-2">
                Read More &gt;
            </a>
        </article>
    </div>
    `;
});


            $results.removeClass('d-none').html(html);
        });
    });

    // ✅ CLICK OUTSIDE → CLEAR + CLOSE
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#doc-search, #doc-results').length) {
            $input.val('');
            $results.addClass('d-none').empty();
        }
    });

    // ✅ prevent closing when clicking inside results
    $results.on('click', function (e) {
        e.stopPropagation();
    });
});
</script>

