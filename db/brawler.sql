create database if not exists Brawler character set utf8 collate utf8_unicode_ci;
use Brawler;
create table Brawler (
IdBrawler integer not null primary key auto_increment,
NomBrawler varchar(45) not null,
RareteBrawler varchar(45) not null,
DescBrawler varchar(600) not null,
VieBrawler integer not null,
DegatBrawler integer not null,
DegatSuperBrawler integer,
StarPowerBrawler varchar(45) not null,
DescStarPower varchar(200) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table Joueur (
IdJoueur integer not null primary key auto_increment,
NomJoueur varchar(45) not null,
TropheeMaxJoueur integer,
TropheeJoueur integer ,
RangJoueur integer not null,
NationaliteJoueur varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table BrawlerJoueur (
IdBrawlerJoueur integer not null,
IdJoueurBrawler integer not null,
TropheeBrawlerJoueur integer,
NiveauBrawlerJoueur integer not null,
DebloquerBrawlerJoueur integer
) engine=innodb character set utf8 collate utf8_unicode_ci;

insert into Brawler values (1, "Shelly", "commun", "Grâce à son fidèle fusil, Shelly fait pleuvoir la chevrotine sur ses adversaires.
Elle est très efficasse pour éliminer rapidement des ennemis à courtes portées. Son attaque et son super envoient 10 cartouches infligeant de gros dégats.
Son super en plus d'infliger de lourds dégats repousse les ennemis et détruit les décorts.", 5040 , 420 , 448 , "Etourdi" , "La super chevrotine de Shelly ralentit les ennemis pendant 2,5 secondes.");

insert into Brawler values (2, "Colt", "commun", "Ses deux revolvers de précision sont ses biens les plus précieux. Colt dégomme tout ce qui bouge en tirant des salves de six coups
à longue portée. Grâce à son super, Colt envoie des salves de balles avec une portée plus élevée qui détruisent également le décorts.",
3920 , 420 , 420 , "Bottes neuves" , "La vitesse de déplacement de Colt augmente grâce à ses belles bottes toutes neuves.");

insert into Brawler values (3, "Jessie", "commun", "L'électro-fusil de Jessie tire des orbes d'énergie qui rebondissent entre les ennemis (jusqu'à 3 ennemis).
Une fois prête, elle déploie son super, une adorable tourelle qui fait mal, très mal !",
4480 , 1148 , 336 , "Décharge" , "Jessie peut réparer sa tourelle et lui rendre 800 points de vie en la touchant avec son attaque");

insert into Brawler values (4, "Nita", "commun", "Nita Pied Léger lance des ondes de choc dévastatrices qui traverse les adversaires. Son animal totem, invoqué
grâce à son super, est Grand Nounours.",
5320 , 1036 , 560 , "Bonne patte" , "Nita recouvre 500 points de santé quand son ours inflige des dégâts. Son ours recouvre aussi 500 point de santé lorsque Nita inflige des dégâts.");

insert into Brawler values (5, "Bull", "commun", "Le fusil de bull fait des dégâts incroyable à courte portée. Il tire de nombreux plombs infligeant de lourds dégâts
ce qui fait de lui un tank très efficasse. Il aime aller au contact grâce à son super qui le fait charger en avant détruisant murs et ennemis.",
7280 , 560 , 1120 , "Berserk" , "Quand bull a moins de 40% de santé, il recharge deux fois plus vite.");

insert into Brawler values (6, "Brock", "commun", "Brock lance des roquettes explosives à longue portée. Son super? Une volée de roquettes qui détruit tous les obstacles
en infligeant de lourds dégâts.",
3920 , 1540 , 1456 , "Incendiaire" , "L'attaque de Brock met le feu à la zone touchée. Les ennemis aux alentours reçoivent 300 points de dégâts par secondes.");

insert into Brawler values (7, "Dynamike", "commun", "Dynamike lance deux bâtons de dynamite à chaques fois et quand son super est chargé il ne s'embête pas :
un bon gros tonneau pour tout faire péter !",
3940 , 1070 , 2900 , "Saut dynamike" , "Dynamike surfe sur l'onde de choc créée par ses explosifs pour sauter par-dessus les obstacles.");

insert into Brawler values (8, "Bo", "commun", "Bo tire trois flèches explosives sur ses cibles. Lorsqu'il utilise son super, il pose un trio de mine
bien cachées au sol qui explose au contact des adversaires.",
5040 , 700 , 2016 , "Aigle sentinelle" , "Bo repère les ennemis cachés dans les buissons à deux fois la distance habituelle.");

insert into Brawler values (9, "El Costo", "Rare", "El Costo attaque ses ennemis à coups de poings destructeurs et quand vient l'heure du super, il se lance
sur une zone le coude en avant. Il enchaine des salves dévastatrices de 4 coups de poing rapides comme l'éclair !",
8120 , 504 , 1120 , "El Fuego" , "Les ennemis pris dans le super d'El Costo brûleront pendant 4 secondes subissant 800 point de dégâts.");

insert into Brawler values (10, "Bartaba", "Rare", "Bartaba lance des bouteilles sur ses ennemis faisant des dégâts de zone.
Son super? Une volée de bouteilles enflammées couvrant une large zone.",
3360 , 952 , 950 , "Usage médical" , "Bartaba gagne 300 points de santé par attaque lancée.");

insert into Brawler values (11, "Poco", "Rare", "Poco tire des ondes sonores sur ses adversaires. Il perfectionne ses riffs pour attaquer ses ennemis,
et soigner ses équipiers grâce à son super.",
5320 , 924 , 2940 , "Da capo" , "Quand l'attaque de Poco touche des brawlers alliés, ils recouvrent 500 points de santé.");

insert into Brawler values (12, "Rosa", "Rare", "Rosa est une botaniste boxeuse qui n'a pas peur de se jeter dans le ring. Elle détruit ses ennemis avec des salves
de 4 coups. Son super lui crée une tenue protectrice à base de plantes absorbant 80% des dégâts qu'elle subit pendant 6 secondes.",
7530 , 720 , null , "Soin par les plantes" , "Rosa récupère 200 points de santé par seconde lorsqu'elle se trouve dans un buisson.");

insert into Brawler values (13, "Penny", " Super Rare", "Penny tire des sacs de pièces, causant des dégâts sur sa cible. Si une cible est touchée, le projectile
se sépare en 3 projectiles infligeant le même nombre de dégâts que le sac de pièces. Son super est un canon infligeant de lourds dégâts à distance.",
4460 , 1168 , 1680 , "Coup ultime" , "Si le canon de Penny est détruit, il tire une volée de bombes qui infligent 1680 points de dégâts.");

insert into Brawler values (14, "Ricochet", "Super Rare", "Ricochet tire des salves de 6 balles qui rebondissent sur les murs. Son super est une énorme
volée de balles qui transpercent ses cibles.",
3360 , 420 , 420 , "Super rebond" , "Les balles de Ricochet se chargent en ricochant infligeant 80 points de dégâts supplémentaires.");

insert into Brawler values (15, "Darryl", "Super Rare", "Darryl tire avec ses fusils à double canon ayant chacuns 5 cartouches par coups. Son super lui permet
de rentrer dans son tonneau et foncer sur ses adversaires leurs infligeant des dégâts et les repoussant.",
5880 , 392 , 560 , "Anneaux de fer" , "Lorsqu'il utilise son super, Darryl obtient un bouclier réduisant les dégâts de 40% pendant 3.5 secondes.");

insert into Brawler values (16, "Carl", "Super Rare", "Carl se sert de sa pioche comme d'un boomerang infligeant des dégâts à l'aller et au retour. Lorsqu'il utilise son super,
il rentre dans son wagonnet et tourbillonne infligeant de lourds dégâts et augmentant sa vitesse de déplacement.",
5920 , 952 , 630 , "Grand jeté" , "La pioche de Carl va plus vite et lui revient donc plus rapidement.");

insert into Brawler values (17, "Polly", "Epique", "Plus Polly tire de loin, plus elle fait de dégâts. Lorsqu'elle utilise son super, elle s'envole
gracieusement en faisant tomber quatres grenades. Quelle classe !.",
3360 , 2296 , 1260 , "Embuscade" , "L'attaque de Polly inflige 400 points de dégâts supplémentaire lorsqu'elle se trouve dans un buisson.");

insert into Brawler values (18, "Pam", "Epique", "Pam assaisonne ses ennemis d'éclats d'obus partant dans toutes les directions. Son super est une tourelle
qui restaure sa santé et celle de ses équipiers.",
6020 , 336 , 448 , "Câlin Magique" , "Quand Pam touche les ennemis avec ses balles, elle restaure 30 points de santé à elle même et ses équipiers");

insert into Brawler values (19, "Frank", "Epique", "Un coup de marteau de Frank crée une onde de choc qui percute ses ennemis. Son super
est si puissant qu'il étourdit les adversaire.",
8140 , 1690 , 1690 , "Tour de force" , "Frank vole le pouvoir d'une brawler vaincu, augmentant les dégâts qu'il inflige de 40% pendant 10 secondes");

insert into Brawler values (20, "Billie", "Epique", "Billie repousse ses ennemis à coups de batte si sa barre jaune est pleine. Quand son super est prêt,
elle frappe une balle de chewing-gum qui cause des dégâts et rebondit sur les murs.",
6320 , 1800 , 1500 , "Cours, Billie, Cours" , "Si la barre jaune est pleine, la vitesse de déplacement de Billie est accélérée.");

insert into Brawler values (21, "Mortis", "Mythique", "Mortis attaque les ennemis à coups de pelle le propulsant en avant. Son super est une volée
de chauves-souris qui infligent des dégâts et le soigne d'un montant égal aux dégâts infligés.",
5320 , 1260 , 1260 , "Moissombre" , "Mortis récolte l'essence de vie des brawlers qu'il a vaincus récupérant 1400 points de santé.");

insert into Brawler values (22, "Tara", "Mythique", "L'attaque triple tarot de Tara transperce ses adversaires. Elle lance une salve de trois cartes infligeant de gros dégâts
et son super est un trou noir qui attire tous les ennemis aux alentour et détruit les décorts.",
4480 , 520 , 1120 , "Portail sombre" , "Le super de Tara ouvre un portail dimensionnel faisant apparaitre une Tara d'ombre qui attaque les ennemis");

insert into Brawler values (23, "D'jinn", "Mythique", "D'jinn tire un projectile avec sa lampe magique se séparant en une volée de petits projectiles.
Son super est une main magique qui attrape les ennemis à proximité !",
5220 , 1400 , null , "Tour de magie" , "D'jinn régénère 200 points de santé à ses alliés par seconde.");

insert into Brawler values (24, "Spike", "Légendaire", "Spike lance des grenades contenant 6 épines. Son super crée un champ d'épines qui ralentissent les ennemis
en leur causant des dégâts chaques secondes.",
3420 , 664 , 610 , "Fertilisant" , "Lorsque Spike reste dans la zone de son super, il régénère 500 points de santé par seconde.");

insert into Brawler values (25, "Corbac", "Légendaire", "Corbac jette trois dagues empoisonnées infligeant des dégâts au contact des ennemis puis sur la durée aux ennemis
touchés. Son super lui permet d'effectuer un grand bond lors duquel il tire ses dagues au décollage et à l'atterrissage dans toutes les directions.",
3120 , 420 , 420 , "Extratoxique" , "Le poison de Corbac sape l'énergie des ennemis : ils infligents 10% de dégats en moins tant qu'ils sont affectés.");

insert into Brawler values (26, "Léon", "Légendaire", "Léon lance une salve rapide de quatres lames tournantes. Plus l'adversaire est proche, plus les dégâts sont importants.
Son super lui permet de devenir invisible pendant une durée de 7 secondes.",
4350 , 620 , null , "Fumée sans feu" , "Lorsqu'il utilise son super, Léon se déplace plus rapidement.");

insert into Joueur values (1, "Jean-Kevin", 9652, 9637 , 7 , "France");

insert into Joueur values (2, "SuperNinja", 10542, 10542 , 4 , "Angleterre");

insert into Joueur values (3, "Tomleboss", 4320, 4311 , 9 , "France");

insert into Joueur values (4, "LuF", 9396, 9391 , 8 , "France");

insert into Joueur values (5, "ThePGM69", 11347, 11304 , 3 , "France");

insert into Joueur values (6, "NerfShellyPlease", 10230, 10230 , 5 , "Russie");

insert into Joueur values (7, "Slacherr", 12546, 12546 , 1 , "France");

insert into Joueur values (8, "xxProGamerxx", 1201, 1189 , 10 , "Belgique");

insert into Joueur values (9, "Nyros", 11968, 11959 , 2 , "Portugal");

insert into Joueur values (10, "NoBrain", 9974, 9973 , 6 , "Italie");


