Create:
users:
INSERT INTO `users`(`id`, `nom`, `prenom`, `deuxieme_prenom`, `role`, `adresse_domicile`, `date_de_naissance`, `telephone`, `status_marital`, `status_vital`, `numero_secu_social`, `email`, `password`) 
exemple VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')
infos:
INSERT INTO `infos_news`(`id`, `auteur`, `title`, `contenus`, `date_d_ajout`) 
exemple: VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
documents:
exemple pour les 
INSERT INTO `table docs`(`id`, `id_user`, `name_file`, `type_of_file`, `description_file`, `date_insert_file`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')




Delete:

users:
DELETE FROM `users` WHERE id = (id utilisateur)
infos:
DELETE FROM `users` WHERE id = (id de l article)
documents:
DELETE FROM `users` WHERE id = (id de document)
