Y. vytvorim na W novy adresar
X. TODO(odnekud) si zkopiruji package.json a Gruntfile.js
1. spustim si Node JS prikazovou radku
2. napisu "npm install"
3. pomoci git bash vytvorim z adresare git repositar pomoci prikazu "git init"
4. pomoci git bash si natahnu alfax pomoci prikazu "git submodule add git@github.com:shockworks/alfax.git core" TODO(je nutne vyresit problem s SSH, jakmile bude repositar privatni)
4.1 pri prvnim spusteni je nutne spustit prikazy:
4.1.1 "ssh-keygen -t rsa -C "your_email@example.com"" pro vyvoreni ssh klice
4.1.2 ssh-agent
4.1.2 eval $(ssh-agent)
4.1.3 ssh-add ~/.ssh/id_rsa
4.1.4 ulozeny klic ve slozce prekopiruji do klicu v gitu (public key s priponou pub)
5.




// nova stromova struktura
1. doslo ke zmene slozky pictures/ na client-files/ s podsložkama @todo: pro prevod starsich projektu bude nutne prehrat vse z pictures/ do client-files/images/ a v htaccess nastavit presmerovani
2. todo: chybi zde backend, potreba vyresit kam dame
3. adresar /includes/ by mel byt temp vsech ruznych sablon, css a js po kompilaci


TODO
1. je treba vyresit nacitani pluginu ze cdn, jak budeme nove delat
2. webfonts, zacit pouzivat jen systemy jinych hracu na trhu (adobe, google), vlastni webfonts zrusit
3. nutne vyresit, zda budeme javascripty a css soubory concatovat a minimalizovat a nahrajeme vse zaraz, nebo budeme volat lazy load, osobne vidim tak, ze pripravime concat a uvidime jak velke soubory to budou
4. je treba zrusit nase cdn, zatim to vypada na system bower, zde je ale celkem problem, ze chybi (nevim jak) automatizace prekladu