<?php
ini_set("display_errors", 1);

?>
    <form action="Numerologie.php" name="send" method="post">

        <label for="dob">date de naissance :
            <input type="date" name="dob" id="dob"/>
        </label>
        <br>


        <input type="submit" value="Valider"/>
    </form>
<?php
if (!empty ($_POST['dob'])) {
    $date = $_POST['dob'];

    numerologie($date);


}

 function numerologie($date)
{


    list ($annee, $mois, $jour) = explode("-", $date);
    $a = $annee + $mois + $jour;

    $a = str_split($a);
    $somme = 0;

    foreach ($a as $c) {
        $somme += $c;
    }

    if ($somme == "11" || $somme == "22") {
        $numerologie = $somme;


    } else {

        $somme = str_split($somme);
        $numerologie = 0;
        foreach ($somme as $d) {
            $numerologie += $d;

        }


    }

    switch ($numerologie) {
        case"1":
            ?> <h1>Chemin de vie 1</h1>
            <p>&nbsp;</p>
            <p><strong>Le chemin de vie 1</strong> est celui des <strong>gagnants</strong>,
                de ceux qui occupent des postes à responsabilité, aussi
                le 1 sera amené à prendre seul de nombreuses initiatives
                pour lui-même et pour son entourage. Pour réussir sur ce
                chemin de vie il faut éviter de se reposer sur les autres. Le 1
                doitêtre actif. Toutes les &laquo; chances &raquo; qui se présenteront
                à lui seront en fait le fruit de sa persévérance.
                Sa réussite est liée aux efforts qu'il aura fournis.
                Le 1 n'aime l'association que s'il dirige.</p>
            <p align="center" class="centre"><b>Symboles : Autorité - Indépendance
                    &#8211; Initiative</b></p>
            <p align="center" class="centre"><b>Ages clés : 35 ans &#8211; 44
                    ans &#8211; 53 ans</b></p>
            <p><b><em>A développer :</em></b> Volonté. Confiance
                en soi. Ambition. Tolérance.</p>
            <p><b><em>A éviter :</em></b> Ego&iuml;sme. Agressivité.
                Arrogance. Manque d'initiative.</p>
            <p><b><em>Coeur </em></b>: Même dans le couple le 1
                aime diriger. Ne vous fiez pas à son abord un peu froid car il
                est passionné et extrêmement généreux. Avec
                lui il fautêtre disponible et surtout ne pas le tromper.</p>
            <p><b><em>Travail </em></b>: Le natif du chemin de vie 1 commande,
                dirige, c'est un chef. Il a tendance à croire que tout le
                monde a ses aptitudes et ses compétences d'o&ugrave; une
                certaine intolérance. Le 1 est exigeant et ne supporte pas la médiocrité.
                Il est responsable de ses actes. Franc et loyal, il est impitoyable si
                on le trahit.</p>
            <p><b><em>Santé :</em></b> Les points sensibles du 1 sont
                : La tête (migraines, problèmes nez, gorge, oreilles, chocs
                crâniens, douleurs cervicales). Système cardio-vasculaire.
                Insomnie.</p>
            <p><b><em>Lame du tarot </em></b>: Le Bateleur.</p>
            <?php ;
            break;

        case"2":
            ?> <h1>Chemin de vie 2</h1>
            <p>&nbsp;</p>
            <p><strong><em>Le chemin de vie 2</em></strong> favorise les relations avec
                autrui. Les natifs de ce chemin de vie ont une certaine facilité
                à collaborer, s'insérer dans un groupe, aimer un partenaire.
                Leur problème est la passivité, la tendance à se
                laisser aller par le mouvement. L'esprit d'initiative est
                peu développé mais le sens du dévouement est exemplaire.
                Le couple et la famille sont les éléments d'équilibre
                majeurs. Le 2 est aussi un peu &laquo; artiste &raquo;.</p>
            <p><b>Symboles : Collaboration &#8211; Association &#8211;
                    Union<br>
                    <br>
                    Ages clés : 34 ans &#8211; 43 ans &#8211; 52 ans</b></p>
            <p><b><em>A développer :</em></b> Patience. Diplomatie.
                Equilibre (éviter les situations dualitaires).</p>
            <p><b><em>A éviter : </em></b>Trop grande soumission. Paresse.
                Passivité.</p>
            <p><b><em>Coeur :</em></b> Le natif du chemin de vie 2 aime
                l'amour, il fuit la solitude et aspire très jeune à
                convoler. C'est un tendre, un sensible, un imaginatif. On reste
                rarement seul dans un chemin de vie 2 car il attire la vie de couple.
                Le c&ocirc;té dualitaire du 2 peut provoquer des relations cachées.</p>
            <p><b><em>Travail : </em></b>C'est le collaborateur par
                excellence. Il est apprécié pour sa gentillesse et sa disponibilité.<br>
                Carrières favorables : Activités manuelles et créatives
                (coiffure&#8230;). Artisanat. Petit commerce. Milieu éducatif.
                Milieu artistique.</p>
            <p><b><em>Santé : </em></b>Problèmes liés
                à au système nerveux : angoisses, dépressions, ulcères
                de l'estomac. Fragilité des reins et des lombaires.</p>
            <p><b><em>Lame du Tarot :</em></b> La Papesse.</p>
            <?php
            break;
        case"3":
            ?><h1>Chemin de vie 3</h1>
            <p>&nbsp;</p>
            <p><strong><em>Le chemin de vie 3</em></strong> rayonne. Il symbolise
                une vie agréable comportant peu d'obstacles. Le 3 ouvre toujours
                une porte. Il favorise les opportunités, les contacts, l'ambition.
                Les natifs du 3 ont un aspect soigné et aiment l'expression
                verbale ou écrite. Ce sont des créateurs. Le 3 a des énergies
                immatures qui peuvent quelquefois gâcher ce tableau idyllique c'est
                la raison pour laquelle les enfants qui naissent sous cette configuration
                doivent avoir leur comptant de jeux et de loisirs mais on doit leur apprendre
                le travail en profondeur car ils ont tendance à l'éparpillement.
                Les langues étrangères seront un atout majeur dans ce chemin
                de vie.</p>
            <p><b>Symboles : Communication - Créativité<br>
                    <br>
                    Ages clés : 33 ans &#8211; 42 ans &#8211; 51 ans</b></p>
            <p><b><em>A développer :</em></b> Sens des relations avec
                autrui. Sens de l'humour. L'ambition.</p>
            <p><b><em>A éviter :</em></b> Superficialité. Dispersion.
                Refus de grandir ou de vieillir. Vanité. Colère.</p>
            <p><b><em>Coeur :</em></b> Facile à vivre, le natif
                du chemin de vie 3 aime les plaisirs et l'amour. A cause de son
                c&ocirc;té un peu &laquo; papillon &raquo;, il peut mettre du temps
                à s'engager dans une relation sérieuse. Cependant,
                le 3 est capable d'un amour profond, sincère et durable si
                son partenaire ne cherche pas à l'étouffer et n'entame
                pas sa gaieté et sa bonne humeur. Il adore les enfants et les siens
                seront épanouis.</p>
            <p><b><em>Travail :</em></b> Le 3 communique et travaille avec
                l'objectif de réussir matériellement et il y arrive.
                Sa réussite est insolente tellement il a de facilités. Cela
                provoque des jalousies et ces facilités sont tellement anesthésiantes
                qu'il ne verra pas arriver (ou trop tard) l'ennemi. Qu'importe
                ! Blessé, meurtri, il partira vers d'autres horizons avec
                un peu plus de méfiance.<br>
                Carrières favorables : Secteur public. Vente. Sport. Loisirs. Tourisme.
                Professions artistiques (chant, musique, théâtre, dessin,
                écriture). Enseignement</p>
            <p><b><em>Santé :</em></b> Problèmes de foie et
                de circulation artérielle. Attention aux excès en tout genre
                ! </p>
            <p><b><em>Lame du Tarot :</em></b> L'Impératrice.</p><?php
            break;
        case"4":
            ?><h1>Chemin de vie 4</h1>
            <p>&nbsp;</p>
            <p class="p">Autant le chemin de vie 3 apporte de la fantaisie, autant <em><strong>le
                        chemin de vie 4</strong></em> apporte la rigueur, la discipline et les
                efforts. Les natifs du nombre 4 construisent leur vie lentement mais sûrement.
                La réussite s'inscrit dans le temps. Rarement démonstratif,
                le 4 s'investit dans des relations solides et durables, son cercle
                relationnel est restreint. Il aime les plaisirs simples et la nature dans
                laquelle il puise ses ressources. Il a le sens de l'organisation
                et de l'orientation. En négatif, le 4 peut s'enfermer
                dans une routine lassante pour son entourage, son entêtement peut
                décourager et ses angoisses déstabiliser les autres. Son
                souci du détail peut le conduire à une maniaquerie quasi-maladive.
                Dès son plus jeune âge, le chemin de vie 4 cherche des repères,
                un manque de stabilité et d'autorité pourraient le
                perturber et bloquer son intégration sociale.</p>
            <p class="centre"><b>Symboles : Travail &#8211; Stabilité - Rigueur<br>
                    <br>
                    Ages clés : 32 ans &#8211; 41 ans &#8211; 50 ans</b></p>
            <p class="p"><b><em>A développer :</em></b> Organisation. Ordre.
                Méthode. Respect des lois et des conventions. Fantaisie. Sens de
                l'humour.</p>
            <p class="p"><b><em>A éviter :</em></b> Maniaquerie. Obstination.
                Routine. Rancune. Autorité dans le cadre familial.</p>
            <p class="p"><b><em>Coeur :</em></b> Le natif du chemin de vie 4 a des
                sentiments profonds et durables. Il est un peu réservé mais
                extrêmement fidèle. Sa famille est le centre de ses préoccupations,
                il se mettra &laquo; en quatre &raquo; pour assurer sa sécurité
                matérielle.</p>
            <p class="p"><b><em>Travail :</em></b> Le natif du chemin de vie 4 est un
                bâtisseur. Il construit sa vie pierre par pierre sur des fondations
                solides. Son sens de la rigueur et de la méthode est un atout majeur.
                L'ascension est lente mais régulière. Le 4 accepte
                mal les critiques tellement il s'applique. Il a le sens et le respect
                de la hiérarchie.<br>
                Professions favorables : Administration et service public. Magistrature.
                Economie. Construction. Armée </p>
            <p><b><em>Santé :</em></b> Ses points faibles sont : les
                os (risques de fractures et de cassures), les articulations, les dents,
                la peau.</p>
            <p><b><em>Lame du Tarot :</em></b> L'Empereur.</p><?php
            break;
        case"5":
            ?>  <h1>Chemin de vie 5</h1>
            <p>&nbsp;</p>
            <p><em><strong>Le chemin de vie 5</strong></em> a une existence
                très variée. Les changements et transformations du mode
                de vie sont fréquents. Le chemin de vie 5 favorise les voyages,
                les déplacements, les déménagements. Les natifs de
                ce nombre ne s'en plaignent pas, au contraire, il adorent la nouveauté
                et détestent la monotonie. Ils aiment l'activité physique
                et leur liberté. Beaucoup d'imprévus sur ce chemin
                de vie.</p>
            <p class="centre"><b>Symboles : Changements &#8211; Mobilité - Liberté<br>
                    <br>
                    Ages clés : 31 ans &#8211; 40 ans &#8211; 49 ans</b></p>
            <p><b><em>A éviter :</em></b> L'instabilité.
                L'impulsivité. Le goût du risque (attention aux accidents).</p>
            <p><b><em>Coeur :</em></b> Le natif du chemin de vie 5 séduit
                par son charme, ses paroles, son esprit mais ce n'est pas un sentimental.
                Son goût du changement est assez incompatible avec une union durable,
                mais il y a des exceptions à la règle ! Il aimera une personne
                complètement autonome : sangsues, accros, jaloux s'abstenir.</p>
            <p><b><em>Travail :</em></b> Il est recherché pour son
                goût des contacts, pour sa mobilité et sa grande souplesse
                d'esprit. Il s'investit à fond dans des objectifs à
                court terme.<br>
                Carrières conseillées : Tourisme. Transport. Commercial.
                Sports. Journalisme. Théâtre. Animation et toutes les professions
                indépendantes.<br>
                Carrières déconseillées : Toutes les professions
                très hiérarchisées (armée, police, administration&#8230;)
                et sédentaires.</p>
            <p><b><em>Santé :</em></b> Les points sensibles sont :
                le système respiratoire, le système nerveux. Attention aux
                accidents dûs à l'impulsivité ou l'étourderie
                .</p>
            <p><b><em>Lame du Tarot</em></b> : Le Pape.</p><?php
            break;
        case"6":
            ?>  <h1>Chemin de vie 6</h1>
            <p>&nbsp;</p>
            <p>Sans cesse à la recherche de l'équilibre
                et de l'harmonie, <em><strong>le chemin de vie 6</strong></em> a
                des choix difficiles à faire mais il les fait car il a un sens
                aigu des responsabilités. Les natifs du nombre 6 sont des êtres
                charmants, sensibles, diplomates et conciliants. Ils ont un sens inné
                de la beauté et de l'esthétique ce qui les conduit
                au perfectionnisme. Ils aiment créer autour d'eux un cadre
                de vie chaleureux.</p>
            <p class="centre"><b>Symboles : Famille &#8211; Responsabilité &#8211;
                    Beauté - Harmonie<br>
                    <br>
                    Ages clés : 30 ans &#8211; 39 ans &#8211; 48 ans </b></p>
            <p><b><em>A éviter : </em></b>Goût du luxe trop prononcé.
                Vivre au dessus de ses moyens.</p>
            <p><b><em>Coeur : </em></b>Son équilibre dépend
                de l'équilibre sentimental. Il recherche le bonheur et quand
                il s'unit c'est pour toujours. Sa famille est l'élément
                essentiel de son épanouissement.</p>
            <p><b><em>Travail : </em></b>Le natif du chemin de vie 6 manque
                un peu de rigueur mais il est recherché pour sa diplomatie, son
                esprit de conciliation et son sens des responsabilités.</p>
            <p><b><em>Carrières favorables :</em></b> Arts. Mode. Antiquités.
                Décoration. Publicité. Musique. Immobilier. Psychologie
                et sciences humaines.</p>
            <p><b><em>Santé :</em></b> Les points faibles sont : le
                coeur, le système cardio-vasculaire, organes sexuels (surtout
                les femmes).</p>
            <p><b><em>Lame du Tarot :</em></b> L'Amoureux.</p><?php
            break;
        case"7":
            ?> <h1>Chemin de vie 7</h1>
            <p>&nbsp;</p>
            <p><strong><em>Le chemin de vie 7</em></strong> est le chouchou
                du Ciel, en effet nombreux de ses natifs sont branchés en direct.
                En clair, la vie spirituelle est favorisée sur ce chemin de vie,
                ils ont une réelle intuition. Le chemin de vie 7 isole, si bien
                que les natifs de ce nombre sont souvent renfermés, peu bavards,
                mais leur vie intérieure est très riche. Le 7 aime le calme
                et ne se libère qu'en petit comité, c'est un
                ami fidèle et fiable. Le 7 est le nombre de l'esprit, de
                même que nous avons besoin de nourriture sur cette terre, l'âme
                a besoin de se nourrir : il faut lui donner de la lecture, des études
                et tout ce qui peut l'enrichir. Le chemin de vie 7 apporte des retards
                et des blocages cependant l'inattendu a une grande place sur ce
                chemin de vie, on peut même parler de la Providence. Il se ressource
                près de l'eau.</p>
            <p class="centre"><b>Symboles : Indépendance &#8211; Esprit &#8211;
                    Originalité <br>
                    <br>
                    Ages clés : 29 ans &#8211; 38 ans &#8211; 47 ans </b></p>
            <p><b><em>A développer :</em></b> Intuition.</p>
            <p><b><em>A éviter :</em></b> Pessimisme. Un trop grand
                désir d'acquisitions matérielles et financières.
                Tout intérêt purement matériel sera voué à
                l'échec. Fanatisme sectaire.</p>
            <p><b><em>Coeur :</em></b> L'union n'est pas favorisée
                sous cette vibration. Les unions et les ruptures se font de manière
                inattendue. L'union durable est tout de même possible si les
                deux partenaires partagent les mêmes intérêts. Beaucoup
                d'amitié amoureuse avec le 7.</p>
            <p><b><em>Travail :</em></b> Le natif du chemin de vie 7 est très
                recherché pour son sens de la recherche et de l'analyse.
                Ses idées de création originales lui permettent d'accéder
                à la réussite.<br>
                Professions favorables : Comptabilité. Gestion. Expertise. Recherche
                scientifique. Informatique. Investigation policière. Enseignement
                et toutes les carrières indépendantes ainsi que tous les
                métiers de mer.</p>
            <p><b><em>Santé :</em></b> Les points faibles sont : Les
                nerfs. L'apport en vitamines et minéraux est recommandé.</p>
            <p><b><em>Lame du Tarot :</em></b> Le Chariot.</p><?php
            break;
        case"8":
            ?> <h1>Chemin de vie 8</h1>

            <p>&nbsp;</p>
            <p>Les natifs du <em><strong>chemin de vie 8</strong></em> sont
                des êtres combatifs, courageux. Ils sont ambitieux et pour eux la
                réussite matérielle est une fin en soi. Le 8 subit des échecs
                mais repart aussitôt vers une nouvelle conquête car sa faculté
                de récupération est surprenante. Une tendance à l'agressivité
                lui nuit souvent dans ses relations avec autrui. Pouvoir, argent, matérialisme
                sont les symboles de ce chemin de vie difficile qui apportera des épreuves
                de manière à favoriser l'évolution.</p>
            <p><b>Symboles : Ambition &#8211; Argent - Agressivité</b></p>
            <p><b>Ages clés : 28 ans &#8211; 37 ans &#8211; 46
                    ans</b></p>
            <p><b><em>A développer : </em></b>La tolérance.
                Le sens de l'écoute et du dialogue.</p>
            <p><b><em>A éviter :</em></b>L'agressivité.
                La violence. Le manque de scrupules en affaires. La rancune.<br>
                <b><em>Attention !</em></b><em> Le nombre 8 est régi, plus que
                    les autres nombres, par la loi du karma. Avec le 8 on récolte ce
                    que l'on sème en bon ou en mauvais et en proportion. Si des
                    avertissements apparaissent tels que problèmes financiers, de santé,
                    problèmes familiaux, il faut redresser la barre et se conduire
                    de manière différente (plus de justice, plus de tolérance,
                    moins d'agressivité ou de violence, plus d'écoute,
                    plus d'honnêteté&#8230;), sinon la sanction finale
                    sera redoutable. Pardon pour cette mauvaise nouvelle mais je me devais
                    d'en parler</em></p>
            <p><b><em>Côté coeur :</em></b> Le 8 vit ses relations sur un mode
                passionnel. Ses sentiments sont sincères. Le 8 aime dominer son
                partenaire et il est jaloux.</p>
            <p><b><em>Travail :</em></b> Le natif du chemin de vie 8 a une
                énergie débordante qu'il dépense dans une grande
                capacité de travail. Il prend des décisions rapides. Sa
                réussite est inscrite tant qu'il ne tombe pas dans les extrêmes,
                l'équilibre en tout est fortement recommandé car il
                peut monter très haut et descendre très bas.<br>
                Les professions favorables sont : Finances. Marketing. Chirurgie. Politique.
                Judiciaire. Police. Armée. Compétition sportive. </p>
            <p><b><em>Santé : </em></b>Opérations chirurgicales
                fréquentes. Tendance aux chocs. Risques d'accidents.</p>
            <p><b><em>Lame du Tarot :</em></b> La Justice.<br></p> <?php
            break;
        case"9":

            ?>   <h1>Chemin de vie 9 </h1>
            <p>&nbsp;</p>
            <p><strong><em>Le chemin de vie 9</em></strong> favorise les voyages
                du corps et de l'âme. Les natifs du 9 font preuve de dévouement,
                d'altruisme. Ce sont des idéalistes. Ils sont prêts
                à parcourir le monde pour une cause humanitaire ou pour des affaires
                à caractère international, ils sont attirés par l'&laquo;&nbsp;étranger&nbsp;&raquo;.
                C'est une existence tournée vers les autres. Les natifs du
                9 sont extrêmement tolérants, compréhensifs, pacifistes
                et très sensibles.</p>
            <p class="centre"><b>Symboles : Evasion &#8211; Idéal &#8211; Voyages
                    &#8211; Dévouement - Vocation<br>
                    <br>
                    Ages clés : 27 ans &#8211; 36 ans &#8211; 45 ans </b></p>
            <p><b><em>A développer :</em></b> Les langues étrangères.
                L'esprit de dévouement.</p>
            <p><b><em>A éviter : </em></b>Une trop grande bonté
                qui attire les parasites et les profiteurs en tout genre.</p>
            <p><b><em>Coeur :</em></b> Le 9 a un immense besoin d'amour
                et de tendresse. Il en donne beaucoup et il a besoin de preuves en retour.
                Il est fidèle s'il se sent aimé, sinon, il risque
                d'aller chercher ailleurs ce qui lui manque. L'union avec
                une personne d'origine étrangère est facilitée.</p>
            <p><b><em>Travail :</em></b> Les natifs du chemin de vie 9 sont
                appréciés pour leur sens du dévouement et leur altruisme.<br>
                Les professions favorables sont : Les carrières internationales.
                L'enseignement. Les techniques de pointes (audio-visuel). Les professions
                médicales et para-médicales. Le social.</p>
            <p><b><em>Santé : </em></b>Les points faibles sont : Le
                psychisme à cause d'une émotivité exacerbée.
                Toutes les émotions sont démultipliées sous cette
                vibration. Tendance aux angoisses et à la dépression. </p>
            <p><b><em>Lame du Tarot : </em></b>L'Hermite.<br><?php
            break;


        case"11":
            /* dob verif 01/08/2000 */
            ?>  <h1>Chemin de vie 11</h1>
            <p>&nbsp;</p>
            <p>Le 11 est un ma&icirc;tre nombre. Il porte en lui de puissantes
                énergies. Le natif du <em><strong>chemin de vie 11</strong></em>
                a une très grande ambition et une force de caractère. Il
                n'est pas toujours facile à vivre car il aime dominer, il
                veut être le premier cependant il peut rarement se réaliser
                sans l'aide d'autrui. Il a un fort ascendant sur les autres.
                Il ne supporte ni les limitations ni les restrictions mais il est très
                sensible.</p>
            <p class="centre"><b>Symboles : Grandes réalisations<br>
                    <br>
                    Ages clés : 34 ans &#8211; 43 ans &#8211; 52 ans</b></p>
            <p><b><em>A éviter :</em></b> Impatience. Impulsivité.
                Orgueil.</p>
            <p><b><em>Coeur : </em></b>Malgré sa sensibilité,
                le natif du chemin de vie 11 veut dominer. Son partenaire devra faire
                preuve de souplesse et de patience mais comment ne pas succomber à
                son puissant magnétisme ?</p>
            <p><b><em>Travail :</em></b> Le natif du 11 recherche les postes
                à responsabilité. Toutes les carrières lui sont ouvertes
                et la réussite est généralement inscrite sur son
                chemin.</p>
            <p><b><em>Santé :</em></b> Ses points faibles sont : le
                cerveau, le système nerveux à cause des énergies
                puissantes gérées par ce ma&icirc;tre nombre.</p>
            <p><b><em>Lame du Tarot :</em></b> La Force.<br>
            </p><?php
            break;

        case"22":
            /* dob verif /12/2000 */
            ?>  <h1>Chemin de vie 22</h1>
            <p>&nbsp;</p>
            <p>C'est le plus grand de tous les chemins de vie. Les aspirations
                des natifs du 22 sont d'ordre universel. Ils ont des projets de
                haut niveau que ce soit pour un groupe, un pays ou le monde ! Ce sont
                des hyper-actifs. On pourrait dire que le <em><strong>chemin de vie 22
                    </strong></em>est celui des &laquo;&nbsp;génies&nbsp;&raquo; ou
                des &laquo;&nbsp;fous&nbsp;&raquo;. En effet, la puissance du 22 en positif
                ne peut être vécue que par une élite, en négatif,
                cette puissance provoque beaucoup de désordres psychiques mais
                généralement ce chemin de vie est vécu sur le même
                tempo que le chemin de vie 4.</p>
            <p class="centre"><b>Symboles : Accomplissement d'ordre universel<br>
                    <br>
                    Ages clés : 32 ans &#8211; 41 ans &#8211; 50 ans </b></p>
            <p><b><em>A développer : </em></b>Ma&icirc;trise de soi.</p>
            <p><b><em>A éviter :</em></b> Ego&iuml;sme.</p>
            <p><b><em>Coeur : </em></b>La vie privée passe après
                la vie professionnelle. Le grand amour est possible lorsque le partenaire
                partage les mêmes intérêts. Le natif du 22 aime se
                sentir soutenu dans ses démarches. Il est sincère.</p>
            <p><b><em>Travail : </em></b>C'est dans le domaine professionnel
                que le natif du 22 se réalise pleinement. Il a une grande inspiration
                et veut faire profiter les autres de ses compétences et de son
                savoir, il le fait avec une grande générosité. La
                puissance et la capacité de travail sont exceptionnelles et peuvent
                amener à la renommée.<br>
                Toutes les carrières professionnelles sont favorables surtout si
                elles touchent le grand public. </p>
            <p><b><em>Santé : </em></b>Ses points faibles sont : les
                os, le système nerveux et psychique.</p>
            <p><b><em>Lame du Tarot : </em></b>Le Mat.</p>
            <p><br>
            </p> <?php
            break;
        default :
            echo "veuillez remplir votre date de naissance";
    }

}