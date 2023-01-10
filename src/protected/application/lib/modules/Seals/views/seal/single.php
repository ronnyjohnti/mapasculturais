<?php
use MapasCulturais\i;
$this->layout = 'entity';

$this->import('
    entity-actions
    entity-header
    entity-owner
    mapas-breadcrumb
    mapas-container
    entity-files-list
    entity-related-agents
    entity-links
    entity-request-ownership
    seal-relation-view
    tabs
');
$this->breadcrumb = [
    ['label' => i::__('Inicio'), 'url' => $app->createUrl('panel', 'index')],
    ['label' => i::__('Meus Selos'), 'url' => $app->createUrl('panel', 'seals')],
    ['label' => $entity->name, 'url' => $app->createUrl('seal', 'single', [$entity->id])],
];
?>

<div class="main-app single">
    <mapas-breadcrumb></mapas-breadcrumb>
    <entity-header :entity="entity"></entity-header>
    <mapas-container>
        <main>
            <div class="grid-12">
                <div v-if="entity.validPeriod" class="col-12">
                    <h2 class="entity-seals__valid--label"><?php i::_e('Validade do certificado do selo');?></h2>
                    <p class="entity-seals__valid--content">{{ entity.createTimestamp.format({ year: 'numeric', month: 'long', day: 'numeric' }) + ' a ' + entity.createTimestamp.addDays(entity.validPeriod / 12 * 365) }}</p>
                </div>
                <div v-if="entity.longDescription" class="col-12">
                    <h2><?php i::_e('Descrição');?></h2>
                    <p>{{entity.longDescription}}</p>
                </div>
                <entity-files-list :entity="entity" classes="col-12" group="downloads"  title="<?php i::esc_attr_e('Arquivos para download');?>"></entity-files-list>
                <div class="col-12">
                    <entity-links :entity="entity" title="<?php i::_e('Links'); ?>"></entity-links>
                </div>
                <div class="col-12">
                    <entity-request-ownership :entity="entity"></entity-request-ownership>
                </div>
            </div>
        </main>
        <aside>
            <div class="grid-12">
                <entity-owner classes="col-12"  title="<?php i::esc_attr_e('Publicado por');?>" :entity="entity"></entity-owner>
                <entity-related-agents :entity="entity" classes="col-12" title="<?php i::esc_attr_e('Agentes Relacionados');?>"></entity-related-agents>
            </div>
        </aside>
        <main>
            <seal-relation-view :entity="entity"></seal-relation-view>
        </main>
    </mapas-container>
    <entity-actions :entity="entity"></entity-actions>
</div>