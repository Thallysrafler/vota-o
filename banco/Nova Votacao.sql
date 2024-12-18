--
-- Processo de zerarmento do da votação
-- 
-- Zerar os votos dos candidatos
--
UPDATE `produtos` SET `qnt_voto`= 0
--
-- Apaga a tabela de votantes
--
DROP TABLE 'votacao'
--
--
-- Recria a tabela `votacao`
--

CREATE TABLE `votacao` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `votouem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Índices para tabela `votacao`
--
ALTER TABLE `votacao`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de tabela `votacao`
--
ALTER TABLE `votacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;