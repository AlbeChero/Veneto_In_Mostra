-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 27, 2018 alle 14:36
-- Versione del server: 10.1.34-MariaDB
-- Versione PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_venetoinmostra`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `home`
--

CREATE TABLE `home` (
  `citta` varchar(100) NOT NULL,
  `sezione` varchar(100) NOT NULL,
  `titolo` varchar(500) NOT NULL,
  `testo` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `alt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `home`
--

INSERT INTO `home` (`citta`, `sezione`, `titolo`, `testo`, `img`, `alt`) VALUES
('vicenza', 'teatro', '\"Dreams\" al Teatro Comunale di Thiene', 'Saranno ventiquattro gli appuntamenti proposti quest\'anno, per la sua.. <a href=\"../PHP/capoHome.php?sez=teatro\">Continua a leggere</a>', '../IMG/vicenza/teatro/ballerini.jpg', 'ballerine che eseguono uno spettacolo teatrale sul palco'),
('vicenza', 'teatro', 'Angela Finocchiaro in \'Ho perso il filo\'', 'Il 6 e 7 Novembre il teatro comunale di Vicenza ospiter&agrave sul proprio palco Angela Finocchiaro <a href=\"../PHP/capoHome.php?sez=teatro\">Continua a leggere</a>', '../IMG/vicenza/teatro/finocchiaro.jpg', 'Angela Finocchiaro intenta a reggere un filo invisibile come immagine rappresentativa del suo spettacolo'),
('vicenza', 'eventi', 'Il rock balcanico di Goran Bregovic in piazza dei Signori a Vicenza', 'Luned&igrave 17 settembre alle 21 in piazza dei Signori a Vicenza si terr&agrave il.. <a href=\"../PHP/capoHome.php?sez=eventi\">Continua a leggere</a>', '../IMG/vicenza/eventi/cantante.png', 'Goran Bregovic circondato dai componenti della sua band durante un concerto'),
('vicenza', 'teatro', 'Jesus Christ Superstar. Il Musical!', 'Il teatro comunale di Vicenza ospit&agrave; &ldquo;Jesus Christ Superstar&rdquo;, il Musical superpremiato di Massimo Romeo Piparo, nella versione originale di.. <a href=\"../PHP/copoHome.php?sez=teatro\">Continua a leggere</a>', '../IMG/vicenza/teatro/jesus.jpg', 'Locandina dello spettacolo con al centro il titolo \"Jesus Christ Superstar. Il Musical!\" e gli interpreti dello spettacolo'),
('vicenza', 'eventi', 'proviamooo', 'sadasdasdasdsadasdasddasadsadsdsaasdsadsadsadsda  dsad  sad dasdassadsdasds da dsadass', '../IMG/vicenza/teatro/ballerini.jpg', 'asdasd');

-- --------------------------------------------------------

--
-- Struttura della tabella `padova`
--

