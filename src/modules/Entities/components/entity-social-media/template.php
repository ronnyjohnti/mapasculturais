<?php 
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;
$this->import('
    entity-field
');
?>
<div :class="classes" v-if="editable || show" class="entity-social-media">

    <h4 v-if="!editable" class="entity-social-media__title bold"> <?php i::_e("Redes sociais") ?> </h4>

    <div v-if="!editable" class="entity-social-media__links">

        <div v-if="entity.instagram" class="entity-social-media__links--link">
            <mc-icon name="instagram"></mc-icon>
            <a :href="entity.instagram">{{entity.instagram}}</a>

        </div>

        <div v-if="entity.twitter" class="entity-social-media__links--link">
            <mc-icon name="twitter"></mc-icon>
            <a :href="entity.twitter">{{entity.twitter}}</a>
        </div>

        <div v-if="entity.facebook" class="entity-social-media__links--link">
            <mc-icon name="facebook"></mc-icon>
            <a :href="entity.facebook">{{entity.facebook}}</a>
        </div>

        <div v-if="entity.youtube" class="entity-social-media__links--link">
            <mc-icon name="youtube"></mc-icon>
            <a :href="entity.youtube">{{entity.youtube}}</a>
        </div>

        <div v-if="entity.linkedin" class="entity-social-media__links--link">
            <mc-icon name="linkedin"></mc-icon>
            <a :href="entity.linkedin">{{entity.linkedin}}</a>

        </div>
        <div v-if="entity.vimeo" class="entity-social-media__links--link">
            <mc-icon name="vimeo"></mc-icon>
            <a :href="entity.vimeo">{{entity.vimeo}}</a>

        </div>
        <div v-if="entity.spotify" class="entity-social-media__links--link">
            <mc-icon name="spotify"></mc-icon>
            <a :href="entity.spotify">{{entity.spotify}}</a>
        </div>

        <div v-if="entity.pinterest" class="entity-social-media__links--link">
            <mc-icon name="pinterest"></mc-icon>
            <a :href="entity.pinterest">{{entity.pinterest}}</a>

        </div>
    </div>


    <h4 v-if="editable" class="entity-social-media__title bold"> <?php i::_e("Adicionar redes sociais") ?> </h4>

    <div v-if="editable" class="entity-social-media__edit">

        <div class="entity-social-media__edit--link">
            <mc-icon name="instagram"></mc-icon>
            <entity-field :entity="entity" prop="instagram"></entity-field>
        </div>

        <div class="entity-social-media__edit--link">
            <mc-icon name="twitter"></mc-icon>
            <entity-field :entity="entity" prop="twitter"></entity-field>
        </div>

        <div class="entity-social-media__edit--link">
            <mc-icon name="facebook"></mc-icon>
            <entity-field :entity="entity" prop="facebook"></entity-field>
        </div>
        <div class="entity-social-media__edit--link">
            <mc-icon name="vimeo"></mc-icon>
            <entity-field :entity="entity" prop="vimeo"></entity-field>
        </div>
        <div class="entity-social-media__edit--link">
            <mc-icon name="youtube"></mc-icon>
            <entity-field :entity="entity" prop="youtube"></entity-field>
        </div>

        <div class="entity-social-media__edit--link">
            <mc-icon name="linkedin"></mc-icon>
            <entity-field :entity="entity" prop="linkedin"></entity-field>
        </div>

        <div class="entity-social-media__edit--link">
            <mc-icon name="spotify"></mc-icon>
            <entity-field :entity="entity" prop="spotify"></entity-field>
        </div>

        <div class="entity-social-media__edit--link">
            <mc-icon name="pinterest"></mc-icon>
            <entity-field :entity="entity" prop="pinterest"></entity-field>
        </div>
    </div>

</div>