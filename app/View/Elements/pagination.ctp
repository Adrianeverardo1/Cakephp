<div class="pagination-description">
	<?php echo $this->Paginator->counter('Pagina {:page} de {:pages} ') ?>
</div>
<ol class="pagination">
	<li><?php echo $this->Paginator->prev('<<', array(), null, array('class' => 'prev disabled')); ?></li>
	<?php echo $this->Paginator->numbers(array('currentClass' => 'active','separator' => '', 'before' => '<li>', 'after' => '</li>')); ?>
	<li><?php echo $this->Paginator->next('>>', array(), null, array('class' => 'next disabled')); ?></li>
</ol>
