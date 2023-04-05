<?php
/**
 * @var \MapasCulturais\Themes\BaseV2\Theme $this
 * @var \MapasCulturais\App $app
 * 
 * 
 * @todo renomear componente
 */

use MapasCulturais\i;

$this->import('
    entity-field
');
?>

<mapas-card v-if="useSpaceRelation !== 'dontUse'">

    <template #title>
        <div class="card__title"> 
            <?= i::__("Projeto") ?>
            <div v-if="useSpaceRelation == 'required'" class="obrigatory"> <?= i::__('* Obrigatório') ?> </div>
        </div>
        <div class="card__subtitle">
            <?= i::__("Informe o nome do seu projeto") ?>
        </div>
    </template>

    <template #content>
        <div class="registration-select-entity">
            <entity-field :entity="registration" prop="projectName" :autosave="60000"></entity-field>
        </div>
    </template>
</mapas-card>