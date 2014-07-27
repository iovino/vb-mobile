$(function() {

    // left and right mobile members
    $('#menu-left').mmenu({
        position	: 'left',
        classes		: 'my-account'
    });

    $('#menu-right').mmenu({
        position	: 'right',
        classes		: 'forumdisplay-menu'
    });

    $("#breadcrumbs").rcrumbs();




    var mod_mode = false;
    var mod_ids  = [];

    // enable mod mode
    $("#mod-mode").on("click", function() {
        if (mod_mode) {
            mod_mode = false;
            mod_ids  = [];

            $('.thread-bit').removeClass('mod-selected');
            $('.mod-mode-message').hide();
            $('.thread-deleted').show();
            $('.thread-announcement').show();
            $('.lastvisit-message').show();
            $('#mod-tools').hide();
            $('#pagination').show();
        } else {
            mod_mode = true;
            $('.mod-mode-message').show();
            $('.thread-deleted').hide();
            $('.thread-announcement').hide();
            $('.lastvisit-message').hide();
            $('#mod-tools').show();
            $('#pagination').hide();
        }
        return false;
    });

    // thread link clicked
    $(".thread-link").on("click", function(){
        if (mod_mode) {
            // save the thread id
            var thread_id = this.id.replace('thread-', '');

            // check if we added it to the mod_ids array or not
            if ($.inArray(thread_id, mod_ids) == -1) {
                mod_ids.push(thread_id); // add it to the array

                $('#mod-checkbox-' + thread_id).prop('checked', true); // check the checkbox
                $('#thread-bit-' + thread_id).addClass('mod-selected') // add visual indicator of selection
            } else {
                // remove thread id from the array
                var i = mod_ids.indexOf(thread_id);
                if (i != -1) {
                    mod_ids.splice(i, 1);
                }
                // uncheck the check box
                $('#mod-checkbox-' + thread_id).prop('checked', false); // check the checkbox
                // remove visual indicator of selection
                $('#thread-bit-' + thread_id).removeClass('mod-selected')
            }

            return false;
        }

    });


});



