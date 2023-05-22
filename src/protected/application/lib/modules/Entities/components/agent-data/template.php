<?php

use MapasCulturais\i;

$this->import('
mapas-card
');
?>
<div class="col-12 agent-data">

    <div class="agent-data__title">
        <h4 class="title">{{title}}</h4>
    </div>
    <div v-if="entity.name?.length>0" class="agent-data__fields">
        <div class="agent-data__fields--field">
            <label class="title"><?php i::_e("Nome Completo") ?></label>
            <div class="box">
                <label class="box__content">{{entity.nomeCompleto}}</label>
            </div>
        </div>
        <div v-if="entity.nomeSocial?.length>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Nome Social") ?></label>
            <div class="box">
                <label class="box__content">{{entity.nomeSocial}}</label>
            </div>
        </div>
        <div v-if="entity.cpf?.length>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("CPF") ?></label>
            <div class="box">
                <label class="box__content">{{entity.cpf}}</label>
            </div>
        </div>
        <div v-if="entity.cnpj?.length>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("MEI") ?></label>
            <div class="box">
                <label class="box__content">{{entity.cnpj}}</label>
            </div>
        </div>
        <div v-if="entity.email?.length>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Email Pessoal") ?></label>
            <div class="box">
                <label class="box__content">{{entity.email}}</label>
            </div>
        </div>
        <div v-if="entity.telefonePublico?.length>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Telefone Público") ?></label>
            <div class="box">
                <label class="box__content">{{entity.telefonePublico}}</label>
            </div>
        </div>
        <div v-if="entity.currentUserPermissions.viewPrivateData && entity.emailPrivado?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Email Secundário") ?></label>
            <div class="box">
                <label class="box__content">{{entity.emailPrivado}}</label>
            </div>
        </div>
        <div v-if="entity.endereco?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Endereço") ?></label>
            <div class="box">
                <label class="box__content">{{entity.endereco}}</label>
            </div>
        </div>
    </div>
    <div v-if="entity.currentUserPermissions.viewPrivateData && verifyEntity()" class="agent-data__secondTitle">

        <h4 class="title">{{secondTitle}}</h4>
    </div>
    <div v-if="entity.currentUserPermissions.viewPrivateData" class="agent-data__fields">

        <div v-if="entity.dataDeNascimento!=null" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Data de Nascimento") ?></label>
            <div class="box">
                <label class="box__content">{{entity.dataDeNascimento.date('long year')}}</label>
            </div>
        </div>
        <div v-if="entity.genero?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Gênero") ?></label>
            <div class="box">
                <label class="box__content">{{entity.genero}}</label>
            </div>
        </div>
        <div v-if="entity.orientacaoSexual?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Orientação Sexual") ?></label>
            <div class="box">
                <label class="box__content">{{entity.orientacaoSexual}}</label>
            </div>
        </div>
        <div v-if="entity.agenteItinerante?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Agente Itinerante") ?></label>
            <div class="box">
                <label class="box__content">{{entity.agenteItinerante}}</label>
            </div>
        </div>
        <div v-if="entity.raca?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Raça/Cor") ?></label>
            <div class="box">
                <label class="box__content">{{entity.raca}}</label>
            </div>
        </div>
        <div v-if="entity.escolaridade?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Escolaridade") ?></label>
            <div class="box">
                <label class="box__content">{{entity.escolaridade}}</label>
            </div>
        </div>
        <div v-if="entity.pessoaDeficiente?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Pessoa portadora de deficiência") ?></label>
            <div class="box">
                <label class="box__content">{{entity.pessoaDeficiente}}</label>
            </div>
        </div>
        <div v-if="entity.comunidadesTradicional?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Comunidades Tradicionais") ?></label>
            <div class="box">
                <label class="box__content">{{entity.comunidadesTradicional}}</label>
            </div>
        </div>
        <div v-if="entity.comunidadesTradicionalOutros?.lenght>0" class="agent-data__fields--field">
            <label class="title"><?php i::_e("Outras Comunidades Tradicionais") ?></label>
            <div class="box">
                <label class="box__content">{{entity.comunidadesTradicionalOutros}}</label>
            </div>
        </div>

    </div>
</div>