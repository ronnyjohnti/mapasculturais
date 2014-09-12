<?php
$entityClass = get_class($entity);
$entityName = strtolower(end(explode('\\', $entityClass)));
$areas = array_values($app->getRegisteredTaxonomy($entityClass, 'area')->restrictedTerms);
sort($areas);
?>
<div class="widget">
    <h3>Área de atuação</h3>
    <?php if(is_editable()): ?>
        <span id="term-area" class="js-editable-taxonomy" data-original-title="Área de Atuação" data-emptytext="Selecione pelo menos uma área" data-restrict="true" data-taxonomy="area"><?php echo implode('; ', $entity->terms['area'])?></span>
    <?php else: ?>
        <?php
        foreach($areas as $i => $t): if(in_array($t, $entity->terms['area'])): ?>
            <a class="tag tag-space" href="<?php echo $app->createUrl('site', 'search') ?>##(<?php echo $entityName ?>:(areas:!(<?php echo $i ?>)),global:(enabled:(<?php echo $entityName ?>:!t),filterEntity:<?php echo $entityName ?>))">
                <?php echo $t ?>
            </a>
        <?php endif; endforeach; ?>
    <?php endif;?>
</div>