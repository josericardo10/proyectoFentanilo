--registro de servicios 
INSERT INTO servicios (c_filtro, c_aceite, c_frenos, otros) VALUES
(FALSE, FALSE, FALSE, 'Revisión general'),
(TRUE, FALSE, FALSE, 'Cambio de filtro de aire'),
(FALSE, TRUE, FALSE, 'Cambio de aceite'),
(FALSE, FALSE, TRUE, 'Revisión y ajuste de frenos'),
(TRUE, TRUE, FALSE, 'Cambio de filtro y aceite'),
(FALSE, TRUE, TRUE, 'Cambio de aceite y ajuste de frenos'),
(TRUE, FALSE, TRUE, 'Cambio de filtro y ajuste de frenos'),
(TRUE, TRUE, TRUE, 'Mantenimiento completo'),
(FALSE, FALSE, FALSE, 'Inspección de llantas'),
(FALSE, FALSE, FALSE, 'Revisión de luces');
