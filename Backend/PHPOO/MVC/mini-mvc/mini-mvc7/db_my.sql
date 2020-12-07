-- Adminer 4.7.5 MySQL dump
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clientes` (`id`, `nome`, `email`) VALUES
(1,	'Diego Lucas Maia Neto',	'ian56@hotmail.com'),
(2,	'Rebeca Batista da Silva Jr.',	'hgarcia@jimenes.net'),
(3,	'Norma Abreu',	'mferreira@branco.net'),
(4,	'Rafaela Cervantes',	'jorge03@meireles.org'),
(5,	'Diego Pereira',	'dante.padilha@yahoo.com'),
(6,	'Cristóvão Hernani Benites Sobrinho',	'branco.henrique@pacheco.com'),
(7,	'Ivan Galvão Filho',	'eduardo05@padrao.com.br'),
(8,	'Pedro Giovane Galvão Sobrinho',	'gusmao.pablo@fernandes.com'),
(9,	'Noelí Aranda Rocha',	'fabiana.rodrigues@ig.com.br'),
(10,	'Clara Galhardo Lovato',	'luzia28@yahoo.com'),
(11,	'Dr. Pâmela Natália Ávila',	'serrano.david@hotmail.com'),
(12,	'Srta. Ashley Carla Grego',	'everton74@pontes.com'),
(13,	'Dr. Cristóvão Flores Jr.',	'mia.santana@gmail.com'),
(14,	'Adriana Ariadna Colaço Jr.',	'sfranco@ig.com.br'),
(15,	'Dr. Vicente Serra Benites Neto',	'demian41@rezende.com.br'),
(16,	'Henrique Máximo Paz',	'vbonilha@r7.com'),
(17,	'Carla da Rosa das Neves',	'ecaldeira@leal.com'),
(18,	'Camila Branco de Oliveira Neto',	'fabiana.colaco@salas.com.br'),
(19,	'Gian Paes Perez Jr.',	'deaguiar.daniel@r7.com'),
(20,	'Noel Thiago Beltrão Filho',	'pamela77@delvalle.com'),
(21,	'Dr. Miguel Christopher Feliciano Sobrinho',	'pena.elizabeth@deaguiar.net'),
(22,	'Violeta Ariana Delvalle Jr.',	'luara77@davila.br'),
(23,	'Srta. Thalissa Delatorre',	'ogoncalves@ig.com.br'),
(24,	'Carla Ávila Perez Jr.',	'allison06@soares.org'),
(25,	'Antônio Pedro Gomes',	'martinho.davila@sanches.net'),
(26,	'Srta. Samanta Catarina da Rosa Sobrinho',	'tomas44@queiros.com.br'),
(27,	'Sra. Isadora Júlia Garcia Jr.',	'laura96@yahoo.com'),
(28,	'Sr. José Hernani Pacheco Sobrinho',	'gvega@guerra.net'),
(29,	'Andres Maia Caldeira Filho',	'adriano62@valdez.com'),
(30,	'Silvana Melissa Meireles',	'amanda.lozano@terra.com.br'),
(31,	'Maximiano Pedro Padilha Neto',	'mia.soares@yahoo.com'),
(32,	'Rodrigo Rangel',	'soares.hernani@matias.com'),
(33,	'Dr. Elias Ferraz Mendonça',	'mendonca.samuel@gil.com'),
(34,	'Malena Oliveira Ramos Sobrinho',	'luara.ramos@yahoo.com'),
(35,	'Sr. Emiliano Domingues',	'gabriel75@terra.com.br'),
(36,	'Ariadna Colaço Neto',	'valentin.santiago@domingues.com.br'),
(37,	'Sra. Sofia Violeta Valência',	'elias.pacheco@garcia.com.br'),
(38,	'Bruno Tomás Bittencourt Sobrinho',	'daniel.pontes@uol.com.br'),
(39,	'Inácio Ferraz Filho',	'eduardo38@martines.net'),
(40,	'Santiago Ian Pereira',	'hugo.urias@rangel.br'),
(41,	'Srta. Josefina da Cruz Filho',	'luis.vega@uol.com.br'),
(42,	'Sr. Aaron Verdara Carrara Sobrinho',	'godoi.sofia@franco.com'),
(43,	'Sra. Norma Abril Rico',	'mario.valdez@gmail.com'),
(44,	'Srta. Nicole das Dores Filho',	'kevin.medina@terra.com.br'),
(45,	'Violeta Nicole Furtado',	'ivana27@bittencourt.com'),
(46,	'Ivan Toledo',	'joao.aguiar@flores.net.br'),
(47,	'Noelí Isabel Ávila Jr.',	'jtorres@darosa.net.br'),
(48,	'Sra. Luana Valdez Sobrinho',	'everton.vila@gmail.com'),
(49,	'Helena Madalena Ferreira Filho',	'deoliveira.amelia@correia.com.br'),
(50,	'Ketlin Espinoza',	'dmatias@r7.com'),
(51,	'Sra. Alexa Sanches Quintana',	'juliana.rosa@uol.com.br'),
(52,	'Anderson Teles',	'malena23@hotmail.com'),
(53,	'Ziraldo de Souza Casanova Sobrinho',	'emanuel99@gmail.com'),
(54,	'Sra. Paulina Pena Neto',	'sophie00@lutero.net.br'),
(55,	'Sr. Tomás Diego Marin Sobrinho',	'isabel14@terra.com.br'),
(56,	'Gabriel Ricardo Cortês',	'rafael.dasdores@terra.com.br'),
(57,	'Dr. Tábata Antonieta Dominato',	'desouza.juliana@gmail.com'),
(58,	'Sr. Leandro Pablo Padilha',	'mpadrao@r7.com'),
(59,	'Srta. Elizabeth Serna Galhardo Jr.',	'sdelgado@gmail.com'),
(60,	'Dr. Rafael Furtado',	'ocampos@gmail.com'),
(61,	'Dr. Tábata Faria Filho',	'jdominato@avila.org'),
(62,	'Sra. Tábata Adriana Quintana',	'luis10@uol.com.br'),
(63,	'Emílio Mendonça',	'mserna@hotmail.com'),
(64,	'Mia Domingues Torres Filho',	'cervantes.alonso@terra.com.br'),
(65,	'Renata Sales',	'bgalhardo@urias.org'),
(66,	'Sra. Helena Serra Fernandes Neto',	'branco.evandro@mendonca.net.br'),
(67,	'Camila Alexa Lovato',	'zamana.ivan@rico.net'),
(68,	'Tomás Leon Ortega Sobrinho',	'manuel15@goncalves.org'),
(69,	'Ian Santacruz',	'corona.gustavo@ig.com.br'),
(70,	'Júlia Delgado Filho',	'daniel21@barreto.br'),
(71,	'Luis Leon Jr.',	'abreu.emanuel@uol.com.br'),
(72,	'Dr. Cristóvão Josué Esteves Neto',	'andres.rocha@dias.br'),
(73,	'Dr. Antônio Garcia',	'qmascarenhas@hotmail.com'),
(74,	'Thales Cruz',	'luciana.carrara@hotmail.com'),
(75,	'Adriano da Cruz Valdez',	'tqueiros@terra.com.br'),
(76,	'Dr. Inácio Zamana',	'dserra@uol.com.br'),
(77,	'Srta. Josefina Fidalgo',	'fidalgo.pedro@roque.br'),
(78,	'Santiago David Serna Sobrinho',	'benjamin69@r7.com'),
(79,	'Sra. Nádia Ortega',	'abril.correia@dias.org'),
(80,	'Sra. Pâmela Helena Leal Filho',	'soto.ariadna@sales.br'),
(81,	'Sra. Ashley Urias Santacruz',	'tais66@terra.com.br'),
(82,	'Sra. Mariana Santiago',	'vsantana@ig.com.br'),
(83,	'Micaela Matos Cortês',	'pqueiros@garcia.com'),
(84,	'Nicole Cervantes Escobar',	'guilherme.uchoa@ferminiano.com'),
(85,	'Dr. Ian Urias',	'rodrigues.paulina@verdara.com.br'),
(86,	'Nicole Serrano Sobrinho',	'benjamin23@galindo.org'),
(87,	'Amélia Carla Leon Sobrinho',	'maia.samanta@zambrano.net.br'),
(88,	'Sr. Ivan Estrada Neto',	'valentin96@vieira.net'),
(89,	'Srta. Nicole Sara Bittencourt Neto',	'balestero.luciano@uol.com.br'),
(90,	'Demian Solano Jr.',	'nadia50@yahoo.com'),
(91,	'Sr. Kevin Roque Mendes Sobrinho',	'constancia87@yahoo.com'),
(92,	'Dr. Hernani Aranda',	'manuela53@rangel.com.br'),
(93,	'Dr. Luana Prado Neto',	'iesteves@terra.com.br'),
(94,	'Leandro Faro Vila Jr.',	'valentin.sophie@yahoo.com'),
(95,	'Srta. Salomé Natália de Oliveira',	'bonilha.emilia@tamoio.org'),
(96,	'Dr. Tomás Sebastião Pedrosa Jr.',	'lsalazar@brito.com'),
(97,	'Sr. Dante Natal Gomes',	'andrea.barreto@r7.com'),
(98,	'Alexandre Pedro Espinoza',	'mpereira@dacruz.net'),
(99,	'Dr. Tessália Jimenes Neto',	'dacruz.mateus@dasdores.net.br'),
(100,	'Violeta Delvalle Ramos Neto',	'gfurtado@uol.com.br');

-- 2020-04-08 18:30:20

-- Adminer 4.7.5 MySQL dump
CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `vendedores` (`id`, `nome`, `email`) VALUES
(1,	'Diego Lucas Maia Neto',	'ian56@hotmail.com'),
(2,	'Rebeca Batista da Silva Jr.',	'hgarcia@jimenes.net'),
(3,	'Norma Abreu',	'mferreira@branco.net'),
(4,	'Rafaela Cervantes',	'jorge03@meireles.org'),
(5,	'Diego Pereira',	'dante.padilha@yahoo.com'),
(6,	'Cristóvão Hernani Benites Sobrinho',	'branco.henrique@pacheco.com'),
(7,	'Ivan Galvão Filho',	'eduardo05@padrao.com.br'),
(8,	'Pedro Giovane Galvão Sobrinho',	'gusmao.pablo@fernandes.com'),
(9,	'Noelí Aranda Rocha',	'fabiana.rodrigues@ig.com.br'),
(10,	'Clara Galhardo Lovato',	'luzia28@yahoo.com'),
(11,	'Dr. Pâmela Natália Ávila',	'serrano.david@hotmail.com'),
(12,	'Srta. Ashley Carla Grego',	'everton74@pontes.com'),
(13,	'Dr. Cristóvão Flores Jr.',	'mia.santana@gmail.com'),
(14,	'Adriana Ariadna Colaço Jr.',	'sfranco@ig.com.br'),
(15,	'Dr. Vicente Serra Benites Neto',	'demian41@rezende.com.br'),
(16,	'Henrique Máximo Paz',	'vbonilha@r7.com'),
(17,	'Carla da Rosa das Neves',	'ecaldeira@leal.com'),
(18,	'Camila Branco de Oliveira Neto',	'fabiana.colaco@salas.com.br'),
(19,	'Gian Paes Perez Jr.',	'deaguiar.daniel@r7.com'),
(20,	'Noel Thiago Beltrão Filho',	'pamela77@delvalle.com'),
(21,	'Dr. Miguel Christopher Feliciano Sobrinho',	'pena.elizabeth@deaguiar.net'),
(22,	'Violeta Ariana Delvalle Jr.',	'luara77@davila.br'),
(23,	'Srta. Thalissa Delatorre',	'ogoncalves@ig.com.br'),
(24,	'Carla Ávila Perez Jr.',	'allison06@soares.org'),
(25,	'Antônio Pedro Gomes',	'martinho.davila@sanches.net'),
(26,	'Srta. Samanta Catarina da Rosa Sobrinho',	'tomas44@queiros.com.br'),
(27,	'Sra. Isadora Júlia Garcia Jr.',	'laura96@yahoo.com'),
(28,	'Sr. José Hernani Pacheco Sobrinho',	'gvega@guerra.net'),
(29,	'Andres Maia Caldeira Filho',	'adriano62@valdez.com'),
(30,	'Silvana Melissa Meireles',	'amanda.lozano@terra.com.br'),
(31,	'Maximiano Pedro Padilha Neto',	'mia.soares@yahoo.com'),
(32,	'Rodrigo Rangel',	'soares.hernani@matias.com'),
(33,	'Dr. Elias Ferraz Mendonça',	'mendonca.samuel@gil.com'),
(34,	'Malena Oliveira Ramos Sobrinho',	'luara.ramos@yahoo.com'),
(35,	'Sr. Emiliano Domingues',	'gabriel75@terra.com.br'),
(36,	'Ariadna Colaço Neto',	'valentin.santiago@domingues.com.br'),
(37,	'Sra. Sofia Violeta Valência',	'elias.pacheco@garcia.com.br'),
(38,	'Bruno Tomás Bittencourt Sobrinho',	'daniel.pontes@uol.com.br'),
(39,	'Inácio Ferraz Filho',	'eduardo38@martines.net'),
(40,	'Santiago Ian Pereira',	'hugo.urias@rangel.br'),
(41,	'Srta. Josefina da Cruz Filho',	'luis.vega@uol.com.br'),
(42,	'Sr. Aaron Verdara Carrara Sobrinho',	'godoi.sofia@franco.com'),
(43,	'Sra. Norma Abril Rico',	'mario.valdez@gmail.com'),
(44,	'Srta. Nicole das Dores Filho',	'kevin.medina@terra.com.br'),
(45,	'Violeta Nicole Furtado',	'ivana27@bittencourt.com'),
(46,	'Ivan Toledo',	'joao.aguiar@flores.net.br'),
(47,	'Noelí Isabel Ávila Jr.',	'jtorres@darosa.net.br'),
(48,	'Sra. Luana Valdez Sobrinho',	'everton.vila@gmail.com'),
(49,	'Helena Madalena Ferreira Filho',	'deoliveira.amelia@correia.com.br'),
(50,	'Ketlin Espinoza',	'dmatias@r7.com'),
(51,	'Sra. Alexa Sanches Quintana',	'juliana.rosa@uol.com.br'),
(52,	'Anderson Teles',	'malena23@hotmail.com'),
(53,	'Ziraldo de Souza Casanova Sobrinho',	'emanuel99@gmail.com'),
(54,	'Sra. Paulina Pena Neto',	'sophie00@lutero.net.br'),
(55,	'Sr. Tomás Diego Marin Sobrinho',	'isabel14@terra.com.br'),
(56,	'Gabriel Ricardo Cortês',	'rafael.dasdores@terra.com.br'),
(57,	'Dr. Tábata Antonieta Dominato',	'desouza.juliana@gmail.com'),
(58,	'Sr. Leandro Pablo Padilha',	'mpadrao@r7.com'),
(59,	'Srta. Elizabeth Serna Galhardo Jr.',	'sdelgado@gmail.com'),
(60,	'Dr. Rafael Furtado',	'ocampos@gmail.com'),
(61,	'Dr. Tábata Faria Filho',	'jdominato@avila.org'),
(62,	'Sra. Tábata Adriana Quintana',	'luis10@uol.com.br'),
(63,	'Emílio Mendonça',	'mserna@hotmail.com'),
(64,	'Mia Domingues Torres Filho',	'cervantes.alonso@terra.com.br'),
(65,	'Renata Sales',	'bgalhardo@urias.org'),
(66,	'Sra. Helena Serra Fernandes Neto',	'branco.evandro@mendonca.net.br'),
(67,	'Camila Alexa Lovato',	'zamana.ivan@rico.net'),
(68,	'Tomás Leon Ortega Sobrinho',	'manuel15@goncalves.org'),
(69,	'Ian Santacruz',	'corona.gustavo@ig.com.br'),
(70,	'Júlia Delgado Filho',	'daniel21@barreto.br'),
(71,	'Luis Leon Jr.',	'abreu.emanuel@uol.com.br'),
(72,	'Dr. Cristóvão Josué Esteves Neto',	'andres.rocha@dias.br'),
(73,	'Dr. Antônio Garcia',	'qmascarenhas@hotmail.com'),
(74,	'Thales Cruz',	'luciana.carrara@hotmail.com'),
(75,	'Adriano da Cruz Valdez',	'tqueiros@terra.com.br'),
(76,	'Dr. Inácio Zamana',	'dserra@uol.com.br'),
(77,	'Srta. Josefina Fidalgo',	'fidalgo.pedro@roque.br'),
(78,	'Santiago David Serna Sobrinho',	'benjamin69@r7.com'),
(79,	'Sra. Nádia Ortega',	'abril.correia@dias.org'),
(80,	'Sra. Pâmela Helena Leal Filho',	'soto.ariadna@sales.br'),
(81,	'Sra. Ashley Urias Santacruz',	'tais66@terra.com.br'),
(82,	'Sra. Mariana Santiago',	'vsantana@ig.com.br'),
(83,	'Micaela Matos Cortês',	'pqueiros@garcia.com'),
(84,	'Nicole Cervantes Escobar',	'guilherme.uchoa@ferminiano.com'),
(85,	'Dr. Ian Urias',	'rodrigues.paulina@verdara.com.br'),
(86,	'Nicole Serrano Sobrinho',	'benjamin23@galindo.org'),
(87,	'Amélia Carla Leon Sobrinho',	'maia.samanta@zambrano.net.br'),
(88,	'Sr. Ivan Estrada Neto',	'valentin96@vieira.net'),
(89,	'Srta. Nicole Sara Bittencourt Neto',	'balestero.luciano@uol.com.br'),
(90,	'Demian Solano Jr.',	'nadia50@yahoo.com'),
(91,	'Sr. Kevin Roque Mendes Sobrinho',	'constancia87@yahoo.com'),
(92,	'Dr. Hernani Aranda',	'manuela53@rangel.com.br'),
(93,	'Dr. Luana Prado Neto',	'iesteves@terra.com.br'),
(94,	'Leandro Faro Vila Jr.',	'valentin.sophie@yahoo.com'),
(95,	'Srta. Salomé Natália de Oliveira',	'bonilha.emilia@tamoio.org'),
(96,	'Dr. Tomás Sebastião Pedrosa Jr.',	'lsalazar@brito.com'),
(97,	'Sr. Dante Natal Gomes',	'andrea.barreto@r7.com'),
(98,	'Alexandre Pedro Espinoza',	'mpereira@dacruz.net'),
(99,	'Dr. Tessália Jimenes Neto',	'dacruz.mateus@dasdores.net.br'),
(100,	'Violeta Delvalle Ramos Neto',	'gfurtado@uol.com.br');

-- 2020-04-08 18:30:20
