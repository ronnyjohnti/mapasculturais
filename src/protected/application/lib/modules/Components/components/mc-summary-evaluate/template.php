<?php

use MapasCulturais\i;


$this->import('
 mc-icon
');
?>
<div class="mc-summary-evaluate">
    <div class="mc-summary-evaluate__box pending">
        <div class="mc-summary-evaluate__box--icon">

            <mc-icon name="clock"></mc-icon>
        </div>
        <div class="mc-summary-evaluate__box--content">

            <h4><?= MapasCulturais\i::__('Avaliações pendente') ?></h4>
            <span>{{summary.pending}} <?= MapasCulturais\i::__('avaliações disponíveis') ?></span>
        </div>
    </div>

    <div class="mc-summary-evaluate__box started">

        <div class="mc-summary-evaluate__box--icon">

            <mc-icon name="clock"></mc-icon>
        </div>
        <div class="mc-summary-evaluate__box--content">

            <h4><?= MapasCulturais\i::__('Avaliações iniciadas') ?></h4>
            <span>{{summary.started}} <?= MapasCulturais\i::__('avaliações') ?></span>
        </div>
    </div>

    <div class="mc-summary-evaluate__box completed">
        <div class="mc-summary-evaluate__box--icon">

            <mc-icon name="check"></mc-icon>
        </div>
        <div class="mc-summary-evaluate__box--content">
            <h4><?= MapasCulturais\i::__('Avaliações concluídas') ?></h4>
            <span>{{summary.completed}} <?= MapasCulturais\i::__('avaliações') ?></span>
        </div>
    </div>

    <div class="mc-summary-evaluate__box sent">
        <div class="mc-summary-evaluate__box--icon">

            <mc-icon name="send"></mc-icon>
        </div>
        <div class="mc-summary-evaluate__box--content">

            <h4><?= MapasCulturais\i::__('Avaliações enviadas') ?></h4>
            <span>{{summary.send}} <?= MapasCulturais\i::__('avaliações') ?></span>
        </div>
    </div>
</div>