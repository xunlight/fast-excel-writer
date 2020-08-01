<?php

return [
    'functions' => [
        'DRAAITABEL.OPHALEN' => 'GETPIVOTDATA', //Geeft gegevens uit een draaitabelrapport als resultaat
        'KUBUSKPILID' => 'CUBEKPIMEMBER', //Retourneert de naam, eigenschap en waarde van een KPI (prestatie-indicator) en geeft de naam en de eigenschap in de cel weer. Een KPI is een meetbare waarde, zoals de maandelijkse brutowinst of de omzet per kwartaal per werknemer, die wordt gebruikt om de prestaties van een organisatie te bewaken
        'KUBUSLID' => 'CUBEMEMBER', //Retourneert een lid of tupel in een kubushiërarchie. Wordt gebruikt om te controleren of het lid of de tupel in de kubus aanwezig is
        'KUBUSLIDEIGENSCHAP' => 'CUBEMEMBERPROPERTY', //Retourneert de waarde van een lideigenschap in de kubus. Wordt gebruikt om te controleren of de lidnaam in de kubus bestaat en retourneert de opgegeven eigenschap voor dit lid
        'KUBUSGERANGCHIKTLID' => 'CUBERANKEDMEMBER', //Retourneert het zoveelste, gerangschikte lid in een set. Wordt gebruikt om een of meer elementen in een set te retourneren, zoals de tien beste verkopers of de tien beste studenten
        'KUBUSSET' => 'CUBESET', //Definieert een berekende set leden of tupels door een ingestelde expressie naar de kubus op de server te sturen, alwaar de set wordt gemaakt en vervolgens wordt geretourneerd naar Microsoft Office Excel
        'KUBUSSETAANTAL' => 'CUBESETCOUNT', //Retourneert het aantal onderdelen in een set
        'KUBUSWAARDE' => 'CUBEVALUE', //Retourneert een samengestelde waarde van een kubus
        'DBGEMIDDELDE' => 'DAVERAGE', //Berekent de gemiddelde waarde in geselecteerde databasegegevens
        'DBAANTAL' => 'DCOUNT', //Telt de cellen met getallen in een database
        'DBAANTALC' => 'DCOUNTA', //Telt de niet-lege cellen in een database
        'DBLEZEN' => 'DGET', //Retourneert één record dat voldoet aan de opgegeven criteria uit een database
        'DBMAX' => 'DMAX', //Retourneert de maximumwaarde in de geselecteerde databasegegevens
        'DBMIN' => 'DMIN', //Retourneert de minimumwaarde in de geselecteerde databasegegevens
        'DBPRODUCT' => 'DPRODUCT', //Vermenigvuldigt de waarden in een bepaald veld van de records die voldoen aan de criteria in een database
        'DBSTDEV' => 'DSTDEV', //Maakt een schatting van de standaarddeviatie op basis van een steekproef uit geselecteerde databasegegevens
        'DBSTDEVP' => 'DSTDEVP', //Berekent de standaarddeviatie op basis van de volledige populatie van geselecteerde databasegegevens
        'DBSOM' => 'DSUM', //Telt de getallen uit een kolom records in de database op die voldoen aan de criteria
        'DBVAR' => 'DVAR', //Maakt een schatting van de variantie op basis van een steekproef uit geselecteerde databasegegevens
        'DBVARP' => 'DVARP', //Berekent de variantie op basis van de volledige populatie van geselecteerde databasegegevens
        'DATUM' => 'DATE', //Geeft als resultaat het seriële getal van een opgegeven datum
        'DATUMWAARDE' => 'DATEVALUE', //Converteert een datum in de vorm van tekst naar een serieel getal
        'DAG' => 'DAY', //Converteert een serieel getal naar een dag van de maand
        'DAGEN360' => 'DAYS360', //Berekent het aantal dagen tussen twee datums op basis van een jaar met 360 dagen
        'ZELFDE.DAG' => 'EDATE', //Geeft als resultaat het seriële getal van een datum die het opgegeven aantal maanden voor of na de begindatum ligt
        'LAATSTE.DAG' => 'EOMONTH', //Geeft als resultaat het seriële getal van de laatste dag van de maand voor of na het opgegeven aantal maanden
        'UUR' => 'HOUR', //Converteert een serieel getal naar uren
        'MINUUT' => 'MINUTE', //Converteert een serieel naar getal minuten
        'MAAND' => 'MONTH', //Converteert een serieel getal naar een maand
        'NETTO.WERKDAGEN' => 'NETWORKDAYS', //Geeft als resultaat het aantal hele werkdagen tussen twee datums
        'NU' => 'NOW', //Geeft als resultaat het seriële getal van de huidige datum en tijd
        'SECONDE' => 'SECOND', //Converteert een serieel getal naar seconden
        'TIJD' => 'TIME', //Geeft als resultaat het seriële getal van een bepaald tijdstip
        'TIJDWAARDE' => 'TIMEVALUE', //Converteert de tijd in de vorm van tekst naar een serieel getal
        'VANDAAG' => 'TODAY', //Geeft als resultaat het seriële getal van de huidige datum
        'WEEKDAG' => 'WEEKDAY', //Converteert een serieel getal naar een weekdag
        'WEEKNUMMER' => 'WEEKNUM', //Converteert een serieel getal naar een weeknummer
        'WERKDAG' => 'WORKDAY', //Geeft als resultaat het seriële getal van de datum voor of na een bepaald aantal werkdagen
        'JAAR' => 'YEAR', //Converteert een serieel getal naar een jaar
        'JAAR.DEEL' => 'YEARFRAC', //Geeft als resultaat het gedeelte van het jaar, uitgedrukt in het aantal hele dagen tussen begindatum en einddatum
        'BESSEL.I' => 'BESSELI', //Geeft als resultaat de gewijzigde Bessel-functie In(x)
        'BESSEL.J' => 'BESSELJ', //Geeft als resultaat de Bessel-functie Jn(x)
        'BESSEL.K' => 'BESSELK', //Geeft als resultaat de gewijzigde Bessel-functie Kn(x)
        'BESSEL.Y' => 'BESSELY', //Geeft als resultaat de gewijzigde Bessel-functie Yn(x)
        'BIN.N.DEC' => 'BIN2DEC', //Converteert een binair getal naar een decimaal getal
        'BIN.N.HEX' => 'BIN2HEX', //Converteert een binair getal naar een hexadecimaal getal
        'BIN.N.OCT' => 'BIN2OCT', //Converteert een binair getal naar een octaal getal
        'COMPLEX' => 'COMPLEX', //Converteert reële en imaginaire coëfficiënten naar een complex getal
        'CONVERTEREN' => 'CONVERT', //Converteert een getal in de ene maateenheid naar een getal in een andere maateenheid
        'DEC.N.BIN' => 'DEC2BIN', //Converteert een decimaal getal naar een binair getal
        'DEC.N.HEX' => 'DEC2HEX', //Converteert een decimaal getal naar een hexadecimaal getal
        'DEC.N.OCT' => 'DEC2OCT', //Converteert een decimaal getal naar een octaal getal
        'DELTA' => 'DELTA', //Test of twee waarden gelijk zijn
        'FOUTFUNCTIE' => 'ERF', //Geeft als resultaat de foutfunctie
        'FOUT.COMPLEMENT' => 'ERFC', //Geeft als resultaat de complementaire foutfunctie
        'GROTER.DAN' => 'GESTEP', //Test of een getal groter is dan de drempelwaarde
        'HEX.N.BIN' => 'HEX2BIN', //Converteert een hexadecimaal getal naar een binair getal
        'HEX.N.DEC' => 'HEX2DEC', //Converteert een hexadecimaal getal naar een decimaal getal
        'HEX.N.OCT' => 'HEX2OCT', //Converteert een hexadecimaal getal naar een octaal getal
        'C.ABS' => 'IMABS', //Geeft als resultaat de absolute waarde (modulus) van een complex getal
        'C.IM.DEEL' => 'IMAGINARY', //Geeft als resultaat de imaginaire coëfficiënt van een complex getal
        'C.ARGUMENT' => 'IMARGUMENT', //Geeft als resultaat het argument thèta, een hoek uitgedrukt in radialen
        'C.TOEGEVOEGD' => 'IMCONJUGATE', //Geeft als resultaat het complexe toegevoegde getal van een complex getal
        'C.COS' => 'IMCOS', //Geeft als resultaat de cosinus van een complex getal
        'C.QUOTIENT' => 'IMDIV', //Geeft als resultaat het quotiënt van twee complexe getallen
        'C.EXP' => 'IMEXP', //Geeft als resultaat de exponent van een complex getal
        'C.LN' => 'IMLN', //Geeft als resultaat de natuurlijke logaritme van een complex getal
        'C.LOG10' => 'IMLOG10', //Geeft als resultaat de logaritme met grondtal 10 van een complex getal
        'C.LOG2' => 'IMLOG2', //Geeft als resultaat de logaritme met grondtal 2 van een complex getal
        'C.MACHT' => 'IMPOWER', //Geeft als resultaat een complex getal dat is verheven tot de macht van een geheel getal
        'C.PRODUCT' => 'IMPRODUCT', //Geeft als resultaat het product van complexe getallen
        'C.REEEL.DEEL' => 'IMREAL', //Geeft als resultaat de reële coëfficiënt van een complex getal
        'C.SIN' => 'IMSIN', //Geeft als resultaat de sinus van een complex getal
        'C.WORTEL' => 'IMSQRT', //Geeft als resultaat de vierkantswortel van een complex getal
        'C.VERSCHIL' => 'IMSUB', //Geeft als resultaat het verschil tussen twee complexe getallen
        'C.SOM' => 'IMSUM', //Geeft als resultaat de som van complexe getallen
        'OCT.N.BIN' => 'OCT2BIN', //Converteert een octaal getal naar een binair getal
        'OCT.N.DEC' => 'OCT2DEC', //Converteert een octaal getal naar een decimaal getal
        'OCT.N.HEX' => 'OCT2HEX', //Converteert een octaal getal naar een hexadecimaal getal
        'SAMENG.RENTE' => 'ACCRINT', //Berekent de opgelopen rente voor een waardepapier waarvan de rente periodiek wordt uitgekeerd
        'SAMENG.RENTE.V' => 'ACCRINTM', //Berekent de opgelopen rente voor een waardepapier waarvan de rente op de vervaldatum wordt uitgekeerd
        'AMORDEGRC' => 'AMORDEGRC', //Geeft als resultaat de afschrijving voor elke boekingsperiode door een afschrijvingscoëfficiënt toe te passen
        'AMORLINC' => 'AMORLINC', //Berekent de afschrijving voor elke boekingsperiode
        'COUP.DAGEN.BB' => 'COUPDAYBS', //Berekent het aantal dagen vanaf het begin van de coupontermijn tot de stortingsdatum
        'COUP.DAGEN' => 'COUPDAYS', //Geeft als resultaat het aantal dagen in de coupontermijn waarin de stortingsdatum valt
        'COUP.DAGEN.VV' => 'COUPDAYSNC', //Geeft als resultaat het aantal dagen vanaf de stortingsdatum tot de volgende couponvervaldatum
        'COUP.DATUM.NB' => 'COUPNCD', //Geeft als resultaat de volgende coupondatum na de stortingsdatum
        'COUP.AANTAL' => 'COUPNUM', //Geeft als resultaat het aantal coupons dat nog moet worden uitbetaald tussen de stortingsdatum en de vervaldatum
        'COUP.DATUM.VB' => 'COUPPCD', //Geeft als resultaat de vorige couponvervaldatum vóór de stortingsdatum
        'CUM.RENTE' => 'CUMIPMT', //Geeft als resultaat de cumulatieve rente die tussen twee termijnen is uitgekeerd
        'CUM.HOOFDSOM' => 'CUMPRINC', //Geeft als resultaat de cumulatieve hoofdsom van een lening die tussen twee termijnen is terugbetaald
        'DB' => 'DB', //Geeft als resultaat de afschrijving van activa voor een bepaalde periode met behulp van de 'fixed declining balance'-methode
        'DDB' => 'DDB', //Geeft als resultaat de afschrijving van activa over een bepaalde termijn met behulp van de 'double declining balance'-methode of een andere methode die u opgeeft
        'DISCONTO' => 'DISC', //Geeft als resultaat het discontopercentage voor een waardepapier
        'EURO.DE' => 'DOLLARDE', //Converteert een prijs in euro's, uitgedrukt in een breuk, naar een prijs in euro's, uitgedrukt in een decimaal getal
        'EURO.BR' => 'DOLLARFR', //Converteert een prijs in euro's, uitgedrukt in een decimaal getal, naar een prijs in euro's, uitgedrukt in een breuk
        'DUUR' => 'DURATION', //Geeft als resultaat de gewogen gemiddelde looptijd voor een waardepapier met periodieke rentebetalingen
        'EFFECT.RENTE' => 'EFFECT', //Geeft als resultaat het effectieve jaarlijkse rentepercentage
        'TW' => 'FV', //Geeft als resultaat de toekomstige waarde van een investering
        'TOEK.WAARDE2' => 'FVSCHEDULE', //Geeft als resultaat de toekomstige waarde van een bepaalde hoofdsom na het toepassen van een reeks samengestelde rentepercentages
        'RENTEPERCENTAGE' => 'INTRATE', //Geeft als resultaat het rentepercentage voor een volgestort waardepapier
        'IBET' => 'IPMT', //Geeft als resultaat de te betalen rente voor een investering over een bepaalde termijn
        'IR' => 'IRR', //Geeft als resultaat de interne rentabiliteit voor een reeks cashflows
        'ISBET' => 'ISPMT', //Geeft als resultaat de rente die is betaald tijdens een bepaalde termijn van een investering
        'AANG.DUUR' => 'MDURATION', //Geeft als resultaat de aangepaste Macauley-looptijd voor een waardepapier, aangenomen dat de nominale waarde € 100 bedraagt
        'GIR' => 'MIRR', //Geeft als resultaat de interne rentabiliteit voor een serie cashflows, waarbij voor betalingen een ander rentepercentage geldt dan voor inkomsten
        'NOMINALE.RENTE' => 'NOMINAL', //Geeft als resultaat het nominale jaarlijkse rentepercentage
        'NPER' => 'NPER', //Geeft als resultaat het aantal termijnen van een investering
        'NHW' => 'NPV', //Geeft als resultaat de netto huidige waarde van een investering op basis van een reeks periodieke cashflows en een discontopercentage
        'AFW.ET.PRIJS' => 'ODDFPRICE', //Geeft als resultaat de prijs per € 100 nominale waarde voor een waardepapier met een afwijkende eerste termijn
        'AFW.ET.REND' => 'ODDFYIELD', //Geeft als resultaat het rendement voor een waardepapier met een afwijkende eerste termijn
        'AFW.LT.PRIJS' => 'ODDLPRICE', //Geeft als resultaat de prijs per € 100 nominale waarde voor een waardepapier met een afwijkende laatste termijn
        'AFW.LT.REND' => 'ODDLYIELD', //Geeft als resultaat het rendement voor een waardepapier met een afwijkende laatste termijn
        'BET' => 'PMT', //Geeft als resultaat de periodieke betaling voor een annuïteit
        'PBET' => 'PPMT', //Geeft als resultaat de afbetaling op de hoofdsom voor een bepaalde termijn
        'PRIJS.NOM' => 'PRICE', //Geeft als resultaat de prijs per € 100 nominale waarde voor een waardepapier waarvan de rente periodiek wordt uitgekeerd
        'PRIJS.DISCONTO' => 'PRICEDISC', //Geeft als resultaat de prijs per € 100 nominale waarde voor een verdisconteerd waardepapier
        'PRIJS.VERVALDAG' => 'PRICEMAT', //Geeft als resultaat de prijs per € 100 nominale waarde voor een waardepapier waarvan de rente wordt uitgekeerd op de vervaldatum
        'HW' => 'PV', //Geeft als resultaat de huidige waarde van een investering
        'RENTE' => 'RATE', //Geeft als resultaat het periodieke rentepercentage voor een annuïteit
        'OPBRENGST' => 'RECEIVED', //Geeft als resultaat het bedrag dat op de vervaldatum wordt uitgekeerd voor een volgestort waardepapier
        'LIN.AFSCHR' => 'SLN', //Geeft als resultaat de lineaire afschrijving van activa over één termijn
        'SYD' => 'SYD', //Geeft als resultaat de afschrijving van activa over een bepaalde termijn met behulp van de 'Sum-Of-Years-Digits'-methode
        'SCHATK.OBL' => 'TBILLEQ', //Geeft als resultaat het rendement op schatkistpapier, dat op dezelfde manier wordt berekend als het rendement op obligaties
        'SCHATK.PRIJS' => 'TBILLPRICE', //Bepaalt de prijs per € 100 nominale waarde voor schatkistpapier
        'SCHATK.REND' => 'TBILLYIELD', //Berekent het rendement voor schatkistpapier
        'VDB' => 'VDB', //Geeft als resultaat de afschrijving van activa over een gehele of gedeeltelijke termijn met behulp van de 'declining balance'-methode
        'IR.SCHEMA' => 'XIRR', //Berekent de interne rentabiliteit voor een betalingsschema van cashflows
        'NHW2' => 'XNPV', //Berekent de huidige nettowaarde voor een betalingsschema van cashflows
        'RENDEMENT' => 'YIELD', //Geeft als resultaat het rendement voor een waardepapier waarvan de rente periodiek wordt uitgekeerd
        'REND.DISCONTO' => 'YIELDDISC', //Geeft als resultaat het jaarlijkse rendement voor een verdisconteerd waardepapier, bijvoorbeeld schatkistpapier
        'REND.VERVAL' => 'YIELDMAT', //Geeft als resultaat het jaarlijkse rendement voor een waardepapier waarvan de rente wordt uitgekeerd op de vervaldatum
        'CEL' => 'CELL', //Geeft als resultaat informatie over de opmaak, locatie of inhoud van een cel
        'TYPE.FOUT' => 'ERROR.TYPE', //Geeft als resultaat een getal dat overeenkomt met een van de foutwaarden van Microsoft Excel
        'INFO' => 'INFO', //Geeft als resultaat informatie over de huidige besturingsomgeving
        'ISLEEG' => 'ISBLANK', //Geeft als resultaat WAAR als de waarde leeg is
        'ISFOUT2' => 'ISERR', //Geeft als resultaat WAAR als de waarde een foutwaarde is, met uitzondering van #N/B
        'ISFOUT' => 'ISERROR', //Geeft als resultaat WAAR als de waarde een foutwaarde is
        'IS.EVEN' => 'ISEVEN', //Geeft als resultaat WAAR als het getal even is
        'ISLOGISCH' => 'ISLOGICAL', //Geeft als resultaat WAAR als de waarde een logische waarde is
        'ISNB' => 'ISNA', //Geeft als resultaat WAAR als de waarde de foutwaarde #N/B is
        'ISGEENTEKST' => 'ISNONTEXT', //Geeft als resultaat WAAR als de waarde geen tekst is
        'ISGETAL' => 'ISNUMBER', //Geeft als resultaat WAAR als de waarde een getal is
        'IS.ONEVEN' => 'ISODD', //Geeft als resultaat WAAR als het getal oneven is
        'ISVERWIJZING' => 'ISREF', //Geeft als resultaat WAAR als de waarde een verwijzing is
        'ISTEKST' => 'ISTEXT', //Geeft als resultaat WAAR als de waarde tekst is
        'N' => 'N', //Geeft als resultaat een waarde die is geconverteerd naar een getal
        'NB' => 'NA', //Geeft als resultaat de foutwaarde #N/B
        'TYPE' => 'TYPE', //Geeft als resultaat een getal dat het gegevenstype van een waarde aangeeft
        'EN' => 'AND', //Geeft als resultaat WAAR als alle argumenten WAAR zijn
        'ONWAAR' => 'FALSE', //Geeft als resultaat de logische waarde ONWAAR
        'ALS' => 'IF', //Geeft een logische test aan
        'ALS.FOUT' => 'IFERROR', //Retourneert een waarde die u opgeeft als een formule een fout oplevert, anders wordt het resultaat van de formule geretourneerd
        'NIET' => 'NOT', //Keert de logische waarde van het argument om
        'OF' => 'OR', //Geeft als resultaat WAAR als minimaal een van de argumenten WAAR is
        'WAAR' => 'TRUE', //Geeft als resultaat de logische waarde WAAR
        'ADRES' => 'ADDRESS', //Geeft als resultaat een verwijzing, in de vorm van tekst, naar één bepaalde cel in een werkblad
        'BEREIKEN' => 'AREAS', //Geeft als resultaat het aantal bereiken in een verwijzing
        'KIEZEN' => 'CHOOSE', //Kiest een waarde uit een lijst met waarden
        'KOLOM' => 'COLUMN', //Geeft als resultaat het kolomnummer van een verwijzing
        'KOLOMMEN' => 'COLUMNS', //Geeft als resultaat het aantal kolommen in een verwijzing
        'HORIZ.ZOEKEN' => 'HLOOKUP', //Zoekt in de bovenste rij van een matrix naar een bepaalde waarde en geeft als resultaat de gevonden waarde in de opgegeven cel
        'HYPERLINK' => 'HYPERLINK', //Maakt een snelkoppeling of een sprong waarmee een document wordt geopend dat is opgeslagen op een netwerkserver, een intranet of op internet
        'INDEX' => 'INDEX', //Kiest met een index een waarde uit een verwijzing of een matrix
        'INDIRECT' => 'INDIRECT', //Geeft als resultaat een verwijzing die wordt aangegeven met een tekstwaarde
        'ZOEKEN' => 'LOOKUP', //Zoekt naar bepaalde waarden in een vector of een matrix
        'VERGELIJKEN' => 'MATCH', //Zoekt naar bepaalde waarden in een verwijzing of een matrix
        'VERSCHUIVING' => 'OFFSET', //Geeft als resultaat een nieuwe verwijzing die is verschoven ten opzichte van een bepaalde verwijzing
        'RIJ' => 'ROW', //Geeft als resultaat het rijnummer van een verwijzing
        'RIJEN' => 'ROWS', //Geeft als resultaat het aantal rijen in een verwijzing
        'RTG' => 'RTD', //Haalt realtimegegevens op uit een programma dat COM-automatisering (automatisering: een methode waarmee de ene toepassing objecten van een andere toepassing of ontwikkelprogramma kan besturen. Automatisering werd vroeger OLE-automatisering genoemd. Automatisering is een industrienorm die deel uitmaakt van het Component Object Model (COM).) ondersteunt
        'TRANSPONEREN' => 'TRANSPOSE', //Geeft als resultaat de getransponeerde van een matrix
        'VERT.ZOEKEN' => 'VLOOKUP', //Zoekt in de meest linkse kolom van een matrix naar een bepaalde waarde en geeft als resultaat de waarde in de opgegeven cel
        'ABS' => 'ABS', //Geeft als resultaat de absolute waarde van een getal
        'BOOGCOS' => 'ACOS', //Geeft als resultaat de boogcosinus van een getal
        'BOOGCOSH' => 'ACOSH', //Geeft als resultaat de inverse cosinus hyperbolicus van een getal
        'BOOGSIN' => 'ASIN', //Geeft als resultaat de boogsinus van een getal
        'BOOGSINH' => 'ASINH', //Geeft als resultaat de inverse sinus hyperbolicus van een getal
        'BOOGTAN' => 'ATAN', //Geeft als resultaat de boogtangens van een getal
        'BOOGTAN2' => 'ATAN2', //Geeft als resultaat de boogtangens van de x- en y-coördinaten
        'BOOGTANH' => 'ATANH', //Geeft als resultaat de inverse tangens hyperbolicus van een getal
        'AFRONDEN.BOVEN' => 'CEILING', //Rondt de absolute waarde van een getal naar boven af op het dichtstbijzijnde gehele getal of het dichtstbijzijnde significante veelvoud
        'COMBINATIES' => 'COMBIN', //Geeft als resultaat het aantal combinaties voor een bepaald aantal objecten
        'COS' => 'COS', //Geeft als resultaat de cosinus van een getal
        'COSH' => 'COSH', //Geeft als resultaat de cosinus hyperbolicus van een getal
        'GRADEN' => 'DEGREES', //Converteert radialen naar graden
        'EVEN' => 'EVEN', //Rondt het getal af op het dichtstbijzijnde gehele even getal
        'EXP' => 'EXP', //Verheft e tot de macht van een bepaald getal
        'FACULTEIT' => 'FACT', //Geeft als resultaat de faculteit van een getal
        'DUBBELE.FACULTEIT' => 'FACTDOUBLE', //Geeft als resultaat de dubbele faculteit van een getal
        'AFRONDEN.BENEDEN' => 'FLOOR', //Rondt de absolute waarde van een getal naar beneden af
        'GGD' => 'GCD', //Geeft als resultaat de grootste gemene deler
        'INTEGER' => 'INT', //Rondt een getal naar beneden af op het dichtstbijzijnde gehele getal
        'KGV' => 'LCM', //Geeft als resultaat het kleinste gemene veelvoud
        'LN' => 'LN', //Geeft als resultaat de natuurlijke logaritme van een getal
        'LOG' => 'LOG', //Geeft als resultaat de logaritme met het opgegeven grondtal van een getal
        'LOG10' => 'LOG10', //Geeft als resultaat de logaritme met grondtal 10 van een getal
        'DETERMINANTMAT' => 'MDETERM', //Geeft als resultaat de determinant van een matrix
        'INVERSEMAT' => 'MINVERSE', //Geeft als resultaat de inverse van een matrix
        'PRODUCTMAT' => 'MMULT', //Geeft als resultaat het product van twee matrices
        'REST' => 'MOD', //Geeft als resultaat het restgetal van een deling
        'AFRONDEN.N.VEELVOUD' => 'MROUND', //Geeft als resultaat een getal afgerond op het gewenste veelvoud
        'MULTINOMIAAL' => 'MULTINOMIAL', //Geeft als resultaat de multinomiaalcoëfficiënt van een reeks getallen
        'ONEVEN' => 'ODD', //Rondt de absolute waarde van het getal naar boven af op het dichtstbijzijnde gehele oneven getal
        'PI' => 'PI', //Geeft als resultaat de waarde van pi
        'MACHT' => 'POWER', //Verheft een getal tot een macht
        'PRODUCT' => 'PRODUCT', //Vermenigvuldigt de argumenten met elkaar
        'QUOTIENT' => 'QUOTIENT', //Geeft als resultaat de uitkomst van een deling als geheel getal
        'RADIALEN' => 'RADIANS', //Converteert graden naar radialen
        'ASELECT' => 'RAND', //Geeft als resultaat een willekeurig getal tussen 0 en 1
        'ASELECTTUSSEN' => 'RANDBETWEEN', //Geeft een willekeurig getal tussen de getallen die u hebt opgegeven
        'ROMEINS' => 'ROMAN', //Converteert een Arabisch getal naar een Romeins getal en geeft het resultaat weer in de vorm van tekst
        'AFRONDEN' => 'ROUND', //Rondt een getal af op het opgegeven aantal decimalen
        'AFRONDEN.NAAR.BENEDEN' => 'ROUNDDOWN', //Rondt de absolute waarde van een getal naar beneden af
        'AFRONDEN.NAAR.BOVEN' => 'ROUNDUP', //Rondt de absolute waarde van een getal naar boven af
        'SOM.MACHTREEKS' => 'SERIESSUM', //Geeft als resultaat de som van een machtreeks die is gebaseerd op de formule
        'POS.NEG' => 'SIGN', //Geeft als resultaat het teken van een getal
        'SIN' => 'SIN', //Geeft als resultaat de sinus van de opgegeven hoek
        'SINH' => 'SINH', //Geeft als resultaat de sinus hyperbolicus van een getal
        'WORTEL' => 'SQRT', //Geeft als resultaat de positieve vierkantswortel van een getal
        'WORTEL.PI' => 'SQRTPI', //Geeft als resultaat de vierkantswortel van (getal * pi)
        'SUBTOTAAL' => 'SUBTOTAL', //Geeft als resultaat een subtotaal voor een bereik
        'SOM' => 'SUM', //Telt de argumenten op
        'SOM.ALS' => 'SUMIF', //Telt de getallen bij elkaar op die voldoen aan een bepaald criterium
        'SOMMEN.ALS' => 'SUMIFS', //Telt de cellen in een bereik op die aan meerdere criteria voldoen
        'SOMPRODUCT' => 'SUMPRODUCT', //Geeft als resultaat de som van de producten van de corresponderende matrixelementen
        'KWADRATENSOM' => 'SUMSQ', //Geeft als resultaat de som van de kwadraten van de argumenten
        'SOM.X2MINY2' => 'SUMX2MY2', //Geeft als resultaat de som van het verschil tussen de kwadraten van corresponderende waarden in twee matrices
        'SOM.X2PLUSY2' => 'SUMX2PY2', //Geeft als resultaat de som van de kwadratensom van corresponderende waarden in twee matrices
        'SOM.XMINY.2' => 'SUMXMY2', //Geeft als resultaat de som van de kwadraten van de verschillen tussen de corresponderende waarden in twee matrices
        'TAN' => 'TAN', //Geeft als resultaat de tangens van een getal
        'TANH' => 'TANH', //Geeft als resultaat de tangens hyperbolicus van een getal
        'GEHEEL' => 'TRUNC', //Kapt een getal af tot een geheel getal
        'GEM.DEVIATIE' => 'AVEDEV', //Geeft als resultaat het gemiddelde van de absolute deviaties van gegevenspunten ten opzichte van hun gemiddelde waarde
        'GEMIDDELDE' => 'AVERAGE', //Geeft als resultaat het gemiddelde van de argumenten
        'GEMIDDELDEA' => 'AVERAGEA', //Geeft als resultaat het gemiddelde van de argumenten, inclusief getallen, tekst en logische waarden
        'GEMIDDELDE.ALS' => 'AVERAGEIF', //Geeft het gemiddelde (rekenkundig gemiddelde) als resultaat van alle cellen in een bereik die voldoen aan de opgegeven criteria
        'GEMIDDELDEN.ALS' => 'AVERAGEIFS', //Geeft het gemiddelde (rekenkundig gemiddelde) als resultaat van alle cellen die aan meerdere criteria voldoen
        'BETA.VERD' => 'BETADIST', //Geeft als resultaat de cumulatieve bèta-verdelingsfunctie
        'BETA.INV' => 'BETAINV', //Geeft als resultaat de inverse van de cumulatieve verdelingsfunctie voor een gegeven bèta-verdeling
        'BINOMIALE.VERD' => 'BINOMDIST', //Geeft als resultaat de binomiale verdeling
        'CHI.KWADRAAT' => 'CHIDIST', //Geeft als resultaat de eenzijdige kans van de chi-kwadraatverdeling
        'CHI.KWADRAAT.INV' => 'CHIINV', //Geeft als resultaat de inverse van een eenzijdige kans van de chi-kwadraatverdeling
        'CHI.TOETS' => 'CHITEST', //Geeft als resultaat de onafhankelijkheidstoets
        'BETROUWBAARHEID' => 'CONFIDENCE', //Geeft als resultaat het betrouwbaarheidsinterval van een gemiddelde waarde voor de elementen van een populatie
        'CORRELATIE' => 'CORREL', //Geeft als resultaat de correlatiecoëfficiënt van twee gegevensverzamelingen
        'AANTAL' => 'COUNT', //Telt het aantal getallen in de argumentenlijst
        'AANTALARG' => 'COUNTA', //Telt het aantal waarden in de argumentenlijst
        'AANTAL.LEGE.CELLEN' => 'COUNTBLANK', //Telt het aantal lege cellen in een bereik
        'AANTAL.ALS' => 'COUNTIF', //Telt in een bereik het aantal cellen die voldoen aan een bepaald criterium
        'AANTALLEN.ALS' => 'COUNTIFS', //Telt in een bereik het aantal cellen die voldoen aan meerdere criteria
        'COVARIANTIE' => 'COVAR', //Geeft als resultaat de covariantie, het gemiddelde van de producten van de gepaarde deviaties
        'CRIT.BINOM' => 'CRITBINOM', //Geeft als resultaat de kleinste waarde waarvoor de binomiale verdeling kleiner is dan of gelijk is aan het criterium
        'DEV.KWAD' => 'DEVSQ', //Geeft als resultaat de som van de deviaties in het kwadraat
        'EXPON.VERD' => 'EXPONDIST', //Geeft als resultaat de exponentiële verdeling
        'F.VERDELING' => 'FDIST', //Geeft als resultaat de F-verdeling
        'F.INVERSE' => 'FINV', //Geeft als resultaat de inverse van de F-verdeling
        'FISHER' => 'FISHER', //Geeft als resultaat de Fisher-transformatie
        'FISHER.INV' => 'FISHERINV', //Geeft als resultaat de inverse van de Fisher-transformatie
        'VOORSPELLEN' => 'FORECAST', //Geeft als resultaat een waarde op basis van een lineaire trend
        'FREQUENTIE' => 'FREQUENCY', //Geeft als resultaat een frequentieverdeling in de vorm van een verticale matrix
        'F.TOETS' => 'FTEST', //Geeft als resultaat een F-toets
        'GAMMA.VERD' => 'GAMMADIST', //Geeft als resultaat de gamma-verdeling
        'GAMMA.INV' => 'GAMMAINV', //Geeft als resultaat de inverse van de cumulatieve gamma-verdeling
        'GAMMA.LN' => 'GAMMALN', //Geeft als resultaat de natuurlijke logaritme van de gamma-functie, G(x)
        'MEETK.GEM' => 'GEOMEAN', //Geeft als resultaat het meetkundige gemiddelde
        'GROEI' => 'GROWTH', //Geeft als resultaat de waarden voor een exponentiële trend
        'HARM.GEM' => 'HARMEAN', //Geeft als resultaat het harmonische gemiddelde
        'HYPERGEO.VERD' => 'HYPGEOMDIST', //Geeft als resultaat de hypergeometrische verdeling
        'SNIJPUNT' => 'INTERCEPT', //Geeft als resultaat het snijpunt van de lineaire regressielijn met de y-as
        'KURTOSIS' => 'KURT', //Geeft als resultaat de kurtosis van een gegevensverzameling
        'GROOTSTE' => 'LARGE', //Geeft als resultaat de op k-1 na grootste waarde in een gegevensverzameling
        'LIJNSCH' => 'LINEST', //Geeft als resultaat de parameters van een lineaire trend
        'LOGSCH' => 'LOGEST', //Geeft als resultaat de parameters van een exponentiële trend
        'LOG.NORM.INV' => 'LOGINV', //Geeft als resultaat de inverse van de logaritmische normale verdeling
        'LOG.NORM.VERD' => 'LOGNORMDIST', //Geeft als resultaat de cumulatieve logaritmische normale verdeling
        'MAX' => 'MAX', //Geeft als resultaat de maximumwaarde in een lijst met argumenten
        'MAXA' => 'MAXA', //Geeft als resultaat de maximumwaarde in een lijst met argumenten, inclusief getallen, tekst en logische waarden
        'MEDIAAN' => 'MEDIAN', //Geeft als resultaat de mediaan van de opgegeven getallen
        'MIN' => 'MIN', //Geeft als resultaat de minimumwaarde in een lijst met argumenten
        'MINA' => 'MINA', //Geeft als resultaat de minimumwaarde in een lijst met argumenten, inclusief getallen, tekst en logische waarden
        'MODUS' => 'MODE', //Geeft als resultaat de meest voorkomende waarde in een gegevensverzameling
        'NEG.BINOM.VERD' => 'NEGBINOMDIST', //Geeft als resultaat de negatieve binomiaalverdeling
        'NORM.VERD' => 'NORMDIST', //Geeft als resultaat de cumulatieve normale verdeling
        'NORM.INV' => 'NORMINV', //Geeft als resultaat de inverse van de cumulatieve standaardnormale verdeling
        'STAND.NORM.VERD' => 'NORMSDIST', //Geeft als resultaat de cumulatieve standaardnormale verdeling
        'STAND.NORM.INV' => 'NORMSINV', //Geeft als resultaat de inverse van de cumulatieve normale verdeling
        'PEARSON' => 'PEARSON', //Geeft als resultaat de correlatiecoëfficiënt van Pearson
        'PERCENTIEL' => 'PERCENTILE', //Geeft als resultaat het k-de percentiel van waarden in een bereik
        'PERCENT.RANG' => 'PERCENTRANK', //Geeft als resultaat de positie, in procenten uitgedrukt, van een waarde in de rangorde van een gegevensverzameling
        'PERMUTATIES' => 'PERMUT', //Geeft als resultaat het aantal permutaties voor een gegeven aantal objecten
        'POISSON' => 'POISSON', //Geeft als resultaat de Poisson-verdeling
        'KANS' => 'PROB', //Geeft als resultaat de kans dat waarden zich tussen twee grenzen bevinden
        'KWARTIEL' => 'QUARTILE', //Geeft als resultaat het kwartiel van een gegevensverzameling
        'RANG' => 'RANK', //Geeft als resultaat het rangnummer van een getal in een lijst getallen
        'R.KWADRAAT' => 'RSQ', //Geeft als resultaat het kwadraat van de Pearson-correlatiecoëfficiënt
        'SCHEEFHEID' => 'SKEW', //Geeft als resultaat de mate van asymmetrie van een verdeling
        'RICHTING' => 'SLOPE', //Geeft als resultaat de richtingscoëfficiënt van een lineaire regressielijn
        'KLEINSTE' => 'SMALL', //Geeft als resultaat de op k-1 na kleinste waarde in een gegevensverzameling
        'NORMALISEREN' => 'STANDARDIZE', //Geeft als resultaat een genormaliseerde waarde
        'STDEV' => 'STDEV', //Maakt een schatting van de standaarddeviatie op basis van een steekproef
        'STDEVA' => 'STDEVA', //Maakt een schatting van de standaarddeviatie op basis van een steekproef, inclusief getallen, tekst en logische waarden
        'STDEVP' => 'STDEVP', //Berekent de standaarddeviatie op basis van de volledige populatie
        'STDEVPA' => 'STDEVPA', //Berekent de standaarddeviatie op basis van de volledige populatie, inclusief getallen, tekst en logische waarden
        'STAND.FOUT.YX' => 'STEYX', //Geeft als resultaat de standaardfout in de voorspelde y-waarde voor elke x in een regressie
        'T.VERD' => 'TDIST', //Geeft als resultaat de Student T-verdeling
        'T.INV' => 'TINV', //Geeft als resultaat de inverse van de Student T-verdeling
        'TREND' => 'TREND', //Geeft als resultaat de waarden voor een lineaire trend
        'GETRIMD.GEM' => 'TRIMMEAN', //Geeft als resultaat het gemiddelde van waarden in een gegevensverzameling
        'T.TOETS' => 'TTEST', //Geeft als resultaat de kans met behulp van de Student T-toets
        'VAR' => 'VAR', //Maakt een schatting van de variantie op basis van een steekproef
        'VARA' => 'VARA', //Maakt een schatting van de variantie op basis van een steekproef, inclusief getallen, tekst en logische waarden
        'VARP' => 'VARP', //Berekent de variantie op basis van de volledige populatie
        'VARPA' => 'VARPA', //Berekent de standaarddeviatie op basis van de volledige populatie, inclusief getallen, tekst en logische waarden
        'WEIBULL' => 'WEIBULL', //Geeft als resultaat de Weibull-verdeling
        'Z.TOETS' => 'ZTEST', //Geeft als resultaat de eenzijdige kanswaarde van een Z-toets
        'ASC' => 'ASC', //Wijzigt Nederlandse letters of katakanatekens over de volle breedte (dubbel-bytetekens) binnen een tekenreeks in tekens over de halve breedte (enkel-bytetekens)
        'BAHT.TEKST' => 'BAHTTEXT', //Converteert een getal naar tekst met de valutanotatie ß (baht)
        'TEKEN' => 'CHAR', //Geeft als resultaat het teken dat hoort bij de opgegeven code
        'WISSEN.CONTROL' => 'CLEAN', //Verwijdert alle niet-afdrukbare tekens uit een tekst
        'CODE' => 'CODE', //Geeft als resultaat de numerieke code voor het eerste teken in een tekenreeks
        'TEKST.SAMENVOEGEN' => 'CONCATENATE', //Voegt verschillende tekstfragmenten samen tot één tekstfragment
        'EURO' => 'DOLLAR', //Converteert een getal naar tekst met de valutanotatie € (euro)
        'GELIJK' => 'EXACT', //Controleert of twee tekenreeksen identiek zijn
        'VIND.ALLES' => 'FIND', //Zoekt een bepaalde tekenreeks in een tekst (waarbij onderscheid wordt gemaakt tussen hoofdletters en kleine letters)
        'VIND.ALLES.B' => 'FINDB', //Zoekt een bepaalde tekenreeks in een tekst (waarbij onderscheid wordt gemaakt tussen hoofdletters en kleine letters)
        'VAST' => 'FIXED', //Maakt een getal als tekst met een vast aantal decimalen op
        'JIS' => 'JIS', //Wijzigt Nederlandse letters of katakanatekens over de halve breedte (enkel-bytetekens) binnen een tekenreeks in tekens over de volle breedte (dubbel-bytetekens)
        'LINKS' => 'LEFT', //Geeft als resultaat de meest linkse tekens in een tekenreeks
        'LINKSB' => 'LEFTB', //Geeft als resultaat de meest linkse tekens in een tekenreeks
        'LENGTE' => 'LEN', //Geeft als resultaat het aantal tekens in een tekenreeks
        'LENGTEB' => 'LENB', //Geeft als resultaat het aantal tekens in een tekenreeks
        'KLEINE.LETTERS' => 'LOWER', //Zet tekst om in kleine letters
        'MIDDEN' => 'MID', //Geeft als resultaat een bepaald aantal tekens van een tekenreeks vanaf de positie die u opgeeft
        'DEELB' => 'MIDB', //Geeft als resultaat een bepaald aantal tekens van een tekenreeks vanaf de positie die u opgeeft
        'FONETISCH' => 'PHONETIC', //Haalt de fonetische tekens (furigana) uit een tekenreeks op
        'BEGINLETTERS' => 'PROPER', //Zet de eerste letter van elk woord in een tekst om in een hoofdletter
        'VERVANG' => 'REPLACE', //Vervangt tekens binnen een tekst
        'VERVANGENB' => 'REPLACEB', //Vervangt tekens binnen een tekst
        'HERHALING' => 'REPT', //Herhaalt een tekst een aantal malen
        'RECHTS' => 'RIGHT', //Geeft als resultaat de meest rechtse tekens in een tekenreeks
        'RECHTSB' => 'RIGHTB', //Geeft als resultaat de meest rechtse tekens in een tekenreeks
        'VIND.SPEC' => 'SEARCH', //Zoekt een bepaalde tekenreeks in een tekst (waarbij geen onderscheid wordt gemaakt tussen hoofdletters en kleine letters)
        'VIND.SPEC.B' => 'SEARCHB', //Zoekt een bepaalde tekenreeks in een tekst (waarbij geen onderscheid wordt gemaakt tussen hoofdletters en kleine letters)
        'SUBSTITUEREN' => 'SUBSTITUTE', //Vervangt oude tekst door nieuwe tekst in een tekenreeks
        'T' => 'T', //Converteert de argumenten naar tekst
        'TEKST' => 'TEXT', //Maakt een getal op en converteert het getal naar tekst
        'SPATIES.WISSEN' => 'TRIM', //Verwijdert de spaties uit een tekst
        'HOOFDLETTERS' => 'UPPER', //Zet tekst om in hoofdletters
        'WAARDE' => 'VALUE', //Converteert tekst naar een getal
    ],
];
//EOF
