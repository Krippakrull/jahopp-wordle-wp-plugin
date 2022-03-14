<?php
function jahopp_wordle_show_shortcode() {
	?>
    <Button id="jahopp-wordle">Wordle</Button>
<?php }

add_shortcode('wordle-button-shortcode', 'jahopp_wordle_show_shortcode');