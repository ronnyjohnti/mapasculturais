<?php
use MapasCulturais\i;
$this->layout = 'entity';

$this->import('
    entity-field
    opportunity-form-builder-category
    v1-embed-tool
')
?>

<div class="form-builder__content">
    <div class="grid-12 form-builder__bg-content">
        <div class="col-8 sm:col-12 form-builder__title">
            <p class="opportunity__color"><?= i::__("1. {{ getTitleForm }}") ?></p>
        </div>
        <div class="col-2 sm:col-6 form-builder__period">
            <h5 class="period_label"><?= i::__("Data de início") ?></h5>
            <h5 class="opportunity__color">{{ getDateRegistrationFrom }}</h5>
        </div>
        <div class="col-2 sm:col-6 form-builder__period">
            <h5 class="period_label"><?= i::__("Data final") ?></h5>
            <h5 class="opportunity__color">{{ getDateRegistrationTo }}</h5>
        </div>
    </div>

    <div class="grid-12 form-builder__label-btn">
        <div class="col-12">
            <h3><?= i::__("Configuração de formulário de coleta de dados") ?></h3>
        </div>
    </div>

    <div class="grid-12">
        <div class="col-6 sm:col-12">
            <opportunity-form-builder-category v-if="entity.isFirstPhase || !entity.parent" :entity="entity"></opportunity-form-builder-category>
        </div>
        <div class="col-6 sm:col-12">
            <div class="form-builder__bg-content form-builder__bg-content--spacing">
                <div>
                    <h4><?= i::__("Permitir Agente Coletivo?") ?></h4>
                    <span class="subtitle"><?= i::__("Permitir inscrição de Agente Coletivo") ?></span>
                    <entity-field :entity="entity" prop="useAgentRelationColetivo"></entity-field>
                </div>
                <div>
                    <h4><?= i::__("Permitir instituição responsável?") ?></h4>
                    <span class="subtitle"><?= i::__("Permitir inscrição de instituições") ?></span>
                    <entity-field :entity="entity" prop="useAgentRelationInstituicao"></entity-field>
                </div>
                <div>
                    <entity-field :entity="entity" prop="registrationLimit"></entity-field>
                </div>
                <div>
                    <entity-field :entity="entity" prop="registrationLimitPerOwner"></entity-field>
                </div>
            </div>
        </div>
        <div class="col-6 sm:col-12">
            <div class="form-builder__bg-content form-builder__bg-content--spacing">
                <h4><?= i::__("Permitir vínculo de Espaço?") ?></h4>
                <span class="subtitle"><?= i::__("Permitir um espaço para associar à inscrição.") ?></span>
                <entity-field :entity="entity" prop="useSpaceRelationIntituicao"></entity-field>
            </div>
        </div>
        <div class="col-6 sm:col-12">
            <div class="form-builder__bg-content form-builder__bg-content--spacing">
                <h4><?= i::__("Habilitar informações de Projeto?") ?></h4>
                <span class="subtitle"><?= i::__("Permitir que proponente vizualise informações básicas sobre um projeto.") ?></span>
                <entity-field :entity="entity" prop="projectName"></entity-field>
            </div>
        </div>

        <div class="col-12">
            <v1-embed-tool route="formbuilder" :id="entity.id"></v1-embed-tool>
        </div>
    </div>
</div>