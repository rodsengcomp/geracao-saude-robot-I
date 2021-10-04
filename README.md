# 👋 geracao-saude-robot-I
# Automação de Processos Robóticos (RPA) - Robô ou Bot para automação de parte do processos de preenchimento de fichas de notificação de Covid-19, agilizando assim o processo de preenchimento das fichas no sistema.

👀 Todo o código disponibilizado no projeto trata de uma simulação de um robô ou bot que recebe planilhas de diversos laboratórios com resultados de exames realizados em pessoas notificadas com suspeita de Covid-19.
O robô ou bot de forma inteligente e automatizada acessa um sistema de notificação compulsória para Covid-19 e lá insere toda a informação contida na planilha. Abaixo o passo a passo do processo executado pelo robô linha a linha da planilha até o seu término: 

- Percorre linha da planilha e copia o número de protocolo do paciente.
- Abre aba no navegador de internet e acessa a página principal do sistema de notificação. (O login e a senha devem ser inseridos anteriormente de forma manual por questões de segurança).
- Clica na opção de visualização da lista de pacientes notificados com suspeita de Covid-19.
- Acessa o campo de busca de notificação de pacientes e apaga qualquer informação contida nele.
- Busca na linha planilha o número de notificação do paciente, copia-o e guarda em sua memória.
- No sistema de notificação insere no campo de busca o número de notificação do paciente que copiou na planilha.
- Executa de forma automatizada o click na tecla enter do teclado para que o sistema busque o paciente.
- Executa o click na opção de editar a ficha do paciente.
- Executa os click no campo de tipo de exame inserindo a opção no sistema conforme descrito na planilha.
- Executa os click no campo de resultado de exame inserindo a opção no sistema conforme descrito na planilha.
- Busca na linha planilha a data de resultado do exame e guarda em sua memória.
- Acessa o campo de data de resultado de exame e apaga qualquer informação contida nele.
- insere no campo de data de resultado de exame a 
- Executa os click no campo de  data de resultado de exame inserindo a data no sistema conforme descrito na planilha..
- Executa o click no botão salvar.
- Volta a próxima linha da planilha e busca o número de notificação do paciente para repetir todo o processo de preenchimento de resultados de exames conforme descrito no paciente anterior.
