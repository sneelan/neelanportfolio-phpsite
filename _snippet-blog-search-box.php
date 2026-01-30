    <div class="col-sm-6 ps-2 col-sm-6 d-flex align-items-center" class="w-100">
        <div class="me-2" style="font-size:15px;">Search :</div>
        <div style="position:relative; display:inline-block;" class="flex-grow-1">
        <input type="text" id="doc-search" class="form-control w-100" placeholder="Enter your keywords..." autocomplete="off">
        <div id="doc-results" class="list-group d-none border border-2 border-theme-primary" style="position:absolute;top:100%;left:0;width:100%;z-index:99999;background:#fff;max-height:300px;overflow-y:auto;"></div>
        </div>
    </div>
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
                        .html('<div class="list-group-item small text-muted">No results</div>');
                return;
            }

            let html = '';
            data.slice(0, 10).forEach(item => {
                html += `
                    <a href="${item.link}" target="_blank"
                       class="text-dark list-group-item list-group-item-action fw-normal"
                       style="font-size:15px;line-height:1.4;">
                       ${item.title}
                    </a>`;
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

