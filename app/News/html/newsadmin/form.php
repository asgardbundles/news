<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2><?php echo !$news->isNew() ? $news:__('New') ?></h2>
				</div>		<!-- .block_head ends -->
				
				<div class="block_content">
					<p class="breadcrumb"><a href="<?php echo $this->url('index') ?>"><?php echo ucfirst($_plural) ?></a> &raquo; 
					<a href="<?php echo !$news->isNew() ? $this->url('edit', array('id'=>$news->id)):$this->url('new') ?>">
					<?php echo !$news->isNew() ? $news:__('New') ?>
					</a></p>
					<?php $this->getFlash()->showAll() ?>
					
					<?php
					echo $form->open();
					echo $form['title']->def();
					echo $form['published']->def();
					echo $form['content']->wysiwyg();
					echo $form['image']->def();
					echo $form['meta_title']->def();
					echo $form['meta_description']->def();
					echo $form['meta_keywords']->def();
					echo $form->close();
					?>
					
				</div>		<!-- .block_content ends -->
				<div class="bendl"></div>
				<div class="bendr"></div>
			</div>		<!-- .block ends -->