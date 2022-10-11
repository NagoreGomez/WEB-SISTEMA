# WEB-SISTEMA

## Aurkibidea
* [Proiektuaren deskribapena](#Proiektuen-deskribapena)
* [Taldekidea](#Taldekideak)
* [Docker bidez proiektua hedatzeko instrukzioak](#Docker-bidez-proiektua-hedatzeko-instrukzioak)

## Proiektuaren deskribapena
Informazio Sistemen Segurtasuna Kudeatzeko Sistemak irakasgaian garatutako Web Sistema.


## Taldekideak
* Sergio Martín
* Jonás Martínez
* Nagore Gomez

## Docker bidez proiektua hedatzeko instrukzioak
1. [Proiektu honetako HTTPS linka kopiatu](https://github.com/NagoreGomez/WEB-SISTEMA)
2. Karpeta berri bat sortu proiektua gordetzeko
3. karpeta horren terminala ireki --> eskubiko klika eta "ireki hau terminalean" klikatu
4. Terminalean hurrengo komandoak sartu:
    * `git clone https://github.com/NagoreGomez/WEB-SISTEMA`
    * `sudo docker build -t="web" .`
    * `sudo docker-compose up`
5. [Ireki php my admin](http://localhost:8890)
6. Erabiltzailea="admin" Pasahitza="test"
7. Sakatu “database”,gero “importar” eta "Examinar" eta proiektuaren karpetan dagoen "ELNOMBREQUELEPONGAMOS" aukeratu. Amaitzeko, "continuar" sakatu
8. Inplementatutako CCS-engatik gomendatzen dugu Google Chrome erabiltzea 
9. [Web gunea ireki](http://localhost:81/index.php)(modu egokian ikusteko chrome nabigatzailea erabili)
