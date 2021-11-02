<?php

defined('_JEXEC') or exit();

?>

<?php if (!empty($this->items) && is_array($this->items)) :?>
    <?php foreach ($this->items as $item) :?>
        <div>
            <h2>
                <a href="<?php echo JRoute::_('index.php?option=com_helloworld&view=item&id='.$item->id);?>"><?php echo $item->alias ?></a>
            </h2>
                <?php if (!empty($item->images)) :?>
                    <div>
                        <img style="width: 100%" src="<?php echo $item->images->image1?>">
                    </div>
                <?php endif;?>
            <p><?php echo $item->text ?></p>
        </div>
    <?php endforeach; ?>

    <div class="pagination">
        <p class="counter pull-right">
            <?php echo $this->pagination->getPagesCounter(); ?>
        </p>
        <?php echo $this->pagination->getPagesLinks();?>
    </div>
<?php endif;?>
