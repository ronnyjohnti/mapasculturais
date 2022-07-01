<?php
use MapasCulturais\i;

$this->import('
    tabs,tab,
    panel--entity-card
    entities
');

$tabs = $tabs ?? [
    'publish' => i::esc_attr__('Publicados'),
    'draft' => i::esc_attr__('Em rascunho'),
    'archived' => i::esc_attr__('Arquivados'),
    'trash' => i::esc_attr__('Lixeira'),
];
?>
<tabs class="entity-tabs">
    <template #header="{ tab }">
        <iconify icon="mdi:archive-outline" v-if="tab.slug === 'archived'"></iconify>
        <iconify icon="mdi:delete-outline" v-else-if="tab.slug === 'trash'"></iconify>
        {{ tab.label }}
    </template>
    <?php foreach($tabs as $status => $label): ?>
    <tab v-if="showTab('<?=$status?>')" cache key="<?$status?>" label="<?=$label?>" slug="<?=$status?>">
        <entities :name="type + ':<?=$status?>'" :type="type" 
            :select="select"
            :query="queries['<?=$status?>']" :limit="50">

            <template v-if="true" #header="{entities}">
                <div class="entity-tabs__filters panel__row">
                    <input type="search" class="entity-tabs__search-input"
                        aria-label="<?=i::__('Palavras-chave')?>"
                        placeholder="<?=i::__('Buscar por palavras-chave')?>"
                        v-model="entities.query['@keyword']">
                    <button type="button" class="button button--solid" @click="entities.refresh()">
                        <?=i::__('Filtrar')?>
                    </button>
                    <button type="button" class="button button--solid">
                        <iconify icon="mdi:sort" inline></iconify>
                        <?=i::__('Ordenar')?>
                    </button>
                </div>
            </template>

            <template #default="{entities}">
                <slot v-for="entity in entities" :entity="entity">
                    <panel--entity-card :key="entity.id" :entity="entity" 
                        @deleted="moveEntity(entity)" 
                        @archived="moveEntity(entity)" 
                        @published="moveEntity(entity)"
                        >
                        <template #title="{ entity }">
                            <slot name="card-title" :entity="entity"></slot>
                        </template>
                        <template #header-actions="{ entity }">
                            <slot name="card-actions">
                                <button class="entity-card__header-action">
                                    <iconify icon="mdi:star-outline"></iconify>
                                    <span><?=i::__('Favoritar')?></span>
                                </button>
                            </slot>
                        </template>
                        <template #default="{ entity }">
                            <slot name="card-content" :entity="entity">
                                <dl v-if="entity.type">
                                    <dt><?=i::__('Tipo')?></dt>
                                    <dd>{{ entity.type.name }}</dd>
                                </dl>
                            </slot>
                        </template>
                    </panel--entity-card>
                </slot>
           </template>
        </entities>
    </tab>
    <?php endforeach ?>
</tabs>