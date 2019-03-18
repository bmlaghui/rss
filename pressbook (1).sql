-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 18 mars 2019 à 12:29
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pressbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `flux_id` int(11) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `guid` varchar(2048) DEFAULT NULL,
  `url` varchar(2048) DEFAULT NULL,
  `source` varchar(2048) DEFAULT NULL,
  `pubDate` datetime DEFAULT NULL,
  `flux_batch_id` int(11) DEFAULT NULL,
  `md5_hash` char(32) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `flux_id`, `titre`, `description`, `guid`, `url`, `source`, `pubDate`, `flux_batch_id`, `md5_hash`, `image`) VALUES
(1, 1, 'Ski alpinÂ : qui dÃ©trÃ´nera Shiffrin et HirscherÂ ?', 'in et Marcel Hirscher ont de nouveau Ã©crasÃ© la saison de ski alpin. Entre Petra Vlhova, Henrik Kri', 'https://www.estrepublicain.fr/sport/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', 'https://www.estrepublicain.fr/sport/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', NULL, '2019-03-18 09:03:00', NULL, NULL, ''),
(2, 1, 'Mort subite du sportifÂ : pourquoiÂ ?', 'Å“ur &amp; Recherche lance un appel aux dons pour financer un projet scientifique dâ€™utilitÃ© publi', 'https://www.estrepublicain.fr/sport/2019/03/18/mort-subite-du-sportif-pourquoi', 'https://www.estrepublicain.fr/sport/2019/03/18/mort-subite-du-sportif-pourquoi', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(3, 1, 'Ski alpin : avec le Vosgien ClÃ©ment NoÃ«l, grand Bleu sur Soldeu', ' irradiant Ã  Soldeu (Andorre), ClÃ©ment NoÃ«l a parfaitement conclu la saison de Coupe du monde en ', 'https://www.estrepublicain.fr/sport/2019/03/18/ski-alpin-avec-le-vosgien-clement-noel-grand-bleu-sur-soldeu', 'https://www.estrepublicain.fr/sport/2019/03/18/ski-alpin-avec-le-vosgien-clement-noel-grand-bleu-sur-soldeu', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(4, 1, 'CÃ©dric Vanoukia, miraculÃ© du football', ' ex-milieu de terrain dÃ©fensif passÃ© par Saint-Etienne en 2001, et CÃ©dric Vanoukia, dÃ©fenseur ro', 'https://www.estrepublicain.fr/sport/2019/03/18/cedric-vanoukia-miracule-du-football', 'https://www.estrepublicain.fr/sport/2019/03/18/cedric-vanoukia-miracule-du-football', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(5, 1, 'Formule 1 : la belle revanche de Valtteri Bottas Ã  Melbourne', ' fantomatique en 2018, Valtteri Bottas a ouvert la saison 2019 de Formule 1 par une victoire, ce dim', 'https://www.estrepublicain.fr/sport/2019/03/18/formule-1-la-belle-revanche-de-valtteri-bottas-a-melbourne', 'https://www.estrepublicain.fr/sport/2019/03/18/formule-1-la-belle-revanche-de-valtteri-bottas-a-melbourne', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(6, 1, 'Le Paris Saint-Germain calme la fronde', 'er match au Parc des Princes depuis lâ€™humiliation en Ligue des Champions contre Manchester United,', 'https://www.estrepublicain.fr/sport/2019/03/18/le-paris-saint-germain-calme-la-fronde', 'https://www.estrepublicain.fr/sport/2019/03/18/le-paris-saint-germain-calme-la-fronde', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(7, 1, 'Bruno GenesioÂ : Â«Â Garder son sang-froidÂ Â»', 'r de Lyon Bruno Genesio souligne lâ€™importance de voir son Ã©quipe revenir Ã  quatre points de Lill', 'https://www.estrepublicain.fr/sport/2019/03/18/bruno-genesio-garder-son-sang-froid', 'https://www.estrepublicain.fr/sport/2019/03/18/bruno-genesio-garder-son-sang-froid', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(8, 1, 'Biathlon : Antonin Guigonnat, la folie douce', ' vus au pied des tribunes, Antonin Guigonnat a plongÃ© dans leurs bras. Pierre et Pascale, Ã©mus, lâ', 'https://www.estrepublicain.fr/sport/2019/03/18/biathlon-antonin-guigonnat-la-folie-douce', 'https://www.estrepublicain.fr/sport/2019/03/18/biathlon-antonin-guigonnat-la-folie-douce', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(9, 1, 'Paris-Nice : Ã  22 ans, Egan Bernal lance un signal au peloton', ' 22 ans, le jeune Colombien Egan Bernal (Sky) a remportÃ© dimanche la 77e Ã©dition de Paris-Nice don', 'https://www.estrepublicain.fr/sport/2019/03/18/paris-nice-a-22-ans-egan-bernal-lance-un-signal-au-peloton', 'https://www.estrepublicain.fr/sport/2019/03/18/paris-nice-a-22-ans-egan-bernal-lance-un-signal-au-peloton', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(10, 1, 'BardetÂ : \"Je suis Ã  ma place\"', 'r sa premiÃ¨re grande course par Ã©tapes de la saison et Ã  lâ€™attaque ce dimanche, le leader de lâ', 'https://www.estrepublicain.fr/sport/2019/03/17/bardet-je-suis-a-ma-place', 'https://www.estrepublicain.fr/sport/2019/03/17/bardet-je-suis-a-ma-place', NULL, '2019-03-17 07:03:00', NULL, NULL, ''),
(11, 1, 'Rennes accroche Bordeaux pour la premiÃ¨re de Sousa', 'nnes se quittent sur un score de paritÃ© (1-1) malgrÃ© une belle prestation des Bordelais.\n         ', 'https://www.estrepublicain.fr/sport/2019/03/17/rennes-accroche-bordeaux-pour-la-premiere-de-sousa', 'https://www.estrepublicain.fr/sport/2019/03/17/rennes-accroche-bordeaux-pour-la-premiere-de-sousa', NULL, '2019-03-17 06:03:00', NULL, NULL, ''),
(12, 2, 'Ski alpinÂ : qui dÃ©trÃ´nera Shiffrin et HirscherÂ ?', 'in et Marcel Hirscher ont de nouveau Ã©crasÃ© la saison de ski alpin. Entre Petra Vlhova, Henrik Kri', 'https://www.republicain-lorrain.fr/sports/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', 'https://www.republicain-lorrain.fr/sports/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', NULL, '2019-03-18 09:03:00', NULL, NULL, ''),
(13, 2, 'Les rÃ©sultats sportifs de ce dimanche en Lorraine et ailleurs...', 'et, handball, rugby, volley, hockey... retrouvez au fil de la soirÃ©e tous les rÃ©sultats et classem', 'https://www.republicain-lorrain.fr/sports/2019/03/17/les-resultats-sportifs-de-ce-dimanche-en-lorraine-et-ailleurs', 'https://www.republicain-lorrain.fr/sports/2019/03/17/les-resultats-sportifs-de-ce-dimanche-en-lorraine-et-ailleurs', NULL, '2019-03-18 07:03:00', NULL, NULL, ''),
(14, 2, 'FC Metz : Marvin Gakpa Ã  fond la forme', 't (0-3), vendredi, le milieu de terrain du FC Metz Marvin Gakpa aligne des prestations de grande qua', 'https://www.republicain-lorrain.fr/sports/2019/03/18/fc-metz-marvin-gakpa-a-fond-la-forme', 'https://www.republicain-lorrain.fr/sports/2019/03/18/fc-metz-marvin-gakpa-a-fond-la-forme', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(15, 2, 'Ski alpin : avec le Vosgien ClÃ©ment NoÃ«l, grand Bleu sur Soldeu', ' irradiant Ã  Soldeu (Andorre), ClÃ©ment NoÃ«l a parfaitement conclu la saison de Coupe du monde en ', 'https://www.republicain-lorrain.fr/sports/2019/03/18/ski-alpin-avec-le-vosgien-clement-noel-grand-bleu-sur-soldeu', 'https://www.republicain-lorrain.fr/sports/2019/03/18/ski-alpin-avec-le-vosgien-clement-noel-grand-bleu-sur-soldeu', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(16, 2, 'Metz HandballÂ : câ€™est du vingt sur vingtÂ !', 'nt disposÃ© sans aucun problÃ¨me de Fleury dimanche aux ArÃ¨nes (45-28). Câ€™est le vingtiÃ¨me succÃ', 'https://www.republicain-lorrain.fr/sports/2019/03/18/metz-handball-c-est-du-vingt-sur-vingt', 'https://www.republicain-lorrain.fr/sports/2019/03/18/metz-handball-c-est-du-vingt-sur-vingt', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(17, 2, 'Anthony Parrico sâ€™impose en solitaire Ã  Clouange', 'nditions mÃ©tÃ©orologiques dÃ©favorables, le semi- marathon intercommunal de la VallÃ©e de lâ€™Orne ', 'https://www.republicain-lorrain.fr/sports/2019/03/18/anthony-parrico-s-impose-en-solitaire-a-clouange', 'https://www.republicain-lorrain.fr/sports/2019/03/18/anthony-parrico-s-impose-en-solitaire-a-clouange', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(18, 2, 'Metz Handball : Manon Houette et Marion Maubon, une paire dâ€™ailiÃ¨res Ã  la fÃªteÂ contre Fleury', 'ªte plusÂ ! Manon Houette a remis Ã§a. Comme contre Brest en Ligue des Champions dÃ©but mars (10 but', 'https://www.republicain-lorrain.fr/sports/2019/03/18/metz-handball-manon-houette-et-marion-maubon-une-paire-d-aillieres-a-la-fete-contre-fleury', 'https://www.republicain-lorrain.fr/sports/2019/03/18/metz-handball-manon-houette-et-marion-maubon-une-paire-d-aillieres-a-la-fete-contre-fleury', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(19, 2, 'FC Metz : Â«Â Ce jour-lÃ , jâ€™ai kidnappÃ© Sadio ManÃ©Â Â»', 'ien accordÃ© au site sportif sÃ©nÃ©galais Wiwsport.com , lâ€™ancien agent de Sadio ManÃ© a expliquÃ©', 'https://www.republicain-lorrain.fr/sports/2019/03/18/fc-metz-ce-jour-la-j-ai-kidnappe-sadio-mane', 'https://www.republicain-lorrain.fr/sports/2019/03/18/fc-metz-ce-jour-la-j-ai-kidnappe-sadio-mane', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(20, 2, 'Les Lorrains et le Grand Est ont brillÃ© Ã  domicile', 'ournÃ©e de ce 4e Â tour de CritÃ©rium fÃ©dÃ©ral Ã  Pont-Ã -Mousson a Ã©tÃ© moins faste pour les Lorr', 'https://www.republicain-lorrain.fr/sports/2019/03/18/les-lorrains-et-le-grand-est-ont-brille-a-domicile', 'https://www.republicain-lorrain.fr/sports/2019/03/18/les-lorrains-et-le-grand-est-ont-brille-a-domicile', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(21, 2, 'Tennis : lâ€™ASPTT Metz sâ€™en sort bien et Cattenom se surprend en championnat de Lorraine', 'ul face Ã  Thionville Moselle, les Messines se sont emparÃ©es de la premiÃ¨re place du championnat r', 'https://www.republicain-lorrain.fr/sports/2019/03/18/tennis-l-asptt-metz-s-en-sort-bien-et-cattenom-se-surprend-en-championnat-de-lorraine', 'https://www.republicain-lorrain.fr/sports/2019/03/18/tennis-l-asptt-metz-s-en-sort-bien-et-cattenom-se-surprend-en-championnat-de-lorraine', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(22, 2, 'Football : lâ€™ASNL nâ€™a plus aucune marge', 'â€™ASNL a manquÃ© une belle occasion de bonifier son probant succÃ¨s face Ã  Lorient, vendredi Ã  Gr', 'https://www.republicain-lorrain.fr/sports/2019/03/18/football-l-asnl-n-a-plus-aucune-marge', 'https://www.republicain-lorrain.fr/sports/2019/03/18/football-l-asnl-n-a-plus-aucune-marge', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(23, 6, 'Quiz. Dix questions sur le week-end sportif en Lorraine  ', '   \n       ...', 'https://www.vosgesmatin.fr/sport/2019/03/18/quiz-dix-questions-sur-le-week-end-sportif-en-lorraine', 'https://www.vosgesmatin.fr/sport/2019/03/18/quiz-dix-questions-sur-le-week-end-sportif-en-lorraine', NULL, '2019-03-18 10:03:00', NULL, NULL, ''),
(24, 6, 'Football : la belle affaire pour Thaon 2', 'n Ã©tait de mise pour les rÃ©servistes thaonnais suite au probant succÃ¨s acquis face Ã  Saint-DiÃ© ', 'https://www.vosgesmatin.fr/sport/2019/03/18/la-belle-affaire-pour-thaon-2', 'https://www.vosgesmatin.fr/sport/2019/03/18/la-belle-affaire-pour-thaon-2', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(25, 6, 'Marche athlÃ©tique : Beretta, Diniz, Mayer ponctuels au rendez-vous spinalien', 'e France, une meilleure performance mondiale de lâ€™annÃ©e pour Yohann DinizÂ : le spectacle Ã©tait ', 'https://www.vosgesmatin.fr/sport/2019/03/18/marche-athletique-beretta-diniz-mayer-ponctuels-au-rendez-vous-spinalien', 'https://www.vosgesmatin.fr/sport/2019/03/18/marche-athletique-beretta-diniz-mayer-ponctuels-au-rendez-vous-spinalien', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(26, 6, 'Course sur route : CÃ©dric Lefevre nâ€™a pas perdu son temps au semi-marathon de Thaon', 'un chrono de rÃ©fÃ©rence afin dâ€™aborder de futures Ã©chÃ©ances, CÃ©dric Lefevre a largement dominÃ', 'https://www.vosgesmatin.fr/sport/2019/03/18/course-sur-route-cedric-lefevre-n-a-pas-perdu-son-temps-au-semi-marathon-de-thaon', 'https://www.vosgesmatin.fr/sport/2019/03/18/course-sur-route-cedric-lefevre-n-a-pas-perdu-son-temps-au-semi-marathon-de-thaon', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(27, 6, 'Grosjean coupe la ligne dâ€™arrivÃ©e trois dixiÃ¨mes avant Jeudy', 'te derniÃ¨re spÃ©ciale qui a permis de dÃ©partager le vainqueur du 38e rallye de Franche-ComtÃ© et s', 'https://www.vosgesmatin.fr/sport/2019/03/18/grosjean-coupe-la-ligne-d-arrivee-trois-dixiemes-avant-jeudy', 'https://www.vosgesmatin.fr/sport/2019/03/18/grosjean-coupe-la-ligne-d-arrivee-trois-dixiemes-avant-jeudy', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(28, 6, 'Ski alpin : le VÃ©ternat ClÃ©ment NoÃ«l signe un nouveau podium Ã  Andorre', ' depuis sa victoire Ã  KitzbÃ¼hel, ClÃ©ment NoÃ«l a remportÃ© le slalom de Soldeu, lors de la clÃ´tu', 'https://www.vosgesmatin.fr/sport/2019/03/18/ski-alpin-le-veternat-clement-noel-signe-un-nouveau-podium-a-andorre', 'https://www.vosgesmatin.fr/sport/2019/03/18/ski-alpin-le-veternat-clement-noel-signe-un-nouveau-podium-a-andorre', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(29, 6, 'Benjamin ChoquertÂ : Â«Â Je nâ€™ai jamais sautÃ©Â Â»', 'x derniÃ¨res annÃ©es du semi-marathon nancÃ©ien, Benjamin Choquert (NAM) le retrouvait ce dimanche a', 'https://www.vosgesmatin.fr/sport/2019/03/18/benjamin-choquert-je-n-ai-jamais-saute', 'https://www.vosgesmatin.fr/sport/2019/03/18/benjamin-choquert-je-n-ai-jamais-saute', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(30, 6, 'Basket-ball : service minimum pour Mirecourt contre Saint-Max', ' une prestation de tout premier ordre, Mirecourt 2 a remportÃ© un match important. La rÃ©serve mirec', 'https://www.vosgesmatin.fr/sport/2019/03/18/basket-ball-service-minimum-pour-mirecourt-contre-saint-max', 'https://www.vosgesmatin.fr/sport/2019/03/18/basket-ball-service-minimum-pour-mirecourt-contre-saint-max', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(31, 6, 'Handball (N1 masculine) : aprÃ¨s une longue attente, Epinal sâ€™impose Ã  NÃ®mes et reste en vie', 'leur premier match de la saison Ã  NÃ®mes, les Spinaliens ont enfin inversÃ© une tendance bien nÃ©ga', 'https://www.vosgesmatin.fr/sport/2019/03/18/handball-(n1-masculine)-apres-une-longue-attente-epinal-s-impose-a-nimes-et-reste-en-vie', 'https://www.vosgesmatin.fr/sport/2019/03/18/handball-(n1-masculine)-apres-une-longue-attente-epinal-s-impose-a-nimes-et-reste-en-vie', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(32, 6, 'Volley-ball (N3 fÃ©minine) : le CAM Epinal de retour en tÃªte grÃ¢ce Ã  sa victoire Ã  SÃ©lestat (1-3)', 'ra diminuÃ©e, Noureddine Bounasser nâ€™a pas voulu prendre le moindre risque et a dÃ©cidÃ© de faire ', 'https://www.vosgesmatin.fr/sport/2019/03/18/volley-ball-(n3-feminine)-le-cam-epinal-de-retour-en-tete-grace-a-sa-victoire-a-selestat-(1-3)', 'https://www.vosgesmatin.fr/sport/2019/03/18/volley-ball-(n3-feminine)-le-cam-epinal-de-retour-en-tete-grace-a-sa-victoire-a-selestat-(1-3)', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(33, 6, 'Calendrier', 'on rendez-vous de 15 jours, Pascal ThiÃ©baut a fait coup double, comme en tÃ©moigne la frÃ©quentatio', 'https://www.vosgesmatin.fr/sport/2019/03/18/calendrier', 'https://www.vosgesmatin.fr/sport/2019/03/18/calendrier', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(34, 6, 'Trail : les Vosgiens Sarah Vieuille et Benjamin Polin sur le podium', 'Ã©rÃ´moise et son homologue spinalien ont rÃ©ussi ce dimanche des solides performances en prenant re', 'https://www.vosgesmatin.fr/sport/2019/03/18/trail-les-vosgiens-sarah-vieuille-et-benjamin-polin-sur-le-podium', 'https://www.vosgesmatin.fr/sport/2019/03/18/trail-les-vosgiens-sarah-vieuille-et-benjamin-polin-sur-le-podium', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(35, 6, 'Basket-ball : Le Val-dâ€™Ajol nâ€™a pas rÃ©ussi Ã  prendre sa revanche sur Vandoeuvre', '€™aller, les Vosgiens se sont une nouvelle fois inclinÃ©s face Ã  Vandoeuvre qui trÃ´ne Ã  la 4e Â p', 'https://www.vosgesmatin.fr/sport/2019/03/18/basket-ball-le-val-d-ajol-n-a-pas-reussi-a-prendre-sa-revanche-sur-vandoeuvre', 'https://www.vosgesmatin.fr/sport/2019/03/18/basket-ball-le-val-d-ajol-n-a-pas-reussi-a-prendre-sa-revanche-sur-vandoeuvre', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(36, 6, 'Volley-ball (N3 masculine) : GÃ©rardmer enfonce le clou en dominant Kingersheim', 'urs au match aller, les joueurs de JÃ©rÃ´me Jan avaient Ã  cÅ“ur de confirmer. Samedi soir dans leur', 'https://www.vosgesmatin.fr/sport/2019/03/18/volley-ball-(n3-masculine)-gerardmer-enfonce-le-clou-en-dominant-kingersheim', 'https://www.vosgesmatin.fr/sport/2019/03/18/volley-ball-(n3-masculine)-gerardmer-enfonce-le-clou-en-dominant-kingersheim', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(37, 6, 'Tennis de table (CritÃ©rium fÃ©dÃ©ral - N2) : doublÃ© vosgien au Creusot grÃ¢ce Ã  Nathan Mathis et Arthur Tack', 'oire a souri aux pongistes du dÃ©partement. En Nationale 2, chez les 11 ans, le DÃ©odatien Arthur Ta', 'https://www.vosgesmatin.fr/sport/2019/03/18/tennis-de-table-(criterium-federal-n2)-double-vosgien-au-creusot-grace-a-nathan-mathis-et-arthur-tack', 'https://www.vosgesmatin.fr/sport/2019/03/18/tennis-de-table-(criterium-federal-n2)-double-vosgien-au-creusot-grace-a-nathan-mathis-et-arthur-tack', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(38, 6, 'Football : face Ã  Golbey, Amanvillers pousse mais sâ€™incline logiquement', 'plutÃ´t enlevÃ©, les GolbÃ©ens ont parfois souffert et mÃªme Ã©tÃ© menÃ©s 1-0 Ã  lâ€™heure de jeu. M', 'https://www.vosgesmatin.fr/sport/2019/03/18/football-face-a-golbey-amanvillers-pousse-mais-s-incline-logiquement', 'https://www.vosgesmatin.fr/sport/2019/03/18/football-face-a-golbey-amanvillers-pousse-mais-s-incline-logiquement', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(39, 6, 'Danse sur glace : quatre Spinaliennes dÃ©jÃ  qualifiÃ©es pour la finale', ' la deuxiÃ¨me manche du Tournoi interrÃ©gional de division 2 qui se dÃ©roulait Ã  la patinoire dâ€™E', 'https://www.vosgesmatin.fr/sport/2019/03/18/danse-sur-glace-quatre-spinaliennes-deja-qualifiees-pour-la-finale', 'https://www.vosgesmatin.fr/sport/2019/03/18/danse-sur-glace-quatre-spinaliennes-deja-qualifiees-pour-la-finale', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(40, 6, 'AthlÃ©tisme : Monmessin, Grunenwald et Mielle en or Ã  LiÃ©vin', 'lÃ©gation dâ€™athlÃ¨tes vosgiens a pris part ce week-end aux championnats de France masters qui se d', 'https://www.vosgesmatin.fr/sport/2019/03/18/athletisme-monmessin-grunenwald-et-mielle-en-or-a-lievin', 'https://www.vosgesmatin.fr/sport/2019/03/18/athletisme-monmessin-grunenwald-et-mielle-en-or-a-lievin', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(41, 6, 'CanoÃ«-kayak : Une bonne rÃ©pÃ©tition pour GESN avant la manche de N1 de Cergy', 'ne semaine de la deuxiÃ¨me manche de National 1 de Cergy, GESN avait dÃ©lÃ©guÃ© huit bateaux du cÃ´t', 'https://www.vosgesmatin.fr/sport/2019/03/18/canoe-kayak-une-bonne-repetition-pour-gesn-avant-la-manche-de-n1-de-cergy', 'https://www.vosgesmatin.fr/sport/2019/03/18/canoe-kayak-une-bonne-repetition-pour-gesn-avant-la-manche-de-n1-de-cergy', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(42, 6, 'Ski de fond : Adrien Backshceider nâ€™avait pas les armes', 'enthÃ¨se sur la coupe du monde des longues distances, Adrien Backscheider retrouvait la Coupe du mon', 'https://www.vosgesmatin.fr/sport/2019/03/18/ski-de-fond-adrien-backshceider-n-avait-pas-les-armes', 'https://www.vosgesmatin.fr/sport/2019/03/18/ski-de-fond-adrien-backshceider-n-avait-pas-les-armes', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(43, 7, 'Courses de LA WANTZENAU : Dimanche 17 mars 2019', '   \n       ...', 'https://www.dna.fr/sports/2019/03/18/courses-de-la-wantzenau-dimanche-17-mars-2019', 'https://www.dna.fr/sports/2019/03/18/courses-de-la-wantzenau-dimanche-17-mars-2019', NULL, '2019-03-18 10:03:00', NULL, NULL, ''),
(44, 7, 'Ski alpinÂ : qui dÃ©trÃ´nera Shiffrin et HirscherÂ ?', 'in et Marcel Hirscher ont de nouveau Ã©crasÃ© la saison de ski alpin. Entre Petra Vlhova, Henrik Kri', 'https://www.dna.fr/actualite/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', 'https://www.dna.fr/actualite/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', NULL, '2019-03-18 09:03:00', NULL, NULL, ''),
(45, 7, 'PSG: dÃ©but de rÃ©conciliationÂ avec ses supporters?', ' vers le grand pardonÂ ? Le PSG, dans son premier match Ã  domicile post-Manchester, a dominÃ© Marse', 'https://www.dna.fr/sports/2019/03/18/debut-de-reconciliation', 'https://www.dna.fr/sports/2019/03/18/debut-de-reconciliation', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(46, 7, 'Spehler ImpÃ©rial', 'saison de SÃ©bastien Spehler (PCA - CSL Neuf-Brisach) ne pouvait mieux commencer. Hier, il sâ€™est i', 'https://www.dna.fr/sports/2019/03/18/spehler-imperial', 'https://www.dna.fr/sports/2019/03/18/spehler-imperial', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(47, 7, 'Ils se sont fait plaisirâ€¦', 'astien Andres Ã©tait une nouvelle fois intouchable, hier, Lan Kajtner, deuxiÃ¨me, a signÃ© son meill', 'https://www.dna.fr/sports/2019/03/18/ils-se-sont-fait-plaisir', 'https://www.dna.fr/sports/2019/03/18/ils-se-sont-fait-plaisir', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(48, 7, 'Quand le ridicule ne tue pas', 'e Tournoi encore manquÃ© et Ã  six mois de la Coupe du monde, le XV de France est au plus bas. Lâ€™Ã', 'https://www.dna.fr/sports/2019/03/18/quand-le-ridicule-ne-tue-pas', 'https://www.dna.fr/sports/2019/03/18/quand-le-ridicule-ne-tue-pas', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(49, 7, 'Ciara ne fait plus de cadeau', 'e lâ€™ASPTT Mulhouse, Ã  lâ€™instar de la centrale Ciara Michel, ont fait ce quâ€™il fallait pour fa', 'https://www.dna.fr/sports/2019/03/18/ciara-ne-fait-plus-de-cadeau', 'https://www.dna.fr/sports/2019/03/18/ciara-ne-fait-plus-de-cadeau', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(50, 7, 'Un dernier espoirÂ ?', 'ed Star Mulhouse a dÃ©finitivement confortÃ© sa 3e Â place dans sa poule du TopÂ 12, lâ€™ASPTT Stras', 'https://www.dna.fr/sports/2019/03/18/un-dernier-espoir', 'https://www.dna.fr/sports/2019/03/18/un-dernier-espoir', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(51, 7, 'Lâ€™ASVS prend sa revanche', 'h aller dans le Haut-Rhin par cette Ã©quipe dâ€™Ensisheim, lâ€™AS VallÃ©e de la Sauer a pris sa reva', 'https://www.dna.fr/sports/2019/03/18/l-asvs-prend-sa-revanche', 'https://www.dna.fr/sports/2019/03/18/l-asvs-prend-sa-revanche', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(52, 7, 'Kingersheim en grÃ¨ve, Altkirch en finale', 'st qualifiÃ© hier pour la finale de la Coupe dâ€™Alsace sans combattre. Les joueuses de Kingersheim ', 'https://www.dna.fr/sports/2019/03/18/kingersheim-en-greve-altkirch-en-finale', 'https://www.dna.fr/sports/2019/03/18/kingersheim-en-greve-altkirch-en-finale', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(53, 7, 'Grosdidier pour finir', 'er a remportÃ©, hier au Grand Ballon, son troisiÃ¨me Grand Prix de la saison. Il devance deux autres', 'https://www.dna.fr/sports/2019/03/18/grosdidier-pour-finir', 'https://www.dna.fr/sports/2019/03/18/grosdidier-pour-finir', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(54, 7, 'La revanche de Bottas', 't un plat qui se mange froidÂ : qui de mieux quâ€™un Finlandais pour le savoirÂ ? PrivÃ© de victoire', 'https://www.dna.fr/sports/2019/03/18/la-revanche-de-bottas', 'https://www.dna.fr/sports/2019/03/18/la-revanche-de-bottas', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(55, 7, 'Nazon pointe son nez', 'alien MattÃ©o Nazon sâ€™est imposÃ© hier Ã  lâ€™arrivÃ©e Ã  Erstein, devant un autre junior, le Luxe', 'https://www.dna.fr/sports/2019/03/18/nazon-pointe-son-nez', 'https://www.dna.fr/sports/2019/03/18/nazon-pointe-son-nez', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(56, 7, 'Mulhouse en finale', 'ergy-Pontoise au terme dâ€™un match maÃ®trisÃ©, la troupe de Jean-Luc Monschau a oblitÃ©rÃ© son bill', 'https://www.dna.fr/sports/2019/03/18/mulhouse-en-finale', 'https://www.dna.fr/sports/2019/03/18/mulhouse-en-finale', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(57, 7, 'Bernal, le futur â€œgrandâ€, sâ€™impose Ã  son aÃ®nÃ© Quintana', '€™a dÃ©signÃ© comme futur vainqueur du Tour de France mais, pour lâ€™heure, le jeune colombien Egan ', 'https://www.dna.fr/sports/2019/03/18/bernal-le-futur-grand-s-impose-a-son-aine-quintana', 'https://www.dna.fr/sports/2019/03/18/bernal-le-futur-grand-s-impose-a-son-aine-quintana', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(58, 7, 'Â«Â On a envoyÃ© un signalÂ Â»', '©faite Ã  MÃ©rignac, les joueuses dâ€™Achenheim/Truchtersheim avaient Ã  cÅ“ur de rÃ©agir. Elles lâ€', 'https://www.dna.fr/sports/2019/03/18/on-a-envoye-un-signal', 'https://www.dna.fr/sports/2019/03/18/on-a-envoye-un-signal', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(59, 8, 'Ski alpinÂ : qui dÃ©trÃ´nera Shiffrin et HirscherÂ ?', 'in et Marcel Hirscher ont de nouveau Ã©crasÃ© la saison de ski alpin. Entre Petra Vlhova, Henrik Kri', 'https://www.lalsace.fr/actualite/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', 'https://www.lalsace.fr/actualite/2019/03/18/ski-alpin-qui-detronera-shiffrin-et-hirscher', NULL, '2019-03-18 09:03:00', NULL, NULL, ''),
(60, 8, 'Le FCM plaÃ®t aux dames', 'rnoi multichances destinÃ© aux 3e Â sÃ©rie dames a connu un succÃ¨s qui en appelle dâ€™autres, ce we', 'https://www.lalsace.fr/sport/2019/03/18/le-fcm-plait-aux-dames', 'https://www.lalsace.fr/sport/2019/03/18/le-fcm-plait-aux-dames', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(61, 8, 'Bonne opÃ©ration pour Lyon', 'a 2e place est relancÃ©eÂ : Lyon revient Ã  4 points de Lille, dauphin de Ligue 1, aprÃ¨s sa victoir', 'https://www.lalsace.fr/sport/2019/03/18/bonne-operation-pour-lyon', 'https://www.lalsace.fr/sport/2019/03/18/bonne-operation-pour-lyon', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(62, 8, 'Bottas dÃ©marre par une revanche', 't un plat qui se mange froid, qui de mieux quâ€™un Finlandais pour le savoirÂ ? PrivÃ© de victoire e', 'https://www.lalsace.fr/sport/2019/03/18/bottas-demarre-par-une-revanche', 'https://www.lalsace.fr/sport/2019/03/18/bottas-demarre-par-une-revanche', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(63, 8, 'Un dernier espoirÂ ?', 'ed Star Mulhouse a dÃ©finitivement confortÃ© sa 3e place dans sa poule du TopÂ 12, lâ€™ASPTT Strasbo', 'https://www.lalsace.fr/sport/2019/03/18/un-dernier-espoir', 'https://www.lalsace.fr/sport/2019/03/18/un-dernier-espoir', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(64, 8, 'Racing, un nul de paradoxes', 'e VAR et une maladresse de derniÃ¨re minute, les Strasbourgeois ont ratÃ© une trÃ¨s belle occasion d', 'https://www.lalsace.fr/sport/2019/03/18/racing-un-nul-de-paradoxes-wblz', 'https://www.lalsace.fr/sport/2019/03/18/racing-un-nul-de-paradoxes-wblz', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(65, 8, 'Grosdidier pour finir', 'er a remportÃ©, hier au Grand Ballon, le Grand Prix des CommerÃ§ants, son troisiÃ¨me GP de la saison', 'https://www.lalsace.fr/sport/2019/03/18/grosdidier-pour-finir', 'https://www.lalsace.fr/sport/2019/03/18/grosdidier-pour-finir', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(66, 8, 'Le ridicule rend-il plus fortÂ ?', 'e Tournoi encore manquÃ© et Ã  six mois de la Coupe du monde, le XV de France est au plus bas. Son r', 'https://www.lalsace.fr/sport/2019/03/18/le-ridicule-rend-il-plus-fort', 'https://www.lalsace.fr/sport/2019/03/18/le-ridicule-rend-il-plus-fort', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(67, 8, 'Ils se sont fait plaisirâ€¦', 'astien Andres Ã©tait une nouvelle fois intouchable hier au Grand Prix-CrÃ©dit Mutuel au Schnepfenrie', 'https://www.lalsace.fr/sport/2019/03/18/ils-se-sont-fait-plaisir', 'https://www.lalsace.fr/sport/2019/03/18/ils-se-sont-fait-plaisir', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(68, 8, 'Bon pour le moralÂ !', 'un succÃ¨s Ã  lâ€™extÃ©rieur, le Mulhouse Water-Polo sâ€™est imposÃ© face au Racing Club de France (', 'https://www.lalsace.fr/sport/2019/03/18/bon-pour-le-moral', 'https://www.lalsace.fr/sport/2019/03/18/bon-pour-le-moral', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(69, 8, 'Antonin Guigonnat, la folie douce', 'ntonin Guigonnat a dÃ©crochÃ© lâ€™argent mondial Ã  Ã–stersund hier lors de la mass start.\n         ', 'https://www.lalsace.fr/sport/2019/03/18/guigonnat-la-folie-douce', 'https://www.lalsace.fr/sport/2019/03/18/guigonnat-la-folie-douce', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(70, 8, 'NoÃ«l sâ€™offre un dernier cadeau', '©ment NoÃ«l a remportÃ© le slalom des finales de Coupe du monde de Soldeu (Andorre) hier, la derniÃ¨', 'https://www.lalsace.fr/sport/2019/03/18/noel-s-offre-un-dernier-cadeau', 'https://www.lalsace.fr/sport/2019/03/18/noel-s-offre-un-dernier-cadeau', NULL, '2019-03-18 05:03:00', NULL, NULL, ''),
(71, 8, 'AzÃ©nor Philip au plaisir', ' premiÃ¨re et elle est passÃ©e entre les gouttes. Le Parc des Eaux Vives dâ€™Huningue a accueilli sa', 'https://www.lalsace.fr/sport/2019/03/18/azenor-philip-au-plaisir', 'https://www.lalsace.fr/sport/2019/03/18/azenor-philip-au-plaisir', NULL, '2019-03-18 05:03:00', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `article_sport`
--

CREATE TABLE `article_sport` (
  `article_id` int(11) DEFAULT NULL,
  `sport_id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`id`, `nom`, `image`) VALUES
(1, 'ESPERANCE SPORTIVE DE TUNIS', 'est.png'),
(2, 'PARIS SAINT-GERMAIN', 'psg.png');

-- --------------------------------------------------------

--
-- Structure de la table `club_sport`
--

CREATE TABLE `club_sport` (
  `club_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `flux`
--

CREATE TABLE `flux` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ttl` int(11) NOT NULL DEFAULT '3600',
  `actif` tinyint(1) DEFAULT '1',
  `dateSucces` datetime DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `flux`
--

INSERT INTO `flux` (`id`, `title`, `url`, `ttl`, `actif`, `dateSucces`, `image`) VALUES
(1, 'L’Est-Républicain', 'https://www.estrepublicain.fr/sport/rss', 3600, 1, '2019-01-17 03:00:29', 'er.jpg'),
(2, 'Le Républicain Lorrain', 'https://www.republicain-lorrain.fr/sports/rss', 3600, 1, '2019-01-15 16:32:13', 'rl.png'),
(6, 'Vosges Matin', 'https://www.vosgesmatin.fr/sport/sport-lorrain/rss', 3600, 1, '2019-01-15 16:32:13', 'v.jpg'),
(7, 'les Dernieres nouvelles d\'Alsace', 'https://www.dna.fr/sports/rss', 3600, 1, '2019-01-15 16:32:13', 'dna.png'),
(8, 'L\'Alsace le Pays', 'https://www.lalsace.fr/sport/rss', 3600, 1, '2019-01-15 16:32:13', 'a.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `flux_batch`
--

CREATE TABLE `flux_batch` (
  `id` int(11) NOT NULL,
  `flux_id` int(11) NOT NULL,
  `startedAt` datetime NOT NULL,
  `endedAt` datetime NOT NULL,
  `succes` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `flux_batch`
--

INSERT INTO `flux_batch` (`id`, `flux_id`, `startedAt`, `endedAt`, `succes`) VALUES
(1, 1, '2019-01-01 00:00:00', '2019-01-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `flux_sport`
--

CREATE TABLE `flux_sport` (
  `flux_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `flux_sport`
--

INSERT INTO `flux_sport` (`flux_id`, `sport_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`id`, `nom`, `icon`, `image`) VALUES
(1, 'Football', 'f2', 'soccer.jpg'),
(2, 'Rugby', 's7', 'football.jpg'),
(3, 'Cricket', 'c3', 'cricket1.jpg'),
(4, 'Bodybuild', 'g2', 'body.jpg'),
(5, 'Surfing', 'surf', 'p-surfing.jpg'),
(6, 'Boxing', 's3', 'boxing.jpg'),
(7, 'Yoga', 'y4', 'yoga.jpg'),
(8, 'Tennis', 'S12', 'tennis.jpg'),
(9, 'Cyclings', 'cy1', 'cycle.jpg'),
(10, 'Swimming', 'swimming', 'swimming.jpg'),
(11, 'Athletics', 'y1', 'athletics.jpg'),
(12, 'Basketball', 'S13', 'basketball.jpg'),
(13, 'Slalom', 's7', 'canoe-slalom.jpg'),
(14, 'Golf', 's9', 'golf.jpg'),
(15, 'hockey', 'S15', 'hockey.jpg'),
(16, 'volleyball', 'S5', 'volley.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_flux_md5_hash` (`md5_hash`) USING BTREE,
  ADD KEY `flux_id` (`flux_id`),
  ADD KEY `flux_batch_id` (`flux_batch_id`);

--
-- Index pour la table `article_sport`
--
ALTER TABLE `article_sport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Index pour la table `club_sport`
--
ALTER TABLE `club_sport`
  ADD PRIMARY KEY (`club_id`,`sport_id`);

--
-- Index pour la table `flux`
--
ALTER TABLE `flux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `flux_batch`
--
ALTER TABLE `flux_batch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flux_id` (`flux_id`);

--
-- Index pour la table `flux_sport`
--
ALTER TABLE `flux_sport`
  ADD PRIMARY KEY (`flux_id`,`sport_id`),
  ADD KEY `sport_id` (`sport_id`);

--
-- Index pour la table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `article_sport`
--
ALTER TABLE `article_sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `flux`
--
ALTER TABLE `flux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `flux_batch`
--
ALTER TABLE `flux_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`flux_id`) REFERENCES `flux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`flux_batch_id`) REFERENCES `flux_batch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `flux_batch`
--
ALTER TABLE `flux_batch`
  ADD CONSTRAINT `flux_batch_ibfk_1` FOREIGN KEY (`flux_id`) REFERENCES `flux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `flux_sport`
--
ALTER TABLE `flux_sport`
  ADD CONSTRAINT `flux_sport_ibfk_1` FOREIGN KEY (`flux_id`) REFERENCES `flux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flux_sport_ibfk_2` FOREIGN KEY (`sport_id`) REFERENCES `sport` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
