SELECT * FROM p2018_benefited LIMIT 7;

CREATE OR REPLACE VIEW p2018_deliveries AS
SELECT
s.group_id 'Grupo',
b.card 'DNI',
CONCAT(b.lastname, ' ', b.firstname) 'Apellidos',
s.turkey_ticket 'Boleto',
s.observations 'Observaciones',
r.definition 'Racion',
tb.definition 'Tipo',
d.definition 'Dependencia',
s.created_at 'F. Creacion',
s.id 'Delivery'
FROM p2018_sheets s
INNER JOIN p2018_benefited b ON s.benefited_id =b.id
INNER JOIN p2018_rations r ON b.ration_id = r.id
INNER JOIN p2018_types_beneficiary tb ON b.type_benefited_id = tb.id
INNER JOIN p2018_dependencies d ON b.dependence_id = d.id;
