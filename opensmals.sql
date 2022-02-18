-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18-Fev-2022 às 02:15
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `opensmals`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` (
  `cod` int(11) NOT NULL,
  `codTurma` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`cod`, `codTurma`, `nome`) VALUES
(1, 1, 'E1'),
(2, 1, 'E2'),
(3, 1, 'E3'),
(4, 1, 'E4'),
(5, 1, 'E5'),
(6, 1, 'E6'),
(7, 1, 'E7'),
(8, 1, 'E8'),
(9, 1, 'E9'),
(10, 1, 'E10'),
(11, 1, 'E11'),
(12, 1, 'E12'),
(13, 1, 'E13'),
(14, 1, 'E14'),
(15, 1, 'E15'),
(16, 1, 'E16'),
(17, 1, 'E17'),
(18, 1, 'E18'),
(19, 1, 'E19'),
(20, 1, 'E20'),
(21, 1, 'E21'),
(22, 1, 'E22'),
(23, 1, 'E23'),
(24, 1, 'E24'),
(25, 1, 'E25'),
(26, 1, 'E26'),
(27, 1, 'E27'),
(28, 1, 'E28'),
(29, 1, 'E29'),
(30, 1, 'E30'),
(31, 1, 'E31'),
(32, 1, 'E32'),
(33, 1, 'E33'),
(34, 1, 'E34'),
(35, 1, 'E35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estrategias`
--

