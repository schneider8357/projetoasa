# projetoasa

# Especificação do projeto
Neste projeto realizaremos a integração dos servidores virtuais já implementados na disciplina, acrescentando uma interface WEB em PHP para a criação de domínios virtuais e seus usuários.

1- Integre os bancos de dados do servidor FTP virtual e do serviço de mensagens. Faça com que consultem a mesma base de usuários e domínios;

2- Crie uma aplicação WEB para que o administrador do servidor, mediante uma senha administrativa, consiga criar/alterar/remover usuários e domínios virtuais;

3- Para cada domínio virtual criado, deverá ser configurado o BIND e o APACHE para responder por ele. O raiz do site www.DOMÍNIO.CRIADO deve ser a pasta base do FTP dos usuários deste domínio. O usuário só verá a pasta do seu site quando logar via FTP (não poderá ter acesso a pastas de outros domínios);

4- EXTRA: crie uma subpasta "adm", abaixo da pasta base de cada domínio, onde somente os usuários deste domínio, mediante autenticação do APACHE, usando o banco de dados dos demais serviços (FTP e mensagens), terão acesso.

*Definimos que os usuários em todos os servidores virtuais serão identificados pelo seu email, na forma: usuario@dominio.criado
