		<div class="navbar" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="/simpletpvfrontoffice" class="brand">
						<small>
							<i class="icon-leaf"></i>
							<?php echo APLICACION; ?>
                            <span class="brown"><?php echo OFFICE; ?></span>
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
                    
                        <?php if (TASKS == 'on') $this->load->view('tasks'); ?>

                        <?php if (NOTIFICATIONS == 'on') $this->load->view('notifications'); ?>

                        <?php if (MESSAGES == 'on') $this->load->view('messages'); ?>

                        <?php $this->load->view('user-info'); ?>

					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>