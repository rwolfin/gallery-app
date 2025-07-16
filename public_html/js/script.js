// AJAX для комментариев (опционально)
$(document).ready(function() {
    $('form[data-ajax]').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        $.post({
            url: '',
            data: form.serialize(),
            success: function() {
                form.trigger('reset');
                location.reload();
            }
        });
    });
});