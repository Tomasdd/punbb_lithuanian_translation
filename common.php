<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'lt',

// Number formatting
'lang_decimal_point'	=>	',',
'lang_thousands_sep'	=>	'',

// Notices
'Bad request'				=>	'Neteisinga užklausa. Nuoroda kuria jūs atėjote yra neteisinga arba pasenusi.', //'Bad request. The link you followed is incorrect or outdated.',
'No view'					=>	'Jūs neturite teisės peržiūrėti šiuos forumus',//'You do not have permission to view these forums.',
'No permission'				=>	'Jūs neturite teisės peržiūrėti šį puslapį', //'You do not have permission to access this page.',
'CSRF token mismatch'		=>	'Nepavyko patvirtinti saugumo kodo. Galima to priežastis, kad nuo puslapio atsivertimo praėjo perdaug laiko. Jei norite tęsti, paspauskite "Patvirtinti" mygtuką, kitu atveju spauskite "Atšaukti" ir grįšite į prieš tai buvusį puslapį.', //'Unable to confirm security token. A likely cause for this is that some time passed between when you first entered the page and when you submitted a form or clicked a link. If that is the case and you would like to continue with your action, please click the Confirm button. Otherwise, you should click the Cancel button to return to where you were.',
'No cookie'					=>	'Jums pavyko prisijungti, tačiau slapukas (cookie) nebuvo sukurtas. Patikrinkite naršyklės slapukų nustatymus ir įjunkite juos šiai svetainei.', //'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',


// Miscellaneous
'Forum index'				=>	'Titulinis forumo puslapis',
'Submit'					=>	'Siųsti',	// "name" of submit buttons
'Cancel'					=>	'Atšaukti', // "name" of cancel buttons
'Preview'					=>	'Peržiūrėti prieš siunčiant',	// submit button to preview message
'Delete'					=>	'Trinti',
'Split'						=>	'Perskirti',
'Ban message'				=>	'Jūs blokuojamas šiame forume.',
'Ban message 2'				=>	'Blokavimas baigsis %s.',
'Ban message 3'				=>	'Administratorius ar moderatorius, kuris jus užblokavo paliko tokią žinutę:',
'Ban message 4'				=>	'Visus klausimus siųskite forumo administratoriui adresu %s.',
'Never'						=>	'Niekada',
'Today'						=>	'Šiandien',
'Yesterday'					=>	'Vakar',
'Forum message'				=>	'Forumo žinutė',
'Maintenance warning'		=>	'<strong>DĖMESIO! %s Įjungtas.</strong> NEATSIJUNKITE NUO SISTEMOS nes jums nepavyks vėl prie jos prisijungti.',
'Maintenance mode'			=>	'Techninė profilaktika',
'Redirecting'				=>	'Peradresuojama',
'Forwarding info'			=>	'Jūs būsite automatiškai nusiųstas į naują puslapį už %s %s.',
'second'					=>	'sekundė',	// singular
'seconds'					=>	'sekundės',	// plural
'Click redirect'			=>	'Spauskite čia jei nebenorite ilgiau laukti (arba jei jūsų naršyklė nepersiunčia jūsų automatiškai)',
'Invalid e-mail'			=>	'Jūs įvedėte neteisingą el. pašto adresą.',
'New posts'					=>	'Naujos žinutės',	// the link that leads to the first new post
'New posts title'			=>	'Surasti temas, kuriose yra naujų žinučių nuo jūsų paskutinio apsilankymo.',	// the popup text for new posts links
'Active topics'				=>	'Aktyvios temos',
'Active topics title'		=>	'Surasti temas, kuriose yra paskutinės žinutės.',
'Unanswered topics'			=>	'Neatsakytos temos',
'Unanswered topics title'	=>	'Surasti temas į kurias nebuvo atsakyta.',
'Username'					=>	'Vartotojo vardas',
'Registered'				=>	'Užsiregistravęs',
'Write message'				=>	'Rašyti žinutę:',
'Forum'						=>	'Forumas',
'Posts'						=>	'Žinutės',
'Pages'						=>	'Puslapių',
'Page'						=>	'Puslapis',
'BBCode'					=>	'BBCode',	// You probably shouldn't change this
'Smilies'					=>	'Šypsenėlės',
'Images'					=>	'Paveikslėliai',
'You may use'				=>	'Jūs galite naudoti: %s',
'and'						=>	'ir',
'Image link'				=>	'paveikslėlis',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'rašė',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'Kodas',		// For [code]'s
'Forum mailer'				=>	'%s Mailer',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'Žinutės kūrimas',
'Required information'		=>	'Informacija privaloma',
'Reqmark'					=>	'*',
'Required'					=>	'(Privaloma)',
'Required warn'				=>	'Visi laukeliai pažymėti %s turi būti užpildyti.',
'Crumb separator'			=>	' »&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' - ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'Atgal',
'Next'						=>	'Pirmyn',
'Cancel redirect'			=>	'Operacija nutraukta. Persiunčiama…',
'No confirm redirect'		=>	'Patvirtinimas nepateiktas. Operacija nutraukta. Persiunčiama…',
'Please confirm'			=>	'Prašome patvirtinti:',
'Help page'					=>	'Pagalba apie: %s',
'Re'						=>	'Re:',
'Page info'					=>	'(Puslapis %1$s iš %2$s)',
'Item info single'			=>	'%s [ %s ]',
'Item info plural'			=>	'%s [ %s to %s of %s ]', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'				=>	'Naudojama <strong>%s</strong>',
'Maintenance'				=>	'Techninė profilaktika',

