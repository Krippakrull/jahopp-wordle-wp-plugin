(($) => {

    $(document).ready(($) => {
        const wrapper =  $('<div class="jahopp-wordle-wrapper"></div>')
        wrapper.append('<div class="jahopp-wordle-close-button">x</div><div id="inner-wrapper"></div>')
        $('body').append(wrapper);

        $('#jahopp-wordle').on('click', () => {
            $('#inner-wrapper').load('https://dazzling-thompson-e53964.netlify.app/').then(() => {
                $('.jahopp-wordle-wrapper').toggle();
                $('.jahopp-wordle-close-button').on('click', () => {
                    $('.jahopp-wordle-wrapper').toggle();
                })
            })
        })
    })

})(jQuery);