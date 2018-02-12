Tātad,

PAR SERVERI
Lietoju php lokālo. Terminālī spiedu (no tās vietas, kur atrodas index.php):

$ php -S localhost:8000

un tā arī strādāju.

PAR PROGRAMMĀM
Esmu uz Ubuntu 16.04, kodēju uz SublimeText, skatījos, kā sanāca Google Chrome. Vēl scss, bet tas arī viss. Pārējais standarts.

PAR FAILIEM
* backend - te ir loģiskā daļa (testLogic.php), viena palīgfunkcija (mixAnswers.php) un sesiju klase (Session.php)
* css - css
* db - datu bāzes klase (Db.php) un sql fails, pēc kura arī izveidoju datu bāzes shēmu
* dbDumpFiles - db_no_test.sql tika uztaisīts pēc datubāzes shēmas izveides (bez ne viena testa izpildes). Pārējie ir datu bāzes tables (kā jāsaka latviski? galdi, režģi, shēmas...?) pa vienam.
* img - fona bilde
* js - viens javascript fails, atbildīgs par progresa joslu
* scss - scss
* views - trīs prasītie skati (start.php, test.php, result.php) + folderis ar html augšas un apakšas template (paraugu, shēmu, aizvietojumu...?)

PAŠKRITIKA:
oi... problēmas daudz un dažādas. Droši vien vēl ir daudz tādas, ko pats neredzu. Uzskaitīšu tās, ko redzu un kā tās risinātu vai kur meklētu risinājumus:
* dinamiska lapas ielāde - sāktu ar AJAX izpēti. Vēl bija variants visu vajadzīgo info ielādēt js, dabūt atbildes uz visiem jautājumiem, tad doties tālāk, bet tas negāja kopā ar izvirzīto prasību saglabāt atbildes datu bāze uzreiz. Tātad, AJAX.
* modularitāte - nonācu līdz tādam MVC modelim, kas izskatās/izklausās ideāls ne tikai šim, bet vispār projektiem, lai viss būtu saprotams un pa plauktiņiem, bet manas spējas uz doto mirkli tādu modeli neatbalstīja. Vēl, index lapas lietošana kā tilts starp visiem pieprasījumiem, arī eleganta shēma. Tādos principos arī objektorientētība labāk izpaustos/iederētos.
* datubāze - nav ko daudz teikt, trūkst zināšanas/pieredze, tāpēc arī nedaudz kretīniska shēma sanāca
* stils - neizvirzīju kā baigo prioritāti, bet izvēlētā tematika pārāk ņēma virsroku praktiskumam. Ideja laba, izpildījums ne tik labs, citiem vārdiem sakot. Fonts nav baigi labi salasāms un responsīvumam ir vājās vietas, veids kā testā tiek izvēlētas atbildes arī nav pārāk elegants.
* citas - drošība, sesiju lietošana, kur komentēt kodu, kur nē, visas šis lietas nerada diezko pārliecinošu sajūtu.

PIEBILDE:
Par spīti augstāk minētajam, man prieks par padarīto, kaut vai tāpēc, ka uzzināju mežonīgi daudz un radās priekšstats gan par php, ko nekad līdz šim nebiju lietojis, gan mysql, ko nekad līdz šim nebiju lietojis. Man nav šaubu, ka augstāk minētās un vēl man neredzamās problēmas es varētu atrisināt (varbūt tā vietā, lai te filozofētu, es būtu varējis vienu jau atrisināt), bet apmēram nedēļa ir pagājusi un apmēram priekšstats būs par šī brīža tempu un stilu.

LŪGUMS:
Pieņemu, ka meistariem būs slinkums detalizēti pakritizēt kodu, ko es pilnībā saprotu un jūtu līdzi, bet, ja iespējams, labprāt redzētu šo pašu uzdevumu izpildītu perfekti. Varbūt kādam citam respondentam nav iebildumui padalīties. Man nebūtu iebildumi, ja arī manu kodu palaistu pa rinķi (norādīt, kā nevajag darīt, piemērm).

Paldies par iespēju, gaidu ziņu.






