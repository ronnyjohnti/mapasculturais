<?php 
$this->layout = 'entity'; 
$this->import('entity-terms container share-links files-list entity-links entity-owner entity-seals entity-header entity-gallery entity-social-media');
?>
<div class="main-app single-1">

    <entity-header :entity="entity"></entity-header>
    
    
    <container class="single-1__content">
        
        <div class="divider"></div>
        
        <main>
            <div class="row">
                {{entity.En_Nome_Logradouro}}, {{entity.En_Num}}, {{entity.En_Bairro}}, {{entity.En_CEP}}, {{entity.En_Municipio}}, {{entity.En_Estado}}
            </div>
            <div class="row">
                <h2>Descrição Detalhada</h2>
                <p>{{entity.longDescription}}</p>
            </div>
            <files-list :files="entity.files.downloads" title="Arquivos para download"></files-list>
            <entity-links :entity="entity" title="Links"></entity-links>
            <entity-gallery :entity="entity"></entity-gallery>

        </main>
        
        <aside>
            <entity-terms :entity="entity" taxonomy="area" title="Linguagens culturais"></entity-terms>
            <entity-social-media :entity="entity"></entity-social-media>
            <entity-seals :entity="entity" title="Verificações"></entity-seals>
            <entity-terms :entity="entity" taxonomy="tag" title="Tags"></entity-terms>  
            <entity-owner :entity="entity" title="Publicado por"></entity-owner>
            <share-links title="Compartilhar" text="Veja este link:"></share-links>
            
        </aside>
        
    </container>
</div>