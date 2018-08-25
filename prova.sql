-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 24, 2018 alle 16:18
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
-- Database: `prova`
--

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
(5, 'alberto.cherobin@gmail.com', 'qqqqqqqq', 'aaaa', 'sss'),
(6, 'hello@gmail.com', 'alberobrutto', 'Nadia', 'Biasia'),
(7, 'albechero@gmail.com', 'antonioemarco', 'Albe', 'Chero'),
(8, 'gg@gmail.com', 'alberobello', 'Antonio', 'Be'),
(9, 'proviamo@hh.com', 'harrypotter', 'Al', 'zzz'),
(11, 'aaaaa@jj.com', 'alberobello', 'Albe', 'Maronne'),
(12, 'hello@gmail.com2', 'alberobello', 'Antonio', 'Be'),
(13, 'hello@gmail.com3', 'alberobello', 'Antonio', 'sss'),
(14, 'gg2@gmail.com', 'alberobello', 'Antonio', 'E MARCO'),
(15, 'ciao12@gmil.com', 'alberobello', 'm arco', 'e luca'),
(16, 'hello222@gmail.com', 'alberobello', 'maremma', 'maiala'),
(17, 'gg333@gmail.com', 'alberobello', 'aa', 'sss'),
(18, 'hel22lo@gmail.com', 'alberobello', 'aa', 'sss'),
(19, 'alberto.cherobin2@gmail.com', 'alberobello', 'Antonio', 'Be'),
(20, 'alberto.c33herobin@gmail.com', 'alberobello', 'Antonio', 'sss'),
(21, 'alber33to.cherobin@gmail.com', 'alberobello', 'Nadia', 'Biasia'),
(22, 'hellwwwwo@gmail.com', 'alberobello', 'Al', 'sss'),
(23, 'ciao@gmil.comdddd', 'alberobello', 'aa', 'sss'),
(24, 'pinguino2000@ggg.com', 'alberobello', 'Antonio', 'Marco'),
(25, 'ciacccco@gmil.com', 'alberobello', 'Antonio', 'Be'),
(26, 'ciao@gmil.comsss', 'alberobello', 'Antonio', 'Be'),
(27, 'hasasdasello@gmail.com', 'alberobello', 'asdasd', 'asdasd'),
(28, 'ggsss@gmail.com', 'alberobello', 'Al', 'Be'),
(29, 'hellassaso@gmail.com', 'alberobello', 'asdasd', 'asas'),
(30, 'ciaasasao@gmil.com', 'alberobello', 'sasasa', 'assaasa'),
(31, 'helloasas@gmail.com', 'alberobello', 'asassa', 'assasa');

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
('eventi', 'Durante la manifestazione funzioner&agrave un ricchissimo stand gastronomico con gnocchi, bigoli, salsicce, braciole, gulasch, polenta, patate fritte, fagioli.. novit&agrave da assaggiare: risotto orzo e baccal&agrave e un strepitoso baccal&agrave alla vicentina.\r\nDa non dimenticare una ricchissima Pesca di Beneficenza (dalle ore 20:00) e l\'apertura straordinaria del &quotPRESTIGIOSO ECOMUSEO DELLA PAGLIA&quot.\r\nE\' disponibile servizio di bus navetta per parcheggio auto presso Istituto S. Antonio. Proporr&agrave sull\'area delle scuole elementari di Agugliaro una settimana di divertimento e aggregazione tra musica, ballo, cabaret e stand gastronomico la sagra di San Bortolo organizzata dalla Pro Loco, al via gioved&iacute alle 21 con la musica di Andrea live e l\'esibizione dei ballerini della scuola di ballo New Harmony Dance di Agugliaro. Venerd&iacute alle 21.15 vi sar&agrave il ritorno del duo Marco & Pippo con l\'esilarante spettacolo di cabaret \'Ist&agrave sul palco\', sabato tributo nazionale alla disco dance con la \'Shary band\', domenica si baller&agrave con \'Michele & Michele by Parioli\', luned&igrave sar&agrave di scena la trascinante afro music del dj Morgan, marted&igrave tocca all\'oorchestra \'Dego\', gioved&igrave gran finale con \'Michele & Michele by Parioli\'. \r\n', 'Una settimana di festa per la sagra di San Bortolo', '../IMG/vicenza/eventi/sanBortolo.jpg', '2018-08-16', '2018-08-23', 'Volantino sagra di San Bortolo con date ', 1),
('eventi', 'Vicenza in Festival: il rock balcanico di Goran Bregovic in piazza dei Signori Eventi a Vicenza\r\nLuned&igrave 17 settembre alle 21 in piazza dei Signori a Vicenza si terr&agrave il concerto \'If you don\'t go crazy, you are not normal\' di Goran Bregovic, accompagnato dalla \'Wedding & Funeral Band\' per la rassegna \'Vicenza in Festival 2017\'. Il repertorio spazier&agrave dai suoi grandi successi agli ultimi album (Alkohol e Champagne for Gypsies), con qualche anticipazione di brani del nuovo album in uscita il prossimo anno, accompagnato dalla sua storica formazione di fiati, percussioni e voci bulgare. Con le sue radici natie nei Balcani e la mente nel XXI secolo, le composizioni di Goran Bregovic mescolano le sonorit&agrave di una fanfara tzigana, le polifonie tradizionali bulgare, una chitarra elettrica e percussioni tradizionali con delle accentuazioni rock, dando vita ad una musica dai ritmi travolgenti e dalle sonorit&agrave fragorose, per due ore di pura energia.\r\nGORAN BREGOVIC: nato a Sarajevo da madre serba e padre croato, Goran Bregovic crea i suoi primi gruppi rock a sedici anni. La musical esercit&ograve un ruolo fondamentale nella sua vita come unica possibilit&agrave di poter esprimere pubblicamente il malcontento popolare senza rischiare di finire in galera. Per far piacere ai suoi genitori, Goran si impegna a proseguire i suoi studi di filosofia e sociologia, che lo avrebbero portato ad insegnare, se l\'enorme successo del suo primo disco non avesse deciso altrimenti. Seguono quindici anni con il suo gruppo White Button e tredici album venduti in 6 milioni di copie. Tour interminabili in cui Goran diventer&agrave l\'idolo della giovent&ugrave jugoslava. Alla fine degli anni \'80, Bregovic si libera del suo ruolo sfibrante di \'star\' e si isola in un \'ritiro dorato\' in una piccola casa sulla costa adriatica, un vecchio sogno d\'infanzia. Qui compone le musiche del terzo film di Emir Kusturica \'Il Tempo dei Gitani\'. Ma ben presto i primi disordini scoppiano in Yugoslavia e i due amici sono costretti ad abbandonare tutto e trasferirsi a Parigi. Alla sua origine gi&agrave mista, Goran ha aggiunto una moglie musulmana.\r\n\r\n\r\n', 'Il rock balcanico di Goran Bregovic in piazza dei Signori\r\n', '../IMG/vicenza/eventi/cantante.png', '2018-09-17', '2018-09-17', 'Goran Bregovic con la sua band', 2),
('eventi', 'Vivi Festival 2017: \'90 Wonderland Summer\' in Campo Marzo Eventi a Vicenza\r\nMarted&igrave 25 settembre alle 21 in Campo Marzo a Vicenza la rassegna \'VIVI Festival 2018\' ospiter&agrave il format \'90 Wonderland Summer Tour\' con il party di riferimento per gli amanti del mitico decennio. Una vera e propria ondata di musica e spettacolo, una festa ricca di animazione, dj, ballerini, personaggi fantastici degli anni \'90, gadget, effetti speciali e un super video show. Tutte le hit pop, rock e dance mixate a raffica, per ballare la musica che ha fatto la storia, i brani indimenticabili da cantare e i singoli che hanno scalato le classifiche di un periodo glorioso. All\'ingresso verr&agrave richiesto un contributo simbolico di 2 euro per il mantenimento della pulizia del parco e al fine di far vivere a tutti un evento in una fantastica area concerti completamente vigilata con servizio di sicurezza professionale.\r\nVivi Festival 2017: \"90 Wonderland Summer\" in Campo Marzo Eventi a Vicenza\r\nLOCATION. Per l\'occasione lo storico parco della citt&agrave verr&agrave trasformato in una strepitosa area concerti, allestendo un palco fisso che ospiter&agrave oltre 10000 persone. Ma non sar&agrave solo la musica l\'unica attrattiva: Street Food, Bar, Sport, Area Relax e molto altro.\r\n\r\n', 'Vivi Festival 2017: \"90 Wonderland Summer\" in Campo Marzo \r\n\r\n', '../IMG/vicenza/eventi/wonderland.jpg', '2018-09-25', '2018-09-27', 'wonderland 2017', 3),
('eventi', 'L\'evento musicale From Disco to Disco ritorna in Piazza delle Erbe a Vicenza con Quattro eventi in quattro mesi per riempire la vostra estate all\'insegna della buona musica, del divertimento e della cultura dove si esibiranno artisti e dj del panorama musicale e artistico Italiano.\r\n<br>\r\nIl programma:\r\n17 Settembre: Ricardo Baez, Dax DJ, Munstac, INIT6, Gaz b2b Mogoloko, Silicon Veronica live e Art Dealer.\r\n<br>\r\n18 Settembre: YOMBE live, Lorenzo BITW, Lamento, Prince Anizoba, Jake MoB, From Disco to Disco Sound System.\r\n<br>\r\n19 Settembre: German&ograve live, Ordinary Noise, Leslie Lello, Buffa doc dj, Zabriski live, Mustache Bros.\r\n<br>\r\n20 Settembre: Funk Rimini live, DJ Outback, Mursia, Ale Forte , BIONDA. \r\n\r\n<br>\r\nRicardo Baez è un giovane talento italo-venezuelano cresciuto tra vinili blues, soul and jazz del padre saxofonista e le cassette di canzoni pop anni 80 usate dalla madre per insegnare danza moderna.\r\nIn pochi anni riesce a farsi notare grazie a uno stile del tutto personale, molto apprezzato per imprevedibilità, l’empatia col pubblico e’ il suo elemento, qualcosa in cui crede oltre ogni definizione artistica.\r\nInfluenzato dalla house di chicago e la techno di detroit, il suo primo ep (THE MESSAGE) esce nel 2012 sull’etichetta tedesca Toy Tonics, che riscuote un successo internazionale e lo candida come uno dei migliori giovani dj/produttori italiani da tenere sott’occhio.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\"From Disco to Disco\" - musica dal vivo in Piazza delle Erbe\r\n', '../IMG/vicenza/eventi/disco.jpg', '2018-09-17', '2018-09-20', 'Scritta \"DISCO\"', 4);

--
-- Indici per le tabelle scaricate
--

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT per la tabella `vicenza`
--
ALTER TABLE `vicenza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
