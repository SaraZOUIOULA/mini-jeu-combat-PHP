# mini-jeu-combat-PHP

combat entre 3 personnages avec comportements différents:

Magician:
  Il a 5 fois plus de points de magie que les autres.
  Il a une attaque (damage) de 5.
  Son attaque : Boule de feu.
  Utilise des poins de magie, aléatoirement entre 1 et 20.
  Les dégâts de la boule de feu sont égaux au coût en point de magie * nombre aléatoire entre 1 et 3.
  3 possibilités à l'attaque :
    Il a assez de points de magie : sort normal.
    Il n'a plus assez de points de magie : sort lancé avec les points de magie restant.
    Si plus de points de magie : il donne un coup de bâton.

Warrior:
  -Il a 2/10 chance de lancer sa rage.
  -Si rage active, alors les dégats de son attaque suivante sont multipliés par un nombre aléatoire entre 1.5 et 3.
  -Comme le bouclier, si la rage est active, il ne la relance pas.

Archer:

  -Tirer une flèche
  -Viser un point faible : pas d'attaque ce tour-ci, mais inflige aléatoirement entre 1.5 et 3 fois les dégats de l'attaque suivante (au tour suivant)
  -Si plus de flèche : attaque avec une dague, mais fait moins de dégats qu'avec son arc.
