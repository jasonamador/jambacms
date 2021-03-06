<div class="ui breadcrumb">
	<a class="section" href="/admin/articles/view">Articles</a>
	<div class="divider">/</div>
<?php if (isset($category)) : ?>
	<div class="section"><?=$category?></div>
<?php endif; ?>
</div>

<?php if ($user->permissions['articles']['create']) : ?>
<a href="/admin/articles/add" class="ui labeled right floated icon button">
	<i class="plus icon"></i>
	Add Article
</a>
<?php endif; 
if ($user->type === 'dev') : ?>
	<a href="/admin/articles/generator" class="ui labeled icon right floated button">
		<i class="plus icon"></i>
		Generate Random Articles
	</a>
<?php endif; 
	//Create our list
	$config = array (
		'headers' => array ('Name', 'Category', 'Author', 'Created On', 'Active', 'Options')
	);
	$this->ui_table->open($config);
	foreach ($articles as $article) {
		$this->ui_table->open_row();
			$this->ui_table->add_column('<a href="/admin/articles/view/'.$article->category.'/'.$article->name.'">'.$article->name.'</a>');
			$this->ui_table->add_column('<a href="/admin/articles/view/'.$article->category.'">'.$article->category.'</a>');
			$this->ui_table->add_column($article->author);
			$this->ui_table->add_column($article->date_created);
			if ($article->active) 
				$this->ui_table->add_column("Yes");
			else
				$this->ui_table->add_column("No");
			$options = '';
			$options = '<a href="/admin/articles/view/'.$article->category.'/'.$article->name.'">View</a>';
			if ($user->permissions['articles']['update'])
				$options .= ' | <a href="/admin/articles/edit/'.$article->category.'/'.$article->name.'">Edit</a>';
			if ($user->permissions['articles']['delete'])
				$options .= ' | <a href="/admin/articles/del/'.$article->id.'">Deactivate</a>';
			$this->ui_table->add_column($options);
		$this->ui_table->close_row();
	}
	$this->ui_table->close();
	$this->ui_table->render();
