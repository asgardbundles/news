<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2><?php echo !$news->isNew() ? $news:__('New') ?></h2>
				</div>		<!-- .block_head ends -->
				
				<div class="block_content">
					<p class="breadcrumb"><a href="<?php echo $this->url_for('index') ?>"><?php echo ucfirst($_plural) ?></a> &raquo; 
					<a href="<?php echo !$news->isNew() ? $this->url_for('edit', array('id'=>$news->id)):$this->url_for('new') ?>">
					<?php echo !$news->isNew() ? $news:__('New') ?>
					</a></p>
					<?php $this->getFlash()->showAll() ?>
					
					<?php
					echo $form->open();
					echo
					$form->title->def().
					$form->published->def().
					$form->content->wysiwyg().
					$form->image->def().
					$form->meta_title->def().
					$form->meta_description->def().
					$form->meta_keywords->def();
					echo $form->close();
					?>
					
				</div>		<!-- .block_content ends -->
				<div class="bendl"></div>
				<div class="bendr"></div>
			</div>		<!-- .block ends -->