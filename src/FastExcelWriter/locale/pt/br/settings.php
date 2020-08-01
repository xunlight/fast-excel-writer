<?php

return [
    'functions' => [
        'INFODADOSTABELADINÂMICA' => 'GETPIVOTDATA', //Retorna os dados armazenados em um relatório de tabela dinâmica
        'MEMBROKPICUBO' => 'CUBEKPIMEMBER', //Retorna o nome de um KPI (indicador de desempenho-chave), uma propriedade e uma medida e exibe o nome e a propriedade na célula. Um KPI é uma medida quantificável, como o lucro bruto mensal ou a rotatividade trimestral dos funcionários, usada para monitorar o desempenho de uma organização.
        'MEMBROCUBO' => 'CUBEMEMBER', //Retorna um membro ou tupla em uma hierarquia de cubo. Use para validar se o membro ou tupla existe no cubo.
        'PROPRIEDADEMEMBROCUBO' => 'CUBEMEMBERPROPERTY', //Retorna o valor da propriedade de um membro no cubo. Usada para validar a existência do nome do membro no cubo e para retornar a propriedade especificada para esse membro.
        'MEMBROCLASSIFICADOCUBO' => 'CUBERANKEDMEMBER', //Retorna o enésimo membro, ou o membro ordenado, em um conjunto. Use para retornar um ou mais elementos em um conjunto, assim como o melhor vendedor ou os dez melhores alunos.
        'CONJUNTOCUBO' => 'CUBESET', //Define um conjunto calculado de membros ou tuplas enviando uma expressão do conjunto para o cubo no servidor, que cria o conjunto e o retorna para o Microsoft Office Excel.
        'CONTAGEMCONJUNTOCUBO' => 'CUBESETCOUNT', //Retorna o número de itens em um conjunto.
        'VALORCUBO' => 'CUBEVALUE', //Retorna um valor agregado de um cubo.
        'BDMÉDIA' => 'DAVERAGE', //Retorna a média das entradas selecionadas de um banco de dados
        'BDCONTAR' => 'DCOUNT', //Conta as células que contêm números em um banco de dados
        'BDCONTARA' => 'DCOUNTA', //Conta células não vazias em um banco de dados
        'BDEXTRAIR' => 'DGET', //Extrai de um banco de dados um único registro que corresponde a um critério específico
        'BDMÁX' => 'DMAX', //Retorna o valor máximo de entradas selecionadas de um banco de dados
        'BDMÍN' => 'DMIN', //Retorna o valor mínimo de entradas selecionadas de um banco de dados
        'BDMULTIPL' => 'DPRODUCT', //Multiplica os valores em um campo específico de registros que correspondem ao critério em um banco de dados
        'BDEST' => 'DSTDEV', //Estima o desvio padrão com base em uma amostra de entradas selecionadas de um banco de dados
        'BDDESVPA' => 'DSTDEVP', //Calcula o desvio padrão com base na população inteira de entradas selecionadas de um banco de dados
        'BDSOMA' => 'DSUM', //Adiciona os números à coluna de campos de registros do banco de dados que correspondem ao critério
        'BDVAREST' => 'DVAR', //Estima a variância com base em uma amostra de entradas selecionadas de um banco de dados
        'BDVARP' => 'DVARP', //Calcula a variância com base na população inteira de entradas selecionadas de um banco de dados
        'DATA' => 'DATE', //Retorna o número de série de uma data específica
        'DATA.VALOR' => 'DATEVALUE', //Converte uma data na forma de texto para um número de série
        'DIA' => 'DAY', //Converte um número de série em um dia do mês
        'DIAS360' => 'DAYS360', //Calcula o número de dias entre duas datas com base em um ano de 360 dias
        'DATAM' => 'EDATE', //Retorna o número de série da data que é o número indicado de meses antes ou depois da data inicial
        'FIMMÊS' => 'EOMONTH', //Retorna o número de série do último dia do mês antes ou depois de um número especificado de meses
        'HORA' => 'HOUR', //Converte um número de série em uma hora
        'MINUTO' => 'MINUTE', //Converte um número de série em um minuto
        'MÊS' => 'MONTH', //Converte um número de série em um mês
        'DIATRABALHOTOTAL' => 'NETWORKDAYS', //Retorna o número de dias úteis inteiros entre duas datas
        'AGORA' => 'NOW', //Retorna o número de série seqüencial da data e hora atuais
        'SEGUNDO' => 'SECOND', //Converte um número de série em um segundo
        //'HORA' => 'TIME', //Retorna o número de série de uma hora específica
        'VALOR.TEMPO' => 'TIMEVALUE', //Converte um horário na forma de texto para um número de série
        'HOJE' => 'TODAY', //Retorna o número de série da data de hoje
        'DIA.DA.SEMANA' => 'WEEKDAY', //Converte um número de série em um dia da semana
        'NÚMSEMANA' => 'WEEKNUM', //Converte um número de série em um número que representa onde a semana cai numericamente em um ano
        'DIATRABALHO' => 'WORKDAY', //Retorna o número de série da data antes ou depois de um número específico de dias úteis
        'ANO' => 'YEAR', //Converte um número de série em um ano
        'FRAÇÃOANO' => 'YEARFRAC', //Retorna a fração do ano que representa o número de dias entre data_inicial e data_final
        'BESSELI' => 'BESSELI', //Retorna a função de Bessel In(x) modificada
        'BESSELJ' => 'BESSELJ', //Retorna a função de Bessel Jn(x)
        'BESSELK' => 'BESSELK', //Retorna a função de Bessel Kn(x) modificada
        'BESSELY' => 'BESSELY', //Retorna a função de Bessel Yn(x)
        'BIN2DEC' => 'BIN2DEC', //Converte um número binário em decimal
        'BIN2HEX' => 'BIN2HEX', //Converte um número binário em hexadecimal
        'BIN2OCT' => 'BIN2OCT', //Converte um número binário em octal
        'COMPLEX' => 'COMPLEX', //Converte coeficientes reais e imaginários e um número complexo
        'CONVERTER' => 'CONVERT', //Converte um número de um sistema de medida para outro
        'DECABIN' => 'DEC2BIN', //Converte um número decimal em binário
        'DECAHEX' => 'DEC2HEX', //Converte um número decimal em hexadecimal
        'DECAOCT' => 'DEC2OCT', //Converte um número decimal em octal
        'DELTA' => 'DELTA', //Testa se dois valores são iguais
        'FUNERRO' => 'ERF', //Retorna a função de erro
        'FUNERROCOMPL' => 'ERFC', //Retorna a função de erro complementar
        'DEGRAU' => 'GESTEP', //Testa se um número é maior do que um valor limite
        'HEXABIN' => 'HEX2BIN', //Converte um número hexadecimal em binário
        'HEXADEC' => 'HEX2DEC', //Converte um número hexadecimal em decimal
        'HEXAOCT' => 'HEX2OCT', //Converte um número hexadecimal em octal
        'IMABS' => 'IMABS', //Retorna o valor absoluto (módulo) de um número complexo
        'IMAGINÁRIO' => 'IMAGINARY', //Retorna o coeficiente imaginário de um número complexo
        'IMARG' => 'IMARGUMENT', //Retorna o argumento teta, um ângulo expresso em radianos
        'IMCONJ' => 'IMCONJUGATE', //Retorna o conjugado complexo de um número complexo
        'IMCOS' => 'IMCOS', //Retorna o cosseno de um número complexo
        'IMDIV' => 'IMDIV', //Retorna o quociente de dois números complexos
        'IMEXP' => 'IMEXP', //Retorna o exponencial de um número complexo
        'IMLN' => 'IMLN', //Retorna o logaritmo natural de um número complexo
        'IMLOG10' => 'IMLOG10', //Retorna o logaritmo de base 10 de um número complexo
        'IMLOG2' => 'IMLOG2', //Retorna o logaritmo de base 2 de um número complexo
        'IMPOT' => 'IMPOWER', //Retorna um número complexo elevado a uma potência inteira
        'IMPROD' => 'IMPRODUCT', //Retorna o produto de números complexos
        'IMREAL' => 'IMREAL', //Retorna o coeficiente real de um número complexo
        'IMSENO' => 'IMSIN', //Retorna o seno de um número complexo
        'IMRAIZ' => 'IMSQRT', //Retorna a raiz quadrada de um número complexo
        'IMSUBTR' => 'IMSUB', //Retorna a diferença entre dois números complexos
        'IMSOMA' => 'IMSUM', //Retorna a soma de números complexos
        'OCTABIN' => 'OCT2BIN', //Converte um número octal em binário
        'OCTADEC' => 'OCT2DEC', //Converte um número octal em decimal
        'OCTAHEX' => 'OCT2HEX', //Converte um número octal em hexadecimal
        'JUROSACUM' => 'ACCRINT', //Retorna a taxa de juros acumulados de um título que paga uma taxa periódica de juros
        'JUROSACUMV' => 'ACCRINTM', //Retorna os juros acumulados de um título que paga juros no vencimento
        'AMORDEGRC' => 'AMORDEGRC', //Retorna a depreciação para cada período contábil usando o coeficiente de depreciação
        'AMORLINC' => 'AMORLINC', //Retorna a depreciação para cada período contábil
        'CUPDIASINLIQ' => 'COUPDAYBS', //Retorna o número de dias do início do período de cupom até a data de liquidação
        'CUPDIAS' => 'COUPDAYS', //Retorna o número de dias no período de cupom que contém a data de quitação
        'CUPDIASPRÓX' => 'COUPDAYSNC', //Retorna o número de dias da data de liquidação até a data do próximo cupom
        'CUPDATAPRÓX' => 'COUPNCD', //Retorna a próxima data de cupom após a data de quitação
        'CUPNÚM' => 'COUPNUM', //Retorna o número de cupons pagáveis entre as datas de quitação e vencimento
        'CUPDATAANT' => 'COUPPCD', //Retorna a data de cupom anterior à data de quitação
        'PGTOJURACUM' => 'CUMIPMT', //Retorna os juros acumulados pagos entre dois períodos
        'PGTOCAPACUM' => 'CUMPRINC', //Retorna o capital acumulado pago sobre um empréstimo entre dois períodos
        'BD' => 'DB', //Retorna a depreciação de um ativo para um período especificado, usando o método de balanço de declínio fixo
        'BDD' => 'DDB', //Retorna a depreciação de um ativo com relação a um período especificado usando o método de saldos decrescentes duplos ou qualquer outro método especificado por você
        'DESC' => 'DISC', //Retorna a taxa de desconto de um título
        'MOEDADEC' => 'DOLLARDE', //Converte um preço em formato de moeda, na forma fracionária, em um preço na forma decimal
        'MOEDAFRA' => 'DOLLARFR', //Converte um preço, apresentado na forma decimal, em um preço apresentado na forma fracionária
        'DURAÇÃO' => 'DURATION', //Retorna a duração anual de um título com pagamentos de juros periódicos
        'EFETIVA' => 'EFFECT', //Retorna a taxa de juros anual efetiva
        'VF' => 'FV', //Retorna o valor futuro de um investimento
        'VFPLANO' => 'FVSCHEDULE', //Retorna o valor futuro de um capital inicial após a aplicação de uma série de taxas de juros compostas
        'TAXAJUROS' => 'INTRATE', //Retorna a taxa de juros de um título totalmente investido
        'IPGTO' => 'IPMT', //Retorna o pagamento de juros para um investimento em um determinado período
        'TIR' => 'IRR', //Retorna a taxa interna de retorno de uma série de fluxos de caixa
        'ÉPGTO' => 'ISPMT', //Calcula os juros pagos durante um período específico de um investimento
        'MDURAÇÃO' => 'MDURATION', //Retorna a duração de Macauley modificada para um título com um valor de paridade equivalente a R$ 100
        'MTIR' => 'MIRR', //Calcula a taxa interna de retorno em que fluxos de caixa positivos e negativos são financiados com diferentes taxas
        'NOMINAL' => 'NOMINAL', //Retorna a taxa de juros nominal anual
        'NPER' => 'NPER', //Retorna o número de períodos de um investimento
        'VPL' => 'NPV', //Retorna o valor líquido atual de um investimento com base em uma série de fluxos de caixa periódicos e em uma taxa de desconto
        'PREÇOPRIMINC' => 'ODDFPRICE', //Retorna o preço por R$ 100 de valor nominal de um título com um primeiro período indefinido
        'LUCROPRIMINC' => 'ODDFYIELD', //Retorna o rendimento de um título com um primeiro período indefinido
        'PREÇOÚLTINC' => 'ODDLPRICE', //Retorna o preço por R$ 100 de valor nominal de um título com um último período de cupom indefinido
        'LUCROÚLTINC' => 'ODDLYIELD', //Retorna o rendimento de um título com um último período indefinido
        'PGTO' => 'PMT', //Retorna o pagamento periódico de uma anuidade
        'PPGTO' => 'PPMT', //Retorna o pagamento de capital para determinado período de investimento
        'PREÇO' => 'PRICE', //Retorna a preço por R$ 100,00 de valor nominal de um título que paga juros periódicos
        'PREÇODESC' => 'PRICEDISC', //Retorna o preço por R$ 100,00 de valor nominal de um título descontado
        'PREÇOVENC' => 'PRICEMAT', //Retorna o preço por R$ 100,00 de valor nominal de um título que paga juros no vencimento
        'VP' => 'PV', //Retorna o valor presente de um investimento
        'TAXA' => 'RATE', //Retorna a taxa de juros por período de uma anuidade
        'RECEBER' => 'RECEIVED', //Retorna a quantia recebida no vencimento de um título totalmente investido
        'DPD' => 'SLN', //Retorna a depreciação em linha reta de um ativo durante um período
        'SDA' => 'SYD', //Retorna a depreciação dos dígitos da soma dos anos de um ativo para um período especificado
        'OTN' => 'TBILLEQ', //Retorna o rendimento de um título equivalente a uma obrigação do Tesouro
        'OTNVALOR' => 'TBILLPRICE', //Retorna o preço por R$ 100,00 de valor nominal de uma obrigação do Tesouro
        'OTNLUCRO' => 'TBILLYIELD', //Retorna o rendimento de uma obrigação do Tesouro
        'BDV' => 'VDB', //Retorna a depreciação de um ativo para um período especificado ou parcial usando um método de balanço declinante
        'XTIR' => 'XIRR', //Fornece a taxa interna de retorno para um programa de fluxos de caixa que não é necessariamente periódico
        'XVPL' => 'XNPV', //Retorna o valor presente líquido de um programa de fluxos de caixa que não é necessariamente periódico
        'LUCRO' => 'YIELD', //Retorna o lucro de um título que paga juros periódicos
        'LUCRODESC' => 'YIELDDISC', //Retorna o rendimento anual de um título descontado. Por exemplo, uma obrigação do Tesouro
        'LUCROVENC' => 'YIELDMAT', //Retorna o lucro anual de um título que paga juros no vencimento
        'CÉL' => 'CELL', //Retorna informações sobre formatação, localização ou conteúdo de uma célula
        'TIPO.ERRO' => 'ERROR.TYPE', //Retorna um número correspondente a um tipo de erro
        'INFORMAÇÃO' => 'INFO', //Retorna informações sobre o ambiente operacional atual
        'ÉCÉL.VAZIA' => 'ISBLANK', //Retorna VERDADEIRO se o valor for vazio
        'ÉERRO' => 'ISERR', //Retorna VERDADEIRO se o valor for um valor de erro diferente de #N/D
        'ÉERROS' => 'ISERROR', //Retorna VERDADEIRO se o valor for um valor de erro
        'ÉPAR' => 'ISEVEN', //Retorna VERDADEIRO se o número for par
        'ÉLÓGICO' => 'ISLOGICAL', //Retorna VERDADEIRO se o valor for um valor lógico
        'É.NÃO.DISP' => 'ISNA', //Retorna VERDADEIRO se o valor for o valor de erro #N/D
        'É.NÃO.TEXTO' => 'ISNONTEXT', //Retorna VERDADEIRO se o valor for diferente de texto
        'ÉNÚM' => 'ISNUMBER', //Retorna VERDADEIRO se o valor for um número
        'ÉIMPAR' => 'ISODD', //Retorna VERDADEIRO se o número for ímpar
        'ÉREF' => 'ISREF', //Retorna VERDADEIRO se o valor for uma referência
        'ÉTEXTO' => 'ISTEXT', //Retorna VERDADEIRO se o valor for texto
        'N' => 'N', //Retorna um valor convertido em um número
        'NÃO.DISP' => 'NA', //Retorna o valor de erro #N/D
        'TIPO' => 'TYPE', //Retorna um número indicando o tipo de dados de um valor
        'E' => 'AND', //Retorna VERDADEIRO se todos os seus argumentos forem VERDADEIROS
        'FALSO' => 'FALSE', //Retorna o valor lógico FALSO
        'SE' => 'IF', //Especifica um teste lógico a ser executado
        'SEERRO' => 'IFERROR', //Retornará um valor que você especifica se uma fórmula for avaliada para um erro; do contrário, retornará o resultado da fórmula
        'NÃO' => 'NOT', //Inverte o valor lógico do argumento
        'OU' => 'OR', //Retorna VERDADEIRO se um dos argumentos for VERDADEIRO
        'VERDADEIRO' => 'TRUE', //Retorna o valor lógico VERDADEIRO
        'ENDEREÇO' => 'ADDRESS', //Retorna uma referência como texto para uma única célula em uma planilha
        'ÁREAS' => 'AREAS', //Retorna o número de áreas em uma referência
        'ESCOLHER' => 'CHOOSE', //Escolhe um valor a partir de uma lista de valores
        'COL' => 'COLUMN', //Retorna o número da coluna de uma referência
        'COLS' => 'COLUMNS', //Retorna o número de colunas em uma referência
        'PROCH' => 'HLOOKUP', //Procura na linha superior de uma matriz e retorna o valor da célula especificada
        'HYPERLINK' => 'HYPERLINK', //Cria um atalho ou salto que abre um documento armazenado em um servidor de rede, uma intranet ou na Internet
        'ÍNDICE' => 'INDEX', //Usa um índice para escolher um valor de uma referência ou matriz
        'INDIRETO' => 'INDIRECT', //Retorna uma referência indicada por um valor de texto
        'PROC' => 'LOOKUP', //Procura valores em um vetor ou em uma matriz
        'CORRESP' => 'MATCH', //Procura valores em uma referência ou em uma matriz
        'DESLOC' => 'OFFSET', //Retorna um deslocamento de referência com base em uma determinada referência
        'LIN' => 'ROW', //Retorna o número da linha de uma referência
        'LINS' => 'ROWS', //Retorna o número de linhas em uma referência
        'RTD' => 'RTD', //Recupera dados em tempo real de um programa que ofereça suporte a automação COM (automação: uma forma de trabalhar com objetos de um aplicativo a partir de outro aplicativo ou ferramenta de desenvolvimento. Chamada inicialmente de automação OLE, a automação é um padrão industrial e um recurso do modelo de objeto componente (COM).)
        'TRANSPOR' => 'TRANSPOSE', //Retorna a transposição de uma matriz
        'PROCV' => 'VLOOKUP', //Procura na primeira coluna de uma matriz e move ao longo da linha para retornar o valor de uma célula
        'ABS' => 'ABS', //Retorna o valor absoluto de um número
        'ACOS' => 'ACOS', //Retorna o arco cosseno de um número
        'ACOSH' => 'ACOSH', //Retorna o cosseno hiperbólico inverso de um número
        'ASEN' => 'ASIN', //Retorna o arco seno de um número
        'ASENH' => 'ASINH', //Retorna o seno hiperbólico inverso de um número
        'ATAN' => 'ATAN', //Retorna o arco tangente de um número
        'ATAN2' => 'ATAN2', //Retorna o arco tangente das coordenadas x e y especificadas
        'ATANH' => 'ATANH', //Retorna a tangente hiperbólica inversa de um número
        'TETO' => 'CEILING', //Arredonda um número para o inteiro mais próximo ou para o múltiplo mais próximo de significância
        'COMBIN' => 'COMBIN', //Retorna o número de combinações de um determinado número de objetos
        'COS' => 'COS', //Retorna o cosseno de um número
        'COSH' => 'COSH', //Retorna o cosseno hiperbólico de um número
        'GRAUS' => 'DEGREES', //Converte radianos em graus
        'PAR' => 'EVEN', //Arredonda um número para cima até o inteiro par mais próximo
        'EXP' => 'EXP', //Retorna e elevado à potência de um número especificado
        'FATORIAL' => 'FACT', //Retorna o fatorial de um número
        'FATDUPLO' => 'FACTDOUBLE', //Retorna o fatorial duplo de um número
        'ARREDMULTB' => 'FLOOR', //Arredonda um número para baixo até zero
        'MDC' => 'GCD', //Retorna o máximo divisor comum
        'INT' => 'INT', //Arredonda um número para baixo até o número inteiro mais próximo
        'MMC' => 'LCM', //Retorna o mínimo múltiplo comum
        'LN' => 'LN', //Retorna o logaritmo natural de um número
        'LOG' => 'LOG', //Retorna o logaritmo de um número de uma base especificada
        'LOG10' => 'LOG10', //Retorna o logaritmo de base 10 de um número
        'MATRIZ.DETERM' => 'MDETERM', //Retorna o determinante de uma matriz de uma variável do tipo matriz
        'MATRIZ.INVERSO' => 'MINVERSE', //Retorna a matriz inversa de uma matriz
        'MATRIZ.MULT' => 'MMULT', //Retorna o produto de duas matrizes
        'RESTO' => 'MOD', //Retorna o resto da divisão
        'MARRED' => 'MROUND', //Retorna um número arredondado ao múltiplo desejado
        'MULTINOMIAL' => 'MULTINOMIAL', //Retorna o multinomial de um conjunto de números
        'ÍMPAR' => 'ODD', //Arredonda um número para cima até o inteiro ímpar mais próximo
        'PI' => 'PI', //Retorna o valor de Pi
        'POTÊNCIA' => 'POWER', //Fornece o resultado de um número elevado a uma potência
        'MULT' => 'PRODUCT', //Multiplica seus argumentos
        'QUOCIENTE' => 'QUOTIENT', //Retorna a parte inteira de uma divisão
        'RADIANOS' => 'RADIANS', //Converte graus em radianos
        'ALEATÓRIO' => 'RAND', //Retorna um número aleatório entre 0 e 1
        'ALEATÓRIOENTRE' => 'RANDBETWEEN', //Retorna um número aleatório entre os números especificados
        'ROMANO' => 'ROMAN', //Converte um algarismo arábico em romano, como texto
        'ARRED' => 'ROUND', //Arredonda um número até uma quantidade especificada de dígitos
        'ARREDONDAR.PARA.BAIXO' => 'ROUNDDOWN', //Arredonda um número para baixo até zero
        'ARREDONDAR.PARA.CIMA' => 'ROUNDUP', //Arredonda um número para cima, afastando-o de zero
        'SOMASEQÜÊNCIA' => 'SERIESSUM', //Retorna a soma de uma série polinomial baseada na fórmula
        'SINAL' => 'SIGN', //Retorna o sinal de um número
        'SEN' => 'SIN', //Retorna o seno de um ângulo dado
        'SENH' => 'SINH', //Retorna o seno hiperbólico de um número
        'RAIZ' => 'SQRT', //Retorna uma raiz quadrada positiva
        'RAIZPI' => 'SQRTPI', //Retorna a raiz quadrada de (núm* pi)
        'SUBTOTAL' => 'SUBTOTAL', //Retorna um subtotal em uma lista ou em um banco de dados
        'SOMA' => 'SUM', //Soma seus argumentos
        'SOMASE' => 'SUMIF', //Adiciona as células especificadas por um determinado critério
        //'SOMASE' => 'SUMIFS', //Adiciona as células em um intervalo que atende a vários critérios
        'SOMARPRODUTO' => 'SUMPRODUCT', //Retorna a soma dos produtos de componentes correspondentes de matrizes
        'SOMAQUAD' => 'SUMSQ', //Retorna a soma dos quadrados dos argumentos
        'SOMAX2DY2' => 'SUMX2MY2', //Retorna a soma da diferença dos quadrados dos valores correspondentes em duas matrizes
        'SOMAX2SY2' => 'SUMX2PY2', //Retorna a soma da soma dos quadrados dos valores correspondentes em duas matrizes
        'SOMAXMY2' => 'SUMXMY2', //Retorna a soma dos quadrados das diferenças dos valores correspondentes em duas matrizes
        'TAN' => 'TAN', //Retorna a tangente de um número
        'TANH' => 'TANH', //Retorna a tangente hiperbólica de um número
        'TRUNCAR' => 'TRUNC', //Trunca um número para um inteiro
        'DESV.MÉDIO' => 'AVEDEV', //Retorna a média aritmética dos desvios médios dos pontos de dados a partir de sua média
        'MÉDIA' => 'AVERAGE', //Retorna a média dos argumentos
        'MÉDIAA' => 'AVERAGEA', //Retorna a média dos argumentos, inclusive números, texto e valores lógicos
        'MÉDIASE' => 'AVERAGEIF', //Retorna a média (média aritmética) de todas as células em um intervalo que atendem a um determinado critério
        'MÉDIASES' => 'AVERAGEIFS', //Retorna a média (média aritmética) de todas as células que atendem a múltiplos critérios.
        'DISTBETA' => 'BETADIST', //Retorna a função de distribuição cumulativa beta
        'BETA.ACUM.INV' => 'BETAINV', //Retorna o inverso da função de distribuição cumulativa para uma distribuição beta especificada
        'DISTRBINOM' => 'BINOMDIST', //Retorna a probabilidade de distribuição binomial do termo individual
        'DIST.QUI' => 'CHIDIST', //Retorna a probabilidade unicaudal da distribuição qui-quadrada
        'INV.QUI' => 'CHIINV', //Retorna o inverso da probabilidade uni-caudal da distribuição qui-quadrada
        'TESTE.QUI' => 'CHITEST', //Retorna o teste para independência
        'INT.CONFIANÇA' => 'CONFIDENCE', //Retorna o intervalo de confiança para uma média da população
        'CORREL' => 'CORREL', //Retorna o coeficiente de correlação entre dois conjuntos de dados
        'CONT.NÚM' => 'COUNT', //Calcula quantos números há na lista de argumentos
        'CONT.VALORES' => 'COUNTA', //Calcula quantos valores há na lista de argumentos
        'CONTAR.VAZIO' => 'COUNTBLANK', //Conta o número de células vazias no intervalo especificado
        'CONT.SE' => 'COUNTIF', //Calcula o número de células não vazias em um intervalo que corresponde a determinados critérios
        'CONT.SES' => 'COUNTIFS', //Conta o número de células dentro de um intervalo que atende a múltiplos critérios
        'COVAR' => 'COVAR', //Retorna a covariância, a média dos produtos dos desvios pares
        'CRIT.BINOM' => 'CRITBINOM', //Retorna o menor valor para o qual a distribuição binomial cumulativa é menor ou igual ao valor padrão
        'DESVQ' => 'DEVSQ', //Retorna a soma dos quadrados dos desvios
        'DISTEXPON' => 'EXPONDIST', //Retorna a distribuição exponencial
        'DISTF' => 'FDIST', //Retorna a distribuição de probabilidade F
        'INVF' => 'FINV', //Retorna o inverso da distribuição de probabilidades F
        'FISHER' => 'FISHER', //Retorna a transformação Fisher
        'FISHERINV' => 'FISHERINV', //Retorna o inverso da transformação Fisher
        'PREVISÃO' => 'FORECAST', //Retorna um valor ao longo de uma linha reta
        'FREQÜÊNCIA' => 'FREQUENCY', //Retorna uma distribuição de freqüência como uma matriz vertical
        'TESTEF' => 'FTEST', //Retorna o resultado de um teste F
        'DISTGAMA' => 'GAMMADIST', //Retorna a distribuição gama
        'INVGAMA' => 'GAMMAINV', //Retorna o inverso da distribuição cumulativa gama
        'LNGAMA' => 'GAMMALN', //Retorna o logaritmo natural da função gama, G(x)
        'MÉDIA.GEOMÉTRICA' => 'GEOMEAN', //Retorna a média geométrica
        'CRESCIMENTO' => 'GROWTH', //Retorna valores ao longo de uma tendência exponencial
        'MÉDIA.HARMÔNICA' => 'HARMEAN', //Retorna a média harmônica
        'DIST.HIPERGEOM' => 'HYPGEOMDIST', //Retorna a distribuição hipergeométrica
        'INTERCEPÇÃO' => 'INTERCEPT', //Retorna a intercepção da linha de regressão linear
        'CURT' => 'KURT', //Retorna a curtose de um conjunto de dados
        'MAIOR' => 'LARGE', //Retorna o maior valor k-ésimo de um conjunto de dados
        'PROJ.LIN' => 'LINEST', //Retorna os parâmetros de uma tendência linear
        'PROJ.LOG' => 'LOGEST', //Retorna os parâmetros de uma tendência exponencial
        'INVLOG' => 'LOGINV', //Retorna o inverso da distribuição lognormal
        'DIST.LOGNORMAL' => 'LOGNORMDIST', //Retorna a distribuição lognormal cumulativa
        'MÁXIMO' => 'MAX', //Retorna o valor máximo em uma lista de argumentos
        'MÁXIMOA' => 'MAXA', //Retorna o maior valor em uma lista de argumentos, inclusive números, texto e valores lógicos
        'MED' => 'MEDIAN', //Retorna a mediana dos números indicados
        'MÍNIMO' => 'MIN', //Retorna o valor mínimo em uma lista de argumentos
        'MÍNIMOA' => 'MINA', //Retorna o menor valor em uma lista de argumentos, inclusive números, texto e valores lógicos
        'MODO' => 'MODE', //Retorna o valor mais comum em um conjunto de dados
        'DIST.BIN.NEG' => 'NEGBINOMDIST', //Retorna a distribuição binomial negativa
        'DIST.NORM' => 'NORMDIST', //Retorna a distribuição cumulativa normal
        'INV.NORM' => 'NORMINV', //Retorna o inverso da distribuição cumulativa normal
        'DIST.NORMP' => 'NORMSDIST', //Retorna a distribuição cumulativa normal padrão
        'INV.NORMP' => 'NORMSINV', //Retorna o inverso da distribuição cumulativa normal padrão
        'PEARSON' => 'PEARSON', //Retorna o coeficiente de correlação do momento do produto Pearson
        'PERCENTIL' => 'PERCENTILE', //Retorna o k-ésimo percentil de valores em um intervalo
        'ORDEM.PORCENTUAL' => 'PERCENTRANK', //Retorna a ordem percentual de um valor em um conjunto de dados
        'PERMUT' => 'PERMUT', //Retorna o número de permutações de um determinado número de objetos
        'POISSON' => 'POISSON', //Retorna a distribuição Poisson
        'PROB' => 'PROB', //Retorna a probabilidade de valores em um intervalo estarem entre dois limites
        'QUARTIL' => 'QUARTILE', //Retorna o quartil do conjunto de dados
        'ORDEM' => 'RANK', //Retorna a posição de um número em uma lista de números
        'RQUAD' => 'RSQ', //Retorna o quadrado do coeficiente de correlação do momento do produto de Pearson
        'DISTORÇÃO' => 'SKEW', //Retorna a distorção de uma distribuição
        'INCLINAÇÃO' => 'SLOPE', //Retorna a inclinação da linha de regressão linear
        'MENOR' => 'SMALL', //Retorna o menor valor k-ésimo do conjunto de dados
        'PADRONIZAR' => 'STANDARDIZE', //Retorna um valor normalizado
        'DESVPAD' => 'STDEV', //Estima o desvio padrão com base em uma amostra
        'DESVPADA' => 'STDEVA', //Estima o desvio padrão com base em uma amostra, inclusive números, texto e valores lógicos
        'DESVPADP' => 'STDEVP', //Calcula o desvio padrão com base na população total
        'DESVPADPA' => 'STDEVPA', //Calcula o desvio padrão com base na população total, inclusive números, texto e valores lógicos
        'EPADYX' => 'STEYX', //Retorna o erro padrão do valor-y previsto para cada x da regressão
        'DISTT' => 'TDIST', //Retorna a distribuição t de Student
        'INVT' => 'TINV', //Retorna o inverso da distribuição t de Student
        'TENDÊNCIA' => 'TREND', //Retorna valores ao longo de uma tendência linear
        'MÉDIA.INTERNA' => 'TRIMMEAN', //Retorna a média do interior de um conjunto de dados
        'TESTET' => 'TTEST', //Retorna a probabilidade associada ao teste t de Student
        'VAR' => 'VAR', //Estima a variância com base em uma amostra
        'VARA' => 'VARA', //Estima a variância com base em uma amostra, inclusive números, texto e valores lógicos
        'VARP' => 'VARP', //Calcula a variância com base na população inteira
        'VARPA' => 'VARPA', //Calcula a variância com base na população total, inclusive números, texto e valores lógicos
        'WEIBULL' => 'WEIBULL', //Retorna a distribuição Weibull
        'TESTEZ' => 'ZTEST', //Retorna o valor de probabilidade uni-caudal de um teste-z
        'ASC' => 'ASC', //Altera letras do inglês ou katakana de largura total (bytes duplos) dentro de uma seqüência de caracteres para caracteres de meia largura (byte único)
        'BAHTTEXT' => 'BAHTTEXT', //Converte um número em um texto, usando o formato de moeda ß (baht)
        'CARACT' => 'CHAR', //Retorna o caractere especificado pelo número de código
        'TIRAR' => 'CLEAN', //Remove todos os caracteres do texto que não podem ser impressos
        'CÓDIGO' => 'CODE', //Retorna um código numérico para o primeiro caractere de uma seqüência de caracteres de texto
        'CONCATENAR' => 'CONCATENATE', //Agrupa vários itens de texto em um único item de texto
        'MOEDA' => 'DOLLAR', //Converte um número em texto, usando o formato de moeda $ (dólar)
        'EXATO' => 'EXACT', //Verifica se dois valores de texto são idênticos
        'PROCURAR' => 'FIND', //Procura um valor de texto dentro de outro (diferencia maiúsculas de minúsculas)
        'PROCURARB' => 'FINDB', //Procura um valor de texto dentro de outro (diferencia maiúsculas de minúsculas)
        'DEF.NÚM.DEC' => 'FIXED', //Formata um número como texto com um número fixo de decimais
        'JIS' => 'JIS', //Altera letras do inglês ou katakana de meia largura (byte único) dentro de uma seqüência de caracteres para caracteres de largura total (bytes duplos)
        'ESQUERDA' => 'LEFT', //Retorna os caracteres mais à esquerda de um valor de texto
        'ESQUERDAB' => 'LEFTB', //Retorna os caracteres mais à esquerda de um valor de texto
        'NÚM.CARACT' => 'LEN', //Retorna o número de caracteres em uma seqüência de texto
        'NÚM.CARACTB' => 'LENB', //Retorna o número de caracteres em uma seqüência de texto
        'MINÚSCULA' => 'LOWER', //Converte texto para minúsculas
        'EXT.TEXTO' => 'MID', //Retorna um número específico de caracteres de uma seqüência de texto começando na posição especificada
        'EXT.TEXTOB' => 'MIDB', //Retorna um número específico de caracteres de uma seqüência de texto começando na posição especificada
        'FONÉTICA' => 'PHONETIC', //Extrai os caracteres fonéticos (furigana) de uma seqüência de caracteres de texto
        'PRI.MAIÚSCULA' => 'PROPER', //Coloca a primeira letra de cada palavra em maiúscula em um valor de texto
        'MUDAR' => 'REPLACE', //Muda os caracteres dentro do texto
        'MUDARB' => 'REPLACEB', //Muda os caracteres dentro do texto
        'REPT' => 'REPT', //Repete o texto um determinado número de vezes
        'DIREITA' => 'RIGHT', //Retorna os caracteres mais à direita de um valor de texto
        'DIREITAB' => 'RIGHTB', //Retorna os caracteres mais à direita de um valor de texto
        'LOCALIZAR' => 'SEARCH', //Localiza um valor de texto dentro de outro (não diferencia maiúsculas de minúsculas)
        'LOCALIZARB' => 'SEARCHB', //Localiza um valor de texto dentro de outro (não diferencia maiúsculas de minúsculas)
        'SUBSTITUIR' => 'SUBSTITUTE', //Substitui um novo texto por um texto antigo em uma seqüência de texto
        'T' => 'T', //Converte os argumentos em texto
        'TEXTO' => 'TEXT', //Formata um número e o converte em texto
        'ARRUMAR' => 'TRIM', //Remove espaços do texto
        'MAIÚSCULA' => 'UPPER', //Converte o texto em maiúsculas
        'VALOR' => 'VALUE', //Converte um argumento de texto em um número
    ],
];
//EOF