CREATE TABLE `padova` (
  `sezione` varchar(45) NOT NULL,
  `testo` varchar(10000) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL,
  `alt` varchar(45) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `padova`
--

INSERT INTO `padova` (`sezione`, `testo`, `titolo`, `img`, `data_inizio`, `data_fine`, `alt`, `id`) VALUES
('eventi', 'La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWFLa sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF <span id = \"dots\"> . . . </span><span id = \"more\">WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF La sagra della polenta è molto bella, si trova in zona fiera!asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd dasssssssssss   daas d .FU EUF LWEUFL IUWEFIU WIE FUIWE BIWEU BIWEF IWF IB B  IU IUF IEFWU WEI WEUFIWEFUWI   WEUFIUIEFUWI WEIF WIEF IWEFU IWEFIU WIEFU IEWFIWEUWIEF UWIEFU WIEFUHW IEFU HWF</span>', 'SAGRA DELLA POLENTA', '../IMG/padova/eventi/sagrapolenta.jpg', '2018-09-10', '2018-09-11', 'Persona che mescola la polenta', 1),
('eventi', 'Verrà demolita la preziosissima mensa Piovego il prossimo lunedì, teneti alla larga e festeggiate con i vostri più cari parenti!', 'Demolizione mensa piovego', '../IMG/padova/eventi/mensa.jpg', '2018-08-31', '2018-10-01', 'Interno mensa piovego', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `psw` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Cognome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `email`, `psw`, `Nome`, `Cognome`) VALUES
(1, 'info@venetoinmostra.com', 'venetoinmostra', 'admin', 'del sito'),
(2, 'albertocherobin@gmail.com', 'alberobello', 'Alberto', 'Cherobin');

-- --------------------------------------------------------

--
-- Struttura della tabella `vicenza`
--

CREATE TABLE `vicenza` (
  `sezione` varchar(100) NOT NULL,
  `testo` varchar(10000) NOT NULL,
  `titolo` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL,
  `alt` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `vicenza`
--

INSERT INTO `vicenza` (`sezione`, `testo`, `titolo`, `img`, `data_inizio`, `data_fine`, `alt`, `id`) VALUES
('eventi', 'Durante la manifestazione funzioner&agrave un ricchissimo stand gastronomico con gnocchi, bigoli, salsicce, braciole, gulasch, polenta, patate fritte, fagioli.. novit&agrave da assaggiare: risotto orzo e baccal&agrave e un strepitoso baccal&agrave alla vicentina.\r\nDa non dimenticare una ricchissima Pesca di Beneficenza (dalle ore 20:00) e l\'apertura straordinaria del &quotPRESTIGIOSO ECOMUSEO DELLA PAGLIA&quot.\r\nE\' disponibile servizio di bus navetta per parcheggio auto presso Istituto S. Antonio. Proporr&agrave sull\'area delle scuole elementari di Agugliaro una settimana di divertimento e aggregazione tra musica, ballo, cabaret e stand gastronomico la sagra di San Bortolo organizzata dalla Pro Loco, al via gioved&iacute alle 21 con la musica di Andrea live e l\'esibizione dei ballerini della scuola di ballo New Harmony Dance di Agugliaro. Venerd&iacute alle 21.15 vi sar&agrave il ritorno del duo Marco & Pippo con l\'esilarante spettacolo di cabaret \'Ist&agrave sul palco\', sabato tributo nazionale alla disco dance con la \'Shary band\', domenica si baller&agrave con \'Michele & Michele by Parioli\', luned&igrave sar&agrave di scena la trascinante afro music del dj Morgan, marted&igrave tocca all\'oorchestra \'Dego\', gioved&igrave gran finale con \'Michele & Michele by Parioli\'. \r\n', 'Una settimana di festa per la sagra di San Bortolo', '../IMG/vicenza/eventi/sanBortolo.jpg', '2018-08-16', '2018-08-23', 'Volantino sagra di San Bortolo', 1),
('eventi', 'Vicenza in Festival: il rock balcanico di Goran Bregovic in piazza dei Signori.\r\nLuned&igrave 17 settembre alle 21 in piazza dei Signori a Vicenza si terr&agrave il concerto \'If you don\'t go crazy, you are not normal\' di Goran Bregovic, accompagnato dalla \'Wedding & Funeral Band\' per la rassegna \'Vicenza in Festival 2017\'. Il repertorio spazier&agrave dai suoi grandi successi agli ultimi album (Alkohol e Champagne for Gypsies), con qualche anticipazione di brani del nuovo album in uscita il prossimo anno, accompagnato dalla sua storica formazione di fiati, percussioni e voci bulgare. Con le sue radici natie nei Balcani e la mente nel XXI secolo, le composizioni di Goran Bregovic mescolano le sonorit&agrave di una fanfara tzigana, le polifonie tradizionali bulgare, una chitarra elettrica e percussioni tradizionali con delle accentuazioni rock, dando vita ad una musica dai ritmi travolgenti e dalle sonorit&agrave fragorose, per due ore di pura energia.\r\nGORAN BREGOVIC: nato a Sarajevo da madre serba e padre croato, Goran Bregovic crea i suoi primi gruppi rock a sedici anni. La musical esercit&ograve un ruolo fondamentale nella sua vita come unica possibilit&agrave di poter esprimere pubblicamente il malcontento popolare senza rischiare di finire in galera. Per far piacere ai suoi genitori, Goran si impegna a proseguire i suoi studi di filosofia e sociologia, che lo avrebbero portato ad insegnare, se l\'enorme successo del suo primo disco non avesse deciso altrimenti. Seguono quindici anni con il suo gruppo White Button e tredici album venduti in 6 milioni di copie. Tour interminabili in cui Goran diventer&agrave l\'idolo della giovent&ugrave jugoslava. Alla fine degli anni \'80, Bregovic si libera del suo ruolo sfibrante di \'star\' e si isola in un \'ritiro dorato\' in una piccola casa sulla costa adriatica, un vecchio sogno d\'infanzia. Qui compone le musiche del terzo film di Emir Kusturica \'Il Tempo dei Gitani\'. Ma ben presto i primi disordini scoppiano in Yugoslavia e i due amici sono costretti ad abbandonare tutto e trasferirsi a Parigi. Alla sua origine gi&agrave mista, Goran ha aggiunto una moglie musulmana.\r\n\r\n\r\n', 'Il rock balcanico di Goran Bregovic in piazza dei Signori a Vicenza\r\n', '../IMG/vicenza/eventi/cantante.png', '2018-09-17', '2018-09-17', 'Goran Bregovic circondato dai componenti della sua band durante un concerto', 2),
('eventi', 'Vivi Festival 2017: \'90 Wonderland Summer\' in Campo Marzo Eventi a Vicenza\r\nMarted&igrave 25 settembre alle 21 in Campo Marzo a Vicenza la rassegna \'VIVI Festival 2018\' ospiter&agrave il format \'90 Wonderland Summer Tour\' con il party di riferimento per gli amanti del mitico decennio. Una vera e propria ondata di musica e spettacolo, una festa ricca di animazione, dj, ballerini, personaggi fantastici degli anni \'90, gadget, effetti speciali e un super video show. Tutte le hit pop, rock e dance mixate a raffica, per ballare la musica che ha fatto la storia, i brani indimenticabili da cantare e i singoli che hanno scalato le classifiche di un periodo glorioso. All\'ingresso verr&agrave richiesto un contributo simbolico di 2 euro per il mantenimento della pulizia del parco e al fine di far vivere a tutti un evento in una fantastica area concerti completamente vigilata con servizio di sicurezza professionale.\r\nVivi Festival 2017: \"90 Wonderland Summer\" in Campo Marzo Eventi a Vicenza\r\nLOCATION. Per l\'occasione lo storico parco della citt&agrave verr&agrave trasformato in una strepitosa area concerti, allestendo un palco fisso che ospiter&agrave oltre 10000 persone. Ma non sar&agrave solo la musica l\'unica attrattiva: Street Food, Bar, Sport, Area Relax e molto altro.\r\n\r\n', 'Vivi Festival 2017: \"90 Wonderland Summer\" in Campo Marzo \r\n\r\n', '../IMG/vicenza/eventi/wonderland.jpg', '2018-09-25', '2018-09-27', 'wonderland 2017', 3),
('eventi', 'L\'evento musicale From Disco to Disco ritorna in Piazza delle Erbe a Vicenza con Quattro eventi in quattro mesi per riempire la vostra estate all\'insegna della buona musica, del divertimento e della cultura dove si esibiranno artisti e dj del panorama musicale e artistico Italiano.\r\n<br>\r\nIl programma:\r\n17 Settembre: Ricardo Baez, Dax DJ, Munstac, INIT6, Gaz b2b Mogoloko, Silicon Veronica live e Art Dealer.\r\n<br>\r\n18 Settembre: YOMBE live, Lorenzo BITW, Lamento, Prince Anizoba, Jake MoB, From Disco to Disco Sound System.\r\n<br>\r\n19 Settembre: German&ograve live, Ordinary Noise, Leslie Lello, Buffa doc dj, Zabriski live, Mustache Bros.\r\n<br>\r\n20 Settembre: Funk Rimini live, DJ Outback, Mursia, Ale Forte , BIONDA. \r\n\r\n<br>\r\nRicardo Baez &egrave un giovane talento italo-venezuelano cresciuto tra vinili blues, soul and jazz del padre saxofonista e le cassette di canzoni pop anni 80 usate dalla madre per insegnare danza moderna.\r\nIn pochi anni riesce a farsi notare grazie a uno stile del tutto personale, molto apprezzato per imprevedibilit&agrave, l\'empatia col pubblico e\' il suo elemento, qualcosa in cui crede oltre ogni definizione artistica.\r\nInfluenzato dalla house di chicago e la techno di detroit, il suo primo ep (THE MESSAGE) esce nel 2012 sull\'etichetta tedesca Toy Tonics, che riscuote un successo internazionale e lo candida come uno dei migliori giovani dj/produttori italiani da tenere sott\'occhio.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\"From Disco to Disco\" - musica dal vivo in Piazza delle Erbe\r\n', '../IMG/vicenza/eventi/disco.jpg', '2018-09-17', '2018-09-20', 'Scritta \"DISCO\"', 4),
('eventi', 'C\'&egrave da scoprire la magia del castello, in particolare quella del Castello di Thiene: dal 18 marzo riparte la stagione turistica e questa maestosa Villa Veneta torna ad aprire i suoi cancelli tutti i giorni (tranne il luned&igrave) per il piacere di chi la sceglier&agrave come meta di viaggio (&egrave possibile anche dormire in loco). Una visita al Castello di Thiene, con la guida, &egrave un vero salto indietro nel tempo. \r\n\r\n\"Come si viveva in una dimora del quindicesimo secolo? Quali erano le comodit&agrave di allora (che oggi sarebbero definite come scomodit&agrave)? Qui ci sono sale che testimoniano perfettamente il susseguirsi degli stili di vita secolo dopo secolo\" spiega Francesca di Thiene che con la sua famiglia mantiene la possibilit&agrave di fruire al pubblico questa dimora storica di propriet&agrave privata.\r\n\r\nIl Castello di Thiene &egrave, dal punto di vista storico ed architettonico, uno straordinario esempio di villa prepalladiana; di li a poco, nel 1500, proprio Andrea Palladio comincer&agrave a progettare le dimore arricchite con i colonnati centrali e le due barchesse laterali. Il Castello ha la peculiarit&agrave di associare, in un\'unica costruzione dalla pianta a T, le caratteristiche del castello appunto con quelle del palazzo veneziano ed in particolare il cosiddetto fondaco ossia abitazione e luogo di commercio. Interessante la somiglianza del Castello di Thiene con il Fondaco dei Turchi che si affaccia sul Canal Grande a Venezia.\r\n\r\nDa scoprire i saloni, il grande porticato, le scuderie ma, se siete fortunati e vi va un esperienza fuori dall\'ordinario, potrete provare a richiedere di vistare alcune aree normalmente chiuse al pubblico come le stanze private dove sono conservati oggetti d\'uso quotidiano, cappelli, capi di abbigliamento, ombrelli e accessori; oppure l\'ala est del Castello, anche questa normalmente chiusa, con due sale di rappresentanza realizzate alla fine del\'700, tutta da scoprire.\r\n\r\nRichiedendo invece la visita al parco si pu&ograve accedere a uno dei tre sotterranei realizzati da Francesco Porto, nei primi decenni del XVI secolo per raggiungere pi&ugrave agevolmente le propriet&agrave limitrofe. In questi luoghi si scopre cosa poteva produrre l\'ingegno umano: ad esempio la suggestiva la ghiacciaia, una grande cisterna a forma sferica, che serviva per la raccolta e conservazione del ghiaccio anche durante i mesi estivi. Semplificando era il frigorifero in uso a quei tempi.\r\n\r\n', 'Alla scoperta del Castello di Thiene, il fondaco Veneziano tra le colline del Vicentino', '../IMG/vicenza/eventi/castelloThiene.jpg', '2018-03-18', '2018-11-08', 'Facciata del castello di Thiene', 5),
('teatro', 'Saranno ventiquattro gli appuntamenti proposti quest\'anno, per la sua ventitreesima edizione, da Teatro Popolare Veneto, rassegna organizzata dal Comitato vicentino della FITA - Federazione Italiana Teatro Amatori - con il patrocinio di Provincia, RetEventi, Regione del Veneto e FITA Veneto e con la collaborazione di numerose Amministrazioni Comunali.\r\n\r\nRicca e variegata come sempre, la rassegna si prepara dunque a dare il via a questa sua nuova stagione, che inizier&agrave sabato 30 giugno e si concluder&agrave nel gennaio del 2019, coinvolgendo una ventina di compagnie, accomunate dal fatto di proporre, per l\'occasione, un teatro squisitamente popolare, nel senso pi&ugrave alto del termine, e veneto per produzione, autore o ambientazione. Il pubblico potr&agrave gustare un piacevole menu teatrale, formato da grandi classici, capolavori rivisitati, testi originali e lavori musicali, il tutto fra pizzichi di originalit&agrave, affondi nella tradizione e, immancabile, uno spazio pensato per le famiglie e i pi&ugrave piccoli.\r\n', '\"Teatro Popolare Veneto 2018\": spettacoli in tutto il vicentino', '../IMG/vicenza/teatro/compagniaTeatrale.jpg', '2018-06-30', '2019-01-26', 'compagnia teatrale sul palco', 6),
('teatro', 'Gioved&igrave 20 settembre alle 21 ci sar&agrave lo spettacolo di danza \"Dreams\" al Teatro Comunale di Thiene in viale Francesco Bassani 18 per la rassegna \"Thiene Danza 2016\". La compagnia \"Kronos\" di Schio con la direzione artistica di Ornella Pegoraro presenta un balletto tra danza classica e moderna in collaborazione con il corso di formazione professionale di Orizzonte Danza ASD Schio.\r\n\r\nLe coreografie saranno realizzate da Barbara Canal, Francesca Foscarini, Eleonora Pasin, Angelo Monaco e Natalia Roig. Saranno ben 17 le interpreti dello spettacolo. Questo lavoro artistico prende ispirazione da \'The Tempest\' di Shakespeare e dalla famosa frase pronunciata da Prospero: \'Noi siamo fatti della stessa sostanza di cui sono fatti i sogni, e nello spazio e nel tempo di un sogno &egrave racchiusa la nostra breve vita\'. Da queste premesse nasce \'Dreams\', una coreografia, che disegna un percorso fra sogno e realt&agrave, creando un varco attraverso il quale possiamo cogliere l\'essenza di noi stessi.\r\n', '\"Dreams\" al Teatro Comunale di Thiene\r\n', '../IMG/vicenza/teatro/ballerini.jpg', '2018-09-20', '2018-09-20', 'ballerine che eseguono uno spettacolo teatrale sul palco', 7),
('teatro', 'Il 6 e 7 Novembre il teatro comunale di Vicenza ospiter&agrave sul proprio palco Angela Finocchiaro.<br>\r\nUna commedia, una danza, un gioco, una festa, questo &egrave HO PERSO IL FILO.\r\n\r\nIn scena un\'Angela Finocchiaro inedita, che si mette alla prova in modo sorprendente con linguaggi espressivi mai affrontati prima, per raccontarci con la sua stralunata comicit&agrave e ironia un\'avventura straordinaria, emozionante e divertente al tempo stesso: quella di un\'eroina pasticciona e anticonvenzionale che parte per un viaggio, si perde, tentenna ma poi combatte fino all\'ultimo il suo spaventoso Minotauro.\r\n\r\nAngela si presenta in scena come un\'attrice stufa dei soliti ruoli: oggi sar&agrave Teseo, il mitico eroe che si infila nei meandri del Labirinto per combattere il terribile Minotauro. Affida agli spettatori un gomitolo enorme da cui dipende la sua vita e parte.\r\n\r\nUna volta entrata nel Labirinto, per&ograve, niente va come previsto. Viene assalita da strane Creature, un misto tra acrobati, danzatori e spiriti dispettosi, che la circondano, la disarmano, la frullano come fosse un frapp&egrave, e soprattutto tagliano il filo che le assicurava la via del ritorno.\r\n\r\nDisorientata, isolata, impaurita, Angela scopre di essere finita in un luogo magico ed eccentrico, un Labirinto, che si esprime con scritte e disegni: ora che ha perso il filo, il Labirinto le lancia un gioco, allegro e crudele per farglielo ritrovare.\r\n\r\nPasso dopo passo, una tappa dopo l\'altra, superando trabocchetti e prove di coraggio, con il pericolo incombente di un Minotauro affamato di carne umana, Angela viene costretta a svelare ansie, paure, ipocrisie che sono sue come del mondo di oggi e a riscoprire il senso di parole come coraggio e altruismo. Alla sua maniera naturalmente, come quando - di fronte ai ragazzi ateniesi che la implorano di salvarli dal Mostro che li sta gi&agrave sgranocchiando - promette firme e impegno sui social; o come quando &egrave sottoposta a una sfida paradossale dal vero Teseo, sceso di corsa dalle vette del mito, indignato perch&egrave la sua interprete difetta delle necessarie qualit&agrave eroiche; o quando deve fare del bene a una mendicante rom e decide di darle non una semplice elemosina ma di regalarle un\'intera spesa: se la porta dietro al supermercato ma, siccome la mendicante la irrita ignorando i prodotti bio per fiondarsi invece su merendine industriali e insaccati carichi di conservanti, finisce per farla arrestare.\r\n\r\n \r\n\r\nLo spettacolo vive del rapporto tra le parole comiche di un personaggio contemporaneo e la fisicit&agrave acrobatica, primitiva, arcaica delle Creature del Labirinto che agiscono, danzano, lottano con Angela provocandola come una gang di ragazzi di strada imprevedibili, spietati e seducenti.\r\n\r\nIl Labirinto &egrave un simbolo antico di nascita - morte - rinascita. Anche Angela, dopo aver toccato il fondo, riuscir&agrave a ritrovare il filo e con esso la forza per affrontare il Minotauro in un finale inatteso che si trasforma in una festa collettiva coinvolgente e liberatoria.', 'Angela Finocchiaro in \'Ho perso il filo\'', '../IMG/vicenza/teatro/finocchiaro.jpg', '2018-11-06', '2018-11-07', 'Angela Finocchiaro intenta a reggere un filo invisibile come immagine rappresentativa del suo spettacolo', 8),
('teatro', 'Il teatro comunale di Vicenza ospit&agrave; &ldquo;Jesus Christ Superstar&rdquo;, il Musical superpremiato di Massimo Romeo Piparo, nella versione originale di Andrew Lloyd Webber e Tim Rice, torna sul palco del Sistina. Protagonista dell&rsquo;opera rock pi&ugrave; amata di tutti i tempi, &egrave; ancora Ted Neeley, storico interprete del celebre successo cinematografico del 1973, che ha dato una impronta mitica e indelebile al ruolo di Ges&ugrave;. Accanto al mitico attore americano, un cast rinnovato e un imponente ensemble tra acrobati, trampolieri, mangiafuoco e ballerini coreografati da Roberto Croce, le scenografie di Giancarlo Muselli elaborate da Teresa Caruso e i costumi di Cecilia Betona. Interpretato in lingua originale ed eseguito interamente dal vivo con una grande Orchestra diretta dal Maestro Emanuele Friello, lo spettacolo prodotto da PeepArrow Entertainment &egrave; stato premiato con il prestigioso Musical World Award, ennesima conferma della grande professionalit&agrave; di questa ormai storica edizione italiana del capolavoro di Andrew Lloyd Webber e Tim Rice. L&rsquo;energia della musica rock, la spiritualit&agrave; come rivoluzione dell&rsquo;anima, il carisma di un personaggio cos&igrave; amato da diventare un mito e la consapevolezza di poter assistere ogni volta a un evento memorabile: non cambia il segreto del successo di Jesus Christ Superstar, uno spettacolo che offre al pubblico la passione di un uomo-simbolo capace di fare della spiritualit&agrave; la sua bandiera rivoluzionaria, ormai passato alla storia come uno dei Musical pi&ugrave; famosi e celebrati di sempre e che non subisce i segni del tempo, anzi rinnova il proprio messaggio di speranza e fiducia grazie a una storia dal valore universale che unisce in un unico entusiasmo spettatori di ogni et&agrave; e nazionalit&agrave;. Massimo Romeo Piparo e la sua squadra hanno saputo rendere al meglio sulla scena la forza trascinante di una storia universale in cui la musica diviene protagonista. A testimoniarlo numeri straordinari: 23 anni di successi, con pi&ugrave; di 1.600 rappresentazioni, 190 artisti che si sono alternati nel cast, oltre 1milione e 700mila spettatori, quattro diverse edizioni.', 'Jesus Christ Superstar. Il Musical!', '../IMG/vicenza/teatro/jesus.jpg', '2018-10-02', '2018-10-04', 'Locandina dello spettacolo con al centro il titolo \"Jesus Christ Superstar. Il Musical!\" e gli interpreti dello spettacolo', 9),
('eventi', '&ldquo;Cinema sotto le stelle&rdquo; ai Chiostri di Santa Corona: dal 24 giugno al 2 settembre saranno 71 serate al chiaro di luna. Tutte le sere un film diverso comprese le domeniche. Domenica 24 giugno ore 21.30 riparte &ldquo;Cinema sotto le Stelle&rdquo;, la tradizionale rassegna di cinema all&rsquo;aperto ai Chiostri di Santa Corona. Un appuntamento ormai entrato nelle aspettative dei vicentini, che propone una attenta selezione di film di sicuro gradimento, alternando proposte d&rsquo;essai a proiezioni dei migliori film usciti nell\'anno. Quest\'anno, in occasione della mostra in Basilica Palladiana su Basilica palladiana su David Chipperfield, il cinema Odeon, in collaborazione con la Citt&agrave; dell\'Architettura promotrice della mostra stessa, propone la visione di quattro film che portano alla coscienza, dallo sfondo in primo piano, il ruolo attivo dell\'architettura nel cinema e offrono una nuova prospettiva per riflettere sulle relazione tra avvenimenti, uomini e cose. Tutto in un ambiente d&rsquo;eccezione quali i suggestivi e centralissimi Chiostri di Santa Corona, con la possibilit&agrave; di accedere al vicino Cinema Odeon in caso di maltempo e, volendo, servirsi dell\'attiguo parcheggio di via Canove. Le proiezioni di giugno e luglio avranno inizio alle 21.30 e alle 21.15 nei mesi di agosto/settembre. Solo in caso di maltempo in atto, proiezioni e biglietteria saranno al Cinema Odeon. <br>\r\n<br>\r\nECCO ALCUNI FILM IN PROGRAMMA:<br>\r\nDom 24 ASSASSINIO SULL\'ORIENT EXPRESS di Kenneth Branagh<br>\r\nMer 4 UN POSTO TRANQUILLO di John Krasinski <br>\r\nMer 18 THE PLACE di Paolo Genovese <br>\r\nMer 25 IL TUTTOFARE di Valerio Attanasio <br>\r\nDom 29 NICO 1988 di Susanna Nicchiarelli <br>\r\n<br>\r\nBIGLIETTI<br> intero 6 euro, ridotto 5 euro. Abbonamento 5 ingressi 25 euro e abbonamento 10 ingressi &euro; 45 (apertura cassa 30 minuti prima della proiezione). Solo per i possessori di abbonamento 5/10 ingressi ci sar&agrave; una cassa dedicata. Prevendita: segreteria in Corso Palladio 176, Vicenza, dal luned&igrave; al venerd&igrave; dalle 9 alle 12 e dalle 15 alle 17.30.', 'CINEMA SOTTO LE STELLE 2018', '../IMG/vicenza/eventi/cinema.jpeg', '2018-06-24', '2018-09-02', 'Locandina dell\'evento con al centro la scritta \"CINEMA SOTTO LE STELLE 2018\" con sfondo una scena del fil \"assassinio sull\'orient express\"', 10);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`titolo`);

--
-- Indici per le tabelle `padova`
--
ALTER TABLE `padova`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `vicenza`
--
ALTER TABLE `vicenza`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titolo` (`titolo`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `padova`
--
ALTER TABLE `padova`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `vicenza`
--
ALTER TABLE `vicenza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
