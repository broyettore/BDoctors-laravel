<?php

namespace Database\Seeders;

use App\Models\Specialisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SpecialisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialisations = [
            [
                'name' => 'Cardiologia',
                'description' => 'La specializzazione medica che si occupa delle malattie del cuore e del sistema circolatorio. La cardiologia comprende la diagnosi, il trattamento e la gestione delle patologie cardiache come l\'infarto del miocardio, l\'insufficienza cardiaca, le aritmie e le malattie delle valvole cardiache. I cardiologi utilizzano test diagnostici come l\'elettrocardiogramma (ECG), l\'ecocardiogramma, la prova da sforzo e la cateterizzazione cardiaca per valutare la salute del cuore.'
            ],
            [
                'name' => 'Dermatologia',
                'description' => 'La dermatologia è la specializzazione medica che si occupa delle malattie della pelle, dei capelli e delle unghie. I dermatologi sono esperti nella diagnosi e nel trattamento di condizioni come l\'eczema, la psoriasi, l\'acne, le infezioni cutanee, il cancro della pelle e le malattie autoimmuni. Possono eseguire biopsie cutanee, trattamenti laser, terapie topiche e altre procedure per migliorare la salute e l\'aspetto della pelle.'
            ],
            [
                'name' => 'Gastroenterologia',
                'description' => 'La gastroenterologia è la specializzazione medica che si occupa delle malattie dell\'apparato digerente e del sistema gastrointestinale. I gastroenterologi sono esperti nella diagnosi e nel trattamento di disturbi come il reflusso gastroesofageo, le ulcere gastriche, la malattia infiammatoria intestinale, la sindrome dell\'intestino irritabile e i disturbi epatici. Utilizzano esami endoscopici come l\'endoscopia digestiva alta e la colonscopia per esaminare l\'apparato digerente e possono prescrivere terapie farmacologiche o interventi chirurgici quando necessario.'
            ],
            [
                'name' => 'Neurologia',
                'description' => 'La neurologia è la specializzazione medica che si occupa delle malattie del sistema nervoso. I neurologi diagnosticano e trattano condizioni come l\'ictus, l\'epilessia, la malattia di Parkinson, la sclerosi multipla e le neuropatie. Utilizzano test neurologici come la risonanza magnetica (MRI), l\'elettromiografia (EMG) e gli esami neurologici per valutare le funzioni cerebrali e nervose dei pazienti.'
            ],
            [
                'name' => 'Ortopedia',
                'description' => 'L\'ortopedia è la specializzazione medica che si occupa delle malattie e delle lesioni del sistema muscolo-scheletrico. Gli ortopedici trattano condizioni come le fratture ossee, le lussazioni articolari, le malattie articolari degenerative, le deformità congenite e le lesioni sportive. Possono eseguire interventi chirurgici ortopedici come la sostituzione dell\'anca o del ginocchio e fornire terapie riabilitative per aiutare i pazienti a recuperare la funzionalità.'
            ],
            [
                'name' => 'Pediatria',
                'description' => 'La pediatria è la specializzazione medica che si occupa della salute e del benessere dei bambini. I pediatri diagnosticano e trattano una vasta gamma di condizioni pediatriche, come le infezioni respiratorie, le malattie infantili, le allergie, le malattie genetiche e lo sviluppo del bambino. Forniscono anche consigli sulla salute, compresi i vaccini, la nutrizione e la crescita e sviluppo del bambino.'
            ],
            [
                'name' => 'Psichiatria',
                'description' => 'La psichiatria è la specializzazione medica che si occupa dei disturbi mentali e delle malattie psichiatriche. I psichiatri diagnosticano e trattano condizioni come la depressione, l\'ansia, il disturbo bipolare, la schizofrenia e i disturbi del comportamento. Utilizzano una combinazione di terapie farmacologiche, terapie psicologiche e interventi psicosociali per aiutare i pazienti a gestire la loro salute mentale.'
            ],
            [
                'name' => 'Radiologia',
                'description' => 'La radiologia è la specializzazione medica che utilizza immagini diagnostiche, come raggi X, tomografia computerizzata (TC) e risonanza magnetica (MRI), per diagnosticare e monitorare le malattie. I radiologi interpretano le immagini radiologiche per identificare lesioni, tumori, infezioni e altre anomalie. Svolgono un ruolo cruciale nella diagnosi precoce del cancro e delle malattie interne, fornendo informazioni cruciali per i medici curanti.'
            ],
            [
                'name' => 'Chirurgia generale',
                'description' => 'La chirurgia generale è la specializzazione medica che si occupa delle procedure chirurgiche che coinvolgono organi interni del corpo. I chirurghi generali eseguono interventi come l\'asportazione di tumori, la riparazione di ernie, la rimozione della cistifellea e la chirurgia dell\'apparato digerente. Possono anche gestire situazioni di emergenza come l\'appendicite acuta o le lesioni traumatiche.'
            ],
            [
                'name' => 'Otorinolaringoiatria (ORL)',
                'description' => 'L\'otorinolaringoiatria (ORL), nota anche come otorinolaringologia o otorino, è la specializzazione medica che si occupa delle malattie dell\'orecchio, del naso, della gola e delle strutture correlate alla testa e al collo. Gli otorinolaringoiatri trattano condizioni come l\'infezione dell\'orecchio, la sinusite, il russare, l\'apnea del sonno, le tonsille infiammate e i disturbi dell\'equilibrio. Possono anche eseguire interventi chirurgici come la timpanoplastica e la rimozione delle tonsille.'
            ],
            [
                'name' => 'Endocrinologia',
                'description' => 'L\'endocrinologia è la specializzazione medica che si occupa delle ghiandole endocrine e degli ormoni che producono. Gli endocrinologi diagnosticano e trattano disturbi come il diabete, l\'ipotiroidismo, l\'ipertiroidismo, i disturbi ormonali, l\'obesità e le patologie della ghiandola surrenale. Utilizzano test di laboratorio per misurare i livelli ormonali e prescrivono terapie farmacologiche o altre modalità di trattamento per normalizzare la funzione endocrina.'
            ],
            [
                'name' => 'Urologia',
                'description' => 'L\'urologia è la specializzazione medica che si occupa delle malattie del sistema urinario e del tratto genitale maschile. Gli urologi trattano condizioni come le infezioni urinarie, le calcolosi renali, l\'ipertrofia prostatica benigna, il cancro alla prostata, i disturbi della fertilità maschile e la disfunzione erettile. Possono eseguire interventi chirurgici come la rimozione della prostata o dei calcoli renali e fornire terapie per risolvere i problemi urologici.'
            ],
            [
                'name' => 'Ginecologia',
                'description' => 'La ginecologia è la specializzazione medica che si occupa della salute riproduttiva delle donne, compresi l\'apparato riproduttivo e il sistema genitale femminile. I ginecologi offrono assistenza in diverse fasi della vita di una donna, dalla pubertà alla menopausa. Svolgono esami diagnostici, trattano le condizioni ginecologiche, offrono consulenza sulla contraccezione, gestiscono la gravidanza e offrono cure per le malattie ginecologiche, come il cancro al seno o al collo dell\'utero.'
            ],
            [
                'name' => 'Oftalmologia',
                'description' => 'L\'oftalmologia è la specializzazione medica che si occupa delle malattie degli occhi e della vista. Gli oftalmologi diagnosticano e trattano condizioni come il glaucoma, le cataratte, la degenerazione maculare, l\'occhio secco e le infezioni oculari. Possono eseguire interventi chirurgici come l\'impianto di lenti intraoculari o la correzione del laser per migliorare la vista dei pazienti. Forniscono anche esami di routine per il monitoraggio della salute oculare.'
            ],
            [
                'name' => 'Allergologia',
                'description' => 'L\'allergologia è la specializzazione medica che si occupa delle allergie e delle reazioni allergiche. Gli allergologi diagnosticano e trattano condizioni come la rinite allergica, l\'asma, l\'orticaria, l\'eczema allergico e le allergie alimentari. Utilizzano test cutanei, test di provocazione allergica e test di laboratorio per identificare le allergie specifiche e prescrivono trattamenti come l\'immunoterapia allergenica o farmaci per ridurre i sintomi allergici.'
            ],
            [
                'name' => 'Ematologia',
                'description' => 'L\'ematologia è la specializzazione medica che si occupa delle malattie del sangue, del midollo osseo e dei linfonodi. Gli ematologi diagnosticano e trattano condizioni come l\'anemia, la leucemia, la trombosi, la talassemia, la malattia di von Willebrand e i linfomi. Utilizzano esami ematologici, come l\'emocromo completo e la biopsia del midollo osseo, per valutare la salute del sangue e possono prescrivere terapie come la chemioterapia o il trapianto di midollo osseo.'
            ],
            [
                'name' => 'Chirurgia cardiovascolare',
                'description' => 'La chirurgia cardiovascolare è la specializzazione chirurgica che si occupa delle malattie del cuore e dei vasi sanguigni. I chirurghi cardiovascolari eseguono interventi come la bypass coronarica, la sostituzione valvolare cardiaca, la riparazione dell\'aneurisma aortico e l\'impianto di pacemaker. Possono anche trattare malformazioni congenite del cuore e malattie delle arterie periferiche. La chirurgia cardiovascolare richiede competenze avanzate in chirurgia toracica e vascolare.'
            ],
            [
                'name' => 'Neurochirurgia',
                'description' => 'La neurochirurgia è la specializzazione chirurgica che si occupa delle malattie del sistema nervoso centrale e periferico. I neurochirurghi eseguono interventi per trattare tumori cerebrali, emorragie cerebrali, ernie del disco, malformazioni vascolari, lesioni spinali e altre patologie neurologiche. Utilizzano tecniche chirurgiche avanzate, come la neuroendoscopia e la navigazione neuronale, per accedere al cervello e al midollo spinale. La neurochirurgia richiede competenze specializzate e una formazione prolungata.'
            ],
            [
                'name' => 'Nefrologia',
                'description' => 'La nefrologia è la specializzazione medica che si occupa delle malattie dei reni e del sistema urinario. I nefrologi diagnosticano e trattano condizioni come l\'insufficienza renale, la malattia renale cronica, l\'ipertensione arteriosa renale, la glomerulonefrite e i calcoli renali. Utilizzano esami di laboratorio per valutare la funzione renale e possono prescrivere terapie farmacologiche o procedure come la dialisi o il trapianto di rene per gestire le malattie renali.'
            ],
            [
                'name' => 'Pneumologia',
                'description' => 'La pneumologia è la specializzazione medica che si occupa delle malattie del sistema respiratorio. I pneumologi diagnosticano e trattano condizioni come l\'asma, la bronchite cronica, la fibrosi polmonare, la polmonite, il cancro ai polmoni e l\'apnea ostruttiva del sonno. Possono eseguire test di funzionalità polmonare, come la spirometria, per valutare la funzione respiratoria dei pazienti e prescrivere terapie come i broncodilatatori o l\'ossigenoterapia.'
            ],
            [
                'name' => 'Oncologia',
                'description' => 'L\'oncologia è la specializzazione medica che si occupa della diagnosi e del trattamento del cancro. Gli oncologi diagnosticano e trattano diverse forme di cancro, come il cancro al seno, il cancro del polmone, il cancro al colon, il melanoma e il linfoma. Utilizzano una combinazione di terapie, tra cui la chirurgia oncologica, la radioterapia e la chemioterapia, per gestire il cancro e lavorano in equipe multidisciplinari per offrire cure comprehensive ai pazienti.'
            ]
        ];
        
        Schema::disableForeignKeyConstraints();
        Specialisation::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($specialisations as $specialisation) {
            
            $new_specialisation = new Specialisation();
            $new_specialisation->name = $specialisation['name'];
            $new_specialisation->description = $specialisation['description'];

            $new_specialisation->save();
        }
    }
}
