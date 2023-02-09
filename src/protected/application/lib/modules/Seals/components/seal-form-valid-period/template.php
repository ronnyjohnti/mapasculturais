<?php
use MapasCulturais\i;
$this->import('
    confirm-button
    mc-icon
    select-entity
');
?>

<div :class="classes">
    <label><input v-model="requiredPeriod" type="checkbox"> <?php i::_e('Habilitar selo com validade') ?></label>
    <entity-field v-if="requiredPeriod" :entity="entity" hide-required prop="validPeriod" min="1"
                  label="<?php i::_e("Insira o número de meses que o certificado do selo deve ser válido") ?>"></entity-field>
</div>