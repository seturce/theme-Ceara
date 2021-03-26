<section id="home-intro" style="background-image:url('<?php echo $this->asset('img/home-background-tja.jpg', false); ?>');  background-size: cover;" class="js-page-menu-item home-entity clearfix">
    <div class="box">
        <div style="margin:auto; width:400px;"><img width='400px' src='<?php echo $this->asset('img/map-white-logo.png', false); ?>' /></div>
    </div>

    <?php $this->applyTemplateHook('home-search', 'begin'); ?>
    <div class="box" style="background-color: #ffffff00;">
        <h1><?php echo $app->view->renderMarkdown($this->dict('home: title', false)); ?></h1>
        <p><?php echo $app->view->renderMarkdown($this->dict('home: welcome', false)); ?></p>
        <br>
        <!-- VALIDAÇÃO DO PERÍODO DE INSCRIÇÃO -->
        <?php
        $dataAtual = date("Y-m-d H:i:s", time());
        $dataFimInscricao = '2021-04-08 23:59:59';

        if ($dataAtual <= $dataFimInscricao) {
            echo '<a class="btn btn-accent btn-large" style="background-color: #f26b35;border: 1px solid #f26b35;" href="https://baresrestauranteseafins.setur.ce.gov.br/oportunidade/1" target="_blank" class="elementor-button-link elementor-button elementor-size-xl" role="button">INSCREVA-SE AQUI</a>';
        } else {
            echo '<a class="btn btn-accent btn-large" target="_blank" class="elementor-button-link elementor-button elementor-size-xl" role="button">INSCRIÇÕES ENCERRADAS!</a>';
        }

        ?>
        <br>
        <br>
        <div style="text-align: center;">
            <H3>INSCRIÇÕES: 29 DE MARÇO A 08 DE ABRIL</H3>

            <h5>
                <div>
                    Precisa de ajuda? <a style="color: #f26b35;" href="https://tawk.to/chat/605676e8067c2605c0ba9e5d/1f18s2apk">Fale com o atendimento on-line.</a>
                </div>
                <div>
                    Horário de atendimento
                </div>
                <div>
                    segunda até sexta – 9hs às 17hs
                </div>
            </h5>
            <!-- <h5>Horário de atendimento</h5>
            <h5>segunda até sexta – 9hs às 17hs</h5> -->
        </div>

        <br>
        <br>
        <!-- <form id="home-search-form" class="clearfix" ng-non-bindable>
            <input tabindex="1" id="campo-de-busca" class="search-field" type="text" name="campo-de-busca" placeholder="<?php \MapasCulturais\i::esc_attr_e("Digite uma palavra-chave"); ?>" />
            <div id="home-search-filter" class="dropdown" data-searh-url-template="<?php echo $app->createUrl('site', 'search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}}),{{entity}}:(keyword:'{{keyword}}'))">
                <div style="background-color: #f26b35;border: 1px solid #f26b35;" class="placeholder"><span class="icon icon-search"></span><?php \MapasCulturais\i::_e("Buscar"); ?></div>
                <div class="submenu-dropdown">
                    <ul>

                        <?php if ($app->isEnabled('events')) : ?>
                            <li tabindex="2" id="events-filter" data-entity="event"><span class="icon icon-event"></span> <?php \MapasCulturais\i::_e("Eventos"); ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('agents')) : ?>
                            <li tabindex="3" id="agents-filter" data-entity="agent"><span class="icon icon-agent"></span> <?php \MapasCulturais\i::_e("Agentes"); ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('spaces')) : ?>
                            <li tabindex="4" id="spaces-filter" data-entity="space"><span class="icon icon-space"></span> <?php $this->dict('entities: Spaces') ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('projects')) : ?>
                            <li tabindex="5" id="projects-filter" data-entity="project" data-searh-url-template="<?php echo $app->createUrl('site', 'search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}},viewMode:list),{{entity}}:(keyword:'{{keyword}}'))"><span class="icon icon-project"></span> <?php \MapasCulturais\i::_e("Projetos"); ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('opportunities')) : ?>
                            <li tabindex="5" id="opportunities-filter" data-entity="opportunity" data-searh-url-template="<?php echo $app->createUrl('site', 'search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}},viewMode:list),{{entity}}:(keyword:'{{keyword}}'))"><span class="icon icon-opportunity"></span> <?php \MapasCulturais\i::_e("Oportunidades"); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </form> -->
        <!-- <a class="btn btn-accent btn-large" href="<?php echo $app->createUrl('panel') ?>"><?php $this->dict('home: colabore') ?></a> -->
    </div>

    <?php $this->applyTemplateHook('home-search', 'end'); ?>
    <!-- <div class="view-more"><a class="hltip icon icon-select-arrow" href="#home-events" title="<?php \MapasCulturais\i::esc_attr_e("Saiba mais"); ?>"></a></div> -->
    <div style="text-align:right; width:100%; margin-top:20px;"><img width='320px' src='<?php echo $this->asset('img/map-white-logo-ceara.png', false); ?>' /></div>
</section>