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





Read:

users:
SELECT `id`, `nom`, `prenom`, `deuxieme_prenom`, `role`, `adresse_domicile`, `date_de_naissance`, `telephone`, `status_marital`, `status_vital`, `numero_secu_social`, `email`, `password` 
FROM `users` 
WHERE 1

infos:
SELECT `id`, `auteur`, `title`, `contenus`, `date_d_ajout` 
FROM `infos_news` 
WHERE 1

documents:
SELECT `id`, `id_user`, `name_file`, `type_file`, `description_file`, `date_insert_file` FROM `etudes_docs` WHERE 1




Update:
users:
UPDATE `users` 
SET `id`='[value-1]',`nom`='[value-2]',`prenom`='[value-3]',`deuxieme_prenom`='[value-4]',`role`='[value-5]',`adresse_domicile`='[value-6]',`date_de_naissance`='[value-7]',`telephone`='[value-8]',`status_marital`='[value-9]',`status_vital`='[value-10]',`numero_secu_social`='[value-11]',`email`='[value-12]',`password`='[value-13]' 
WHERE 1

infos:
UPDATE `infos_news` 
SET `id`='[value-1]',`auteur`='[value-2]',`title`='[value-3]',`contenus`='[value-4]',`date_d_ajout`='[value-5]'
WHERE 1

documents:
UPDATE `etudes_docs` 
SET `id`='[value-1]',`id_user`='[value-2]',`name_file`='[value-3]',`type_file`='[value-4]',`description_file`='[value-5]',`date_insert_file`='[value-6]' 
WHERE 1




Delete:

users:
DELETE FROM `users` WHERE id = (id utilisateur)

infos:
DELETE FROM `users` WHERE id = (id de l article)

documents:
DELETE FROM `users` WHERE id = (id de document)
