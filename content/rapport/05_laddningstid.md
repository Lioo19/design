---
---
Laddningstid kmom05
=========================

Uppgiftens syfte är att undersöka laddningstid och användbarhet för tre olika webbsidor, i grupp eller enskilt. Vi har valt att analysera och ta ut data i en liten grupp på två personer (Linnéa och Heidi) och därefter skriva rapporten individuellt.

Urval
-----------------------
Valet för de tre hemsidorna var den här gången relativt enkelt. Vi beslutade oss för att använda en av kategorierna på hemsidor som vi inte använda under förra kursmomentet, nämligen politiska partier. Av alla partier som finns tog vi tre av de största som ligger på lite olika spektra av den politiska skalan. Valen föll på
Centerpartiet[[1](https://www.centerpartiet.se/)], Moderaterna[[2](https://moderaterna.se/)] och Vänsterpartiet [[3](ttps://www.vansterpartiet.se/)]

Metod
-----------------------

Uppgiftsbeskrivningen för denna rapport går att hitta på [dbwebb](https://dbwebb.se).
Vi i gruppen hjälptes åt att hämta data för de tre olika hemsidorna vi valt genom att lägga in datan i ett gemensamt exceldokument. Första hämtades datan via DevTools [[4](https://developers.google.com/web/fundamentals)] där vi avläste laddningtid, antalet resurser som laddades samt sidans totala storlek. Detta gjordes både i desktop-läge och i mobilläge. Därefter kördes alla sidorna genom Google PageSpeed[[5](https://developers.google.com/speed/pagespeed/insights/)] och även denna data lades in i det gemensamma dokumentet. All data går att hitta i google Docs [[6](https://docs.google.com/spreadsheets/d/1k8LpkxeICTt9mIFmHkHPW6Mwel31O0oLrDfoYx-uqFo/edit?usp=sharing)].  

Resultat
-----------------------  
För att se den råa datan som hämtats från respektive hemsidan och som använts i analysen hänvisas läsaren till [Google Docs](https://docs.google.com/spreadsheets/d/1k8LpkxeICTt9mIFmHkHPW6Mwel31O0oLrDfoYx-uqFo/edit?usp=sharing).  

__Vänsterpartiet__  
Datan som hämtats visar tydligt att Vänsterpartiets hemsida är den sida som har överlägset kortast laddningstid med en snittid på 0.317 sekunder (desktop). Sidan är även minst i storlek med sina 1.4 MB och har minst antal objekt att ladda (70st). Detta ger dem en laddningshastighet på 0.23 sekunder/MB. Betyget på Google PageSpeed blev 99 för desktop och 62 för mobile, vilket även det var bäst i test. För att snabba upp sidan ytterligare uppmanar Google PageSpeed till att byta filformat på de bilder de har. De övriga förbättringar som föreslås innebär förhållandevis små förbättringar i hastighet, vilket är förståeligt då sidan får högt betyg över lag.   

[FIGURE src="image/vansterpartiet.png" class="screenshot" caption="Vänsterpartiets startsida"]  

__Moderaterna__  
Moderaternas hemsida vad den som var störst och tog längst tid att ladda, vilket även upplevdes som användare. Flera av bilderna tog lång tid på sig och när man scrollade laddade sidan fortfarande. Desktop-varianten låg på 15.4 MB i genomsnittlig storlek, vilket tog 3.43 sekunder att ladda och då laddades 128 resurser i snitt. Deras laddningshastighet landade därmed på .22 sekunder/MB. Betyget för Google PageSpeed blev 73 för deras hemsida och 32 för deras mobila hemsida.
Google PageSpeed rekommenderar följande åtgärder för att snabba upp sidan: använda andra filformat på bilderna (exempelvis JPEG 2000, JPEG XR eller WebP) för att göra sidan mer snabbladdad (enligt dem skulle de kunna spara 1.95 sek), avvakta med att ladda de bilder som inte syns på en gång och därmed prioritera de som syns ovanför "the fold" och ladda de andra bilderna efter att de mest vitala är färdigladdade och att ta bort överflödig CSS-kod som tar tid att ladda för ingenting.  

[FIGURE src="image/moderaterna.png" class="screenshot" caption="Modraternas startsida"]

__Centerpartiet__  
Centerpartiets sida hade en laddningstid på 2.263 sekunder och under den tiden laddades 74 resuser till en storlek av 7.667 MB. Detta ger dem en laddningshastighet på 0.30 vilket är den långsammaste hastigheten av de tre sidorna. Hemsidan upplevs dock inte som långsam utan allt laddas som det ska och ser bra ut inom en rimlig tidsram. Google PageSpeed gav centerpartiet 76 i desktop-betyg och 16 i mobilt betyg. Även de får rekommendationen att använda alternativa filformat för att ladda snabbare. De får även tips om att eliminera "render-blocking resources", vilket innebär att koden själv hindrar sidan från att laddas optimalt. Slutligen rekommenderas de att förbättra sin responstid till servern.  

[FIGURE src="image/centerpartiet.png" class="screenshot" caption="Centerpartiets startsida"]

Analys
-----------------------
Av de tre hemsidorna vi tittat på var Vänsterpartiets hemsida den överlägset snabbaste. Detta beror delvis på den snabba hastigheten, men även att de valt att hålla sidan enkel och därmed lyckats hålla ner storleken på den. Jag anser att detta lyser igenom då den är avsevärt mycket snabbare än de andras med sina 0.317 sekunder i laddningstid. De är helt enkelt snabbare på alla sätt. I min åsikt gör det inte sidan till sämre på något sätt, förutom att jag personligen föredrar designen på centerpartiets hemsida.
Centerpartiet hamnade i mitten, men jag upplevde dem inte alls lika långsam som moderaterna, varken på laptop eller mobil, vilket är intressant då de fick sämst betyg av Google PageSpeed på just mobilsidan.
Moderaterna hade den långsammaste sidan och detta beror till stor del på att de har en video infälld på sin förstasida. Även bilderna är i ett stort format, vilket självfallet påverkar prestanda.

Google PageSpeed gav ett antal rekommendationer för varje sida för att förbättra sin presanda. Alla tre sidor fick tips om att förändra i vilket filformat de sparade sina bilder där de filformat de gav exempel på som bättre var JPEG 2000, JPEG XR eller WebP. Dessutom framkom det att det på alla tre sidor fanns överflödig CSS-kod, vilket självklart gör att sidan laddar långsammare då den har mer att processa, till ingen nytta.


3 sekunder kom vi i gruppen överens om var en bra riktlinje för laddningstid, då vi inte upplevde centerpartiets hemsida som långsam att ladda, men gjorde det med moderaternas. Denna tid kan självfallet påverkas mycket om man prioriterar vad som laddas först, så att det som laddas först är det som möter besökaren först på sidan, vilket kommer att göra så att sidan uppfattas som betydligt snabbare. De tre sidorna vi analyserat har rätt olika laddningstider och endast en upplevs som långsam, moderaterns med en genomsnittlig laddnignstid 3.43 sekunder. D


Referenser
-----------------------
[1, Centerpartiet](https://www.centerpartiet.se/)  

[2, Moderatera](https://moderaterna.se/)  

[3, Vänsterpartiet](https://www.vansterpartiet.se/)  

[4, DevTools](https://developers.google.com/web/fundamentals)  

[5, Google PageSpeed](https://developers.google.com/speed/pagespeed/insights/)  

[6, Rådata i google Docs](https://docs.google.com/spreadsheets/d/1k8LpkxeICTt9mIFmHkHPW6Mwel31O0oLrDfoYx-uqFo/edit?usp=sharing)  


Övrigt
-----------------------

Rapporten är skriven av Linnéa Olofsson för kursen Teknisk Design 7.5 hp. Gruppen för denna uppgift har bestått av Heidi Patja och mig, Linnéa Olofsson
