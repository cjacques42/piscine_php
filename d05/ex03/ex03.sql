INSERT INTO `ft_table` (login, date_de_creation, groupe)
SELECT nom, date_naissance, 'other'
FROM fiche_personne
WHERE LENGTH(nom) < 9 AND nom LIKE '%a%'
ORDER BY nom LIMIT 10;