CREATE TABLE `tb_estrategias` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `qual_estrategia` text NOT NULL,
  `principais_ganhos` text NOT NULL,
  `organizar_alunos` text NOT NULL,
  `etapas` text NOT NULL,
  `implementar_estrutura` text NOT NULL,
  `artigos` text NOT NULL,
  `classificacao` text NOT NULL,
  `referencias` text NOT NULL,
  `status_estrategia` int(11) DEFAULT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `preRequisito` text NOT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_estrategias`
--

INSERT INTO `tb_estrategias` (`cod`, `nome`, `qual_estrategia`, `principais_ganhos`, `organizar_alunos`, `etapas`, `implementar_estrutura`, `artigos`, `classificacao`, `referencias`, `status_estrategia`, `cod_usuario`, `preRequisito`, `comentario`) VALUES
(4, 'Aprendizagem baseada em sistemas semelhantes', '<p class=\"lead\">A estratégia de Aprendizagem Baseada em Sistemas Similares permite que os alunos investiguem um sistema semelhante ao que pretendem modelar e, portanto, realizem a modelagem do novo sistema com base nas características identificadas no sistema escolhido ( Stoecklin et al. , 1998) .</p>', '<ul class=\"lead\">\r\nEssa estratégia permite :\r\n<li>Proporcionar aos alunos o conhecimento da metodologia de desenvolvimento, com base em sistemas já implementados.</li>\r\n<li>Fornecer aos alunos conhecimentos úteis sobre a especificação / modelagem de um sistema.</li>\r\n<li>Para mostrar aos alunos a importância da modelagem correta do sistema.</li>\r\n<li>Os alunos devem verificar a consistência da modelagem realizada, tendo como base um sistema já implementado.</li>\r\n</ul>', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n<li>Individualmente</li>\r\n<li>Pares</li>\r\n<li>Grupos</li>\r\n</ul>', '<ul> \r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n<li>Etapa 01: O instrutor apresenta os conceitos sobre o modelo durante a aula e, a seguir, fornece um cenário para os alunos realizarem a modelagem.</li>\r\n<li>Etapa 02: Os alunos em equipes / grupos buscam sistemas com características semelhantes ao cenário fornecido pelo instrutor.</li>\r\n<li>Passo 03: Os alunos procuram identificar as funcionalidades básicas do sistema encontradas e, a partir disso, os alunos verificam quais são as funcionalidades semelhantes e iniciam o processo de elaboração dos modelos, com base no cenário entregue pelo instrutor.</li>\r\n<li>Passo 04: Em cada nível de abstração que os alunos inserem representa um ciclo no processo de ensino. Por exemplo, para o diagrama de classes, o primeiro ciclo é a identificação das classes e o segundo ciclo é a relação correta entre essas classes.</li>\r\n<li>Etapa 05: As etapas 03 e 04 são realizadas até que o modelo esteja totalmente desenvolvido.</li>\r\n</ul>', 'Para aplicar a estratégia, é necessária uma aula de 1h40min.', 'Stoecklin S, Williams DD, Swain R. Compreendendo as especificações de sistemas orientados a objetos usando sistemas familiares. InSoftware Engineering: Education & Practice, 1998. Proceedings. Conferência Internacional de 1998, 26 de janeiro de 1998 (pp. 10-15). IEEE.', 'Estratégia para resolução de problemas.', 'Stoecklin S, Williams DD, Swain R. Compreendendo as especificações de sistemas orientados a objetos usando sistemas familiares. InSoftware Engineering: Education & Practice, 1998. Proceedings. Conferência Internacional de 1998, 26 de janeiro de 1998 (pp. 10-15). IEEE.', 1, 1, '<ul>\r\n</li>Os alunos já precisam saber a notação do modelo.</li>\r\n<li>É necessário que os alunos tenham resolvido vários problemas de modelagem no modelo que o professor deseja que eles desenvolvam.</li>\r\n</ul>', ''),
(5, 'Jigsaw', '<b>Jigsaw</b> é uma estratégia proposta por Aronson et al. (1998), e ec é uma estratégia que consiste em dividir o material de aprendizagem em tarefas parciais. Cada aluno da equipe é como uma peça de quebra-cabeça que realizará uma tarefa parcial, que ao final do processo será compartilhada com todos os demais membros da equipe ( Deibel, 2005).', '<ul>\r\nEssa estratégia permite :\r\n<li>Para melhorar as habilidades de modelagem dos alunos, projetando o modelo de forma colaborativa.</li>\r\n<li>Aprimorar o conhecimento dos alunos, em profundidade, sobre o modelo que será estudado.</li>\r\n<li>Para melhorar a capacidade dos alunos de compartilhar o conhecimento adquirido com outros alunos.</li>\r\n</ul>', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n<li>Individualmente</li>\r\n<li>Pares</li>\r\n<li>Grupos</li>\r\n</ul>', '<ul>\r\n<li>Etapa 01. O instrutor apresenta uma lista de possíveis tópicos para desenvolver a experiência, deixando claro a divisão do material em partes componentes.</li>\r\n<li>Etapa 02. Os alunos formam grupos encarregados de desenvolver a experiência sobre um determinado tema.</li>\r\n<li>Etapa 03. Os alunos trabalham nesses grupos de especialistas para dominar o tópico. Eles também determinam maneiras de ajudar outras pessoas a aprender o material, explorando possíveis explicações, exemplos, ilustrações e aplicações.</li>\r\n<li>Etapa 04. Os alunos passam de seus grupos de especialistas para novos grupos de Jigsaw, nos quais cada aluno aborda apenas um tópico específico. Nesses grupos, especialistas ministram o material e conduzem a discussão sobre o tema específico. Assim, cada nova turma do Jigsaw é formada por quatro a seis alunos, cujos integrantes são preparados para ministrar a disciplina aos seus pares.</li>\r\n<li>Etapa 05. A turma inteira reflete sobre as conclusões do grupo em uma atividade de encerramento.</li>\r\n</ul>', 'Para a aplicação da estratégia em sala de aula, são necessárias mais duas aulas, cada uma com 1h40min. Durante as aulas, os alunos debaterão sobre os conhecimentos que estão adquirindo.', '<ul>\r\n<li>Portillo JA, Campos PG A técnica do quebra-cabeças: experiências ensinando análise de diagramas de aula. InComputer Science (ENC), Conferência Internacional Mexicana de 2009 em 21 de setembro de 2009 (pp. 289-293). IEEE.</li>\r\n<li>Natarajan, S., Aprendizagem Colaborativa em um Curso de Sistemas Operacionais: Um Relatório de Experiência, Conferência de Fronteiras na Educação, Conf 34, Vol 3, pp. SF2-7-SF2-12, EUA, 2004.</li>\r\n</ul>', 'Ensino recíproco, resolução de problemas e discussão.', 'Aronson, E. et al, The Jigsaw Classroom, Sage, Beverly Hills, 1978. Deibel, K., Métodos de Formação de Equipe para Aumentar a Interação durante o Trabalho de Grupo em Classe, Anais da 10ª Conferência SIGCSE anual sobre Inovação e Tecnologia no Ensino de Ciência da Computação, pp. 291-295, Caparica, Portugal, 20 05.', 1, 1, '<ul>\r\n<li>O instrutor deverá reservar mais de duas aulas, cada aula com duração de 1h40min, pois os alunos deverão debater sobre o modelo que estarão aprendendo.</li>\r\n<li>Caso o instrutor deseje utilizar cenários reais, o tempo para realizar a modelagem pode variar de uma a duas aulas, cada aula com 1h40min.</li>\r\n<li>Se a atividade for realizada em grupo, cada equipa deve ter entre 4 e 6 alunos.</li>\r\n</ul>', ''),
(6, 'Learning from Erroneous Examples', 'O <b>Learning from Errouneous Examples (ErrEx)</b> é um método baseado em Aprendizagem Ativa que engaja os estudantes em um exercício de aprendizagem ativa, oferecendo a oportunidade para uma learning experience construtiva e colaborativa através dos exemplos errados (Grosse e Renkl, 2007). Este método instrui os estudantes a encontrar, explicar e corrigir os erros (McLaren et al., 2016).', '<ul>\r\nEsta estratégia permite aos alunos :\r\n<li>Compreender alguns defeitos e problemas de modelagem, de forma a evitá-los em modelagens futuras.</li>\r\n<li>Resolver problemas de forma colaborativa, se a atividade for realizada em grupo.</li>\r\n<li>Aprender com os erros e que isso pode fomentar a aquisição de “conhecimento negativo” que fornece proteção importante contra decisões erradas em modelagens futuras.</li>\r\n<li>Adquirir conhecimentos iniciais, desde os erros mais comuns, durante o processo de aprendizagem.</li>\r\n</ul>', '<ul class=\"lead\">\r\nEsta estratégia permite aos alunos :\r\n<li>Compreender alguns defeitos e problemas de modelagem, de forma a evitá-los em modelagens futuras.</li>\r\n<li>Resolver problemas de forma colaborativa, se a atividade for realizada em grupo.</li>\r\n<li>Aprender com os erros e que isso pode fomentar a aquisição de “conhecimento negativo” que fornece proteção importante contra decisões erradas em modelagens futuras.</li>\r\n<li>Adquirir conhecimentos iniciais, desde os erros mais comuns, durante o processo de aprendizagem.</li>\r\n</ul>', '<ul>\r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n<li>Etapa 01. O instrutor apresenta os conceitos sobre o modelo durante a aula e a seguir fornece um cenário para os alunos realizarem a modelagem e o modelo com defeitos sintáticos e semânticos.</li>\r\n<li>Etapa 02. Os alunos leem os cenários e a seguir iniciam o processo de identificação de defeitos no modelo entregue.</li>\r\n<li>Etapa 03. Os alunos têm uma reunião de brainstorming para discutir os defeitos identificados.</li>\r\n<li>Passo 04. Os alunos iniciam o processo de modelagem do novo modelo, seguindo o cenário apresentado e os defeitos identificados no diagrama anterior. A modelagem deste novo diagrama pode ser baseada no modelo com defeitos incorretos.</li>\r\n<li>Etapa 05. Os alunos entregam o modelo recém-corrigido.</li>\r\n</ul>', '<p class=\"lead\">Para aplicar a estratégia, é necessária uma aula de 1h40min .</p>', '<p class=\"lead\">Silva, W., Steinmacher, I., Conte, T. É melhor aprender com problemas ou exemplos errôneos ?. Em Educação e Treinamento em Engenharia de Software (CSEE & T), 30ª Conferência IEEE 2017 em 7 de novembro de 2017 (pp. 222-231). IEEE.</p>\r\n<p class=\"lead\">Tsovaltzi D, McLaren BM, Melis E, Meyer AK, Dietrich M, Goguadze G. Learning from erroneous examples. Na Conferência Internacional sobre Sistemas de Tutoria Inteligente 2010, 14 de junho (pp. 420-422). Springer, Berlim, Heidelberg.</p>\r\n<p class=\"lead\">Tsovaltzi D, Melis E, McLaren BM, Meyer AK, Dietrich M, Goguadze G. Aprendendo com exemplos errôneos: quando e como os alunos se beneficiam deles ?. Na Conferência Europeia sobre Aprendizagem Aprimorada por Tecnologia 2010, 28 de setembro (pp. 357-373). Springer, Berlim, Heidelberg.</p>', '<p class=\"lead\">Resolução de problemas e discussão.</p>', '<p class=\"lead\">Resolução de problemas e discussão.CS Grosse e A. Renkl. “Encontrando e corrigindo erros em exemplos trabalhados : isso pode promover resultados de aprendizagem?”. Em Journal of Learning and Instruction, v.17, n. 6, pp. 612-634, 2007.</p>\r\n\r\n<p class=\"lead\">BM McLaren, T. Van Gog, C. Ganoe, M. Karabinos e D. Yaron. “A eficiência dos exemplos trabalhados em comparação com os exemplos errados, resolução de problemas ensinados e resolução de problemas em ambientes de aprendizagem baseados em computador ”. Em Journal of Computers in Human Behavior, v. 55, pp. 87-99, 2016.</p>', 1, 1, '<p class=\"lead\">Os alunos já precisam conhecer a notação do modelo e resolveram vários exercícios no modelo que vão modelar. Caso contrário, o método não será aplicado corretamente, por dúvidas sobre a notação e não sobre o domínio do problema.</p>\r\n<p class=\"lead\">Caso o professor deseje utilizar cenários reais, o tempo para realização da modelagem pode variar de uma a duas aulas, cada aula com 1h40min.</p>', ''),
(7, 'Métodos de Aprendizagem utilizando dados de Inspeções', 'O Método de Aprendizagem utilizando Dados de Inspeções tem por objetivo apoiar os estudantes que estão aprendendo como modelar os diagramas corretamente. Para isso, os estudantes utilizam comentários de inspeção de diagramas previamente inspecionados por outros estudantes (Kinjo et al., 2006).', '<ul>\r\nEsta estratégia permite aos alunos :\r\n\r\n<li>Para c modelos reate com base em defeitos previamente identificados.</li>\r\n<li>Para entender os defeitos que estão corrigindo no modelo.</li>\r\n<li>Para aprender como inspecionar um modelo, identificando e entendendo o defeito.</li>\r\n<li>Comparar e compreender o modelo criado com base nos modelos desenvolvidos por outros alunos, seguindo bons exemplos e evitando novos problemas na nova modelação.</li>\r\n</ul>', 'Nesta estratégia, os alunos podem ser organizados da seguinte forma:\r\nIndividualmente\r\nPares\r\nGrupos', '<ul>\r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n\r\n<li>Etapa 01: O instrutor apresenta os conceitos sobre o modelo em uma aula anterior e, a seguir, fornece um cenário para os alunos realizarem a modelagem.</li>\r\n<li>Etapa 02: Os alunos formam equipes de pelo menos três pessoas.</li>\r\n<li>Etapa 03: O instrutor fornece aos alunos um cenário para que eles realizem a modelagem.</li>\r\n<li>Etapa 04: Os alunos realizam a modelagem do diagrama com base no cenário proposto.</li>\r\n<li>Etapa 05: O instrutor coleta os modelos desenvolvidos pelos alunos.</li>\r\n<li>Passo 06: O instrutor distribui os modelos elaborados para que os alunos realizem o processo de inspeção para que cada aluno não receba o modelo que desenvolveu. Vale ressaltar que o professor deve ter previamente elaborado um checklist para auxiliar os alunos durante o processo de fiscalização.</li>\r\n<li>Passo 07: Os alunos realizam a inspeção nos modelos e anotam os defeitos identificados nos comentários.</li>\r\n<li>Passo 08: O instrutor recolhe novamente os modelos elaborados e os comentários das inspeções e para os alunos que os elaboraram originalmente.</li>\r\n<li>Etapa 09: Os alunos aprimoram os modelos com base nos comentários recebidos.</li>\r\n</ul>', 'Para aplicar a estratégia, é necessária uma aula de 1h40min.', '<p class=\"lead\">Kinjo, T., Ohgame, Y., Hazeyama, A. (2006). Um Sistema de Apoio à Aprendizagem de Modelagem Orientada a Objetos Usando Comentários de Inspeção e Sua Avaliação, The Journal of Information and Systems in Education, 5 (1), 66-75.</p>', 'Resolução de problemas e discussão.', '<p class=\"lead\">Kinjo, T., Ohgame, Y., Hazeyama, A. (2006). Um Sistema de Apoio à Aprendizagem de Modelagem Orientada a Objetos Usando Comentários de Inspeção e Sua Avaliação, The Journal of Information and Systems in Education, 5 (1), 66-75.</p>\r\n\r\n<p class=\"lead\">Ohgame, Y, e Hazeyama, A .: Projeto e Implementação de um Sistema de Apoio à Inspeção para Diagramas UML, IEICE Transactions on Information and Systems, vol. E89 － D, n. 4, pp. 1327-1336, 2006.</p>', 1, 1, ',ul>\r\n<li>Os alunos já precisam conhecer a notação do modelo e resolveram vários exercícios no modelo que vão modelar. Caso contrário, o método não será aplicado corretamente, por dúvidas sobre a notação e não sobre o domínio do problema.</li>\r\n<li>Caso o professor deseje utilizar cenários reais, o tempo para realização da modelagem pode variar de uma a duas aulas, cada aula com 1h40min.</li>\r\n</ul>', ''),
(8, 'Multimodal Approach', 'Esta é uma abordagem multimodal que visa fomentar as habilidades de modelagem dos estudantes que são relevantes para a indústria, combinando uma abordagem orientada por projeto com várias atividades que focam em princípios de aprendizagem ativa (Thevathayan e Hamilton, 2017).', '<ul>\r\nEste método permite aos alunos :\r\n\r\n<li>Para melhor compreensão dos conceitos de modelagem, que são conceitos mais abstratos.</li>\r\n<li>Para entender os conceitos e ferramentas necessárias para modelar um sistema de software.</li>\r\n<li>Para receber feedback regular sobre o processo de aprendizagem.</li>\r\n<li>Para identificar suas próprias dificuldades, enquanto o professor será capaz\r\nde identificar defeitos que são comuns na modelagem.</li>\r\n<li>Permitir um maior envolvimento cognitivo dos alunos nas atividades, melhorando a sua satisfação e resultados de aprendizagem.</li>\r\n<li>Adquirir conhecimentos úteis sobre a especificação / modelação de um sistema.</li>\r\n</ul>', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n\r\n<li>Individual</li>\r\n<li>Dupla</li>\r\n<li>Grupo</li>\r\n</ul>', '<ul>\r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n<li>\r\n<ul><b>Ciclo 01 (entrega de conteúdo):</b>\r\n<li>Etapa 01: O instrutor apresenta os conceitos para toda a turma. Nesta etapa, o professor deve apresentar os principais tópicos sobre o conteúdo que deseja ministrar.</li>\r\n<li>Etapa 02: Após a etapa anterior, o instrutor ministra pequenas aulas (máximo de 25 minutos) sobre conteúdos específicos.</li>\r\n<li>Etapa 03: O instrutor realiza pequenas atividades individuais com os alunos, seja por meio de um questionário ou outra atividade (fica a critério do instrutor).</li>\r\n</ul>\r\n<li>\r\n<ul><b>Ciclo 02 (avaliação de conteúdo):</b>\r\n<li>Etapa 04: O instrutor faz uma rápida revisão do conteúdo apresentado na semana anterior.</li>\r\n<li>Etapa 05: Após a revisão do conteúdo, o instrutor pode responder a um questionário sobre o conteúdo e / ou solicitar que os alunos realizem um exercício de modelagem em grupo para um determinado cenário.</li>\r\n<li>Etapa 06: O professor verifica os pontos em que os alunos tiveram dificuldades e realiza a etapa 02 novamente, a fim de fornecer feedback aos alunos. Este ciclo é realizado até que a maioria das dificuldades seja minimizada.</li>\r\n</ul>\r\n</ul>', 'Para aplicar a estratégia, é necessária uma aula de 1h40min.', 'Thevathayan C, Hamilton M. Transmitindo habilidades de design de engenharia de software. Em Proceedings of the Nineteenth Australasian Computing Education Conference 2017, 31 de janeiro (pp. 95-102), 2017. ACM.', 'Resolução de problemas e discussão.', 'Thevathayan C, Hamilton M. Transmitindo habilidades de design de engenharia de software. Em Proceedings of the Nineteenth Australasian Computing Education Conference 2017, 31 de janeiro (pp. 95-102), 2017. ACM.', 1, 1, '<ul>\r\n<li>Por se tratar de um processo de aprendizagem inicial, o professor deve estar sempre atuando durante as atividades, seja tirando dúvidas ou auxiliando os alunos em alguma dessas atividades.</li>\r\n<li>O professor deverá reservar mais de duas aulas, cada aula com duração de 1h40min, pois os alunos deverão debater sobre o modelo que estarão aprendendo.</li>\r\n<li>Caso o professor deseje utilizar cenários reais, o tempo para realização da modelagem pode variar de uma a duas aulas, cada aula com 1h40min.</li>\r\n</ul>', ''),
(9, 'Negative Examples', 'O <b>Negative Examples</b> é um método que fornece diretrizes associadas a descrições e exemplos negativos de modelagem, para que estes sejam incorporados no ambiente de ensino de modelagem, fazendo com que os estudantes aprendam observando como se deve fazer uma modelagem de forma correta a partir de exemplos negativos trabalhados em sala de aula.', '<ul>\r\nEsta estratégia permite aos alunos:\r\n<li>Compreender as principais dificuldades que outros alunos tiveram ao modelar um determinado modelo.</li>\r\n<li>Para verificar a partir dos exemplos trabalhados em aula, quais são os principais defeitos que os outros alunos se comprometeram a desenvolver um modelo.</li>\r\n<li>Permite que os alunos percebam o defeito e não percebam novamente.</li>\r\n</ul>\r\n', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n\r\n<li>Individual</li>\r\n<li>Dupla</li>\r\n<li>Grupo</li>\r\n</ul>', '<ul>\r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n<li>Etapa 01: O instrutor apresenta os conceitos sobre o modelo durante a aula e, em seguida, fornece um cenário para os alunos realizarem a modelagem.</li>\r\n<li>Etapa 02: os alunos constroem um modelo com base no cenário apresentado pelo instrutor.</li>\r\n<li>Etapa 03: O instrutor realiza um treinamento sobre as dificuldades mais comuns durante a modelagem do artefato solicitado (abaixo estão alguns defeitos de alguns modelos para auxiliar os instrutores).</li>\r\n<li>Etapa 04: O instrutor dá aos alunos um conjunto de modelos com os defeitos primários marcados.</li>\r\n<li>Etapa 05: O instrutor pede aos alunos que modelem um novo diagrama com base no treinamento e um conjunto de exemplos de modelagem negativa.</li>\r\n<li>Etapa 06: Os alunos realizam a correção de modelos elaborados.</li>\r\n</ul>', 'Para aplicar a estratégia, é necessária uma aula de 1h40min.', 'Bolloju N, Schneider C, Vogel D. Efeitos assimétricos do uso de exemplos positivos e negativos na modelagem de objetos. Em Desenvolvimento de Sistemas de Informação 2011 (pp. 85-96). Springer, New York, NY.', 'Estratégia para resolução de problemas.', 'Bolloju N, Schneider C, Vogel D. Efeitos assimétricos do uso de exemplos positivos e negativos na modelagem de objetos. Em Desenvolvimento de Sistemas de Informação 2011 (pp. 85-96). Springer, New York, NY.', 1, 1, 'Os alunos precisam conhecer a notação do modelo e já resolveram previamente os exercícios de modelagem .\r\nCaso o instrutor queira utilizar cenários reais, o tempo de modelagem pode variar de uma a duas aulas, cada aula com 1h40min.', ''),
(10, 'PBL + LBL Double Track Teaching Method', 'Esse método de ensino baseia-se na Lecture based learning (LBL) e Problem based learnig (PBL). Neste método de ensino o professor ensina a base teórica relacionada ao problema real e combina enquanto os estudantes estão trabalhando para a resolução de um problemas real.', '<ul>\r\nEste método permite aos alunos:\r\n<li>Obter os conhecimentos necessários à resolução de problemas.</li>\r\n<li>Para melhorar suas habilidades de comunicação com o grupo, se a atividade for realizada em grupo.</li>\r\n<li>Relacionar os conceitos aprendidos em sala de aula com problemas reais.</li>\r\n<li>Para desenvolver suas habilidades de raciocínio e ser capaz de transferir conhecimentos.</li>\r\n</ul>', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n<li>Individual</li>\r\n<li>Dupla</li>\r\n<li>Grupo</li>\r\n</ul>', '<ul>\r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n<li>Etapa 01: O instrutor apresenta os conceitos sobre o modelo durante a aula e, a seguir, fornece um cenário para os alunos realizarem a modelagem.</li>\r\n<li>Etapa 02: O instrutor fornece aos alunos um exemplo de um cenário real de software para todos os alunos.</li>\r\n<li>Etapa 03: O instrutor pede aos alunos que se dividam em grupos e procurem materiais (internet, livros ... etc.), que possam auxiliar na modelagem, durante o horário pós-aula. O instrutor continua como instrutor antes de realizar a modelagem.</li>\r\n<li>Etapa 04: Em aula, os alunos conduzem discussões para uma possível solução de modelagem para o problema.</li>\r\n<li>Etapa 05: O instrutor orienta e incentiva os alunos a discutir o problema o tempo todo.</li>\r\n<li>Etapa 06: Os alunos falam livremente e explicam detalhes sobre o problema, discutem e trazem à tona novas questões para promover uma interação eficaz entre os alunos e o professor.</li>\r\n<li>Etapa 07: Por fim, os alunos corrigem os modelos elaborados.</li>\r\n</ul>', 'Para aplicar a estratégia, é necessária uma aula de 1h40min.', 'Wang Y, Su R, Li G. Pesquisa em PBL e LBL Double Track Teaching Model in Unified Modeling Language Teaching Baseado em Excelentes Engenheiros. Em Informatics and Management Science V 2013 (pp. 381-386). Springer, Londres.', 'Resolução de problemas e discussão.', 'Wang Y, Su R, Li G. Pesquisa em PBL e LBL Double Track Teaching Model in Unified Modeling Language Teaching Baseado em Excelentes Engenheiros. Em Informatics and Management Science V 2013 (pp. 381-386). Springer, Londres.', 1, 1, 'Durante a aplicação de toda a estratégia, o instrutor deve estar mais presente nas atividades, ou seja, o instrutor deve estar sempre atuando durante as atividades, tirando dúvidas ou auxiliando os alunos em alguma dessas atividades.', ''),
(11, 'Positive Examples', 'O <b>Positive Examples</b> é um método que fornece diretrizes associadas a descrições e exemplos positivos de modelagem, para que estes sejam incorporados no ambiente de ensino de modelagem, fazendo com que os estudantes aprendam observando como se deve fazer uma modelagem de forma correta.', '<ul>\r\nEste método permite aos alunos:\r\n<li>Para u nderstand as principais dificuldades ao realizar a modelagem.</li>\r\n<li>Para verificar a partir dos exemplos positivos trabalhados na sala como evitar que alguns defeitos sejam modelados incorretamente</li>\r\n<li>Para perceber como o modelo deve ser modelado corretamente.</li>\r\n</ul>', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n\r\n<li>Individual</li>\r\n<li>Dupla</li>\r\n<li>Grupo</li>\r\n</ul>', 'A estratégia possui um conjunto de etapas que podem ser seguidas:\r\nEtapa 01: O instrutor apresenta os conceitos sobre o modelo durante a aula e, a seguir, fornece um cenário para os alunos realizarem a modelagem.\r\nEtapa 02: Os alunos desenvolvem um modelo baseado no cenário apresentado pelo professor.\r\nEtapa 03: O instrutor conduz o treinamento sobre os defeitos mais comuns ao modelar o artefato solicitado e como eles devem ser modelados corretamente (abaixo são mostrados alguns defeitos em alguns modelos para auxiliar os professores).\r\nEtapa 04: O instrutor fornece aos alunos um conjunto de modelos com modelos sintaticamente e semanticamente corretos.\r\nEtapa 05: O instrutor pede aos alunos que modelem o novo diagrama, com base no treinamento e no conjunto de exemplos de modelagem positivos.\r\nEtapa 06: Os alunos realizam a correção dos modelos elaborados.', '<ul>\r\n<li>Para a preparação do material necessário à implementação da estratégia é necessário um tempo médio de duas horas.</li>\r\n<li>A aplicação da estratégia nas aulas requer uma aula com a duração de 1h40min.</li>\r\n</ul>', 'Bolloju N, Schneider C, Vogel D. Efeitos assimétricos do uso de exemplos positivos e negativos na modelagem de objetos. Em Desenvolvimento de Sistemas de Informação 2011 (pp. 85-96). Springer, New York, NY.', 'Resolução de problemas.', 'Bolloju N, Schneider C, Vogel D. Efeitos assimétricos do uso de exemplos positivos e negativos na modelagem de objetos. Em Desenvolvimento de Sistemas de Informação 2011 (pp. 85-96). Springer, New York, NY.', 1, 1, '<ul>\r\n<li>Os alunos já precisam conhecer a notação do modelo e resolveram vários exercícios no modelo que vão modelar. Caso contrário, o método não será aplicado corretamente, por dúvidas sobre a notação e não sobre o domínio do problema.</li>\r\n<li>Caso o professor deseje utilizar cenários reais, o tempo para realização da modelagem pode variar de uma a duas aulas, cada aula com 1h40min.</li>\r\n</ul>', ''),
(12, 'Problem Based Learning (PBL) Adapted', 'O PBL Adaptado é uma estratégia pedagógica que enfatiza o papel de um problema em que os alunos são responsáveis ​​por sua aprendizagem ( Boud e Feletti, 1997) . Essa estratégia ajuda os alunos a desenvolver estratégias e construir conhecimento. A formação da equipe e a distribuição de papel são essenciais para o uso do PBL. ( Richardson e Delaney, 2009 ).', '<ul>\r\nEsta estratégia:\r\n<li>Ele permite que os alunos trabalhem em pequenos grupos de forma colaborativa para resolver o problema.</li>\r\n<li>Ele permite que os alunos assumam a responsabilidade por definir seus próprios objetivos de aprendizagem.</li>\r\n<li>Ele permite que os alunos adquiram novas informações que são esperadas através de sua investigação para uma solução para o problema.</li>\r\n<li>Permite que os alunos adquiram conhecimentos e desenvolvam suas habilidades e atitudes esperadas como profissionais.</li>\r\n</ul>', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n\r\n<li>Individual</li>\r\n<li>Dupla</li>\r\n<li>Grupo</li>\r\n</ul>', '<ul>\r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n<li>Etapa 01 (Esclarecimento dos conceitos): O instrutor apresenta os conceitos sobre o modelo durante a aula.</li>\r\n<li>Etapa 02 (Definindo o problema): O instrutor pede aos alunos que formem equipes para se familiarizarem com o material do caso e identificarem o problema.</li>\r\n<li>Passo 03 (Análise do problema / Brainstorming): O grupo discute ideias e percepções sobre o problema, a fim de ativar outros conhecimentos que possam ser úteis na resolução do problema.</li>\r\n<li>Passo 04 (Categorização das ideias): O grupo tenta criar um esboço que explique o que acontece no caso. Dessa forma, o grupo tenta criar um esboço que explique o que acontece no caso.</li>\r\n<li>Passo 05 (Formulação dos objetivos de aprendizagem): O grupo tenta entender o que é essencial para criar uma solução, levando à definição dos objetivos de aprendizagem</li>\r\n<li>Passo 06 (Auto-estudo): Cada aluno estuda de forma independente para atingir todos os seus objetivos de aprendizagem. Além disso, destaca-se a responsabilidade do aluno pela aquisição do conhecimento.</li>\r\n<li>Etapa 07 (Discussão dos novos conhecimentos adquiridos): Por fim, o grupo discute o caso e tenta resolvê-lo com base nos conhecimentos obtidos.</li>', 'Para aplicar a estratégia, é necessária uma aula de 1h40min.', 'Silva W, Steinmacher I, Conte T. É melhor aprender com problemas ou exemplos errôneos ?. Em Educação e Treinamento em Engenharia de Software (CSEE & T), 30ª Conferência IEEE 2017 em 7 de novembro de 2017 (pp. 222-231). IEEE.', 'Resolução de problemas e discussão.', '<p class=\"lead\">D. Boud e G. Feletti, O desafio da aprendizagem baseada em problemas, em Psychology Press, Londres: Kogan Page, 1997.</p>\r\n<p class=\"lead\">I. Richardson, e Y. Delaney, \"Problem based learning in the software engineering calculator,\" in 22th Conference on Software Engineering Education and Training (CSEET 2009), pp. 174-181, 2009.</p>', 1, 1, '<ul>\r\n<li>Por se tratar de um processo de aprendizagem inicial, o professor deve estar sempre atuando durante as atividades, seja tirando dúvidas ou auxiliando os alunos em alguma dessas atividades.</li>\r\n<li>Se a atividade for realizada em grupo, cada equipa deve ter entre 4 e 6 alunos.</li>\r\n</ul>', ''),
(13, 'Think-Pair-Square', '<p class=\"lead\">O Método Think-Pair-Square foi concebido para promover aprendizagens, discussões ativas e para auxiliar na resolução de problemas de forma cooperativa entre os estudantes (Lyman, 1981; Millis e Cottel, 1998).</p>\r\n\r\n<p class=\"lead\">O método Think-Pair-Square é considerado idealmente quando se deseja que os estudantes obtenham experiências de trabalho colaborativo (Lyman, 1981).</p>', '<ul>\r\nEste método permite aos alunos:\r\n<li>Resolver problemas de forma cooperativa e colaborativa, melhorando a capacidade de discutir ideias e desenvolver possíveis soluções para um determinado problema.</li>\r\n<li>Para observar e refinar estratégias de resolução de problemas com outros alunos envolvidos na modelagem.</li>\r\n<li>Para resolver problemas sequencialmente, a estratégia possui um conjunto de etapas que são executadas sequencialmente.</li>\r\n</ul>', '<ul>\r\nNesta estratégia, os alunos podem ser organizados da seguinte forma:\r\n\r\n<li>Individual</li>\r\n<li>Dupla</li>\r\n<li>Grupo</li>\r\n</ul>', '<ul>\r\nA estratégia possui um conjunto de etapas que podem ser seguidas:\r\n<li>Etapa 01 (Pense): Esta etapa é realizada individualmente. Cada aluno trabalha para produzir um modelo em um determinado cenário.</li>\r\n<li>Etapa 02 (par): esta etapa é realizada em pares. Nesta etapa, o professor agrupa os alunos para que trabalhem em duplas. Nesta fase, os alunos podem trabalhar nos modelos que foram desenvolvidos individualmente ou criar um novo modelo com os seus pares.</li>\r\n<li>Passo 03 (Quadrado): Todos os membros da equipe exploram o modelo de cada par para produzir um modelo único e mais abrangente. As equipes podem ser compostas por qualquer número par maior ou igual a quatro.</li>\r\n</ul>', 'Para aplicar a estratégia, é necessária uma aula de 1h40min.', '<p class=\"lead\">G. Scanniello, U. Erra. Modelagem distribuída de diagramas de casos de uso com um método baseado em think-pair-square: resultados de dois experimentos controlados . Jornal de Linguagens Visuais e Computação. 1 de agosto de 2014; 25 (4): 494-517.</p>\r\n<p class=\"lead\">U. Erra, A. Portnova, G. Scanniello. Comparando dois meios de comunicação na modelagem de casos de uso: resultados de um experimento controlado. em: Simpósio Internacional de Engenharia e Medição de Software Empírico, ACM, 2010, pp. 53: 1–53: 4.</p>\r\n<p class=\"lead\">U. Erra, G. Scanniello. Avaliação do think-pair-square na modelagem distribuída de diagramas de casos de uso . in: Anais do Workshop Internacional de Engenharia de Requisitos Empíricos.</p>', 'Resolução de problemas e discussão.', '<p class=\"lead\">R. De Chiara, A. Di Matteo, I. Manno, SV, Café: ambiente educacional cooperativo face2face, em: CollaborateCom, IEEE Computer Society, 2007, pp. 243–252</p>\r\n<p class=\"lead\">FT Lyman, The responsive classroom Discussion: the include of all students, in: A. Anderson (Ed.), Mainstreaming Digest, University of Maryland Press, College Park, MD, 1981, pp. 109-113.</p>\r\n<p class=\"lead\">BJ Millis, PG Cottell, Cooperative Learning for Higher Education Faculty, Oryx Press, Phoenix, Ariz, 1998.</p>', 1, 1, '<p class=\"lead\">Os alunos já precisam saber a notação do modelo e já resolveram os exercícios no modelo anteriormente.</p>\r\n<p class=\"lead\">Caso o professor deseje utilizar cenários reais, o tempo para realização da modelagem pode variar de uma a duas aulas, cada aula com 1h40min.</p>', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questionarios`
--

