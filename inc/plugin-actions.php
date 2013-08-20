<?php

	// Footer Content
	function footer_content() { 
	
		// Get links from json file
		$json = file_get_contents('http://assets.okfn.org/themes/okfn/okf-footer/okf-footer.json');
		$data = json_decode($json,true);
	  
		// Get WP language
	  $language = get_bloginfo('language');
		
		// Is language supported?
		if ($language == 'de-DE') {
			$lang = 'de';
		}
		elseif ($language == 'it-IT') {
			$lang = 'it';	
		}
		elseif ($language == 'es-ES') {
			$lang = 'es';	
		}
		elseif ($language == 'fr-FR') {
			$lang = 'fr';	
		}
		elseif ($language == 'pt-PT' OR $language == 'pt-BR') {
			$lang = 'pt';	
		}
		else {
			$lang = 'en';
		}	
		
		// Echo links
?> 
    <div class="okf-footer">
      <div class="container">
        <ul>
        <?php foreach($data[$lang]['links'] as $links){ ?>
          <li><a href="<?php echo $links['url'] ?>"><? echo $links['text']; ?></a></li>
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
