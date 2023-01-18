<?php 
use MapasCulturais\i;
 
$this->import('
    mapas-breadcrumb 
    search 
    search-filter-event
    search-list-event 
    search-map-event 
    create-event
    tabs 
');
$this->breadcrumb = [
    ['label'=> i::__('Inicio'), 'url' => $app->createUrl('index')],
    ['label'=> i::__('Eventos'), 'url' => $app->createUrl('events')],
];
?>
<search page-title="<?php i::esc_attr_e('Eventos') ?>" entity-type="event" :initial-pseudo-query="{'event:term:linguagem':[]}">
    <template #create-button>
            <create-event></create-event>
    </template>
    <template #default="{pseudoQuery}">
        <tabs class="search__tabs">
            <template  #before-tablist>
                <label class="search__tabs--before">
                    <?= i::_e('Visualizar como:') ?>
                </label> 
            </template>
            <tab icon="list" label="<?php i::esc_attr_e('Lista') ?>" slug="list">
                <div class="search__tabs--list">
                    <search-list-event :pseudo-query="pseudoQuery"></search-list-event>
                </div>
            </tab>
            <tab icon="map" label="<?php i::esc_attr_e('Mapa') ?>" slug="map">
                <div class="search__tabs--map">
                    <search-map-event :pseudo-query="pseudoQuery"></search-map-event>
                </div>
            </tab>
        </tabs>
    </template>
</search>