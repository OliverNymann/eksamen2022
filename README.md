# Eksamen 2022

## Overblik

- Analyse
- Design Database
- Database funktioner

## Analyse

### Kravspecifikation
Se bilag 6 i word.


### Wireframes
Se bilag 7-11 i word
Disse viser de første ideer til hvordan udseendet skulle være.
Kan også ses på: https://www.figma.com/file/6HHSSj1McR8MP4XIaONFAg/Untitled?node-id=11%3A61

##Design Database
Se bilag 12 i word
Hoved entiteter:

User: User er en bruger på systemet som skal oplyse forskellige ting for at kunne oprette sige og derved logge ind og oprette indlæg(post).

Post: En post er et indlæg som en bruger har oprettet. Denne post har en titel, et billede, en brødtekst, en kategori, om den er offentliggjort eller ej, samt hvornår den er oprettet.Den vil blive vist på forsiden i form af Titel, billede, kategori og tidspunkt. Man kan derefter klikke på posten og komme til selve postens side.

Kategori: En kategori er koblet på et post. De kan bruges til at skabe et generelt overblik, samt man på forsiden kan klikke på den og få vist en side med udlukkende post fra den kategori.

Admin: En admin er en udvidelse af en bruger, dvs. at systemet har samme information om en admin som en bruger. Dog har man som admin mulighed for at slette kategorier, se en liste over alle brugere.

Relationer:
Relationen mellem user og post, er en user har mulighed for at oprette mange post, men en post kan kun være koblet til en user.

Mellem kategori og post, er det sådan at mange posts kan oprettes, men de kan hver især kun være koblet til en kategori. En kategori kan dog være knytte til mange forskellige posts.

Mellem kategori og admin, er det at en admin har mulighed for at slette kategorier, fx. hvis de ikke bliver brugt.

Mellem user og admin, er det udelukkende at admin har flere rettigheder end user, ellers er det helt ens. 

Kardinaliteter:
Der er oprettet to kardinaliteter som gør at en post kun kan have en kategori og også kun kan tilhøre en kategori. Dette er gjort, da kategorien vises på den enkelte “preview” af posten på forsiden og der er ikke plads til flere, samt det gør det mere overskueligt for brugeren der skal oprette posten, at der kun skal vælges en kategori.

## Database funktioner

Vis over- og Underkategorier (Vi har ikke underkategorier)
$query = "SELECT * FROM category";

##Reflektering

###Kategori
Vores system understøtter pt, de mest nødvendige funktioner som fx at kunne oprette en bruger, logge ind og lave indlæg.
I forhold til kategorier, blev den oprindelige løsning for rodet, og er derfor lige nu kun lavet som enkelte kategorier. 
Denne funktion bestemmer ikke om systemet som helhed virker, da man stadig har en mulighed for at sortere på siden.

###Admin
Admindashboardet og login kan lige nu kun tilgås via url, det er noget der skulle laves en knap til, så hvis man er admin kan man logge ind og få adgang til
dashboardet.

###Opret indlæg
At oprette indlæg har vi egentlig lykkeds med, men efter tilføjelsen af admin ser det ikke ud til at ville virke mere?
Dette er selvfølgelig ærgeligt, dog kan man stadig oprette en post i phpMyAdmin ved at query posts tabellen.

###Rating af indlæg
Rating af indlæg har vi ikke fået implementeret, dog ville det kunne gøres ved at give hver post en score fx. 1-5 og så når
andre brugere besøger postets side har de mulighed for at give 1-5 point.

##Konklusion
Der er en del småfejl og mangler i projektet, men overordnet for en prototype giver den et okay overblik af hvordan systemet vil fungerer i sidste ende.
