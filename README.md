# ModelSim_RandomNumber

##Simulador de sistema de telefonia celular
*Modelagem e Simulação - UFSC 2015/2 - Bruno Freitas e Gustavo Ferreira*

Como Utilizar:

**Tempo de Simulação** - (inteiro) Neste campo o usuário deve colocar o tempo a ser executado do simulador em Segundos

**Torre C1 e C2**
**Numero de Canais** - (inteiro) Canais dispoíveis naquela torre
**Chamadas C1C1, C1C2...** - (inteiro) Porcentagens dos respectivos tipos de chamadas

**Distribuição dos Tempos Entre Chamadas** - Torre C1 e C2
**Função** - escolha entre Constante ou Exponencial
**Argumento** - (inteiro) o valor de entrada para a função acima

 **Distribuição da Duração de Chamadas** - Torre C1 e C2
 **Função** - escolha entre Normal, Uniforme, Triangular, Constante ou Exponencial
 **Argumento 1, 2 e 3** - Utilizados da seguinte maneira nas Funções acima:
 
 Normal (Argumento 1 - Média, Argumento 2 - Desvio Padrão)
 Uniforme (Argumento 1 - Maximo, Argumento 2 - Minimo)
 Triangular (Argumento 1 - a, Argumento 2 - b, Argumento 3 - c)
 Exponencial (Argumento 1 - Base)
 Constante (Argumento 1 - o próprio valor)
 
 Após isto basta clicar em **Executar Simulação**.
 
 No relatório do Simulador é possivel visualizar:
 
 Chamadas no Sistema min, max, média e taxa média
 Chamadas completadas
 Chamadas Perdidas (fora de cobertura e falta de canal)
 
 Uma tabela com todas as ocorrencias da fila do simulador.
 
 
 ## Diagrama de fluxo 
 
Após obter os dados do usuário o sistema cria um array contendo os tempos de 0 a "tempo de simulação". Em seguida ele gera as primeiras chamadas em C1 e C2. Quando uma chamada é terminada (SAIDA) uma nova chamada é criada para aquela torre. E assim o programa itera sobre este array verificando as saidas de chamadas e gerando suas estatísticas e atualizando estatísticas globais e criando uma nova chamada.

** Criação de uma Chamada ** 
Ao criar uma chamada primeiro é sorteado o seu *tempo de entrada*, qual o *tipo de chamada* (C1C1, C1C2, C1FA...) e o tempo de *duração da Chamada*. Ao criar uma chamada sua saída também é adicionada, e se ela migra de torre ou tem seu tempo cortado por fora de área estes requisitos também são considerados.


Ao termino do tempo de execução o programa verifica os dados de estatísticas e gera a os dados finais e a tabela de execução.
 