// CSRF confirmation form
'Confirm'					=>	'Patvirtinti',	// Button
'Confirm action'			=>	'Patvirtinti veiksmą',
'Confirm action head'		=>	'Prašome patvirtinti arba atšaukti jūsų paskutinį veiksmą',

// Title
'Title'						=>	'Antraštė',
'Member'					=>	'Narys',	// Default title
'Moderator'					=>	'Moderatorius',
'Administrator'				=>	'Administratorius',
'Banned'					=>	'Užblokuota',
'Guest'						=>	'Svečias',

// Stuff for include/parser.php
'BBCode error 1'			=>	'[/%1$s] nerasta uždaranti žymė [%1$s]',
'BBCode error 2'			=>	'[%s] žymė tuščia',
'BBCode error 3'			=>	'[%1$s] buvo pradėtas su [%2$s], tai neleistina',
'BBCode error 4'			=>	'[%s] buvo pradėtas savo viduje, tai neleistina',
'BBCode error 5'			=>	'[%1$s] nerastas atitinkantis [/%1$s]',
'BBCode error 6'			=>	'[%s] tušti žymės atributai',
'BBCode nested list'		=>	'[list] žymė negali būti kitos [list] žymės viduje',
'BBCode code problem'		=>	'Problemos su [code] žymėmis',

// Stuff for the navigator (top of every page)
'Index'						=>	'Pradžia',
'User list'					=>	'Vartotojai',
'Rules'						=>  'Taisyklės',
'Search'					=>  'Paieška',
'Register'					=>  'Registracija',
'register'					=>	'užsiregistruoti',
'Login'						=>  'Prisijungti',
'login'						=>	'prisijungti',
'Not logged in'				=>  'Jūs neprisijungęs.',
'Profile'					=>	'Vartotojo informacija',
'Logout'					=>	'Atsijungti',
'Logged in as'				=>	'Prisijungęs kaip %s.',
'Admin'						=>	'Valdymas',
'Last visit'				=>	'Paskutinis apsilankymas %s',
'Mark all as read'			=>	'Pažymėti visas temas kaip perskaitytas',
'Login nag'					=>	'Prašome prisijungti arba užsiregistruoti.',
'New reports'				=>	'Naujos ataskaitos',

// Alerts
'New alerts'				=>	'Nauji perspėjimai',
'Maintenance alert'			=>	'<strong>DĖMESIO! Techninės profilaktikos režimas.</strong> Ši diskusijų lenta dabar tvarkoma. <em>NEATSIJUNKITE</em>, nes negalėsite iš naujo prisijungti.',
'Updates'					=>	'PunBB atnaujinimai:',
'Updates failed'			=>	'The latest attempt at checking for updates against the punbb.informer.com updates service failed. This probably just means that the service is temporarily overloaded or out of order. However, if this alert does not disappear within a day or two, you should disable the automatic check for updates and check for updates manually in the future.',
'Updates version n hf'		=>	'A newer version of PunBB, version %s, is available for download at <a href="http://punbb.informer.com/">punbb.informer.com</a>. Furthermore, one or more hotfixes are available for install on the strong>Extensions</strong> » <strong>Manage hotfixes</strong> tab of the admin interface.',
'Updates version'			=>	'A newer version of PunBB, version %s, is available for download at <a href="http://punbb.informer.com/">punbb.informer.com</a>.',
'Updates hf'				=>	'One or more hotfixes are available for install on the <a href="%s">Manage hotfixes</a> tab of the admin interface.',
'Database mismatch'			=>	'Database version mismatch',
'Database mismatch alert'	=>	'Your PunBB database is meant to be used in conjunction with a newer version of the PunBB code. This mismatch can lead to your forum not working properly. It is suggested that you upgrade your forum to the newest version of PunBB.',

// Stuff for Jump Menu
'Go'						=>	'Go',		// submit button in forum jump
'Jump to'					=>	'Peršokti į forumą:',

// For extern.php RSS feed
'RSS description'			=>	'Naujausios temos %s.',
'RSS description topic'		=>	'Naujausios žinutės per %s.',
'RSS reply'					=>	'Re: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'					=>	'Peršokti prie forumo turinio',

// Debug information
'Querytime'						=>	'Sugeneruota per %1$s sekundžių. Užklausų skaičius: %2$s',
'Debug table'						=>	'Debug information',
'Debug summary'						=>	'Database query performance information',
'Query times'						=>	'Time (s)',
'Query'							=>	'Query',
'Total query time'					=>	'Total query time',

);
