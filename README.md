# tp_1_Diallo_Kadiatou

Créer un mot de passe avec un salt prédefini et le valider suivant les critères suivants :

La fonction doit recevoir une valeur de mot de passe :

La valeur doit avoir entre 6 et 10 caracctères sinon la fonction doit se terminer et renvoyer un message d'erreur.
Une fois la validation passée, nous devons concaténer un salt au mot de passe. Le salt doit être composé d'une chaine de caractères statique choisie qui est 123-S0leil.
Le nouveau mot de passe (mot de passe d'origine + salt) doit être chiffré
A la fin , la page doit afficher un message texte avec la valeur du salt et le mot de passe chiffré. Le mot de passe doit être testé et renvoyer un message si le MDP est bon ou un autre si le mot de passe est mauvais.
Langage a utiliser : php