CREATE TABLE `tb_questionarios` (
  `cod` int(11) NOT NULL,
  `codAluno` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `item1` int(11) DEFAULT NULL,
  `item2` int(11) DEFAULT NULL,
  `item3` int(11) DEFAULT NULL,
  `item4` int(11) DEFAULT NULL,
  `item5` int(11) DEFAULT NULL,
  `item6` int(11) DEFAULT NULL,
  `item7` int(11) DEFAULT NULL,
  `item8` int(11) DEFAULT NULL,
  `item9` int(11) DEFAULT NULL,
  `item10` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_questionarios`
--

INSERT INTO `tb_questionarios` (`cod`, `codAluno`, `nome`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`) VALUES
(1, 1, 'DIMENSÃO FATUAL DA TAXONOMIA DE BLOOM', 5, 4, 4, 5, 4, 3, 5, 4, NULL, NULL),
(2, 2, 'DIMENSÃO FATUAL DA TAXONOMIA DE BLOOM', 4, 4, 5, 4, 5, 4, 4, 4, NULL, NULL),
(3, 3, 'DIMENSÃO FATUAL DA TAXONOMIA DE BLOOM', 5, 4, 5, 4, 5, 4, 5, 3, NULL, NULL),
(4, 4, 'DIMENSÃO FATUAL DA TAXONOMIA DE BLOOM', 5, 5, 4, 4, 5, 5, 5, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `tipoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod`, `nome`, `email`, `senha`, `tipoUsuario`) VALUES
(1, 'RAFAEL', 'teste@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'prof', 'prof@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `cod` int(11) NOT NULL,
  `codEstrategia` int(11) DEFAULT NULL,
  `universidade` varchar(100) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `componente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`cod`, `codEstrategia`, `universidade`, `curso`, `componente`) VALUES
(1, 4, 'Universidade Federal do Amazonas', 'Ciência da Computação', 'Introdução à Engenharia de Software');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `codTurma` (`codTurma`);

--
-- Índices para tabela `tb_estrategias`
--
ALTER TABLE `tb_estrategias`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Índices para tabela `tb_questionarios`
--
ALTER TABLE `tb_questionarios`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `codAluno` (`codAluno`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `codEstrategia` (`codEstrategia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `tb_estrategias`
--
ALTER TABLE `tb_estrategias`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_questionarios`
--
ALTER TABLE `tb_questionarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD CONSTRAINT `tb_alunos_ibfk_1` FOREIGN KEY (`codTurma`) REFERENCES `turmas` (`cod`);

--
-- Limitadores para a tabela `tb_estrategias`
--
ALTER TABLE `tb_estrategias`
  ADD CONSTRAINT `tb_estrategias_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `tb_usuarios` (`cod`);

--
-- Limitadores para a tabela `tb_questionarios`
--
ALTER TABLE `tb_questionarios`
  ADD CONSTRAINT `tb_questionarios_ibfk_1` FOREIGN KEY (`codAluno`) REFERENCES `tb_alunos` (`cod`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `turmas_ibfk_1` FOREIGN KEY (`codEstrategia`) REFERENCES `tb_estrategias` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
