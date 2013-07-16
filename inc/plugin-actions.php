<?php

	// Footer Content
	function footer_content() { 
	
		// Get links from json file
		$json = file_get_contents('http://assets.okfn.org/themes/okfn/okf-footer/okf-footer.json');
		$data = json_decode($json,true);
	
		// Echo links
?> 
    <div class="okf-footer">
      <div class="container">
        <ul>
        <?php foreach($data['links'] as $key=>$val){ ?>
          <li><a href="<?php echo $val['url'] ?>"><? printf( __( '%s', $okffooter->textdomain ), $val['text'] ); ?></a></li>
				<?php
          }
				?>
        </ul>
      </div>
    </div>
<?
  }
	add_action('okf_footer', 'footer_content');
?>
