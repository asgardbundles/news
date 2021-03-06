			<div class="block">
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					<h2><a href="<?php echo $this->url('index') ?>"><?php echo ucfirst($_plural) ?></a></h2>
					<ul>
						<li><a href="<?php echo $this->url('new') ?>"><?php echo __('Add') ?></a></li>
					</ul>
					<?php
					echo $searchForm->open();
					echo $searchForm['search']->def(array(
						'attrs'	=>	array(
							'class'	=>	'text',
							'placeholder'	=>	'Search',
						),
					));
					echo $searchForm->close();
					?>
				</div>	
				
				<div class="block_content">
				<!-- 	<div class="block small left" style="width:100%">
						<div class="block_head">
							<div class="bheadl"></div>
							<div class="bheadr"></div>
							<h2>Liste</h2>	
						</div>	
						<div class="block_content"> -->
						
							<?php $this->getFlash()->showAll() ?>
						
							<?php if(count($news) == 0): ?>
							<div style="text-align:center; font-weight:bold"><?php echo __('No element') ?></div>
							<?php else: ?>
							<form action="" method="post">
								<table cellpadding="0" cellspacing="0" width="100%" class="sortable">
								
									<thead>
										<tr>
											<th width="10"><input type="checkbox" class="check_all" /></th>
											<th><?php echo __('Created at') ?></th>
											<th><?php echo __('Title') ?></th>
											<td>&nbsp;</td>
										</tr>
									</thead>
									
									<tbody>
										<?php
										foreach($news as $one) { ?>								
											<tr>
												<td><input type="checkbox" name="id[]" value="<?php echo $one->id ?>" /></td>
												<td><?php echo $one->created_at ?></td>
												<td><a href="<?php echo $this->url('edit', array('id'=>$one->id)) ?>"><?php echo $one ?></a></td>
												<td class="actions">
													<?php $this->container['hooks']->trigger('asgard_actions', [$one]) ?>
													<a class="delete" href="<?php echo $this->url('delete', array('id'=>$one->id)) ?>"><?php echo __('Delete') ?></a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
									
								</table>
								<div class="tableactions">
									<select name="action">
										<option>Actions</option>
										<?php foreach($globalactions as $name=>$action): ?>
										<option value="<?=$name ?>"><?=$action['text'] ?></option>
										<?php endforeach ?>
									</select>
									<input type="submit" class="submit tiny" value="<?php echo __('Apply') ?>" />
								</div>		
								
								<?php if(isset($paginator) && $paginator->getPages()>1): ?>
								<div class="pagination right">
									<?php $paginator->show() ?>
								</div>
								<?php endif ?>
								
							</form>
							<?php endif ?>
						</div>		<!-- .block_content ends -->
						<!-- <div class="bendl"></div>
						<div class="bendr"></div>
					</div> -->
					<!--<div class="block small right" style="width:19%">
						<div class="block_head">
							<div class="bheadl"></div>
							<div class="bheadr"></div>
							
							<h2>Filtres</h2>
						</div>	
						<div class="block_content">
							<?php
							?>
							
						</div>		
						
						<div class="bendl"></div>
						<div class="bendr"></div>
					</div>-->
				<div class="bendl"></div>
				<div class="bendr"></div>
			</div>		