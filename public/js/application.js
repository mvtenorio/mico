$(document).on('change keydown keypress input', 'div[data-placeholder]', function() {
    if (this.textContent) {
        this.dataset.divPlaceholderContent = 'true';
    } else {
        delete(this.dataset.divPlaceholderContent);
    }
});

$('div[data-placeholder]').trigger("change");