<h3 class="registration-header"><?php \MapasCulturais\i::_e("Formulário de Inscrição"); ?></h3>
<div class="alert info">


    <b>ATENÇÃO!</b>
    <br>
    <b>PREFERENCIALMENTE DIGITAR TODAS AS INFORMAÇÕES EM MAIÚSCULO</b>
    <br>
    <b>DOCUMENTOS NECESSÁRIOS PARA INSCRIÇÃO:</b>
    <br>
    <b>Observações:</b> Todas as imagens devem ser coloridas e legíveis nas extensões PDF, JPG, JPEG com limite de 10 MB por arquivo.
    <br>
    <div>
        <b>COMPROVANTES:</b>
    </div>
    <div>
        - Carteira de Identidade (frente e verso);
    </div>
    - CPF (frente e verso);
    <div>
        - Comprovante de endereço (água, energia, telefone ou autodeclararão);
    </div>
    - Comprovante de CNPJ da empresa que trabalhava (ver atalho no campo);
    <div>
        - Comprovante da função/atuação (via carteira de trabalho);
    </div>
    - Comprovante da data admissão (via carteira de trabalho);
    <div>
        - Comprovante da data demissão (via carteira de trabalho);
    </div>
    - Caso seja deficiente, apresentar comprovante;
    <div>
        - Comprovante dos dados bancários (Anexar Cartão do Banco).
    </div>

</div>

<div class="registration-fieldset">
    <h4><?php \MapasCulturais\i::_e("Número da Inscrição"); ?></h4>
    <div class="registration-id">
        <?php if ($action !== 'create') : ?><?php echo $entity->number ?><?php endif; ?>
    </div>
</div>

<?php
$opportunity = $entity->opportunity;

if ($opportunity->projectName) :
?>
    <div class="registration-fieldset" ng-controller="RegistrationFieldsController">
        <div id="projectName">
            <span class="label">
                <?php \MapasCulturais\i::_e("Nome do Projeto"); ?>
                <?php if ($opportunity->projectName == 2) echo " <span> obrigatório </span>"; ?>
            </span>
            <div class="attachment-description"><?php \MapasCulturais\i::esc_attr_e("Informe o nome do projeto"); ?></div>
            <div>
                <!-- TODO: ng-required="requiredField(field)" nao utilizado, deve refatorar para poder utilizar -->
                <input ng-model="entity['projectName']" type="text" value="<?php echo $entity->projectName ?>" ng-blur="saveField({fieldName:'projectName'}, entity['projectName'])" />
            </div>
        </div>
    </div>
<?php endif; ?>