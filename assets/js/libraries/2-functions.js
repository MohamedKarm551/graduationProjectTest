let timeOut;
function feedback_system(status, message, timeout=true) {
    let $feed = $("[data-name='ajax-feedback']"),
        $wrapper = $feed.children('#wrapper'),
        $closefeedback = $feed.find('#close-feedback'),
        $feed_main_text = $feed.find('.feed-main-text');
	$feed.removeClass();
	$wrapper.removeClass();
	$wrapper.addClass(status);

	if (timeout){
        clearTimeout(timeOut);
        timeOut = setTimeout(function () {
            $feed.removeClass().addClass('fake-hidden');
        }, 3000);
    } else {
        $closefeedback.removeClass('d-none');
    }
    $feed_main_text.html(message);
}

/**
 *
 * @param text
 * @returns {boolean}
 */
function is__valid__json(text){
    return /^[\],:{}\s]*$/.test(text.replace(/\\["\\\/bfnrtu]/g, '@').
    replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
    replace(/(?:^|:|,)(?:\s*\[)+/g, ''));
}