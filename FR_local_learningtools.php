<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local plugin "Learning Tools" - string file.
 *
 * @package   local_learningtools
 * @copyright bdecent GmbH 2021
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined("MOODLE_INTERNAL") || die();

$string['pluginname'] = "Outils d\'apprentissage";
$string['learningtoolproducts'] = "Les outils d\'apprentissage ";
$string['products'] = "Products";
$string['learningtools'] = "Outils d\'apprentissage";
$string['general'] = 'Général';
$string['topic'] = 'Section {$a}';
$string['learningtoolsltool'] = "Gérer les outils d\'apprentissage";
$string['notificationdisappertitle'] = "Suppression de la notification";
$string['notificationdisapperdesc'] = "Utilisez cette option pour définir le temps de disparition de la notification entre chaque enregistrement de la notification par Learning Tools. La valeur est en millisecondes (c'est-à-dire 1 seconde = 1000 millisecondes)";
$string['popout'] = "Faire disparaître";
$string['viewreports'] = "Afficher les rapports";
$string['learningtoolssettings'] = "Réglages des outils d\'apprentissage ";
$string['ltoolsusermenu'] = "Afficher les outils d\'apprentissage dans les éléments du menu de l\'utilisateur";
$string['ltoolusermenu_help'] = "Liste des menus disponibles à afficher dans le menu utilisateur. Copiez et collez le chemin d\'accès aux outils de menu ci-dessous dans les éléments du menu utilisateur.  Allez dans Présentation->Themes->Réglages theme dans les éléments du menu utilisateur. ";

$string['coursenotes'] = "Prise de notes de cours";
$string['addbookmark'] = "Ajouter un marque-page";
$string['createnote'] = "Créer une prise note";


$string['bookmarksusermenu'] = "Pour afficher l\'outil marques-pages depuis les éléments du menu utilisateur (customusermenuitems)";
$string['bookmarksusermenu_help'] = "bookmarks,local_learningtools|/local/learningtools/ltool/bookmarks/list.php|b/bookmark-new";


$string['notesusermenu'] = "Afficher l\'outil de prise de notes dans le menu utilisateur";
$string['notesusermenu_help'] = "notes,local_learningtools|/local/learningtools/ltool/note/list.php|i/edit";


// Bookmarks strings.
$string['bookmarks'] = "marques-pages";
$string['managebookmarks'] = "Gérer les accès aux marques-pages des utilisateurs";

$string['eventltbookmarkscreated'] = "Création de marques-pages d\'outils d\'apprentissage";
$string['eventltbookmarksviewed'] = "marques-pages d\'outils d\'apprentissage consultés";
$string['eventltbookmarksdeleted'] = "marques-pages d\'outils d\'apprentissage supprimés";

// Note event strings.
$string['eventltnotecreated'] = "Prise de notes d\'outils d\'apprentissage créées";
$string['eventltnotedeleted'] = "Prise de notes d\'outils d\'apprentissage supprimées";
$string['eventltnoteviewed'] = "Prise de notes d\'outils d\'apprentissage consultées";
$string['eventltnoteedited'] = "Prise de notes d\'outils d\'apprentissage modifiées";


$string['bookicon'] = "Icon";
$string['bookmarkinfo'] = "Prise de notes d\'outils d\'apprentissage éditées";
$string['time'] = "Temps";
$string['delete'] = "Supprimer";
$string['view'] = "Voir les marques-pages";
$string['allcourses'] = "Tous les cours";
$string['sortbydate'] = "Trier par date";
$string['sortbycourse'] = "Trier par cours";
$string['viewcourse'] = "Afficher le cours";
$string['viewactivity'] = "Afficher l\'activité";
$string['deletemessage'] = 'DSupprimer le message';
$string['deletemsgcheckfull'] = 'Êtes-vous absolument sûr de vouloir supprimer complètement les marques-pages, y compris leurs données et celles des autres marques-pages ?';
$string['deletednotmessage'] = 'Impossible de supprimer les marques-pages !';
$string['successdeletemessage'] = "Suppression réussie";
$string['ltbookmarks:manageltbookmarks'] = "L\'utilisateur accède à l\'outil Bookmarks";
$string['bookmarkstoolcategory'] = "Outil Bookmarks";
$string['coursebookmarks'] = "marques-pages de cours";
$string['successbookmarkmessage'] = "Cette page a été marquée d\'un marque-page avec succès et vous pouvez voir les marques-pages dans votre profil > outils d\'apprentissage > marques-pages";
$string['removebookmarkmessage'] = "Ce marque-page de page a été supprimé et vous pouvez voir les marques-pages dans le menu profil > outils d\'apprentissage / marques-pages";

// Notes strings.

$string['note'] = "Prise de notes";
$string['notes'] = "Prise de notes";
$string['managenote'] = "Gérer l\'accès aux prises de notes des utilisateurs";
$string['ltnote:manageltnote'] = "L\'utilisateur accède à l\'outil Prise de note";
$string['newnote'] = "Prendre des notes";
$string['allcourses'] = "Tous les cours";
$string['sortbydate'] = "Trier par date";
$string['sortbycourse'] = "Trier par cours";
$string['sortbyactivity'] = "Trier par activité";
$string['coursenotes'] = "Prise de notes de cours";
$string['deletemessage'] = 'Supprimer le message';
$string['editnote'] = 'Editer la note';

$string['deletemsgcheckfullbookmarks'] = "Êtes-vous absolument sûr de vouloir supprimer complètement les marques-pages, y compris son nom et ses données ?";

$string['deletemsgcheckfull'] = 'Êtes-vous absolument sûr de vouloir supprimer complètement la prise de note, y compris son texte et ses données ?';

$string['deletednotmessage'] = 'Impossible de supprimer la prise de note !';
$string['successdeletemessage'] = "Modifié avec succès";
$string['successeditnote'] = "Successfully edited";
$string['allactiviies'] = "Toutes les activités";
$string['successnotemessage'] = "Prise de notes ajoutées avec succès et vous pouvez voir la note sous profil outils d\'apprentissage  note";
$string['viewownbookmarks'] = "Voir ses propres marque-pages";
$string['viewchildbookmarks'] = "Afficher les sous-marques-pages";
$string['pagenotes'] = "Prise de notes de page";
$string['courseparticipants'] = "Participants au cours";
$string['viewbookmarks'] = "Afficher les marques-pages";
$string['viewpage'] = "Afficher la page";